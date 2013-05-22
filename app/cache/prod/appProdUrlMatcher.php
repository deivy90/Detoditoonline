<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/')) {
            // domicilio_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Detoditoonline\\DomicilioBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'domicilio_homepage'));
            }

            // compras_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Detoditoonline\\ComprasBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'compras_homepage'));
            }

            // cliente_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Detoditoonline\\ClienteBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'cliente_homepage'));
            }

            // pagina_registrar_cliente
            if ($pathinfo === '/registrar_cliente') {
                return array (  '_controller' => 'Detoditoonline\\ClienteBundle\\Controller\\DefaultController::registrar_clienteAction',  '_route' => 'pagina_registrar_cliente',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
