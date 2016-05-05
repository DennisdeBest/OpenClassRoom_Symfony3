<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8780ca15e72302ba89070f6a9949e80dc31fa04e907a578db63631d6a4f2ef96 extends Twig_Template
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
        $__internal_0cb2277a4c639e2be721a6dd9783e7eeeb91ab3d178ed47be54b487a1c26e7cc = $this->env->getExtension("native_profiler");
        $__internal_0cb2277a4c639e2be721a6dd9783e7eeeb91ab3d178ed47be54b487a1c26e7cc->enter($__internal_0cb2277a4c639e2be721a6dd9783e7eeeb91ab3d178ed47be54b487a1c26e7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0cb2277a4c639e2be721a6dd9783e7eeeb91ab3d178ed47be54b487a1c26e7cc->leave($__internal_0cb2277a4c639e2be721a6dd9783e7eeeb91ab3d178ed47be54b487a1c26e7cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
