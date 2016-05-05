<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ac6965d2e754baacb903f3578ca3da2e58cb36e37cf60c7f9e543fa3255ec899 extends Twig_Template
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
        $__internal_65d667f1ddc35748953e7a443a15f1c5807cabeb23cd3f122ed32facff3e0ebd = $this->env->getExtension("native_profiler");
        $__internal_65d667f1ddc35748953e7a443a15f1c5807cabeb23cd3f122ed32facff3e0ebd->enter($__internal_65d667f1ddc35748953e7a443a15f1c5807cabeb23cd3f122ed32facff3e0ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_65d667f1ddc35748953e7a443a15f1c5807cabeb23cd3f122ed32facff3e0ebd->leave($__internal_65d667f1ddc35748953e7a443a15f1c5807cabeb23cd3f122ed32facff3e0ebd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
