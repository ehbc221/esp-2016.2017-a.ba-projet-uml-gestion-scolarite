<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/gestionScolarite/attestation')) {
            // gfs_attestation
            if ($pathinfo === '/gestionScolarite/attestation') {
                return array (  '_controller' => 'GFS\\attestationBundle\\Controller\\AttestationController::indexAction',  '_route' => 'gfs_attestation',);
            }

            // gfs_attestation_reussite
            if (0 === strpos($pathinfo, '/gestionScolarite/attestation/reussite') && preg_match('#^/gestionScolarite/attestation/reussite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gfs_attestation_reussite')), array (  '_controller' => 'GFS\\attestationBundle\\Controller\\AttestationController::attestationReussiteAction',));
            }

            // gfs_attestation_passage
            if (0 === strpos($pathinfo, '/gestionScolarite/attestation/passage') && preg_match('#^/gestionScolarite/attestation/passage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gfs_attestation_passage')), array (  '_controller' => 'GFS\\attestationBundle\\Controller\\AttestationController::attestationPassageAction',));
            }

        }

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

                    // gfs_statistiques_getOptionsDepartement
                    if ($pathinfo === '/gestionScolarite/getAllOption') {
                        return array (  '_controller' => 'GFS\\statistiquesBundle\\Controller\\GestionStatController::getlAllOptionsAction',  '_route' => 'gfs_statistiques_getOptionsDepartement',);
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
