<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteController
 *
 * @author DeivyAlejandro - Milena Vanegas - Paola Valladares
 */

namespace Detoditoonline\ClienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Detoditoonline\ClienteBundle\Entity\Cliente;
use Detoditoonline\ClienteBundle\Form\ClienteType;

class CiudadController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $clientes = $em->getRepository('ClienteBundle:Ciente')->findAll();
        return $this->render('ClienteBundle:Cliente:index.html.twig', array(
        'clientes' => $clientes
    ));
    }
    
    public function verAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $cliente=$em->getRepository('ClienteBundle:Cliente')->find($id);
        
        if (!$cliente)
        {
            throw $this->createNotFoundException('No existe ese cliente');
        }
        
        return $this->render('ClienteBundle:Ciudad:ver.html.twig', array('Cliente'=>$cliente,));
        
    }
    
    public function crearAction()
    {
        $peticion=$this->getRequest();
        
        $Cliente= new Cliente();
        $forumlario=$this->createForm(new ClienteType(), $cliente);
        
        if ($peticion->getMethod() == 'POST'){
            $formulario->bind($peticion);
            
            if ($forumlario->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($cliente)};
                $em->flush();
                
                return $this->redirect($this->generateUrl($route));
        }
    }
    
}


?>
