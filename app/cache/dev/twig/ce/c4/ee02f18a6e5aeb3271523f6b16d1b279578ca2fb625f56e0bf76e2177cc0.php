<?php

/* FranbellaSiteBundle:Page:distribuidor.html.twig */
class __TwigTemplate_cec4ee02f18a6e5aeb3271523f6b16d1b279578ca2fb625f56e0bf76e2177cc0 extends Twig_Template
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

    // line 3
    public function block_conteudo($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"caixa-eventos\">
    <h3 class=\"titulo-pagina\">Seja um Distribuidor</h3>
    <p class=\"subtitulo-produto\">Ol&aacute;! Precisamos saber 
        algumas informa&ccedil;&otilde;es</p>
    <br />
    <p>Sou um:</p>
    <div id=\"caixa-distribuidor-tipo\">
        <input type=\"radio\" name=\"tipo-distribuidor\" class=\"radio-distribuidor\" checked=\"checked\"
               id=\"tipo-distribuidor-representante\" value=\"representante\" /> Representante Comercial
        <br />
        <input type=\"radio\" name=\"tipo-distribuidor\" class=\"radio-distribuidor\"
               id=\"tipo-distribuidor-distribuidor\" value=\"distribuidor\" /> 
        ";
        // line 16
        echo "Distribuidor";
        // line 17
        echo "        <br />
        <input type=\"radio\" name=\"tipo-distribuidor\" class=\"radio-distribuidor\"
               id=\"tipo-distribuidor-varejista\" value=\"varejista\" /> 
        ";
        // line 20
        echo "Varejista";
        // line 21
        echo "    </div>
    <div id=\"caixa-distribuidor-form\">
        <p class=\"subtitulo-produto centralizar\"><strong>Por favor, preencha os dados abaixo:</strong></p>
        <br />
        <form name=\"form-envia-distribuidor\" 
                id=\"form-envia-distribuidor\" 
                action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("franbella_site_cadastra_contato_distribuidor");
        echo "\" method=\"POST\">
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
              <label for=\"forn\" class=\"input-auto input-inicial\">*Fornecedor: </label>
              <input class=\"input-auto\" type=\"text\" name=\"forn\" id=\"forn\" required=\"required\" />
              <label for=\"contato\" class=\"input-auto\">*Contato: </label>
              <input class=\"input-auto\" type=\"text\" name=\"contato\" id=\"contato\" required=\"required\" />
              <label for=\"tel\" class=\"input-auto\">*Tel: </label>
              <input class=\"input-auto\" type=\"text\" name=\"tel\" id=\"tel\" required=\"required\" />
              <br />
              <label for=\"forn2\" class=\"input-auto input-inicial\">*Fornecedor: </label>
              <input class=\"input-auto\" type=\"text\" name=\"forn2\" id=\"forn2\" required=\"required\" />
              <label for=\"contato2\" class=\"input-auto\">*Contato: </label>
              <input class=\"input-auto\" type=\"text\" name=\"contato2\" id=\"contato2\" required=\"required\" />
              <label for=\"tel2\" class=\"input-auto\">*Tel: </label>
              <input class=\"input-auto\" type=\"text\" name=\"tel2\" id=\"tel2\" required=\"required\" />
              <br />
              <label for=\"forn3\" class=\"input-auto input-inicial\">*Fornecedor: </label>
              <input class=\"input-auto\" type=\"text\" name=\"forn3\" id=\"forn3\" required=\"required\" />
              <label for=\"contato3\" class=\"input-auto\">*Contato: </label>
              <input class=\"input-auto\" type=\"text\" name=\"contato3\" id=\"contato3\" required=\"required\" />
              <label for=\"tel3\" class=\"input-auto\">*Tel: </label>
              <input class=\"input-auto\" type=\"text\" name=\"tel3\" id=\"tel3\" required=\"required\" />
              <input class=\"input-auto\" type=\"hidden\" name=\"tipo_distribuidor\" id=\"tipo_distribuidor\" 
                     required=\"required\" />
              <br />
              <input type=\"submit\" value=\"Enviar\" style=\"margin-left: 10%;\" ";
        // line 52
        echo " />
          </form>
          <p style=\"margin-left: 10%;\">* Campos Obrigat&oacute;rios</p>
    </div>
    <span style=\"clear: both\"></span>
    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "retorno-contato"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "        <div class=\"resposta-contato-distribuidor\">
            ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    <br />
    
    <h3 class=\"subtitulo-produto\">Nossos Parceiros Atuais</h3>
    <div id=\"caixa-distribuidores-atuais\">
        ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["distribuidores"]) ? $context["distribuidores"] : $this->getContext($context, "distribuidores")));
        foreach ($context['_seq'] as $context["_key"] => $context["distribuidor"]) {
            // line 67
            echo "        <div class=\"logo-result\">
            <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(("uploads/distribuidor/logo/" . $this->getAttribute((isset($context["distribuidor"]) ? $context["distribuidor"] : $this->getContext($context, "distribuidor")), "logo")), "my_thumb_dist"), "html", null, true);
            echo "\" />
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distribuidor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </div>
    
