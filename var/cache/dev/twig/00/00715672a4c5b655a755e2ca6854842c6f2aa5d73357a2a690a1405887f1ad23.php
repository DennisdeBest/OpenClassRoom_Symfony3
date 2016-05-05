<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_93adfd1de7a026e5dc629b5cb9434fd756af7d2c672b21b5f1379b82d0ae1dbb extends Twig_Template
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
        $__internal_91bb3972cb679e0556c7387fd2942395f7cb2c71a024cf72c5ff1fa08c70ed42 = $this->env->getExtension("native_profiler");
        $__internal_91bb3972cb679e0556c7387fd2942395f7cb2c71a024cf72c5ff1fa08c70ed42->enter($__internal_91bb3972cb679e0556c7387fd2942395f7cb2c71a024cf72c5ff1fa08c70ed42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_91bb3972cb679e0556c7387fd2942395f7cb2c71a024cf72c5ff1fa08c70ed42->leave($__internal_91bb3972cb679e0556c7387fd2942395f7cb2c71a024cf72c5ff1fa08c70ed42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
