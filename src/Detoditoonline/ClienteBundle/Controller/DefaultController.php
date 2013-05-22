<?php

namespace Detoditoonline\ClienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function registrar_clienteAction()
    {
        return Response('Enhorabuena!');
    }
}