</div>
";
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        // line 76
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/messages_pt_BR.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        
        \$('#form-envia-distribuidor').validate({
            rules:{
                \"franbella_bundle_sitebundle_distribuidor_[razao_social]\":{
                    required: true
                }
            },
            messages:{
                \"franbella_bundle_sitebundle_distribuidor_[razao_social]\":{
                    required: \"\"
                }
            },
            errorPlacement: function(error, element) {}
            
            ";
        // line 97
        echo "        });
        
        \$('.resposta-contato-distribuidor').fadeOut(5000);
        
        \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').removeAttr('required');
        
        \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').hide();
        \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').prev('label').hide();

        \$('#franbella_bundle_sitebundle_distribuidor_cpf_cnpj').prev('label').text('*CPF: ');
        
        \$('.radio-distribuidor').click(function(){
            //alert(\"AAA\");
            console.log(\$('.radio-distribuidor:checked').val());
            
            \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').prop('required',true);
            
            \$('input, label').show();
            \$('#franbella_bundle_sitebundle_distribuidor_cpf_cnpj').prev('label').text('CNPJ:');
            \$('#franbella_bundle_sitebundle_distribuidor_cpf_cnpj').mask('00.000.000/0000-00');
            
            \$('#tipo_distribuidor').val(\$('.radio-distribuidor:checked').val());
            
            if(\$('.radio-distribuidor:checked').val() === 'representante'){
                
                \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').removeAttr('required');
                
                \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').hide();
                \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').prev('label').hide();
                
                \$('#franbella_bundle_sitebundle_distribuidor_cpf_cnpj').prev('label').text('CPF:');
                
                \$('#franbella_bundle_sitebundle_distribuidor_cpf_cnpj').mask('000.000.000-00');
                
            }
            
        });
        
        
        \$('#franbella_bundle_sitebundle_distribuidor_cpf_cnpj').mask('00.000.000/0000-00');
        \$('#franbella_bundle_sitebundle_distribuidor_inscricao_estadual').mask('0099999999999999');
        \$('#franbella_bundle_sitebundle_distribuidor_telefone_fixo').mask('(00) 0000-00009');
        \$('#franbella_bundle_sitebundle_distribuidor_celular').mask('(00) 0000-00009');
        \$('#franbella_bundle_sitebundle_distribuidor_ramal').mask('009999999999');
        \$('#franbella_bundle_sitebundle_distribuidor_qtd_representantes').mask('09999999999');
        \$('#tel').mask('(00) 0000-00009');
        \$('#tel2').mask('(00) 0000-00009');
        \$('#tel3').mask('(00) 0000-00009');
        \$('#franbella_bundle_sitebundle_distribuidor_faturamento_bruto').mask(\"#.##0,00\", {reverse: true, maxlength: false});
        
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:distribuidor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 97,  157 => 78,  153 => 77,  149 => 76,  146 => 75,  139 => 71,  130 => 68,  127 => 67,  123 => 66,  117 => 62,  108 => 59,  105 => 58,  101 => 57,  94 => 52,  67 => 28,  63 => 27,  55 => 21,  53 => 20,  48 => 17,  46 => 16,  32 => 4,  29 => 3,);
    }
}
