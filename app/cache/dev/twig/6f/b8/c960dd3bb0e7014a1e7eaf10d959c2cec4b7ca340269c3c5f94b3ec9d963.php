<?php

/* FranbellaSiteBundle:Page:ondeEncontro.html.twig */
class __TwigTemplate_6fb8c960dd3bb0e7014a1e7eaf10d959c2cec4b7ca340269c3c5f94b3ec9d963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'conteudo' => array($this, 'block_conteudo'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_conteudo($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"caixa-eventos\">
    <h3 class=\"titulo-pagina\">Onde Encontro?</h3>
    <p class=\"subtitulo-produto\">Ol&aacute;! Precisamos saber 
        algumas informa&ccedil;&otilde;es</p>
    <br />
    
    <form name=\"form-busca-lojas\" id=\"form-busca-lojas\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("franbella_site_onde_encontro_busca");
        echo "\" method=\"POST\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br />
        
        <input type=\"submit\" value=\"Buscar\" />
    </form>
    <div id=\"caixa-resultados-pdv\">
        
    </div>
    ";
        // line 24
        echo "</div>
<div class=\"modal-loading\">
    <p><span>Buscando Pontos de Venda...</span></p>
</div>
<div class=\"modal-background\"></div>
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/require.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        
        \$('select#form_estado').change(function(){
            //alert(\$(this).is('selected').text());
            
            
            
            \$uf = \$(this).find(':selected').text();
            
            \$('#form_cidade').prop('selectedIndex', 0);
            \$('#form_bairro').prop('selectedIndex', 0);
            
            \$.ajax({
                type: \"GET\",
                data: \"data=\" + \$uf,
                url:\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("franbella_site_onde_encontro_carrega_cidade");
        echo "\",
                success: function(msg){
                    div = \$(msg).find('select#form_cidade').parent();

                    \$('#form_cidade').html(\"\");
                    \$('#form_cidade').parent().html(div);
                    
                    \$('#form_cidade').on('change', function(){
                        //\$cidade = \$(this).find(':selected').text();
                        \$cidade = \$(this).val();
                        
                        \$.ajax({
                            type: \"GET\",
                            data: \"cidade=\" + \$cidade,
                            url:\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("franbella_site_onde_encontro_carrega_bairro");
        echo "\",
                            success: function(msg){
                                div = \$(msg).find('select#form_bairro').parent();

                                \$('#form_bairro').html(\"\");
                                \$('#form_bairro').parent().html(div);
                                //\$('select#form-cidade').html(\"\");
                           }, 
                           error: function(request, message, error){
                                    alert(\"Erro!! \"+ message);
                                    console.log(message+\" \"+error+\" \"+request);
                            }
                       });
                        
                    });
                    
               }
           });

        });
        
        \$('#form-busca-lojas').submit(function(){
            
            \$('.modal-background').fadeIn(500);
            \$('.modal-loading').fadeIn(500);
            
            \$(this).ajaxSubmit(function(data){
                
                \$('#caixa-resultados-pdv').html(data);
                
                \$('.modal-background').fadeOut(500);
                \$('.modal-loading').fadeOut(500);
                
                \$('#caixa-resultados-pdv').niceScroll({
                    cursorcolor: '#962169'
                });
                
            });
            
            return false;
        });
        
    });
            require.config({
                    baseUrl: '";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js"), "html", null, true);
        echo "',
                    paths: {
                        jquery: 'jquery'
                    }
                });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:ondeEncontro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 107,  108 => 63,  91 => 49,  71 => 32,  67 => 31,  64 => 30,  55 => 24,  44 => 12,  40 => 11,  32 => 5,  29 => 4,);
    }
}
