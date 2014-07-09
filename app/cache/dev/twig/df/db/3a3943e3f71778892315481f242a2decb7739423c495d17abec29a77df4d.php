<?php

/* FranbellaSiteBundle:Page:espacoManicure.html.twig */
class __TwigTemplate_dfdb3a3943e3f71778892315481f242a2decb7739423c495d17abec29a77df4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'conteudo' => array($this, 'block_conteudo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jcarousel.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jcarousel.basic.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_conteudo($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"caixa-descricao-espaco\">
    <h3 class=\"titulo-pagina\">Espa&ccedil;o da Manicure</h3>
    <p class=\"subtitulo-produto\">Confira nossos links e novidades</p>
    <br />
    <br />
    <h4 class=\"titulo-pagina\">Unhas Marmorizadas</h4>
    <p>Postamos na nossa FANPAGE v&iacute;deo de como fazer uma 
        bela unha marmorizada.</p>
    <br />
    <h4 class=\"titulo-pagina\">Porgrama Eliana</h4>
    <p>Hoje postamos na nossa FANPAGE link do programa da Eliana no SBT.</p>
    <br />
    <h4 class=\"titulo-pagina\">Manicures</h4>
    <p>Dicas de como atender bem.</p>
</div>
<div class=\"caixa-video-externa\">
    <div class=\"caixa-video\">
        <ul>
            <li>
                <div class=\"video\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/hipo.png"), "html", null, true);
        echo "\" /></div>
            </li>
            <li>
                <div class=\"video\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/removedor.png"), "html", null, true);
        echo "\" /></div>
            </li>
        </ul>
    </div>
    <a href=\"#\" class=\"jcarousel-control-prev\">&lsaquo;</a>
    <a href=\"#\" class=\"jcarousel-control-next\">&rsaquo;</a>
    <p class=\"jcarousel-pagination\"></p>
</div>
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jcarousel.basic.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tubular.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.caixa-video').jcarousel();
        \$('.jcarousel-pagination').jcarouselPagination();
";
        // line 50
        echo "    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:espacoManicure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  90 => 40,  77 => 31,  71 => 28,  50 => 9,  47 => 8,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
