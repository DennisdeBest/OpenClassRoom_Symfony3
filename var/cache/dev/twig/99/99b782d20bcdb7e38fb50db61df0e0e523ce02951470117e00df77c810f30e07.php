<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_979ebffd823fda7d3fda143e659ddbfc5dddb83619d247be6af9af821ebba1a9 extends Twig_Template
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
        $__internal_ab86c277ea991c7022d60932be1d6a320a979ae95c012ab3a68b8f7ba6fcdd08 = $this->env->getExtension("native_profiler");
        $__internal_ab86c277ea991c7022d60932be1d6a320a979ae95c012ab3a68b8f7ba6fcdd08->enter($__internal_ab86c277ea991c7022d60932be1d6a320a979ae95c012ab3a68b8f7ba6fcdd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ab86c277ea991c7022d60932be1d6a320a979ae95c012ab3a68b8f7ba6fcdd08->leave($__internal_ab86c277ea991c7022d60932be1d6a320a979ae95c012ab3a68b8f7ba6fcdd08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
