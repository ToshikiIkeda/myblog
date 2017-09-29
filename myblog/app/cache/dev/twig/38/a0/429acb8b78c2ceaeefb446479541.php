<?php

/* BundleHelloWorldBundle:Default:index.html.twig */
class __TwigTemplate_38a0429acb8b78c2ceaeefb446479541 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</br>
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "BundleHelloWorldBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
