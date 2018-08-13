<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/history')) {
            // gseb_historique_homepage
            if ('/history' === $pathinfo) {
                return array (  '_controller' => 'GSEB\\HistoriqueBundle\\Controller\\HistoryController::indexAction',  '_route' => 'gseb_historique_homepage',);
            }

            // gseb_historique_view
            if (preg_match('#^/history/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_historique_view')), array (  '_controller' => 'GSEB\\HistoriqueBundle\\Controller\\HistoryController::viewAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/platform')) {
            // gseb_platform_home
            if (preg_match('#^/platform/(?P<action>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_home')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\ActionController::indexAction',));
            }

            // gseb_platform_add_form
            if (0 === strpos($pathinfo, '/platform/add') && preg_match('#^/platform/add/(?P<id_demande>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_add_form')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::salleAction',));
            }

            // gseb_platform_aff
            if ('/platform/aff' === $pathinfo) {
                return array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::affichageAction',  '_route' => 'gseb_platform_aff',);
            }

            // gseb_platform_add_formbaie
            if (0 === strpos($pathinfo, '/platform/salle') && preg_match('#^/platform/salle/(?P<id_salle>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_add_formbaie')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::baieAction',));
            }

            // gseb_platform_add_formobject
            if (0 === strpos($pathinfo, '/platform/baie') && preg_match('#^/platform/baie/(?P<id_baie>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_add_formobject')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::objetAction',));
            }

        }

        // gseb_core_home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GSEB\\CoreBundle\\Controller\\CoreController::indexAction',  '_route' => 'gseb_core_home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gseb_core_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_core_home'));
            }

            return $ret;
        }
        not_gseb_core_home:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
