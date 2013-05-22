<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factura
 *
 * @author Deivy Reyes - Milena Vanegas - Paola Valladares
 */

namespace Detodito\ComprasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Factura {
    //put your code here
    
    /** @ORM\Column(type="integer") 
    * @ORM\id
    * @ORM\GeneratedValue
    */
    private $id_factura;
    /** @ORM\ManyToOne(targetEntity="Detoditoonline\ClienteBundle\Entity\Cliente") */
    private $id_cliente;
    /** @ORM\ManyToOne(targetEntity="Detoditoonline\DomicilioBundle\Entity\Domicilio") */
    private $id_domicilio;
    /** @ORM\ManyToOne(targetEntity="Detoditoonline\CompraBundle\Entity\Cliente") */
    private $id_compra;
    /** @ORM\Column(type="float")*/
    private $total;
    
    function Factura()
    {
       
    }
    public function getId_factura() {
        return $this->id_factura;
    }

        public function getId_cliente() {
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function getId_domicilio() {
        return $this->id_domicilio;
    }

    public function setId_domicilio($id_domicilio) {
        $this->id_domicilio = $id_domicilio;
    }

    public function getId_compra() {
        return $this->id_compra;
    }

    public function setId_compra($id_compra) {
        $this->id_compra = $id_compra;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }


}

?>
