<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_405bb58822ae8b68df644b1e6e903a7faf590d505d9e35a052c3aa2f84a4156b extends Twig_Template
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
        $__internal_ed903fc6ce37e05522a7577527ab28e81e45068402810df31bb309adc8d24ae4 = $this->env->getExtension("native_profiler");
        $__internal_ed903fc6ce37e05522a7577527ab28e81e45068402810df31bb309adc8d24ae4->enter($__internal_ed903fc6ce37e05522a7577527ab28e81e45068402810df31bb309adc8d24ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ed903fc6ce37e05522a7577527ab28e81e45068402810df31bb309adc8d24ae4->leave($__internal_ed903fc6ce37e05522a7577527ab28e81e45068402810df31bb309adc8d24ae4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
