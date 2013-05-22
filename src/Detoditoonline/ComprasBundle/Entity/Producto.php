<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author User
 */

namespace Detoditoonline\ComprasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Producto {
    
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_producto;
    /**ORM\Column(type="string, length=30")*/
    private $nombre;
    /**ORM\Column(type="string", length=20)*/
    private $codigo;
    /**ORM\Column(type="string, length=100")*/
    private $descripcion;
    /**ORM\Column(type="integer")*/
    private $precio;
    /**ORM\Column(type="integer")*/
    private $cantidad_disponible;
    
    function Producto()
    {
        
    }
    public function getId_producto() {
        return $this->id_producto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getCantidad_disponible() {
        return $this->cantidad_disponible;
    }

    public function setCantidad_disponible($cantidad_disponible) {
        $this->cantidad_disponible = $cantidad_disponible;
    }


    
}

?>
