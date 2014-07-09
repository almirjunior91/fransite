<?php

/* ::base.html.twig */
class __TwigTemplate_91733be7b949a0cc71d97652494fc5475f117a9da85c6dfd6e422c0976cb8d48 extends Twig_Template
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
            'conteudo' => array($this, 'block_conteudo'),
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
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 61
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
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/require.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            require.config({
                    baseUrl: '";
        // line 16
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
        // line 28
        echo "            });    
           
        </script>
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "        
        <div id=\"caixa\">
            <div id=\"banner\">
                <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("franbella_site_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/banner.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <ul id=\"menu\">
                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("franbella_site_linha");
        echo "\"><span>A Linha</span></a></li>
                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("franbella_site_espaco_manicure");
        echo "\"><span>Espa&ccedil;o da Manicure</span></a></li>
                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("franbella_site_agenda");
        echo "\"><span>Agenda/Eventos</span></a></li>
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("franbella_site_fale_conosco");
        echo "\"><span>Fale Conosco</span></a></li>
                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("franbella_site_onde_encontro");
        echo "\"><span>Onde Encontro</span></a></li>
                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("franbella_site_seja_distribuidor");
        echo "\"><span>Seja Um Distribuidor</span></a></li>
            </ul>
            <div id=\"conteudo\">
            ";
        // line 50
        $this->displayBlock('conteudo', $context, $blocks);
        // line 53
        echo "                <a id=\"logo-facebook\" href=\"http://www.facebook.com/leifran.franbella\" target=\"_blank\">
                    <img id=\"facebook\" 
                         src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/facebook.png"), "html", null, true);
        echo "\" />
                </a>
            </div>
        </div>
        
        ";
    }

    // line 50
    public function block_conteudo($context, array $blocks = array())
    {
        // line 51
        echo "                <img id=\"index\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/index.png"), "html", null, true);
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  165 => 50,  155 => 55,  151 => 53,  149 => 50,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  115 => 39,  110 => 36,  107 => 35,  100 => 28,  88 => 16,  82 => 13,  78 => 12,  73 => 11,  70 => 10,  63 => 8,  60 => 6,  54 => 5,  48 => 61,  46 => 35,  39 => 32,  36 => 10,  34 => 6,  30 => 5,  24 => 1,  69 => 47,  62 => 43,  58 => 26,  55 => 24,  43 => 12,  32 => 4,  29 => 3,);
    }
}
