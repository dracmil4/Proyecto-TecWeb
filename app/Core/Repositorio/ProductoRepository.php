<?php

namespace App\Core\Repositorio;

use App\Core\Dominio\Producto;
use Illuminate\Support\Facades\DB;

class ProductoRepository
{
    public function searchProducto(string $filtro)
    {
        // convierte en mayusculas el filtro y el nombre en la bd
        $data = DB::select(
            "
            SELECT * 
            FROM producto
            WHERE UPPER(nombre) LIKE :FILTRO
            ORDER BY codigo
            ",
            [
                ':FILTRO' => '%' . strtoupper($filtro) . '%', // concatena %filtro% para el LIKE
            ]
        );

        $list = [];

        foreach ($data as $row) {
            $list[$row->id] = new Producto(
                $row->id,
                $row->codigo,
                $row->nombre,
                $row->precio,
            );
        }

        // siempre devuelve un array, aunque sea vacío
        return $list;
    }

    public function generarId()
    {
        return time(); // Si necesitas una secuencia, SQL Server usa IDENTITY o NEWID()
    }

    public function storeProducto(Producto $producto)
    {       
        return DB::statement(
            "
            MERGE INTO producto WITH (HOLDLOCK) AS target
            USING (VALUES (?, ?, ?, ?)) AS source (id, codigo, nombre, precio)
            ON (target.id = source.id)
            WHEN MATCHED THEN 
                UPDATE SET 
                    codigo = source.codigo,
                    nombre = source.nombre,
                    precio = source.precio
            WHEN NOT MATCHED THEN
                INSERT (id, codigo, nombre, precio)
                VALUES (source.id, source.codigo, source.nombre, source.precio);
            ",
            [
                $producto->getId(),
                $producto->getCodigo(),
                $producto->getNombre(),
                $producto->getPrecio(),
            ]
        );
    }

    public function removeProducto(Producto $producto)
    {
        return DB::table('producto')->where('id', $producto->getId())->delete();
    }

    public function getById(int $id): Producto|false
    {
        $row = DB::table('producto')->find($id);

        if (null == $row) {
            return false;
        }

        return new Producto(
            $row->id,
            $row->codigo,
            $row->nombre,
            $row->precio,
        );
    }
}
