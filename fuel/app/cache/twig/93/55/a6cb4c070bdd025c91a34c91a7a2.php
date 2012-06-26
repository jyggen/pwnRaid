<?php

/* 404.twig */
class __TwigTemplate_9355a6cb4c070bdd025c91a34c91a7a2 extends Twig_Template
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
        echo "<h2>";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo " :(</h2>
<p>Sorry, but the page you were trying to view does not exist. It looks like this was the result of either a mistyped address or an out-of-date link.</p>";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
