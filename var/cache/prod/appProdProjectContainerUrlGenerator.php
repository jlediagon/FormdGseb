<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gseb_historique_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSEB\\HistoriqueBundle\\Controller\\HistoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/history',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_historique_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GSEB\\HistoriqueBundle\\Controller\\HistoryController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/history',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_platform_home' => array (  0 =>   array (    0 => 'action',  ),  1 =>   array (    '_controller' => 'GSEB\\PlatformBundle\\Controller\\ActionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'action',    ),    1 =>     array (      0 => 'text',      1 => '/platform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_platform_add_form' => array (  0 =>   array (    0 => 'id_demande',  ),  1 =>   array (    '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::salleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_demande',    ),    1 =>     array (      0 => 'text',      1 => '/platform/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_platform_add_formbaie' => array (  0 =>   array (    0 => 'id_salle',  ),  1 =>   array (    '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::baieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_salle',    ),    1 =>     array (      0 => 'text',      1 => '/platform/salle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_platform_add_formobject' => array (  0 =>   array (    0 => 'id_baie',  ),  1 =>   array (    '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::objetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_baie',    ),    1 =>     array (      0 => 'text',      1 => '/platform/baie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_platform_aff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSEB\\PlatformBundle\\Controller\\FormController::affichageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/aff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gseb_core_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSEB\\CoreBundle\\Controller\\CoreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
