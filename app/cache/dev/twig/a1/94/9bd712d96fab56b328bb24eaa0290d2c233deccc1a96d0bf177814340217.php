<?php

/* BFOSBrasilBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_a1949bd712d96fab56b328bb24eaa0290d2c233deccc1a96d0bf177814340217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bfos_cidade_choice_widget' => array($this, 'block_bfos_cidade_choice_widget'),
            'bfos_brasil_cidade_entity_widget' => array($this, 'block_bfos_brasil_cidade_entity_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 79
        echo "
";
        // line 81
        echo "

";
        // line 83
        $this->displayBlock('bfos_cidade_choice_widget', $context, $blocks);
        // line 147
        echo "

";
        // line 149
        $this->displayBlock('bfos_brasil_cidade_entity_widget', $context, $blocks);
    }

    // line 83
    public function block_bfos_cidade_choice_widget($context, array $blocks = array())
    {
        // line 84
        echo "
<div ";
        // line 85
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 87
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_") . $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "name")), "html", null, true);
            echo "\">
        ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
        ";
            // line 89
            if (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "name") == "estado")) {
                // line 90
                echo "        <br />
        ";
                // line 91
                echo "<label class=\"label_form\" for=\"#\">Cidade: </label>";
                // line 92
                echo "        ";
            }
            // line 93
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "name") == "cidade")) {
                // line 94
                echo "        <img id=\"";
                echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_loader"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bfosbrasil/images/ajax-loader.gif"), "html", null, true);
                echo "\" alt=\"ajax-loader\" style=\"display: none; \">
        ";
            }
            // line 96
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</div>

<script type=\"text/javascript\">
require(['jquery'], function(\$){

    jQuery(document).ready(function(\$){

        var ";
        // line 106
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "_loaded = false;
        ";
        // line 107
        if ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "cidade", array(), "any", true, true)) {
            // line 108
            echo "        var ";
            echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
            echo "_load_cidade = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "cidade"), "html", null, true);
            echo ";
        ";
        } else {
            // line 110
            echo "        var ";
            echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
            echo "_load_cidade = false;
        ";
        }
        // line 112
        echo "        \$(\"#";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "\").change( function() {
            var uf = \$(this).find('select').val();
            if(";
        // line 114
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "_loaded == true || uf != '0' ){
                \$(\"#";
        // line 115
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_loader"), "html", null, true);
        echo "\").show();
                \$.ajax({
                    type: \"GET\",
                    data: \"uf=\" + uf,
                    url:\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("bfos_brasil_cidades_busca");
        echo "\",
                    success: function(data){
                        if (data != ''){
                            \$(\"#";
        // line 122
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_cidade"), "html", null, true);
        echo "\").find('select').html(data).show();
                            \$(\"#";
        // line 123
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_loader"), "html", null, true);
        echo "\").hide();
                            if(";
        // line 124
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "_load_cidade){
                                \$(\"#";
        // line 125
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_cidade"), "html", null, true);
        echo "\").find('select').val(";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "_load_cidade);
                                ";
        // line 126
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "_load_cidade = false;
                            }
                        }
                        else
                        {
                            \$(\"#";
        // line 131
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_cidade"), "html", null, true);
        echo "\").html('<em>Sem resultados</em>');
                            \$(\"#";
        // line 132
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_loader"), "html", null, true);
        echo "\").hide();
                        }
                    }
                });
            }
            ";
        // line 137
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "_loaded = true;
        });

        \$(\"#";
        // line 140
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_estado"), "html", null, true);
        echo "\").trigger('change');
    });

});
</script>

";
    }

    // line 149
    public function block_bfos_brasil_cidade_entity_widget($context, array $blocks = array())
    {
        // line 150
        ob_start();
        // line 151
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
        ";
        // line 152
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
            // line 153
            echo "            <option value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
        ";
        }
        // line 155
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 156
        echo "        ";
        $this->displayBlock("widget_choice_options", $context, $blocks);
        echo "
    </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BFOSBrasilBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  220 => 156,  217 => 155,  211 => 153,  209 => 152,  204 => 151,  202 => 150,  199 => 149,  182 => 137,  170 => 131,  156 => 125,  152 => 124,  148 => 123,  144 => 122,  131 => 115,  127 => 114,  121 => 112,  115 => 110,  107 => 108,  105 => 107,  82 => 96,  68 => 92,  63 => 90,  48 => 86,  44 => 85,  41 => 84,  34 => 149,  30 => 147,  28 => 83,  21 => 79,  85 => 16,  81 => 14,  77 => 12,  75 => 11,  58 => 9,  55 => 8,  37 => 6,  35 => 5,  26 => 2,  20 => 1,  191 => 72,  188 => 140,  178 => 76,  174 => 132,  172 => 71,  166 => 68,  162 => 126,  158 => 66,  154 => 65,  150 => 64,  146 => 63,  138 => 119,  133 => 57,  130 => 56,  123 => 49,  106 => 31,  100 => 22,  96 => 21,  88 => 17,  83 => 18,  80 => 17,  74 => 94,  69 => 14,  66 => 91,  60 => 11,  52 => 87,  40 => 12,  36 => 11,  24 => 81,  101 => 106,  95 => 37,  92 => 99,  71 => 93,  65 => 16,  61 => 89,  57 => 88,  54 => 82,  45 => 53,  42 => 17,  38 => 83,  32 => 4,  29 => 3,);
    }
}
