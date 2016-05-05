<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3d81a2dcc477cf22c192b55bbf930be086df22fc5fb85c39d85a0baec6512bd0 extends Twig_Template
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
        $__internal_3eb37c3b15a72ccee59687af7b49de8ba8eff3de56ac366e93f24aec9725c37b = $this->env->getExtension("native_profiler");
        $__internal_3eb37c3b15a72ccee59687af7b49de8ba8eff3de56ac366e93f24aec9725c37b->enter($__internal_3eb37c3b15a72ccee59687af7b49de8ba8eff3de56ac366e93f24aec9725c37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3eb37c3b15a72ccee59687af7b49de8ba8eff3de56ac366e93f24aec9725c37b->leave($__internal_3eb37c3b15a72ccee59687af7b49de8ba8eff3de56ac366e93f24aec9725c37b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
