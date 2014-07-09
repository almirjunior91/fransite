<?php

/* FranbellaSiteBundle:Page:tratamento.html.twig */
class __TwigTemplate_d8f4fa0b3391c4236a25abbab1e1e8485afbbe7a3ec38d53650a4ef455cbfb35 extends Twig_Template
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
        echo "<div class=\"caixa-descricao\">
    <h3 class=\"titulo-pagina\">Linha Tratamento</h3>
    <p class=\"subtitulo-produto\">Nova linha de CREMES HIDRATANTES</p>
    <p>Hidrata&ccedil;&atilde;o intensa para suas m&atilde;os e p&eacute;s.</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">M&atilde;os</h4>
        <p>Cuidado intensivo, r&aacute;pida absor&ccedil;&atilde;o. 
            Hidrata profundamente, desodoriza os poros e suaviza as 
            m&atilde;os ressecadas, melhora ativamente a elasticidade 
            da pele.</p>
    </div>
    <p class=\"produto-texto-menor\">- Vitamina E - Col&aacute;geno - 
        Enriquecido com ureia.</p>
    <p class=\"produto-texto-menor\">- D-Pantenol (Pr&oacute;-vitamina B5) 
        - 75g</p>
    <p class=\"texto-anvisa\">Res. ANVISA n&ordm; 343/05 - 75g - 
        MS 2.05023.9</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">P&eacute;s e Calcanhares</h4>
        <p>Cuidado intensivo, r&aacute;pida absor&ccedil;&atilde;o. 
            Hidrata profundamente, desodoriza os poros e suaviza os 
            calcanhares ressecadas com a&ccedil;&atilde;o restauradora e 
            delicada.</p>
    </div>
    <p class=\"produto-texto-menor\">- Vitamina E e F - Camomila - 
        Enriquecido com ureia.</p>
    <p class=\"produto-texto-menor\">- Manteiga de Karit&eacute; - 
        &Oacute;leo de Melaleuca - D-Pantenol (Pr&iacute;-vitamina B5) 
        - 120g</p>
    <p class=\"texto-anvisa\">Res. ANVISA n&ordm; 343/05 - 120g - 
        MS 2.05023.9</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Complexo Fortalecedor 2 em 1 | 
            Unhas e Cut&iacute;culas</h4>
        <p>Fortalecedor para unhas fracas, ressecadas e quebradi&ccedil;as, 
            atuando tamb&eacute;m no processo de amolecimento de 
            cut&iacute;culas.</p>
    </div>
    <p class=\"produto-texto-menor\">- Vitamina E e F - Camomila</p>
    <p class=\"produto-texto-menor\">- Enriquecido com &Oacute;leo de Cravo - 
        &Oacute;leo de Melaleuca - 10ml</p>
    <p class=\"texto-anvisa\">Res. ANVISA n&ordm; 343/05 - 10ml - 
        MS 2.05023.9</p>
    
</div>
<div class=\"caixa-imagem\">
    <img id=\"creme\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/tratamento1.png"), "html", null, true);
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:tratamento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 53,  31 => 4,  28 => 3,);
    }
}
