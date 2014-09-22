<?php

/* FranbellaAdminBundle:Agenda:fotos.html.twig */
class __TwigTemplate_3367ef7846d30e8586c9e579f87e7505abebee80ec1672e60d575841dc918449 extends Twig_Template
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
        // line 18
        echo "        </div>
        <div class=\"caixa-registros\">
                <h4><strong>Fotos Cadastradas</strong></h4>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fotos"]) ? $context["fotos"] : $this->getContext($context, "fotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
            // line 22
            echo "                <p><img class=\"imagem-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(("uploads/evento/fotos/" . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "imagem")), "my_thumb"), "html", null, true);
            echo "\">
                    <span style=\"padding-left: 10px\"> 
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_agenda_foto_exclui", array("id_evento" => $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "id"), "id_foto" => $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "id"))), "html", null, true);
            echo "\">Excluir</a>
                    </span>
                </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
    </div>
";
    }

    // line 3
    public function block_tituloAdministracao($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class=\"titulo-pagina-admin\">Agenda - Fotos</h3>
";
    }

    // line 9
    public function block_conteudoAdministracao($context, array $blocks = array())
    {
        // line 10
        echo "                    <h4>Evento: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "nome"), "html", null, true);
        echo "</h4>
                    <form name=\"cadastra-distribuidor\" id=\"cadastra-distribuidor\" 
                          action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_agenda_foto_cadastra", array("id_evento" => $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "id"))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Cadastrar\" />
                    </form>
                    <p><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("franbella_admin_agenda_home");
        echo "\">Voltar para eventos</a></p>
                ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.resposta-contato').fadeOut(5000);
        
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:Agenda:fotos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 153,  202 => 150,  170 => 131,  152 => 124,  148 => 123,  34 => 3,  129 => 37,  155 => 107,  58 => 24,  65 => 34,  113 => 50,  97 => 13,  90 => 40,  77 => 4,  153 => 44,  127 => 114,  84 => 28,  81 => 21,  70 => 18,  53 => 20,  191 => 72,  188 => 140,  178 => 76,  174 => 132,  172 => 71,  150 => 64,  146 => 42,  100 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 156,  214 => 69,  177 => 97,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 108,  61 => 89,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 155,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 30,  71 => 93,  67 => 31,  63 => 90,  59 => 20,  38 => 83,  94 => 52,  89 => 20,  85 => 10,  75 => 17,  68 => 28,  56 => 14,  87 => 25,  21 => 79,  26 => 6,  93 => 41,  88 => 19,  78 => 25,  46 => 7,  27 => 4,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 66,  156 => 125,  151 => 63,  142 => 59,  138 => 119,  136 => 56,  121 => 112,  117 => 62,  105 => 107,  91 => 12,  62 => 23,  49 => 18,  24 => 81,  25 => 3,  19 => 2,  79 => 50,  72 => 53,  69 => 14,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 71,  131 => 115,  123 => 35,  120 => 40,  115 => 110,  111 => 37,  108 => 32,  101 => 106,  98 => 31,  96 => 51,  83 => 26,  74 => 3,  66 => 91,  55 => 24,  52 => 22,  50 => 8,  43 => 18,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 152,  203 => 78,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 126,  154 => 65,  149 => 76,  147 => 58,  144 => 122,  141 => 41,  133 => 57,  130 => 68,  125 => 44,  122 => 43,  116 => 41,  112 => 32,  109 => 31,  106 => 31,  103 => 16,  99 => 29,  95 => 37,  92 => 99,  86 => 27,  82 => 9,  80 => 29,  73 => 19,  64 => 30,  60 => 22,  57 => 88,  54 => 9,  51 => 14,  48 => 21,  45 => 10,  42 => 9,  39 => 10,  36 => 6,  33 => 3,  30 => 147,);
    }
}
