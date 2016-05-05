<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b7cca12e579024994da5d0d16d1972f6200a07d7d913acfb0aedf170e0e11449 extends Twig_Template
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
        $__internal_20db7c066ea742914f80ba74879982fe27277af8af8c1dc2ca49a733c78a7491 = $this->env->getExtension("native_profiler");
        $__internal_20db7c066ea742914f80ba74879982fe27277af8af8c1dc2ca49a733c78a7491->enter($__internal_20db7c066ea742914f80ba74879982fe27277af8af8c1dc2ca49a733c78a7491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_20db7c066ea742914f80ba74879982fe27277af8af8c1dc2ca49a733c78a7491->leave($__internal_20db7c066ea742914f80ba74879982fe27277af8af8c1dc2ca49a733c78a7491_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
