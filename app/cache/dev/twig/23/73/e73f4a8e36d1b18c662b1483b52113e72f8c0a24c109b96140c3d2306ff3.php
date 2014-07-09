<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_2373e73f4a8e36d1b18c662b1483b52113e72f8c0a24c109b96140c3d2306ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  76 => 31,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 77,  181 => 65,  178 => 64,  172 => 62,  150 => 55,  84 => 24,  81 => 23,  174 => 74,  134 => 54,  114 => 30,  206 => 152,  185 => 75,  167 => 71,  153 => 69,  124 => 38,  118 => 49,  104 => 42,  58 => 9,  65 => 7,  113 => 48,  97 => 42,  90 => 27,  77 => 31,  53 => 12,  165 => 60,  155 => 55,  127 => 43,  110 => 36,  100 => 28,  70 => 19,  34 => 149,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 155,  177 => 57,  169 => 60,  140 => 49,  132 => 51,  128 => 115,  107 => 35,  61 => 10,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 156,  208 => 153,  204 => 78,  179 => 137,  159 => 56,  143 => 47,  135 => 119,  119 => 40,  102 => 41,  71 => 94,  67 => 24,  63 => 90,  59 => 14,  38 => 6,  94 => 28,  89 => 99,  85 => 38,  75 => 17,  68 => 93,  56 => 5,  87 => 34,  21 => 79,  26 => 1,  93 => 41,  88 => 13,  78 => 34,  46 => 13,  27 => 3,  44 => 85,  31 => 4,  28 => 83,  201 => 151,  196 => 149,  183 => 82,  171 => 73,  166 => 61,  163 => 62,  158 => 67,  156 => 58,  151 => 67,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 27,  62 => 6,  49 => 14,  24 => 81,  25 => 3,  19 => 1,  79 => 96,  72 => 16,  69 => 25,  47 => 3,  40 => 12,  37 => 5,  22 => 2,  246 => 93,  157 => 56,  145 => 123,  139 => 46,  131 => 44,  123 => 42,  120 => 40,  115 => 39,  111 => 47,  108 => 36,  101 => 40,  98 => 106,  96 => 37,  83 => 33,  74 => 9,  66 => 15,  55 => 16,  52 => 87,  50 => 4,  43 => 12,  41 => 14,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 150,  193 => 73,  189 => 71,  187 => 84,  182 => 61,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 55,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 110,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 37,  92 => 14,  86 => 28,  82 => 53,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 88,  54 => 16,  51 => 14,  48 => 37,  45 => 10,  42 => 9,  39 => 8,  36 => 6,  33 => 4,  30 => 3,);
    }
}
