<?php

/* FranbellaSiteBundle:Page:removedores.html.twig */
class __TwigTemplate_e2afbac46a3fa14f13267097f69abce0f1a5b3c0153844bdcd6d0a30a250dc9e extends Twig_Template
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
        echo "<div class=\"caixa-descricao\">
    <h3 class=\"titulo-pagina\">Linha Removedores</h3>
    <p class=\"subtitulo-produto\">Removedores de Esmalte Franbella</p>
    <p>Um produto para quem prioriza qualidade.</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Removedor de Esmalte - 100ml</h4>
        <p>A base de acetona, a&ccedil;&atilde;o hidratante, 
            perfeita remo&ccedil;&atilde;o, real&ccedil;a o brilho 
            natural das unhas, design inovador, indicador de 
            quantidade e fragr&acirc;ncia suave.</p>
    </div>
    <p class=\"texto-anvisa-italico\">Res. ANVISA n&ordm; 343/05 100ml - 
    MS 2.05023.9 | Venda proibida para menores de 18 anos conforme 
    portaria n&ordm; 1274 de 26 de agosto de 2003, do Minist&eacute;rio 
    da Justi&ccedil;a</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Removedor de Esmalte - 
            Hipoalerg&ecirc;nico - 100ml</h4>
        <p>N&atilde;o cont&eacute;m acetona, com vitamina E, &oacute;leo 
            de semente de uva, D-Pantenol e Pr&oacute;-vitamina B5. 
            Testado Dermatologicamente. Previne a forma&ccedil;&atilde;o 
            de radicais livres, deixando as unhas mais hidratadas e 
            saud&aacute;veis.</p>
    </div>
    <p class=\"texto-anvisa-italico\">Res. ANVISA n&ordm; 343/05 100ml - 
    MS 2.05023.9 | Venda proibida para menores de 18 anos conforme 
    portaria n&ordm; 1274 de 26 de agosto de 2003, do Minist&eacute;rio 
    da Justi&ccedil;a</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Removedor de Esmalte - 500ml</h4>
        <p>A base de acetona, indicado para profissionais que buscam um 
            produto com alto rendimento, a&ccedil;&atilde;o hidratante, 
            perfeita remo&ccedil;&atilde;o, real&ccedil;a o brilho natural das 
            unhas, design inovador, indicador de quantidade e 
            fragr&acirc;ncia suave.</p>
    </div>
    <p class=\"texto-anvisa-italico\">Res. ANVISA n&ordm; 343/05 100ml - 
    MS 2.05023.9 | Venda proibida para menores de 18 anos conforme 
    portaria n&ordm; 1274 de 26 de agosto de 2003, do Minist&eacute;rio 
    da Justi&ccedil;a</p>
    
</div>
<div class=\"caixa-imagem\">
    <img id=\"hipo-detalhe\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/hipo-todos.png"), "html", null, true);
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:removedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  155 => 107,  58 => 17,  65 => 34,  113 => 50,  97 => 28,  90 => 40,  77 => 31,  153 => 44,  127 => 36,  84 => 28,  81 => 21,  70 => 18,  53 => 20,  191 => 72,  188 => 71,  178 => 76,  174 => 74,  172 => 71,  150 => 64,  146 => 42,  100 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 97,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 30,  71 => 22,  67 => 31,  63 => 27,  59 => 20,  38 => 8,  94 => 52,  89 => 20,  85 => 38,  75 => 17,  68 => 36,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 41,  88 => 19,  78 => 25,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 66,  156 => 66,  151 => 63,  142 => 59,  138 => 40,  136 => 56,  121 => 46,  117 => 62,  105 => 44,  91 => 49,  62 => 23,  49 => 18,  24 => 3,  25 => 3,  19 => 2,  79 => 50,  72 => 53,  69 => 14,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 71,  131 => 52,  123 => 35,  120 => 40,  115 => 43,  111 => 37,  108 => 32,  101 => 40,  98 => 31,  96 => 51,  83 => 26,  74 => 23,  66 => 12,  55 => 24,  52 => 56,  50 => 8,  43 => 6,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 67,  154 => 65,  149 => 76,  147 => 58,  144 => 49,  141 => 41,  133 => 57,  130 => 68,  125 => 44,  122 => 43,  116 => 41,  112 => 34,  109 => 34,  106 => 31,  103 => 32,  99 => 29,  95 => 37,  92 => 36,  86 => 27,  82 => 22,  80 => 29,  73 => 19,  64 => 30,  60 => 22,  57 => 14,  54 => 9,  51 => 14,  48 => 17,  45 => 10,  42 => 9,  39 => 10,  36 => 11,  33 => 3,  30 => 2,);
    }
}
