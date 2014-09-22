<?php

/* FranbellaAdminBundle:Page:index.html.twig */
class __TwigTemplate_3d202fea40f908bf109239f991e258831aef50d3695d00306fefd5f1e0fb8bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'interno' => array($this, 'block_interno'),
            'tituloAdministracao' => array($this, 'block_tituloAdministracao'),
            'conteudoAdministracao' => array($this, 'block_conteudoAdministracao'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Franbella";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" 
              href=\"http://cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.css\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 17
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
          <![endif]-->
        <script type=\"text/javascript\">
            ";
        // line 35
        echo "            \$(document).ready(function(){
                \$('.caixa-eventos, .caixa-descricao, .caixa-descricao-espaco, .caixa-imagem, .caixa-registros, .caixa-resultados-pdv').niceScroll({
                    cursorcolor: '#962169'
                });
                
                oTable = \$('.table').dataTable({
                    \"info\": false,
                    stateSave: false,
                    \"pagingType\": \"simple_numbers\",
                    \"dom\": '<\"top\"i>rt<\"bottom\"fp><\"clear\">',
                    \"language\":{
                        \"paginate\": {
                          \"previous\": \"Anterior\",
                          \"next\": \"Próxima\"
                        },
                        \"search\": \"Busca: \"
                    }
                    
                });
                
                var oSettings = oTable.fnSettings();
                oSettings._iDisplayLength = 5;
                oTable.fnDraw();
                
                ";
        // line 62
        echo "            });    
           
        </script>
        ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("franbella_admin_homepage");
        echo "\">Franbella - Administra&ccedil;&atilde;o</a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 80
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("franbella_admin_agenda_home");
        echo "\">Agenda</a></li>
                        <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("franbella_admin_distribuidor_home");
        echo "\">Distribuidores</a></li>
                        <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("franbella_admin_contato_home");
        echo "\">Contato 
                                ";
        // line 83
        if ((twig_length_filter($this->env, (isset($context["mensagens"]) ? $context["mensagens"] : $this->getContext($context, "mensagens"))) > 0)) {
            // line 84
            echo "                                <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["mensagens"]) ? $context["mensagens"] : $this->getContext($context, "mensagens"))), "html", null, true);
            echo "</span>
                                ";
        }
        // line 86
        echo "                                </a></li>
                        <li>
                            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("franbella_admin_proposta_distribuidor_home");
        echo "\">
                                Propostas Distribuidores 
                                ";
        // line 90
        if ((twig_length_filter($this->env, (isset($context["distNaoLida"]) ? $context["distNaoLida"] : $this->getContext($context, "distNaoLida"))) > 0)) {
            // line 91
            echo "                                <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["distNaoLida"]) ? $context["distNaoLida"] : $this->getContext($context, "distNaoLida"))), "html", null, true);
            echo "</span>
                                ";
        }
        // line 93
        echo "                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                PDV <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li>
                                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("franbella_admin_pdv_home");
        echo "\">
                                        Cadastra PDV
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("franbella_admin_pdv_tipo_home");
        echo "\">
                                        Cadastra Tipo PDV
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container-fluid container-admin\">
            ";
        // line 117
        $this->displayBlock('interno', $context, $blocks);
        // line 129
        echo "        </div>
        ";
    }

    // line 117
    public function block_interno($context, array $blocks = array())
    {
        // line 118
        echo "            ";
        $this->displayBlock('tituloAdministracao', $context, $blocks);
        // line 121
        echo "                <div class=\"panel panel-default painel-conteudo-admin\">
                    <div class=\"panel-heading conteudo-admin\">
                        ";
        // line 123
        $this->displayBlock('conteudoAdministracao', $context, $blocks);
        // line 126
        echo "                    </div>
                </div>
            ";
    }

    // line 118
    public function block_tituloAdministracao($context, array $blocks = array())
    {
        // line 119
        echo "                <h3 class=\"titulo-pagina-admin\">Administra&ccedil;&atilde;o do Site</h3>
            ";
    }

    // line 123
    public function block_conteudoAdministracao($context, array $blocks = array())
    {
        // line 124
        echo "                            <p>Escolha uma opção no menu acima</p>
                        ";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 124,  268 => 123,  263 => 119,  260 => 118,  254 => 126,  252 => 123,  248 => 121,  245 => 118,  242 => 117,  237 => 129,  235 => 117,  221 => 106,  213 => 101,  203 => 93,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  178 => 83,  174 => 82,  170 => 81,  165 => 80,  158 => 73,  153 => 70,  150 => 69,  143 => 62,  117 => 35,  107 => 20,  103 => 19,  99 => 18,  94 => 17,  90 => 15,  85 => 14,  82 => 13,  74 => 9,  70 => 8,  65 => 7,  62 => 6,  56 => 5,  50 => 131,  48 => 69,  41 => 66,  38 => 13,  36 => 6,  32 => 5,  26 => 1,);
    }
}
