<?php

/* FranbellaAdminBundle:Distribuidor:detalhes.html.twig */
class __TwigTemplate_ea73c255ae042eb8c2e92510c7d687985af5e29b118db211937eaf6a63f79956 extends Twig_Template
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
        // line 1
        echo "<div class=\"modal-header\">
    <span class=\"pull-right\">Enviado em ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "dataEnvio"), "d/m/Y"), "html", null, true);
        echo " 
        &agrave;s ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "dataEnvio"), "H:i:s"), "html", null, true);
        echo "</span>
    <strong>Raz&atilde;o Social: </strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "RazaoSocial"), "html", null, true);
        echo " | 
    <strong>Fantasia: </strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "fantasia"), "html", null, true);
        echo " <br />
    <strong>CPF/CNPJ: </strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "cpfCnpj"), "html", null, true);
        echo " | 
    <strong>Inscri&ccedil;&atilde;o Estadual: </strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "inscricaoEstadual"), "html", null, true);
        echo " <br />
    <strong>Telefone:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "telefoneFixo"), "html", null, true);
        echo " <strong>Ramal:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "ramal"), "html", null, true);
        echo " | 
    <strong>Celular:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "celular"), "html", null, true);
        echo "
    </div>
<div class=\"modal-body\">
    <h4><strong>Detalhes</strong></h4>
    <strong>&Aacute;rea de Atua&ccedil;&atilde;o: </strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "areaAtuacao"), "html", null, true);
        echo "<br />
    <strong>Quantidade de Representantes: </strong>";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : null), "qtdRepresentantes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : null), "qtdRepresentantes"), "-")) : ("-")), "html", null, true);
        echo "<br />
    <strong>Faturamento Bruto (R\$): </strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "faturamentoBruto"), 2, ",", "."), "html", null, true);
        echo "<br />
    
    <h4><strong><u>Refer&ecirc;ncias Comerciais</u></strong></h4>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "fornecedores"));
        foreach ($context['_seq'] as $context["_key"] => $context["fornecedor"]) {
            // line 19
            echo "    <p><h4><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fornecedor"]) ? $context["fornecedor"] : $this->getContext($context, "fornecedor")), "fornecedor"), "html", null, true);
            echo "</strong></h4><strong>Telefone: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fornecedor"]) ? $context["fornecedor"] : $this->getContext($context, "fornecedor")), "telefone"), "html", null, true);
            echo "<br /> 
        <strong>Contato: </strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fornecedor"]) ? $context["fornecedor"] : $this->getContext($context, "fornecedor")), "contato"), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fornecedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>
<div class=\"modal-footer\">
    <button type=\"button\" id=\"btnFechar\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('#btnFechar').click(function(){
            ";
        // line 30
        echo "        });
        
    });
</script>";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:Distribuidor:detalhes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  160 => 48,  137 => 9,  104 => 37,  271 => 124,  263 => 119,  260 => 118,  248 => 121,  245 => 118,  242 => 117,  237 => 129,  213 => 101,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  165 => 80,  211 => 153,  202 => 150,  170 => 81,  152 => 124,  148 => 123,  34 => 5,  129 => 3,  155 => 107,  58 => 24,  65 => 24,  113 => 50,  97 => 35,  90 => 34,  77 => 19,  153 => 67,  127 => 114,  84 => 20,  81 => 21,  70 => 8,  53 => 20,  191 => 72,  188 => 140,  178 => 83,  174 => 82,  172 => 71,  150 => 69,  146 => 42,  100 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 123,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 73,  220 => 156,  214 => 69,  177 => 97,  169 => 60,  140 => 10,  132 => 4,  128 => 4,  107 => 20,  61 => 18,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 106,  219 => 76,  217 => 155,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 11,  135 => 53,  119 => 42,  102 => 30,  71 => 26,  67 => 15,  63 => 14,  59 => 13,  38 => 6,  94 => 17,  89 => 20,  85 => 14,  75 => 17,  68 => 25,  56 => 21,  87 => 25,  21 => 79,  26 => 3,  93 => 33,  88 => 31,  78 => 25,  46 => 8,  27 => 4,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 73,  156 => 125,  151 => 63,  142 => 59,  138 => 119,  136 => 52,  121 => 112,  117 => 35,  105 => 107,  91 => 12,  62 => 6,  49 => 18,  24 => 81,  25 => 3,  19 => 1,  79 => 50,  72 => 53,  69 => 14,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 47,  145 => 46,  139 => 71,  131 => 115,  123 => 35,  120 => 40,  115 => 110,  111 => 40,  108 => 38,  101 => 30,  98 => 31,  96 => 51,  83 => 26,  74 => 9,  66 => 91,  55 => 24,  52 => 9,  50 => 19,  43 => 16,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 152,  203 => 93,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 126,  154 => 65,  149 => 12,  147 => 60,  144 => 122,  141 => 41,  133 => 51,  130 => 68,  125 => 3,  122 => 43,  116 => 41,  112 => 39,  109 => 31,  106 => 31,  103 => 37,  99 => 36,  95 => 34,  92 => 22,  86 => 33,  82 => 13,  80 => 29,  73 => 18,  64 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 10,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 4,);
    }
}
