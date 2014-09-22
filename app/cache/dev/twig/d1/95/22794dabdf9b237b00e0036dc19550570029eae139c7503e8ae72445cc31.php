<?php

/* FranbellaSiteBundle:Page:email.html.twig */
class __TwigTemplate_d19522794dabdf9b237b00e0036dc19550570029eae139c7503e8ae72445cc31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<p>Mensagem enviada pelo usu&aacute;rio <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "nome"), "html", null, true);
        echo "</strong> &agrave;s 
    <strong>";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i"), "html", null, true);
        echo "</strong>.</p>

<p><strong>Email para resposta:</strong> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "email"), "html", null, true);
        echo "</p>
<p><strong>Assunto:</strong> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "assunto"), "html", null, true);
        echo "</p>
<p><strong>Mensagem:</strong></p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "mensagem"), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 77,  127 => 67,  84 => 28,  81 => 21,  70 => 18,  53 => 20,  191 => 72,  188 => 71,  178 => 76,  174 => 74,  172 => 71,  150 => 64,  146 => 75,  100 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 97,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 28,  63 => 27,  59 => 20,  38 => 8,  94 => 52,  89 => 20,  85 => 38,  75 => 17,  68 => 14,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 19,  78 => 34,  46 => 16,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 66,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 46,  117 => 62,  105 => 58,  91 => 27,  62 => 23,  49 => 14,  24 => 3,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 14,  47 => 9,  40 => 12,  37 => 8,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 71,  131 => 52,  123 => 66,  120 => 40,  115 => 43,  111 => 37,  108 => 59,  101 => 57,  98 => 31,  96 => 51,  83 => 18,  74 => 26,  66 => 12,  55 => 21,  52 => 56,  50 => 13,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 67,  154 => 65,  149 => 76,  147 => 58,  144 => 49,  141 => 48,  133 => 57,  130 => 68,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 31,  103 => 32,  99 => 40,  95 => 28,  92 => 31,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 17,  60 => 22,  57 => 11,  54 => 82,  51 => 14,  48 => 17,  45 => 11,  42 => 10,  39 => 10,  36 => 11,  33 => 6,  30 => 7,);
    }
}
