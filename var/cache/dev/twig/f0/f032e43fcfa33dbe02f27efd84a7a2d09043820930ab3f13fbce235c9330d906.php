<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_1349845059d076f0e355f1d4873547df4fd1feddcef4df597a4c5df5f8c753bf extends Twig_Template
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
        $__internal_9af3f9bc9d7124c17e24f054e99921de468526bfd70f613cdad7d63012069784 = $this->env->getExtension("native_profiler");
        $__internal_9af3f9bc9d7124c17e24f054e99921de468526bfd70f613cdad7d63012069784->enter($__internal_9af3f9bc9d7124c17e24f054e99921de468526bfd70f613cdad7d63012069784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9af3f9bc9d7124c17e24f054e99921de468526bfd70f613cdad7d63012069784->leave($__internal_9af3f9bc9d7124c17e24f054e99921de468526bfd70f613cdad7d63012069784_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
