<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Deivy Reyes - Milena Vanegas - Paola Valladares
 */
namespace Detoditoonline\ClienteBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Cliente {
    
    /** @ORM\Column(type="integer")
     *  @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id_cliente;
    /** @ORM\Column(type="string", length=12) */
    private $cedula;
    /** @ORM\Column(type="string", length=40) */
    private $nombre;
    /** @ORM\Column(type="string", length=20) */
    private $barrio;
    /** @ORM\Column(type="string", length=30) */
    private $direccion;
    /** @ORM\Column(type="date") */
    private $fecha_nacimiento;
    
    function Cliente()
    {
        
    }
    public function getId_cliente() {
        return $this->id_cliente;
    }

    
    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getBarrio() {
        return $this->barrio;
    }

    public function setBarrio($barrio) {
        $this->barrio = $barrio;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    public function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    
   
}

?>
