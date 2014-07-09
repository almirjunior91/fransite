<?php

/* FranbellaSiteBundle:Page:faleConosco.html.twig */
class __TwigTemplate_1f0316b185ca71aa02be012ec45b206fc9f46d4e0010c2c5aa0e0ef1af220e4e extends Twig_Template
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
        echo "<div class=\"caixa-descricao\">
    <h3 class=\"titulo-pagina\">Fale Conosco</h3>
    <p class=\"subtitulo-produto\">Ol&aacute;! Preencha os dados abaixo!</p>
    <br />
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "resposta-contato"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "            <div class=\"resposta-contato\">
                ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    
    <form id=\"formContato\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("franbella_site_fale_conosco");
        echo "\" 
          method=\"post\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Enviar\" />
    </form>
    <p>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
    <br />
    <p>*Campos Obrigat&oacute;rios</p>
</div>
<div class=\"caixa-imagem\">
    <div id=\"mapa-localizacao\"></div>
    <br />
    <p class=\"texto-dados-empresa\">Leifran - Divis&atilde;o Cosm&eacute;ticos</p>
    <p class=\"texto-dados-empresa\">CNPJ: 30.436.380/0001-72 - Ind. Brasileira</p>
    <p class=\"texto-dados-empresa\">Av. Goi&aacute;s, 65, Retiro - 
        Volta Redonda/RJ - CEP: 27.274-070</p>
    <p class=\"texto-dados-empresa\">Res. ANVISA n&ordm; 343/05 - MS: 2.05023-9</p>
    <p class=\"texto-dados-empresa\">Farm. Resp.: Ana C. F. Araujo - CRF-RJ: 8320</p>
    <p class=\"texto-dados-empresa\">SAC: (24) 3339-8572 - www.franbella.com.br</p>
    <p class=\"texto-dados-empresa\">faleconosco@leifran.com.br</p>
</div>
";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\"
src=\"http://maps.google.com/maps/api/js?sensor=false&amp;language=en\"></script>
<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gmap3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.resposta-contato').fadeOut(5000);
        \$('#mapa-localizacao').gmap3({
            map:{
                options:{
                    center:[-22.510436,-44.125557],
                    zoom: 17
                }
            },
            marker:{
                latLng:[-22.510436,-44.125557],
                options:{
                    icon: new google.maps.MarkerImage(
                        \"http://maps.google.com/mapfiles/marker_green.png\",
                        new google.maps.Size(32, 37, \"px\", \"px\")
                    )
                }
                
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:faleConosco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 40,  95 => 37,  92 => 36,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  45 => 10,  42 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
