<?php

/* FranbellaAdminBundle:Contato:index.html.twig */
class __TwigTemplate_ce9be6ca70c2cf10411df4684575ac9d1da91570fe34e6928f1832a6019018f9 extends Twig_Template
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
                        <td>Assunto</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Data Envio</td>
                        <td>Lida</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensagensTodas"]) ? $context["mensagensTodas"] : $this->getContext($context, "mensagensTodas")));
        foreach ($context['_seq'] as $context["_key"] => $context["mensagem"]) {
            // line 20
            echo "                    ";
            if ($this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "lida")) {
                // line 21
                echo "                        <tr data-toggle=\"modal\" data-target=\"#myModal\" 
                            href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_contato_detalhes", array("id_contato" => $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "id"))), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 24
                echo "                        <tr style=\"font-weight: bold\" data-toggle=\"modal\" data-target=\"#myModal\" 
                            href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("franbella_admin_contato_detalhes", array("id_contato" => $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "id"))), "html", null, true);
                echo "\">
                    ";
            }
            // line 27
            echo "                    
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "assunto"), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "nome"), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "dataEnvio"), "d/m/Y H:i:s", "America/Sao_Paulo"), "html", null, true);
            echo "</td>
                        <td class=\"status-lida\">
                            ";
            // line 33
            if ($this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "lida")) {
                // line 34
                echo "                                Sim
                            ";
            } else {
                // line 36
                echo "                                N&atilde;o
                            ";
            }
            // line 37
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensagem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        echo "    <h3 class=\"titulo-pagina-admin\">Mensagens</h3>
";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('body').on('hidden.bs.modal', '.modal', function () {
            \$(this).removeData('bs.modal');
        });
        
        \$('#myModal').on('hide.bs.modal', function (e) {
            window.location = \"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("franbella_admin_contato_home");
        echo "\";
        });
        
        ";
        // line 67
        echo "    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaAdminBundle:Contato:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  160 => 48,  137 => 9,  104 => 37,  271 => 124,  263 => 119,  260 => 118,  248 => 121,  245 => 118,  242 => 117,  237 => 129,  213 => 101,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  165 => 80,  211 => 153,  202 => 150,  170 => 81,  152 => 124,  148 => 123,  34 => 3,  129 => 3,  155 => 107,  58 => 24,  65 => 24,  113 => 50,  97 => 35,  90 => 34,  77 => 4,  153 => 67,  127 => 114,  84 => 30,  81 => 21,  70 => 8,  53 => 20,  191 => 72,  188 => 140,  178 => 83,  174 => 82,  172 => 71,  150 => 69,  146 => 42,  100 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 123,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 73,  220 => 156,  214 => 69,  177 => 97,  169 => 60,  140 => 10,  132 => 4,  128 => 4,  107 => 20,  61 => 18,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 106,  219 => 76,  217 => 155,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 11,  135 => 53,  119 => 42,  102 => 30,  71 => 26,  67 => 31,  63 => 90,  59 => 20,  38 => 13,  94 => 17,  89 => 20,  85 => 14,  75 => 17,  68 => 25,  56 => 21,  87 => 25,  21 => 79,  26 => 3,  93 => 33,  88 => 31,  78 => 25,  46 => 17,  27 => 4,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 73,  156 => 125,  151 => 63,  142 => 59,  138 => 119,  136 => 52,  121 => 112,  117 => 35,  105 => 107,  91 => 12,  62 => 6,  49 => 18,  24 => 81,  25 => 3,  19 => 1,  79 => 50,  72 => 53,  69 => 14,  47 => 8,  40 => 11,  37 => 4,  22 => 2,  246 => 90,  157 => 47,  145 => 46,  139 => 71,  131 => 115,  123 => 35,  120 => 40,  115 => 110,  111 => 40,  108 => 38,  101 => 106,  98 => 31,  96 => 51,  83 => 26,  74 => 9,  66 => 91,  55 => 24,  52 => 22,  50 => 19,  43 => 16,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 152,  203 => 93,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 126,  154 => 65,  149 => 12,  147 => 60,  144 => 122,  141 => 41,  133 => 51,  130 => 68,  125 => 3,  122 => 43,  116 => 41,  112 => 39,  109 => 31,  106 => 31,  103 => 37,  99 => 36,  95 => 34,  92 => 99,  86 => 33,  82 => 13,  80 => 29,  73 => 27,  64 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 10,  42 => 6,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
    }
}
