<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5dffb5aaa5dde9f8b397b68c3c2b1b7f2f40e1fe83d87deadae129b82fbd1740 extends Twig_Template
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
        $__internal_5a5fb9b894fc2755deb0c789481a4dae6daa69e44e3808ec40a2c6a7a1416692 = $this->env->getExtension("native_profiler");
        $__internal_5a5fb9b894fc2755deb0c789481a4dae6daa69e44e3808ec40a2c6a7a1416692->enter($__internal_5a5fb9b894fc2755deb0c789481a4dae6daa69e44e3808ec40a2c6a7a1416692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5a5fb9b894fc2755deb0c789481a4dae6daa69e44e3808ec40a2c6a7a1416692->leave($__internal_5a5fb9b894fc2755deb0c789481a4dae6daa69e44e3808ec40a2c6a7a1416692_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
