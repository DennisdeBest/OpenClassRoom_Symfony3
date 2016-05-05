<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f4c255e4b132abd7732fd239bc5737fc750a5047478a6ca2e2e8aadff5e0c726 extends Twig_Template
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
        $__internal_018724e574265b2f54b2b3776868af45af6293a56b41f96dbbc439f3050a134d = $this->env->getExtension("native_profiler");
        $__internal_018724e574265b2f54b2b3776868af45af6293a56b41f96dbbc439f3050a134d->enter($__internal_018724e574265b2f54b2b3776868af45af6293a56b41f96dbbc439f3050a134d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_018724e574265b2f54b2b3776868af45af6293a56b41f96dbbc439f3050a134d->leave($__internal_018724e574265b2f54b2b3776868af45af6293a56b41f96dbbc439f3050a134d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
