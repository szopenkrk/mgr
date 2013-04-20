<?php

/* MyWorkBundle::layout.html.twig */
class __TwigTemplate_1c339cc0a412e8a7994f3f71a13d6596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/print.css"), "html", null, true);
        echo "\" media=\"print\"/>
    <body>
        <div id=\"\">
            <div id=\"header\">
                <div class=\"menu\"></div>
            </div>
                <div id=\"center\">
                    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "                </div>
        </div>
    </body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
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
        return array (  51 => 13,  48 => 12,  41 => 14,  39 => 12,  29 => 5,  25 => 4,  20 => 1,  31 => 3,  28 => 2,);
    }
}
