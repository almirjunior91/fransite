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
        return array (  167 => 71,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  216 => 79,  207 => 75,  200 => 72,  194 => 70,  185 => 75,  181 => 65,  20 => 1,  126 => 11,  134 => 54,  114 => 3,  110 => 39,  76 => 31,  160 => 53,  137 => 12,  104 => 42,  271 => 124,  263 => 119,  260 => 118,  248 => 94,  245 => 118,  242 => 117,  237 => 129,  213 => 78,  197 => 71,  195 => 90,  190 => 88,  186 => 86,  180 => 84,  165 => 60,  211 => 153,  202 => 150,  170 => 81,  152 => 124,  148 => 44,  34 => 3,  129 => 3,  155 => 107,  58 => 9,  65 => 24,  113 => 48,  97 => 35,  90 => 27,  77 => 12,  153 => 69,  127 => 114,  84 => 24,  81 => 23,  70 => 19,  53 => 12,  191 => 77,  188 => 76,  178 => 64,  174 => 74,  172 => 62,  150 => 55,  146 => 42,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 123,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 97,  169 => 60,  140 => 43,  132 => 12,  128 => 11,  107 => 39,  61 => 10,  273 => 96,  269 => 94,  254 => 126,  243 => 88,  240 => 86,  238 => 85,  235 => 117,  230 => 82,  227 => 81,  224 => 71,  221 => 106,  219 => 76,  217 => 155,  208 => 68,  204 => 78,  179 => 69,  159 => 61,  143 => 44,  135 => 53,  119 => 40,  102 => 41,  71 => 26,  67 => 24,  63 => 23,  59 => 14,  38 => 6,  94 => 17,  89 => 32,  85 => 16,  75 => 11,  68 => 25,  56 => 21,  87 => 34,  21 => 79,  26 => 2,  93 => 34,  88 => 17,  78 => 25,  46 => 13,  27 => 3,  44 => 85,  31 => 2,  28 => 83,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 68,  163 => 62,  158 => 73,  156 => 58,  151 => 63,  142 => 43,  138 => 56,  136 => 52,  121 => 50,  117 => 4,  105 => 34,  91 => 34,  62 => 6,  49 => 14,  24 => 81,  25 => 3,  19 => 1,  79 => 50,  72 => 53,  69 => 26,  47 => 3,  40 => 11,  37 => 6,  22 => 2,  246 => 93,  157 => 47,  145 => 44,  139 => 71,  131 => 11,  123 => 42,  120 => 9,  115 => 4,  111 => 47,  108 => 39,  101 => 30,  98 => 35,  96 => 37,  83 => 33,  74 => 28,  66 => 24,  55 => 16,  52 => 9,  50 => 4,  43 => 12,  41 => 14,  35 => 6,  32 => 5,  29 => 3,  209 => 152,  203 => 73,  199 => 149,  193 => 73,  189 => 71,  187 => 84,  182 => 137,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 64,  149 => 45,  147 => 54,  144 => 122,  141 => 51,  133 => 4,  130 => 46,  125 => 51,  122 => 9,  116 => 39,  112 => 3,  109 => 31,  106 => 31,  103 => 37,  99 => 31,  95 => 35,  92 => 22,  86 => 33,  82 => 13,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 10,  42 => 7,  39 => 8,  36 => 6,  33 => 4,  30 => 3,);
    }
}
