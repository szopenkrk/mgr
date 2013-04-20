<?php

/* MyWorkBundle:Default:users.html.twig */
class __TwigTemplate_c8c3e3a414214a5fa126cd3da5345988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyWorkBundle::layout2.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyWorkBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyWorkBundle:Default:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 26,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 13,  105 => 24,  93 => 4,  76 => 25,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  21 => 1,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 22,  58 => 12,  34 => 6,  26 => 4,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 17,  46 => 7,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 12,  41 => 9,  37 => 7,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 23,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 24,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 5,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
