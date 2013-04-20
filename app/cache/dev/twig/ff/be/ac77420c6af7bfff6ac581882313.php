<?php

/* MyWorkBundle::layout2.html.twig */
class __TwigTemplate_ffbeac77420c6af7bfff6ac581882313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
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
            <h1>Użytkownicy</h1>
                <div id=\"center\">
                ";
        // line 23
        $this->displayBlock('container', $context, $blocks);
        // line 43
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

    // line 23
    public function block_container($context, array $blocks = array())
    {
        // line 24
        echo "                    <table>
                        <thead>
                            <tr>
                               
                                <th>Login</th>
                                <th>Hasło</th>
                            </tr>
                         </thead>
                         <tbody>
                          ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                            <tr>
                                
                                <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "userLogin"), "html", null, true);
            echo "</th>
                                <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "userPassword"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "                         </tbody>
                    </table>
                    ";
    }

    public function getTemplateName()
    {
        return "MyWorkBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  90 => 24,  87 => 23,  99 => 22,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 26,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 36,  103 => 34,  67 => 19,  61 => 16,  47 => 13,  105 => 34,  93 => 4,  76 => 25,  72 => 23,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 16,  21 => 1,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 22,  58 => 12,  34 => 6,  26 => 4,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 17,  46 => 7,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 43,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 12,  41 => 9,  37 => 7,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 40,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 23,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 4,  73 => 24,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 5,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
