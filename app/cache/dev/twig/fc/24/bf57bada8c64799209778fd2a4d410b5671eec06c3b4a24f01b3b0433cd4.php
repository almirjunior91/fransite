<?php

/* FranbellaSiteBundle:Page:agenda.html.twig */
class __TwigTemplate_fc24bf57bada8c64799209778fd2a4d410b5671eec06c3b4a24f01b3b0433cd4 extends Twig_Template
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
        echo "<div class=\"caixa-eventos\">
    <h3 class=\"titulo-pagina\">Agenda/Eventos</h3>
    <p class=\"subtitulo-produto\">Confira nossa agenda</p>
    <br />
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) ? $context["eventos"] : $this->getContext($context, "eventos")));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 9
            echo "    <div class=\"evento\">
        <div class=\"thumb-evento\">
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/evento/" . $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "capa"))), "html", null, true);
            echo "\" />
        </div>
        <p class=\"titulo-evento\"><strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "nome")), "html", null, true);
            echo "</strong> - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "cidade"), "html", null, true);
            echo " - 
            ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "dataInicial"), "d/m/Y"), "html", null, true);
            echo " a ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "dataFinal"), "d/m/Y"), "html", null, true);
            echo "</p>
        <div class=\"caixa-fotos-evento\">
            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "fotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
                // line 17
                echo "            <div class=\"thumb-evento-foto\">
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/evento/fotos/" . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "imagem"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/evento/fotos/" . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "imagem"))), "html", null, true);
                echo "\" /></a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            
           ";
            // line 28
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    
    
    ";
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  92 => 31,  84 => 28,  81 => 21,  70 => 18,  67 => 17,  63 => 16,  56 => 14,  50 => 13,  45 => 11,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
