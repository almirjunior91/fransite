<?php

/* FranbellaSiteBundle:Page:pdvs.html.twig */
class __TwigTemplate_e482ea7093481a47d770f6f176be94366332c862414094ad380f3f100c086ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jPages.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/require.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jPages.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$(\"div.holder\").jPages({
            containerID : \"lista-pdvs\",
            previous: \"← Anterior\",
            next: \"Próxima →\",
            perPage: 5
        });
    });

</script>
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<p class=\"subtitulo-produto\">Resultados:</p>
<ul id=\"lista-pdvs\">
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pdvs"]) ? $context["pdvs"] : $this->getContext($context, "pdvs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pdv"]) {
            // line 26
            echo "    ";
            if (($this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "complemento") == " ")) {
                // line 27
                echo "    <li class=\"list-item-pdv\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "fantasia"), "html", null, true);
                echo "</strong> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "rua"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "numero"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "bairro"), "html", null, true);
                echo " 
        ";
                // line 28
                if (($this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "telefone") == " ")) {
                    // line 29
                    echo "        ";
                } else {
                    // line 30
                    echo "        - <strong>Tel.: </strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "telefone"), "html", null, true);
                    echo "</li>
        ";
                }
                // line 32
                echo "
    ";
            } else {
                // line 34
                echo "        <li class=\"list-item-pdv\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "fantasia"), "html", null, true);
                echo "</strong> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "rua"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "numero"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "complemento"), "html", null, true);
                echo " 
            - ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "bairro"), "html", null, true);
                echo "
            ";
                // line 36
                if (($this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "telefone") == " ")) {
                    // line 37
                    echo "            ";
                } else {
                    // line 38
                    echo "            - <strong>Tel.: </strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pdv"]) ? $context["pdv"] : $this->getContext($context, "pdv")), "telefone"), "html", null, true);
                    echo "</li>
            ";
                }
                // line 40
                echo "    ";
            }
            // line 41
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <p>Nada encontrado.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</ul>
<div class=\"holder\"></div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:pdvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  155 => 107,  58 => 17,  65 => 16,  113 => 50,  97 => 28,  90 => 40,  77 => 31,  153 => 44,  127 => 36,  84 => 28,  81 => 21,  70 => 18,  53 => 20,  191 => 72,  188 => 71,  178 => 76,  174 => 74,  172 => 71,  150 => 64,  146 => 42,  100 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 97,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 30,  71 => 22,  67 => 31,  63 => 27,  59 => 20,  38 => 8,  94 => 52,  89 => 20,  85 => 38,  75 => 17,  68 => 14,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 41,  88 => 19,  78 => 25,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 66,  156 => 66,  151 => 63,  142 => 59,  138 => 40,  136 => 56,  121 => 46,  117 => 62,  105 => 44,  91 => 49,  62 => 23,  49 => 14,  24 => 3,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 14,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 71,  131 => 52,  123 => 35,  120 => 40,  115 => 43,  111 => 37,  108 => 32,  101 => 40,  98 => 31,  96 => 51,  83 => 26,  74 => 23,  66 => 12,  55 => 24,  52 => 56,  50 => 8,  43 => 6,  41 => 6,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 67,  154 => 65,  149 => 76,  147 => 58,  144 => 49,  141 => 41,  133 => 57,  130 => 68,  125 => 44,  122 => 43,  116 => 41,  112 => 34,  109 => 34,  106 => 31,  103 => 32,  99 => 29,  95 => 37,  92 => 36,  86 => 27,  82 => 22,  80 => 29,  73 => 19,  64 => 30,  60 => 22,  57 => 14,  54 => 9,  51 => 14,  48 => 17,  45 => 10,  42 => 9,  39 => 10,  36 => 11,  33 => 3,  30 => 2,);
    }
}
