<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // gfs_main_loginpage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gfs_main_loginpage');
            }

            return array (  '_controller' => 'GFS\\MainBundle\\Controller\\MainController::loginAction',  '_route' => 'gfs_main_loginpage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/gestionScolarite')) {
            // gfs_main_homepage
            if ($pathinfo === '/gestionScolarite/accueil') {
                return array (  '_controller' => 'GFS\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'gfs_main_homepage',);
            }

            // gfs_statistiques_listes
            if ($pathinfo === '/gestionScolarite/listes') {
                return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::listesAction',  '_route' => 'gfs_statistiques_listes',);
            }

            if (0 === strpos($pathinfo, '/gestionScolarite/addData')) {
                // gfs_statistiques_addData
                if ($pathinfo === '/gestionScolarite/addData') {
                    return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::addDataAction',  '_route' => 'gfs_statistiques_addData',);
                }

                if (0 === strpos($pathinfo, '/gestionScolarite/addData/get')) {
                    // gfs_statistiques_getOptionAtSelectedDep
                    if ($pathinfo === '/gestionScolarite/addData/getOptionAtSelectedDept') {
                        return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getOptionAtSelectedDeptAction',  '_route' => 'gfs_statistiques_getOptionAtSelectedDep',);
                    }

                    // gfs_statistiques_getFormationAtSelectOption
                    if ($pathinfo === '/gestionScolarite/addData/getFormationAtOption') {
                        return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getFormationAtOptionAction',  '_route' => 'gfs_statistiques_getFormationAtSelectOption',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/gestionScolarite/g')) {
                // gfs_statistiques
                if ($pathinfo === '/gestionScolarite/globalStatistiques') {
                    return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::globalStatistiqueAction',  '_route' => 'gfs_statistiques',);
                }

                if (0 === strpos($pathinfo, '/gestionScolarite/getAll')) {
                    // gfs_statistiques_getDepartementFormations
                    if ($pathinfo === '/gestionScolarite/getAllDepartementFormation') {
                        return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getlAllDepartFormationAction',  '_route' => 'gfs_statistiques_getDepartementFormations',);
                    }

                    // gfs_statistiques_getAllEtudiantForStat
                    if ($pathinfo === '/gestionScolarite/getAllEtudiantForStat') {
                        return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::allEtudiantForStatAction',  '_route' => 'gfs_statistiques_getAllEtudiantForStat',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
