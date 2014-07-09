<?php

/* FranbellaAdminBundle:Video:index.html.twig */
class __TwigTemplate_c10a2509db734513225215bf5f0804302c2610779eac73d473d5f3f496e1b0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FranbellaAdminBundle:Page:index.html.twig");

        $this->blocks = array(
            'interno' => array($this, 'block_interno'),
            'tituloAdministracao' => array($this, 'block_tituloAdministracao'),
            'conteudoAdministracao' => array($this, 'block_conteudoAdministracao'),
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
            ";
        // line 8
        $this->displayBlock('conteudoAdministracao', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
    }

    // line 3
    public function block_tituloAdministracao($context, array $blocks = array())
    {
        // line 4
        echo "<h3 class=\"titulo-pagina-admin\">V&iacute;deo</h3>
";
    }

    // line 8
    public function block_conteudoAdministracao($context, array $blocks = array())
    {
        // line 9
        echo "                <form name=\"cadastra-video\" id=\"cadastra-video\" action=\"#\" method=\"POST\">
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <input type=\"submit\" value=\"Cadastrar\" />
                </form>
            ";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:Video:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 56,  134 => 46,  114 => 30,  206 => 152,  185 => 62,  167 => 131,  153 => 125,  124 => 38,  118 => 112,  104 => 108,  58 => 9,  65 => 7,  113 => 50,  97 => 42,  90 => 40,  77 => 31,  53 => 18,  165 => 50,  155 => 55,  127 => 43,  110 => 36,  100 => 28,  70 => 8,  34 => 149,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 155,  177 => 57,  169 => 60,  140 => 49,  132 => 51,  128 => 115,  107 => 35,  61 => 10,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 156,  208 => 153,  204 => 72,  179 => 137,  159 => 56,  143 => 47,  135 => 119,  119 => 42,  102 => 18,  71 => 94,  67 => 22,  63 => 90,  59 => 16,  38 => 11,  94 => 28,  89 => 99,  85 => 38,  75 => 17,  68 => 93,  56 => 5,  87 => 25,  21 => 79,  26 => 1,  93 => 41,  88 => 13,  78 => 34,  46 => 11,  27 => 4,  44 => 85,  31 => 4,  28 => 83,  201 => 151,  196 => 149,  183 => 82,  171 => 132,  166 => 61,  163 => 62,  158 => 67,  156 => 55,  151 => 67,  142 => 59,  138 => 54,  136 => 56,  121 => 37,  117 => 44,  105 => 44,  91 => 27,  62 => 6,  49 => 14,  24 => 81,  25 => 3,  19 => 1,  79 => 96,  72 => 16,  69 => 25,  47 => 3,  40 => 12,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 123,  139 => 46,  131 => 44,  123 => 42,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 40,  98 => 106,  96 => 15,  83 => 12,  74 => 9,  66 => 15,  55 => 8,  52 => 87,  50 => 4,  43 => 10,  41 => 14,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 150,  193 => 73,  189 => 71,  187 => 84,  182 => 61,  176 => 64,  173 => 65,  168 => 64,  164 => 59,  162 => 59,  154 => 58,  149 => 55,  147 => 58,  144 => 49,  141 => 122,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 110,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 37,  92 => 14,  86 => 28,  82 => 53,  80 => 11,  73 => 11,  64 => 17,  60 => 22,  57 => 88,  54 => 16,  51 => 14,  48 => 37,  45 => 10,  42 => 9,  39 => 8,  36 => 6,  33 => 3,  30 => 2,);
    }
}
