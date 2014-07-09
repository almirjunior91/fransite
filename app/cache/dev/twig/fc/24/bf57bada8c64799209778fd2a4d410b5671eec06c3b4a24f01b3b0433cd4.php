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
    <p class=\"subtitulo-produto\">Confira nossos links e novidades</p>
    <br />
    <div class=\"evento\">
        <div class=\"thumb-evento\">
            
        </div>
        <p class=\"titulo-evento\"><strong>HAIR BEAUTY</strong> - Rio de Janeiro - RJ - 
            13 a 15 de outubro de 2011</p>
        <div class=\"caixa-fotos-evento\">
            <div class=\"thumb-evento-foto\">

            </div>
            <div class=\"thumb-evento-foto\">

            </div>
            <div class=\"thumb-evento-foto\">

            </div>
        </div>
    </div>
    
    <div class=\"evento\">
        <div class=\"thumb-evento\">

        </div>
        <p class=\"titulo-evento\"><strong>ECONOFARMA</strong> - São Paulo - SP - 
            16 e 17 de junho de 2011</p>
        <div class=\"caixa-fotos-evento\">
            <div class=\"thumb-evento-foto\">

            </div>
            <div class=\"thumb-evento-foto\">

            </div>
            <div class=\"thumb-evento-foto\">

            </div>
        </div>
    </div>
</div>
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
        return array (  31 => 4,  28 => 3,);
    }
}
