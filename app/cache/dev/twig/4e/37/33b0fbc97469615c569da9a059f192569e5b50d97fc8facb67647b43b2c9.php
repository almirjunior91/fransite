<?php

/* FranbellaAdminBundle:PDV:index.html.twig */
class __TwigTemplate_4e3733b0fbc97469615c569da9a059f192569e5b50d97fc8facb67647b43b2c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FranbellaAdminBundle:Page:index.html.twig");

        $this->blocks = array(
            'interno' => array($this, 'block_interno'),
            'tituloAdministracao' => array($this, 'block_tituloAdministracao'),
            'conteudoAdministracao' => array($this, 'block_conteudoAdministracao'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FranbellaAdminBundle:Page:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_interno($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('tituloAdministracao', $context, $blocks);
        // line 6
        echo "    <div class=\"panel panel-default painel-conteudo-admin\">
        <div class=\"panel-heading conteudo-admin\">
            <div class=\"caixa-form\">
                ";
        // line 9
        $this->displayBlock('conteudoAdministracao', $context, $blocks);
        // line 16
        echo "                
                ";
        // line 17
        if (($this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "id") > 0)) {
            // line 18
            echo "                <br />
                <p><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("franbella_admin_pdv_home");
            echo "\">Criar Novo Registro</a></p>
                ";
        }
        // line 21
        echo "                
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "resposta-pdv"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                    <div class=\"resposta-contato\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                
            </div>
            <div class=\"caixa-registros\">
                <h4><strong>PDVs Cadastrados</strong></h4>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pdvs"]) ? $context["pdvs"] : $this->getContext($context, "pdvs")));
        foreach ($context['_seq'] as $context["_key"] => $context["umPdv"]) {
            // line 32
            echo "                <p><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["umPdv"]) ? $context["umPdv"] : $this->getContext($context, "umPdv")), "razaoSocial"), "html", null, true);
            echo "</strong> <span style=\"font-size: 12px\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["umPdv"]) ? $context["umPdv"] : $this->getContext($context, "umPdv")), "fantasia"), "html", null, true);
            echo ")</span> 
                    <span style=\"padding-left: 10px\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_pdv_home", array("id_pdv" => $this->getAttribute((isset($context["umPdv"]) ? $context["umPdv"] : $this->getContext($context, "umPdv")), "id"))), "html", null, true);
            echo "\">Editar</a> | 
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_pdv_home", array("id_pdv" => $this->getAttribute((isset($context["umPdv"]) ? $context["umPdv"] : $this->getContext($context, "umPdv")), "id"))), "html", null, true);
            echo "\">Excluir</a>
                    </span>
                </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['umPdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </div>
    </div>
";
    }

    // line 3
    public function block_tituloAdministracao($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class=\"titulo-pagina-admin\">PDVs</h3>
";
    }

    // line 9
    public function block_conteudoAdministracao($context, array $blocks = array())
    {
        // line 10
        echo "                    <form name=\"cadastra-distribuidor\" id=\"cadastra-distribuidor\" 
                          action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_pdv_cadastra", array("id_pdv" => $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "id"))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Cadastrar\" />
                    </form>
                ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/require.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.resposta-contato').fadeOut(5000);
        
    });
    
    require.config({
                    baseUrl: '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js"), "html", null, true);
        echo "',
                    paths: {
                        jquery: 'jquery'
                    }
                });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:PDV:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 12,  114 => 3,  110 => 39,  76 => 28,  160 => 53,  137 => 12,  104 => 38,  271 => 124,  263 => 119,  260 => 118,  248 => 121,  245 => 118,  242 => 117,  237 => 129,  213 => 101,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  165 => 80,  211 => 153,  202 => 150,  170 => 81,  152 => 124,  148 => 44,  34 => 3,  129 => 3,  155 => 107,  58 => 22,  65 => 24,  113 => 50,  97 => 35,  90 => 34,  77 => 29,  153 => 67,  127 => 114,  84 => 20,  81 => 31,  70 => 8,  53 => 20,  191 => 72,  188 => 140,  178 => 83,  174 => 82,  172 => 71,  150 => 69,  146 => 42,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 123,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 73,  220 => 156,  214 => 69,  177 => 97,  169 => 60,  140 => 10,  132 => 4,  128 => 11,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 106,  219 => 76,  217 => 155,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 11,  135 => 53,  119 => 42,  102 => 37,  71 => 26,  67 => 15,  63 => 23,  59 => 22,  38 => 6,  94 => 17,  89 => 32,  85 => 32,  75 => 27,  68 => 25,  56 => 21,  87 => 25,  21 => 79,  26 => 3,  93 => 34,  88 => 31,  78 => 25,  46 => 17,  27 => 4,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 73,  156 => 125,  151 => 63,  142 => 43,  138 => 53,  136 => 52,  121 => 112,  117 => 4,  105 => 107,  91 => 12,  62 => 6,  49 => 18,  24 => 81,  25 => 3,  19 => 1,  79 => 50,  72 => 53,  69 => 26,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 47,  145 => 44,  139 => 71,  131 => 11,  123 => 35,  120 => 4,  115 => 110,  111 => 40,  108 => 39,  101 => 30,  98 => 35,  96 => 51,  83 => 26,  74 => 28,  66 => 24,  55 => 21,  52 => 9,  50 => 19,  43 => 16,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 152,  203 => 93,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 126,  154 => 64,  149 => 45,  147 => 60,  144 => 122,  141 => 54,  133 => 4,  130 => 3,  125 => 10,  122 => 9,  116 => 42,  112 => 39,  109 => 31,  106 => 31,  103 => 37,  99 => 36,  95 => 34,  92 => 22,  86 => 33,  82 => 13,  80 => 29,  73 => 18,  64 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 10,  42 => 7,  39 => 10,  36 => 6,  33 => 3,  30 => 2,);
    }
}
