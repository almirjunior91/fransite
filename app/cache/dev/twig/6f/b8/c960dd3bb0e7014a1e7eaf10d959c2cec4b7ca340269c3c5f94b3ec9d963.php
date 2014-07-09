<?php

/* FranbellaSiteBundle:Page:ondeEncontro.html.twig */
class __TwigTemplate_6fb8c960dd3bb0e7014a1e7eaf10d959c2cec4b7ca340269c3c5f94b3ec9d963 extends Twig_Template
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

    // line 4
    public function block_conteudo($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"caixa-eventos\">
    <h3 class=\"titulo-pagina\">Onde Encontro?</h3>
    <p class=\"subtitulo-produto\">Ol&aacute;! Precisamos saber 
        algumas informa&ccedil;&otilde;es</p>
    <br />
    
    <form name=\"form-busca-lojas\" action=\"#\" method=\"POST\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <label for=\"loja\" class=\"label_form\">Procura Por?</label>
        <select name=\"loja\" id=\"loja\">
            <option value=\"1\">TODOS</option>
            <option value=\"2\">Drogarias</option>
            <option value=\"3\">Supermercados</option>
            <option value=\"4\">Perfumarias</option>
            <option value=\"5\">Esmalterias</option>
            <option value=\"6\">Outros</option>
        </select>
        <br />
        
        <input type=\"submit\" value=\"Buscar\" />
    </form>
    <br />
    <p class=\"subtitulo-produto\">Resultados:</p>
    <div class=\"logo-result\"></div>
    <div class=\"logo-result\"></div>
    <div class=\"logo-result\"></div>
    <div class=\"logo-result\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:ondeEncontro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  31 => 5,  28 => 4,);
    }
}
