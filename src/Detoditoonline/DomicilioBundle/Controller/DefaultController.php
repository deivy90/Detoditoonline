<?php

namespace Detoditoonline\DomicilioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DomicilioBundle:Default:index.html.twig', array('name' => $name));
    }
}
