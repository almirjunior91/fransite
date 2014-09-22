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
        
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
          <![endif]-->
        
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Franbella";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.tosrus.all.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tosrus.min.all.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">
            ";
        // line 31
        echo "            \$(document).ready(function(){
                \$('.caixa-eventos, .caixa-descricao, .caixa-descricao-espaco, .caixa-imagem').niceScroll({
                    cursorcolor: '#962169'
                });
                
                \$(\".thumb-evento-foto a\").each(function(){
                    \$(this).tosrus({
                        buttons:{
                            //prev: false,
                            //next: false
                        },
                        keys: true
                    });
                });
                
                ";
        // line 49
        echo "            });    
           
        </script>
        ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "        
        <div id=\"caixa\">
            <div id=\"banner\">
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("franbella_site_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/banner.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <ul id=\"menu\">
                <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("franbella_site_linha");
        echo "\"><span>A Linha</span></a></li>
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("franbella_site_espaco_manicure");
        echo "\"><span>Espa&ccedil;o da Manicure</span></a></li>
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("franbella_site_agenda");
        echo "\"><span>Agenda/Eventos</span></a></li>
                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("franbella_site_fale_conosco");
        echo "\"><span>Fale Conosco</span></a></li>
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("franbella_site_onde_encontro");
        echo "\"><span>Onde Encontro</span></a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("franbella_site_seja_distribuidor");
        echo "\"><span>Seja Um Distribuidor</span></a></li>
            </ul>
            <div id=\"conteudo\">
            ";
        // line 71
        $this->displayBlock('conteudo', $context, $blocks);
        // line 74
        echo "                <a id=\"logo-facebook\" href=\"http://www.facebook.com/leifran.franbella\" target=\"_blank\">
                    <img id=\"facebook\" 
                         src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/facebook.png"), "html", null, true);
        echo "\" />
                </a>
            </div>
        </div>
        
        ";
    }

    // line 71
    public function block_conteudo($context, array $blocks = array())
    {
        // line 72
        echo "                <img id=\"index\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/home.png"), "html", null, true);
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
        return array (  191 => 72,  188 => 71,  178 => 76,  174 => 74,  172 => 71,  166 => 68,  162 => 67,  158 => 66,  154 => 65,  150 => 64,  146 => 63,  138 => 60,  133 => 57,  130 => 56,  123 => 49,  106 => 31,  100 => 22,  96 => 21,  88 => 19,  83 => 18,  80 => 17,  74 => 15,  69 => 14,  66 => 12,  60 => 11,  52 => 56,  40 => 12,  36 => 11,  24 => 1,  101 => 40,  95 => 37,  92 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  54 => 82,  45 => 53,  42 => 17,  38 => 8,  32 => 4,  29 => 3,);
    }
}
