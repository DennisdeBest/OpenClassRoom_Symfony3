<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_00725f723cfaf4d086e079c3f255f212dc0e2b162837450f864e09ff0a54551f extends Twig_Template
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
        $__internal_be04d23331777c14a41be28297662523c251ab6f297ae98312f689fd5e51e4ef = $this->env->getExtension("native_profiler");
        $__internal_be04d23331777c14a41be28297662523c251ab6f297ae98312f689fd5e51e4ef->enter($__internal_be04d23331777c14a41be28297662523c251ab6f297ae98312f689fd5e51e4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_be04d23331777c14a41be28297662523c251ab6f297ae98312f689fd5e51e4ef->leave($__internal_be04d23331777c14a41be28297662523c251ab6f297ae98312f689fd5e51e4ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
