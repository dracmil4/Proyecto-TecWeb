<?php

namespace App\Core\Application;

use App\Core\Dominio\Producto;
use App\Core\Repositorio\ProductoRepository;

class ProductoService
{
    private ProductoRepository $productoRepository;

    public function __construct(){
        // el repositorio aquí se lo crea manualmente, pero puede
        // ser recibido desde quien crea y usa el servicio (controller o inyecto de dependencias)
        $this->productoRepository = new ProductoRepository();
    }

    public function searchProducto(string $filtro){
        return $this->productoRepository->searchProducto($filtro);
    }

    public function nuevoProducto(array $data){
        //genera el id del producto
        $productoId = $this->productoRepository->generarId();

        //crea el objeto producto
        $producto = new Producto(
            $productoId,
            $data['codigo'],
            $data['nombre'],
            floatval($data['precio']),
        );

        // almacena el producto
        $this->productoRepository->storeProducto($producto);

        // devuelve el producto creado
        return $producto;
    }

    public function modificarProducto(int $id, $data){
        // aquí se puede hacer validaciones de acuerdo a las reglas de la aplicación

        //carga el producto almancenado
        $producto = $this->getProducto($id);

        //aplica los cambios
        $producto->setCodigo($data['codigo']);
        $producto->setNombre($data['nombre']);
        $producto->setPrecio(floatval($data['precio']));

        //vuelve a almacenar
        $this->productoRepository->storeProducto($producto);
    }

    public function eliminarProducto(int $id){
        // aquí se puede hacer validaciones de acuerdo a las reglas de la aplicación

        //carga el producto almancenado
        $producto = $this->getProducto($id);

        //elimina del repositorio
        $this->productoRepository->removeProducto($producto);
    }



    public function getProducto(int $id): Producto|false
    {
        return $this->productoRepository->getById($id);
    }
}
