<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gseb_validation_homepage
        if ('/accueilValid' === $pathinfo) {
            return array (  '_controller' => 'GSEB\\ValidationBundle\\Controller\\ValidationController::accueilAction',  '_route' => 'gseb_validation_homepage',);
        }

        if (0 === strpos($pathinfo, '/demandes')) {
            // gseb_validation_list
            if ('/demandes' === $pathinfo) {
                return array (  '_controller' => 'GSEB\\ValidationBundle\\Controller\\ValidationController::listAction',  '_route' => 'gseb_validation_list',);
            }

            // gseb_validation_view
            if (0 === strpos($pathinfo, '/demandes/view') && preg_match('#^/demandes/view/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_validation_view')), array (  '_controller' => 'GSEB\\ValidationBundle\\Controller\\ValidationController::viewAction',));
            }

            // gseb_validation_edit
            if (0 === strpos($pathinfo, '/demandes/edit') && preg_match('#^/demandes/edit/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_validation_edit')), array (  '_controller' => 'GSEB\\ValidationBundle\\Controller\\ValidationController::editAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/history')) {
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
            // gseb_platform_homepage
            if ('/platform' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\ActionController::accueilAction',  '_route' => 'gseb_platform_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_gseb_platform_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gseb_platform_homepage'));
                }

                return $ret;
            }
            not_gseb_platform_homepage:

            // gseb_platform_homeaction
            if (preg_match('#^/platform/(?P<action>add|edit|delete)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_homeaction')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\ActionController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/platform/demande')) {
                // gseb_platform_demande
                if (preg_match('#^/platform/demande/(?P<id_demande>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_demande')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\DemandeController::listSalleAction',));
                }

                // gseb_platform_demande_baie
                if (0 === strpos($pathinfo, '/platform/demande/salle') && preg_match('#^/platform/demande/salle/(?P<id_salle>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_demande_baie')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\DemandeController::listBaieAction',));
                }

                // gseb_platform_demande_success
                if (0 === strpos($pathinfo, '/platform/demande/success') && preg_match('#^/platform/demande/success/(?P<id_demande>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_demande_success')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\DemandeController::demandeSuccessAction',));
                }

                // gseb_platform_demande_objtype
                if (0 === strpos($pathinfo, '/platform/demande/baie') && preg_match('#^/platform/demande/baie/(?P<id_baie>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_demande_objtype')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\DemandeController::listObjectAction',));
                }

                // gseb_platform_demande_properties
                if (0 === strpos($pathinfo, '/platform/demande/object') && preg_match('#^/platform/demande/object/(?P<id_objtype>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gseb_platform_demande_properties')), array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\DemandeController::listPropertiesAction',));
                }

                // gseb_platform_demande_recap
                if ('/platform/demande/recap' === $pathinfo) {
                    return array (  '_controller' => 'GSEB\\PlatformBundle\\Controller\\DemandeController::demandeRecapAction',  '_route' => 'gseb_platform_demande_recap',);
                }

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

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'GSEB\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array('_route' => 'login_check');
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
