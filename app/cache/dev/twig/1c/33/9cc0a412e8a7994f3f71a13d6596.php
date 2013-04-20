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
        return array (  90 => 23,  87 => 22,  81 => 4,  73 => 24,  71 => 22,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  34 => 6,  30 => 5,  26 => 4,  21 => 1,  43 => 12,  37 => 8,  31 => 4,  28 => 3,);
    }
}
