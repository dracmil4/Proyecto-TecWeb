<?php

namespace App\Core\Dominio;

class Producto
{
    private int $id;
    private string $codigo;
    private string $nombre;
    private float $precio;

    public function __construct(
        int $id,
        string $codigo,
        string $nombre,
        float $precio
    ) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function setCodigo($value)
    {
        $this->codigo = $value;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($value){
        $this->precio = $value;
    }
}
