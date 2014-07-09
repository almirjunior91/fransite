<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // franbella_admin_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\PageController::indexAction',  '_route' => 'franbella_admin_homepage',);
            }

            // franbella_admin_video_home
            if ($pathinfo === '/admin/videos') {
                return array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\VideoController::indexAction',  '_route' => 'franbella_admin_video_home',);
            }

            // franbella_admin_distribuidor_home
            if ($pathinfo === '/admin/distribuidores') {
                return array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\DistribuidorController::indexAction',  '_route' => 'franbella_admin_distribuidor_home',);
            }

        }

        // franbella_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'franbella_site_homepage');
            }

            return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::indexAction',  '_route' => 'franbella_site_homepage',);
        }

        if (0 === strpos($pathinfo, '/linha')) {
            // franbella_site_linha
            if ($pathinfo === '/linha') {
                return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::linhaAction',  '_route' => 'franbella_site_linha',);
            }

            // franbella_site_linha_tratamento
            if ($pathinfo === '/linha/tratamento') {
                return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::tratamentoAction',  '_route' => 'franbella_site_linha_tratamento',);
            }

            // franbella_site_linha_removedores
            if ($pathinfo === '/linha/removedores') {
                return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::removedoresAction',  '_route' => 'franbella_site_linha_removedores',);
            }

        }

        // franbella_site_espaco_manicure
        if ($pathinfo === '/espaco-manicure') {
            return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::espacoAction',  '_route' => 'franbella_site_espaco_manicure',);
        }

        // franbella_site_agenda
        if ($pathinfo === '/agenda') {
            return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::agendaAction',  '_route' => 'franbella_site_agenda',);
        }

        // franbella_site_fale_conosco
        if ($pathinfo === '/fale-conosco') {
            return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::faleAction',  '_route' => 'franbella_site_fale_conosco',);
        }

        // franbella_site_onde_encontro
        if ($pathinfo === '/onde-encontro') {
            return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::encontroAction',  '_route' => 'franbella_site_onde_encontro',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/seja-distribuidor')) {
                // franbella_site_seja_distribuidor
                if ($pathinfo === '/seja-distribuidor') {
                    return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::distribuidorAction',  '_route' => 'franbella_site_seja_distribuidor',);
                }

                // franbella_site_cadastra_contato_distribuidor
                if ($pathinfo === '/seja-distribuidor/cadastra') {
                    return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\DistribuidorController::cadastraAction',  '_route' => 'franbella_site_cadastra_contato_distribuidor',);
                }

            }

            // franbella_site_recupera_dados
            if ($pathinfo === '/sincroniza') {
                return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::sincronizaAction',  '_route' => 'franbella_site_recupera_dados',);
            }

        }

        // franbella_site_grava_dados
        if ($pathinfo === '/grava') {
            return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::gravaAction',  '_route' => 'franbella_site_grava_dados',);
        }

        // bfos_brasil_cidades_busca
        if ($pathinfo === '/bfos/brasil/cidades/busca') {
            return array (  '_controller' => 'BFOS\\BrasilBundle\\Controller\\CidadeController::buscaCidadesAction',  '_route' => 'bfos_brasil_cidades_busca',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
