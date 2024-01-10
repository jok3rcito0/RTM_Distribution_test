<?php

class Producto {
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $existencias;
    private $imagen;

    public function __construct($id, $nombre, $descripcion, $precio, $existencias, $imagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->existencias = $existencias;
        $this->imagen = $imagen;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }

    public function setExistencias(int $existencias): void
    {
        $this->existencias = $existencias;
    }

    public function setImagen(string $imagen): void
    {
        $this->imagen = $imagen;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getExistencias(): int
    {
        return $this->existencias;
    }

    public function getImagen(): string
    {
        return $this->imagen;
    }
}

$producto = new Producto(1, 'iPhone 15 Pro Max', 'El mejor smartphone de Apple', 999.99, 10, 'https://picsum.photos/200');
echo $producto->getNombre() . '<br />';
$producto->setPrecio(899.99);
echo $producto->getPrecio();
