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
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 69
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
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/require.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            require.config({
                    baseUrl: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js"), "html", null, true);
        echo "',
                    paths: {
                        jquery: 'jquery'
                    }
                });
            \$(document).ready(function(){
                \$('.caixa-eventos, .caixa-descricao, .caixa-descricao-espaco, .caixa-imagem').niceScroll({
                    cursorcolor: '#962169'
                });
                ";
        // line 30
        echo "            });    
           
        </script>
        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">Franbella - Administra&ccedil;&atilde;o</a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("franbella_admin_video_home");
        echo "\">V&iacute;deos</a>
                        </li>
                        <li><a href=\"#\">Agenda</a></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("franbella_admin_distribuidor_home");
        echo "\">Distribuidores</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container-fluid container-admin\">
            ";
        // line 55
        $this->displayBlock('interno', $context, $blocks);
        // line 67
        echo "        </div>
        ";
    }

    // line 55
    public function block_interno($context, array $blocks = array())
    {
        // line 56
        echo "            ";
        $this->displayBlock('tituloAdministracao', $context, $blocks);
        // line 59
        echo "                <div class=\"panel panel-default painel-conteudo-admin\">
                    <div class=\"panel-heading conteudo-admin\">
                        ";
        // line 61
        $this->displayBlock('conteudoAdministracao', $context, $blocks);
        // line 64
        echo "                    </div>
                </div>
            ";
    }

    // line 56
    public function block_tituloAdministracao($context, array $blocks = array())
    {
        // line 57
        echo "                <h3 class=\"titulo-pagina-admin\">Administra&ccedil;&atilde;o do Site</h3>
            ";
    }

    // line 61
    public function block_conteudoAdministracao($context, array $blocks = array())
    {
        // line 62
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
        return array (  174 => 56,  134 => 46,  114 => 30,  206 => 152,  185 => 62,  167 => 131,  153 => 125,  124 => 38,  118 => 112,  104 => 108,  58 => 9,  65 => 7,  113 => 50,  97 => 42,  90 => 40,  77 => 31,  53 => 18,  165 => 50,  155 => 55,  127 => 43,  110 => 36,  100 => 28,  70 => 8,  34 => 149,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 155,  177 => 57,  169 => 60,  140 => 49,  132 => 51,  128 => 115,  107 => 35,  61 => 10,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 156,  208 => 153,  204 => 72,  179 => 137,  159 => 56,  143 => 47,  135 => 119,  119 => 42,  102 => 18,  71 => 94,  67 => 22,  63 => 90,  59 => 16,  38 => 11,  94 => 28,  89 => 99,  85 => 38,  75 => 17,  68 => 93,  56 => 5,  87 => 25,  21 => 79,  26 => 1,  93 => 41,  88 => 13,  78 => 34,  46 => 11,  27 => 4,  44 => 85,  31 => 4,  28 => 83,  201 => 151,  196 => 149,  183 => 82,  171 => 132,  166 => 61,  163 => 62,  158 => 67,  156 => 55,  151 => 67,  142 => 59,  138 => 54,  136 => 56,  121 => 37,  117 => 44,  105 => 44,  91 => 27,  62 => 6,  49 => 14,  24 => 81,  25 => 3,  19 => 1,  79 => 96,  72 => 16,  69 => 25,  47 => 3,  40 => 12,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 123,  139 => 46,  131 => 44,  123 => 42,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 40,  98 => 106,  96 => 15,  83 => 12,  74 => 9,  66 => 15,  55 => 8,  52 => 87,  50 => 69,  43 => 10,  41 => 34,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 150,  193 => 73,  189 => 71,  187 => 84,  182 => 61,  176 => 64,  173 => 65,  168 => 64,  164 => 59,  162 => 59,  154 => 58,  149 => 55,  147 => 58,  144 => 49,  141 => 122,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 110,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 37,  92 => 14,  86 => 28,  82 => 53,  80 => 11,  73 => 11,  64 => 17,  60 => 22,  57 => 88,  54 => 16,  51 => 14,  48 => 37,  45 => 10,  42 => 9,  39 => 8,  36 => 6,  33 => 3,  30 => 2,);
    }
}
