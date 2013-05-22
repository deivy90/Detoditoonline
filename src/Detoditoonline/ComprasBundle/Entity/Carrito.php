<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrito
 *
 * @author Deivy Reyes - Milena Vanegas - Paola Valladares
 */

namespace Detoditoonline\ComprasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Carrito {
    
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_carrito;
    
    /**@ORM\Column(type="date")*/
    private $fecha_creacion;
    
    function Carrito()
    {
        
    }
    
    public function getId_carrito() {
        return $this->id_carrito;
    }

    public function getFecha_creacion() {
        return $this->fecha_creacion;
    }

    public function setFecha_creacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
    }


    
}

?>
