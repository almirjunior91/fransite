<?php

/* FranbellaAdminBundle:Distribuidor:proposta.html.twig */
class __TwigTemplate_a32e31da7d05c061f63359eb767484b584007e4b46ba4d3f2ebb1595c4874d6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FranbellaAdminBundle:Page:index.html.twig");

        $this->blocks = array(
            'interno' => array($this, 'block_interno'),
            'tituloAdministracao' => array($this, 'block_tituloAdministracao'),
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
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <td>Raz&atilde;o Social</td>
                        <td>Fantasia</td>
                        <td>Telefone</td>
                        <td>Neg&oacute;cio</td>
                        <td>Data Envio</td>
                        <td>Lida</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["distribuidores"]) ? $context["distribuidores"] : $this->getContext($context, "distribuidores")));
        foreach ($context['_seq'] as $context["_key"] => $context["distribuidor"]) {
            // line 21
            echo "                        ";
            if ($this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "lida")) {
                // line 22
                echo "                            <tr data-toggle=\"modal\" data-target=\"#myModal\" 
                                href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_distribuidor_proposta_detalhes", array("id_distribuidor" => $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "id"))), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 25
                echo "                            <tr style=\"font-weight: bold\" data-toggle=\"modal\" data-target=\"#myModal\" 
                                href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_distribuidor_proposta_detalhes", array("id_distribuidor" => $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "id"))), "html", null, true);
                echo "\">
                        ";
            }
            // line 28
            echo "
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "razaoSocial"), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "fantasia"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "telefoneFixo"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "areaAtuacao"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "dataEnvio"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                        <td class=\"status-lida\">
                            ";
            // line 35
            if ($this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "lida")) {
                // line 36
                echo "                                Sim
                            ";
            } else {
                // line 38
                echo "                                N&atilde;o
                            ";
            }
            // line 39
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distribuidor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"modal\" id=\"myModal\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
";
    }

    // line 3
    public function block_tituloAdministracao($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class=\"titulo-pagina-admin\">Propostas Distribuidores</h3>
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
<script type=\"text/javascript\">
    \$(document).ready(function(){
        
        \$('body').on('hidden.bs.modal', '.modal', function () {
            \$(this).removeData('bs.modal');
        });
        
        \$('#myModal').on('hide.bs.modal', function (e) {
            window.location = \"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("franbella_admin_proposta_distribuidor_home");
        echo "\";
        });
        
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:Distribuidor:proposta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  76 => 28,  160 => 48,  137 => 12,  104 => 38,  271 => 124,  263 => 119,  260 => 118,  248 => 121,  245 => 118,  242 => 117,  237 => 129,  213 => 101,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  165 => 80,  211 => 153,  202 => 150,  170 => 81,  152 => 124,  148 => 44,  34 => 3,  129 => 3,  155 => 107,  58 => 22,  65 => 24,  113 => 50,  97 => 35,  90 => 34,  77 => 29,  153 => 67,  127 => 114,  84 => 20,  81 => 30,  70 => 8,  53 => 20,  191 => 72,  188 => 140,  178 => 83,  174 => 82,  172 => 71,  150 => 69,  146 => 42,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 123,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 73,  220 => 156,  214 => 69,  177 => 97,  169 => 60,  140 => 10,  132 => 4,  128 => 10,  107 => 20,  61 => 23,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 106,  219 => 76,  217 => 155,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 11,  135 => 53,  119 => 42,  102 => 37,  71 => 26,  67 => 15,  63 => 14,  59 => 13,  38 => 6,  94 => 17,  89 => 32,  85 => 31,  75 => 17,  68 => 25,  56 => 21,  87 => 25,  21 => 79,  26 => 3,  93 => 33,  88 => 31,  78 => 25,  46 => 17,  27 => 4,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 73,  156 => 125,  151 => 63,  142 => 59,  138 => 53,  136 => 52,  121 => 112,  117 => 3,  105 => 107,  91 => 12,  62 => 6,  49 => 18,  24 => 81,  25 => 3,  19 => 1,  79 => 50,  72 => 53,  69 => 26,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 47,  145 => 43,  139 => 71,  131 => 11,  123 => 35,  120 => 4,  115 => 110,  111 => 40,  108 => 39,  101 => 30,  98 => 35,  96 => 51,  83 => 26,  74 => 28,  66 => 25,  55 => 21,  52 => 9,  50 => 19,  43 => 16,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 152,  203 => 93,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 126,  154 => 64,  149 => 12,  147 => 60,  144 => 122,  141 => 54,  133 => 4,  130 => 3,  125 => 9,  122 => 43,  116 => 42,  112 => 39,  109 => 31,  106 => 31,  103 => 37,  99 => 36,  95 => 34,  92 => 22,  86 => 33,  82 => 13,  80 => 29,  73 => 18,  64 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 20,  48 => 18,  45 => 10,  42 => 7,  39 => 10,  36 => 6,  33 => 3,  30 => 2,);
    }
}
