<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Domicilio
 *
 * @author User
 */
namespace Detoditoonline\DomicilioBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Domicilio {
    //put your code here
    
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_domicilio;
    /**@ORM\Column(type="string, length=30")*/
    private $nombre;
    /**@ORM\Column(type="string, length=30")*/
    private $apellido;
    /**@ORM\Column(type="string, length=12")*/
    private $cedula;
    /**@ORM\Column(type="string, length=30")*/
    private $tipo;
    
    function Domicilio()
    {
        
    }
    
    public function getId_domicilio() {
        return $this->id_domicilio;
    }

   public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}

?>
