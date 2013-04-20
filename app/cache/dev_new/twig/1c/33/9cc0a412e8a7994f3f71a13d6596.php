<?php

/* MyWorkBundle::layout.html.twig */
class __TwigTemplate_1c339cc0a412e8a7994f3f71a13d6596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <meta charset=\"UTF-8\">
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/print.css"), "html", null, true);
        echo "\" media=\"print\"/>
    <body>
        <div id=\"\">
            <div id=\"header\">
                <div class=\"menu\">
                    <ul>
                        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_panel"), "html", null, true);
        echo "\">Panel</a></li>
                        <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_autor"), "html", null, true);
        echo "\">Autor</a></li>
                        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_editor"), "html", null, true);
        echo "\">Edytor</a></li>
                        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_rewiever"), "html", null, true);
        echo "\">Rewiever</a></li>
                        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_users"), "html", null, true);
        echo "\">Użytkownicy</a></li>
                        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_work"), "html", null, true);
        echo "\">Prace</a></li>
                    </ul>
                </div>
            </div>
                <div id=\"center\">
                    ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "                </div>
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Praca MGR";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "MyWorkBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 13,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  21 => 1,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 22,  58 => 12,  34 => 6,  26 => 4,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 17,  46 => 7,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 4,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 12,  41 => 9,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 23,  85 => 24,  81 => 40,  73 => 24,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
