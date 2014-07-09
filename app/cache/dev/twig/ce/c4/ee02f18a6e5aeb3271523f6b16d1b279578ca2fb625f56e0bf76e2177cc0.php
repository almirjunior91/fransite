<?php

/* FranbellaSiteBundle:Page:distribuidor.html.twig */
class __TwigTemplate_cec4ee02f18a6e5aeb3271523f6b16d1b279578ca2fb625f56e0bf76e2177cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_conteudo($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"caixa-eventos\">
    <h3 class=\"titulo-pagina\">Seja um Distribuidor</h3>
    <p class=\"subtitulo-produto\">Ol&aacute;! Precisamos saber 
        algumas informa&ccedil;&otilde;es</p>
    <br />
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "retorno-contato"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"resposta-contato-distribuidor\">
            ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <form name=\"form-envia-distribuidor\" 
          id=\"form-envia-distribuidor\" 
          action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("franbella_site_cadastra_contato_distribuidor");
        echo "\" method=\"POST\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br />
        
        <input type=\"submit\" value=\"Enviar\" />
    </form>
    <br />
    <h3 class=\"subtitulo-produto\">Nossos Parceiros Atuais:</h3>
    <div class=\"logo-result\"></div>
    <div class=\"logo-result\"></div>
    <div class=\"logo-result\"></div>
    <div class=\"logo-result\"></div>
</div>
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.resposta-contato-distribuidor').fadeOut(5000);
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:distribuidor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  80 => 30,  63 => 17,  59 => 16,  55 => 14,  46 => 11,  43 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
