<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ed55cb9acbb7e3199b2bc4822eb1eed03497fa7ebcf5bfe82d71bc5b6dae6488 extends Twig_Template
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
        $__internal_574d09e36d47bc37536cd1af8a76e1fade445177611a5dd01ffbdb96859244c5 = $this->env->getExtension("native_profiler");
        $__internal_574d09e36d47bc37536cd1af8a76e1fade445177611a5dd01ffbdb96859244c5->enter($__internal_574d09e36d47bc37536cd1af8a76e1fade445177611a5dd01ffbdb96859244c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_574d09e36d47bc37536cd1af8a76e1fade445177611a5dd01ffbdb96859244c5->leave($__internal_574d09e36d47bc37536cd1af8a76e1fade445177611a5dd01ffbdb96859244c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
