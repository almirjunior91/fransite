<?php

/* FranbellaSiteBundle:Page:recebeDados.html.twig */
class __TwigTemplate_6739d7d74f69692bf99002f222523a24a6e365953b21dcd95ce94c87f61f9987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function(){
        
        \$.getJSON('http://portal.valesul.com/leifran/exporta_vendas.php?callback=?', function(data){
            \$total = data.length;
            
            var data = {
                  'itens': JSON.stringify(data)
            };
            
            \$.ajax({
                url: '";
        // line 16
        echo $this->env->getExtension('routing')->getPath("franbella_site_grava_dados");
        echo "',
                data: data,
                type: 'POST',
                success: function(data){
                      console.log(data);
              },
              error: function(request, message, error){
                      alert(\"Erro!! \"+ message);
                      console.log(message+\" \"+error+\" \"+request);
              }
            });
            
            ";
        // line 31
        echo "            
";
        // line 33
        echo "        });
        
        ";
        // line 50
        echo "        
    });
</script>
";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:recebeDados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 54,  69 => 50,  65 => 33,  62 => 31,  47 => 16,  32 => 4,  29 => 3,);
    }
}
