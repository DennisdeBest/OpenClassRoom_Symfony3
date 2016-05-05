<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9fca6bf9edc5586ec312ec2bb5bc084d741b003ee0ee4be5b8ef0db02e5f6ee6 extends Twig_Template
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
        $__internal_0d4af0f5f13eef9184f6278f658cf4382979bf5ae4c3e77974906e294e2f214f = $this->env->getExtension("native_profiler");
        $__internal_0d4af0f5f13eef9184f6278f658cf4382979bf5ae4c3e77974906e294e2f214f->enter($__internal_0d4af0f5f13eef9184f6278f658cf4382979bf5ae4c3e77974906e294e2f214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0d4af0f5f13eef9184f6278f658cf4382979bf5ae4c3e77974906e294e2f214f->leave($__internal_0d4af0f5f13eef9184f6278f658cf4382979bf5ae4c3e77974906e294e2f214f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
