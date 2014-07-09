<?php

/* FranbellaSiteBundle:Page:linha.html.twig */
class __TwigTemplate_c011d45c30145d0039c96ef357ac97019592c9511e32aefa3777b38b9fd774f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'conteudo' => array($this, 'block_conteudo'),
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
    public function block_conteudo($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"caixa-tratamento\" class=\"caixas-produtos\">
    <div id=\"produtos-tratamento\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("franbella_site_linha_tratamento");
        echo "\">
            <img id=\"creme_linha\" 
                         src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/tratamento1.png"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <h4 class=\"titulo-linha\">Linha Tratamento</h4>
</div>
<div id=\"caixa-removedor\" class=\"caixas-produtos\">
    <div id=\"produtos-removedor\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("franbella_site_linha_removedores");
        echo "\">
            <img id=\"hipo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/hipo.png"), "html", null, true);
        echo "\" />
            <img id=\"removedor\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/removedor.png"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <h4 class=\"titulo-linha\">Linha Removedores</h4>
</div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:linha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 16,  50 => 15,  40 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
