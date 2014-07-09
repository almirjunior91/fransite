<?php

/* FranbellaSiteBundle:Page:removedores.html.twig */
class __TwigTemplate_e2afbac46a3fa14f13267097f69abce0f1a5b3c0153844bdcd6d0a30a250dc9e extends Twig_Template
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
    <h3 class=\"titulo-pagina\">Linha Removedores</h3>
    <p class=\"subtitulo-produto\">Removedores de Esmalte Franbella</p>
    <p>Um produto para quem prioriza qualidade.</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Removedor de Esmalte - 100ml</h4>
        <p>A base de acetona, a&ccedil;&atilde;o hidratante, 
            perfeita remo&ccedil;&atilde;o, real&ccedil;a o brilho 
            natural das unhas, design inovador, indicador de 
            quantidade e fragr&acirc;ncia suave.</p>
    </div>
    <p class=\"texto-anvisa-italico\">Res. ANVISA n&ordm; 343/05 100ml - 
    MS 2.05023.9 | Venda proibida para menores de 18 anos conforme 
    portaria n&ordm; 1274 de 26 de agosto de 2003, do Minist&eacute;rio 
    da Justi&ccedil;a</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Removedor de Esmalte - 
            Hipoalerg&ecirc;nico - 100ml</h4>
        <p>N&atilde;o cont&eacute;m acetona, com vitamina E, &oacute;leo 
            de semente de uva, D-Pantenol e Pr&oacute;-vitamina B5. 
            Testado Dermatologicamente. Previne a forma&ccedil;&atilde;o 
            de radicais livres, deixando as unhas mais hidratadas e 
            saud&aacute;veis.</p>
    </div>
    <p class=\"texto-anvisa-italico\">Res. ANVISA n&ordm; 343/05 100ml - 
    MS 2.05023.9 | Venda proibida para menores de 18 anos conforme 
    portaria n&ordm; 1274 de 26 de agosto de 2003, do Minist&eacute;rio 
    da Justi&ccedil;a</p>
    
    <div class=\"caixa-detalhe-produto\">
        <h4 class=\"titulo-produto\">Removedor de Esmalte - 500ml</h4>
        <p>A base de acetona, indicado para profissionais que buscam um 
            produto com alto rendimento, a&ccedil;&atilde;o hidratante, 
            perfeita remo&ccedil;&atilde;o, real&ccedil;a o brilho natural das 
            unhas, design inovador, indicador de quantidade e 
            fragr&acirc;ncia suave.</p>
    </div>
    <p class=\"texto-anvisa-italico\">Res. ANVISA n&ordm; 343/05 100ml - 
    MS 2.05023.9 | Venda proibida para menores de 18 anos conforme 
    portaria n&ordm; 1274 de 26 de agosto de 2003, do Minist&eacute;rio 
    da Justi&ccedil;a</p>
    
</div>
<div class=\"caixa-imagem\">
    <img id=\"hipo-detalhe\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/hipo-todos.png"), "html", null, true);
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "FranbellaSiteBundle:Page:removedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 50,  31 => 4,  28 => 3,);
    }
}
