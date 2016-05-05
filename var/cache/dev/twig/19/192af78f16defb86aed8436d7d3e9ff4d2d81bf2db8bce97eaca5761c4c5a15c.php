<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3868ff77baf7b13f6a1496b0377c552e0bede2e0fc5f83ef806dd7d5f83cdfc4 extends Twig_Template
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
        $__internal_d168081ea2db969c253bfb74becfe357f223fceda945bbd9f7e330a07c6c0cad = $this->env->getExtension("native_profiler");
        $__internal_d168081ea2db969c253bfb74becfe357f223fceda945bbd9f7e330a07c6c0cad->enter($__internal_d168081ea2db969c253bfb74becfe357f223fceda945bbd9f7e330a07c6c0cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d168081ea2db969c253bfb74becfe357f223fceda945bbd9f7e330a07c6c0cad->leave($__internal_d168081ea2db969c253bfb74becfe357f223fceda945bbd9f7e330a07c6c0cad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
