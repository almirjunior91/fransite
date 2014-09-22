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

            if (0 === strpos($pathinfo, '/admin/distribuidores')) {
                // franbella_admin_distribuidor_cadastra
                if (0 === strpos($pathinfo, '/admin/distribuidores/cadastra') && preg_match('#^/admin/distribuidores/cadastra(?:/(?P<id_distribuidor>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_distribuidor_cadastra')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\DistribuidorController::cadastraAction',  'id_distribuidor' => -1,));
                }

                // franbella_admin_distribuidor_exclui
                if (0 === strpos($pathinfo, '/admin/distribuidores/exclui') && preg_match('#^/admin/distribuidores/exclui/(?P<id_distribuidor>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_distribuidor_exclui')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\DistribuidorController::excluiAction',));
                }

                // franbella_admin_distribuidor_home
                if (preg_match('#^/admin/distribuidores(?:/(?P<id_distribuidor>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_distribuidor_home')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\DistribuidorController::indexAction',  'id_distribuidor' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/agenda')) {
                // franbella_admin_agenda_cadastra
                if (0 === strpos($pathinfo, '/admin/agenda/cadastra') && preg_match('#^/admin/agenda/cadastra(?:/(?P<id_evento>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_agenda_cadastra')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\AgendaController::cadastraAction',  'id_evento' => -1,));
                }

                // franbella_admin_agenda_exclui
                if (0 === strpos($pathinfo, '/admin/agenda/exclui') && preg_match('#^/admin/agenda/exclui/(?P<id_evento>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_agenda_exclui')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\AgendaController::excluiAction',));
                }

                // franbella_admin_agenda_foto_cadastra
                if (preg_match('#^/admin/agenda/(?P<id_evento>[^/]++)/fotos/cadastra$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_agenda_foto_cadastra')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\AgendaController::cadastraFotoAction',  'id_evento' => -1,));
                }

                // franbella_admin_agenda_foto_exclui
                if (preg_match('#^/admin/agenda/(?P<id_evento>[^/]++)/fotos/exclui(?:/(?P<id_foto>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_agenda_foto_exclui')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\AgendaController::excluiFotoAction',  'id_evento' => -1,  'id_foto' => -1,));
                }

                // franbella_admin_agenda_fotos
                if (preg_match('#^/admin/agenda/(?P<id_evento>[^/]++)/fotos$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_agenda_fotos')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\AgendaController::fotosAction',));
                }

                // franbella_admin_agenda_home
                if (preg_match('#^/admin/agenda(?:/(?P<id_evento>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_agenda_home')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\AgendaController::indexAction',  'id_evento' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/contato')) {
                // franbella_admin_contato_home
                if ($pathinfo === '/admin/contato') {
                    return array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\ContatoController::indexAction',  '_route' => 'franbella_admin_contato_home',);
                }

                // franbella_admin_contato_detalhes
                if (preg_match('#^/admin/contato/(?P<id_contato>[^/]++)/detalhes$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_contato_detalhes')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\ContatoController::detalhesAction',  'id_contato' => -1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/proposta')) {
                    // franbella_admin_proposta_distribuidor_home
                    if ($pathinfo === '/admin/proposta/distribuidores') {
                        return array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\DistribuidorController::propostaAction',  '_route' => 'franbella_admin_proposta_distribuidor_home',);
                    }

                    // franbella_admin_distribuidor_proposta_detalhes
                    if (preg_match('#^/admin/proposta/(?P<id_distribuidor>[^/]++)/detalhes$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_distribuidor_proposta_detalhes')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\DistribuidorController::detalhesAction',  'id_distribuidor' => -1,));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pdv')) {
                    if (0 === strpos($pathinfo, '/admin/pdv/tipo')) {
                        // franbella_admin_pdv_tipo_cadastra
                        if (0 === strpos($pathinfo, '/admin/pdv/tipo/cadastra') && preg_match('#^/admin/pdv/tipo/cadastra(?:/(?P<id_tipo_pdv>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_pdv_tipo_cadastra')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\TipoPDVController::cadastraAction',  'id_tipo_pdv' => '-1',));
                        }

                        // franbella_admin_pdv_tipo_exclui
                        if (0 === strpos($pathinfo, '/admin/pdv/tipo/exclui') && preg_match('#^/admin/pdv/tipo/exclui(?:/(?P<id_tipo_pdv>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_pdv_tipo_exclui')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\TipoPDVController::excluiAction',  'id_tipo_pdv' => '-1',));
                        }

                    }

                    // franbella_admin_pdv_cadastra
                    if (0 === strpos($pathinfo, '/admin/pdv/cadastra') && preg_match('#^/admin/pdv/cadastra(?:/(?P<id_pdv>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_pdv_cadastra')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\PDVController::cadastraAction',  'id_pdv' => '-1',));
                    }

                    // franbella_admin_pdv_exclui
                    if (0 === strpos($pathinfo, '/admin/pdv/exclui') && preg_match('#^/admin/pdv/exclui(?:/(?P<id_pdv>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_pdv_exclui')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\PDVController::excluiAction',  'id_pdv' => '-1',));
                    }

                    // franbella_admin_pdv_tipo_home
                    if (0 === strpos($pathinfo, '/admin/pdv/tipo') && preg_match('#^/admin/pdv/tipo(?:/(?P<id_tipo_pdv>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_pdv_tipo_home')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\TipoPDVController::indexAction',  'id_tipo_pdv' => '',));
                    }

                    // franbella_admin_pdv_home
                    if (preg_match('#^/admin/pdv(?:/(?P<id_pdv>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'franbella_admin_pdv_home')), array (  '_controller' => 'Franbella\\Bundle\\AdminBundle\\Controller\\PDVController::indexAction',  'id_pdv' => '',));
                    }

                }

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

        if (0 === strpos($pathinfo, '/onde-encontro')) {
            // franbella_site_onde_encontro
            if ($pathinfo === '/onde-encontro') {
                return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::encontroAction',  '_route' => 'franbella_site_onde_encontro',);
            }

            // franbella_site_onde_encontro_carrega_cidade
            if ($pathinfo === '/onde-encontro/cidades') {
                return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::carregaCidadeAction',  '_route' => 'franbella_site_onde_encontro_carrega_cidade',);
            }

            if (0 === strpos($pathinfo, '/onde-encontro/b')) {
                // franbella_site_onde_encontro_carrega_bairro
                if ($pathinfo === '/onde-encontro/bairros') {
                    return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::carregaBairroAction',  '_route' => 'franbella_site_onde_encontro_carrega_bairro',);
                }

                // franbella_site_onde_encontro_busca
                if ($pathinfo === '/onde-encontro/busca') {
                    return array (  '_controller' => 'Franbella\\Bundle\\SiteBundle\\Controller\\PageController::encontroBuscaAction',  '_route' => 'franbella_site_onde_encontro_busca',);
                }

            }

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

        if (0 === strpos($pathinfo, '/media/cache')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
