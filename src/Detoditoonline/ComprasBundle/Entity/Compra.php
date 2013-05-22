<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compra
 *
 * @author Deivy Reyes - Milena Vanegas - Paola Valladares
 */

namespace Detoditoonline\ComprasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Compra {
    
    /**
     *
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_compra;
    /** @ORM\ManyToOne(targetEntity="Detoditoonline\ComprasBundle\Entity\Producto") */
    private $id_producto;
    /** @ORM\ManyToOne(targetEntity="Detoditoonline\ComprasBundle\Entity\Carrito") */
    private $id_carrito;
    /** @ORM\Column(type="integer") */
    private $cantidad;
    
    //Constrctor de la clase
    function Compra()
    {
        
    }
    
    public function getId_compra() {
        return $this->id_compra;
    }
        
    public function getId_producto() {
        return $this->id_producto;
    }

    public function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    public function getId_carrito() {
        return $this->id_carrito;
    }

    public function setId_carrito($id_carrito) {
        $this->id_carrito = $id_carrito;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }


}

?>
