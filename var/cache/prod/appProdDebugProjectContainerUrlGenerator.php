<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gfs_main_loginpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\MainBundle\\Controller\\MainController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\MainBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques_listes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::listesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/listes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques_addData' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::addDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/addData',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques_getOptionAtSelectedDep' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getOptionAtSelectedDeptAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/addData/getOptionAtSelectedDept',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques_getFormationAtSelectOption' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getFormationAtOptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/addData/getFormationAtOption',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::globalStatistiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/globalStatistiques',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques_getDepartementFormations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getlAllDepartFormationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/getAllDepartementFormation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gfs_statistiques_getAllEtudiantForStat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::allEtudiantForStatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionScolarite/getAllEtudiantForStat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
