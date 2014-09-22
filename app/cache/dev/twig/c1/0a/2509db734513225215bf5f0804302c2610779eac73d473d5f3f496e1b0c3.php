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
        return array (  126 => 11,  134 => 12,  114 => 3,  110 => 39,  76 => 28,  160 => 53,  137 => 12,  104 => 38,  271 => 124,  263 => 119,  260 => 118,  248 => 121,  245 => 118,  242 => 117,  237 => 129,  213 => 101,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  165 => 80,  211 => 153,  202 => 150,  170 => 81,  152 => 124,  148 => 44,  34 => 3,  129 => 3,  155 => 107,  58 => 9,  65 => 24,  113 => 50,  97 => 35,  90 => 34,  77 => 29,  153 => 67,  127 => 114,  84 => 20,  81 => 31,  70 => 8,  53 => 20,  191 => 72,  188 => 140,  178 => 83,  174 => 82,  172 => 71,  150 => 69,  146 => 42,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 123,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 73,  220 => 156,  214 => 69,  177 => 97,  169 => 60,  140 => 43,  132 => 12,  128 => 11,  107 => 39,  61 => 10,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 106,  219 => 76,  217 => 155,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 44,  135 => 53,  119 => 42,  102 => 37,  71 => 26,  67 => 15,  63 => 23,  59 => 22,  38 => 6,  94 => 17,  89 => 32,  85 => 32,  75 => 27,  68 => 25,  56 => 21,  87 => 25,  21 => 79,  26 => 3,  93 => 34,  88 => 31,  78 => 25,  46 => 17,  27 => 4,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 73,  156 => 125,  151 => 63,  142 => 43,  138 => 53,  136 => 52,  121 => 112,  117 => 4,  105 => 39,  91 => 34,  62 => 6,  49 => 18,  24 => 81,  25 => 3,  19 => 1,  79 => 50,  72 => 53,  69 => 26,  47 => 3,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 47,  145 => 44,  139 => 71,  131 => 11,  123 => 10,  120 => 9,  115 => 4,  111 => 40,  108 => 39,  101 => 30,  98 => 35,  96 => 51,  83 => 26,  74 => 28,  66 => 24,  55 => 8,  52 => 9,  50 => 4,  43 => 16,  41 => 14,  35 => 6,  32 => 5,  29 => 3,  209 => 152,  203 => 93,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 126,  154 => 64,  149 => 45,  147 => 60,  144 => 122,  141 => 54,  133 => 4,  130 => 3,  125 => 10,  122 => 9,  116 => 42,  112 => 3,  109 => 31,  106 => 31,  103 => 37,  99 => 36,  95 => 35,  92 => 22,  86 => 33,  82 => 13,  80 => 29,  73 => 18,  64 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 10,  42 => 7,  39 => 8,  36 => 6,  33 => 3,  30 => 2,);
    }
}
