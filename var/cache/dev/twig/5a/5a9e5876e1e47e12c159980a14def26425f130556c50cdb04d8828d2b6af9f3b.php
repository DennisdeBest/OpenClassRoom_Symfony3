<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_927f04e5b8f362dd1b0579ec9147b690b2a7d6007426a29e4ec10e83580fe8fd extends Twig_Template
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
        $__internal_867d0e1bc8656f52243664388dab7bd9e3615fa6fd15051ab46a74ed2c0d49ca = $this->env->getExtension("native_profiler");
        $__internal_867d0e1bc8656f52243664388dab7bd9e3615fa6fd15051ab46a74ed2c0d49ca->enter($__internal_867d0e1bc8656f52243664388dab7bd9e3615fa6fd15051ab46a74ed2c0d49ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_867d0e1bc8656f52243664388dab7bd9e3615fa6fd15051ab46a74ed2c0d49ca->leave($__internal_867d0e1bc8656f52243664388dab7bd9e3615fa6fd15051ab46a74ed2c0d49ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
