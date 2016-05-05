<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b974e27e8a2056ba0e9c4cf7746ede85f711f3a6ab5a683d809dbe78c1a190ff extends Twig_Template
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
        $__internal_56ab09ad4ac43a3f8f2dc4116a36ae0d0bd41fe840b1b33bd99ba28024c9b95f = $this->env->getExtension("native_profiler");
        $__internal_56ab09ad4ac43a3f8f2dc4116a36ae0d0bd41fe840b1b33bd99ba28024c9b95f->enter($__internal_56ab09ad4ac43a3f8f2dc4116a36ae0d0bd41fe840b1b33bd99ba28024c9b95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_56ab09ad4ac43a3f8f2dc4116a36ae0d0bd41fe840b1b33bd99ba28024c9b95f->leave($__internal_56ab09ad4ac43a3f8f2dc4116a36ae0d0bd41fe840b1b33bd99ba28024c9b95f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
