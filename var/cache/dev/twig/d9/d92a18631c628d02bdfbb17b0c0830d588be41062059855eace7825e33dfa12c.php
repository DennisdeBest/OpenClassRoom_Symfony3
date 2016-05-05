<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8c520e6f502088e1a33b85153810fc0a2f83ad456f7b75fb01d9140741b7563c extends Twig_Template
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
        $__internal_ede7c21453d066038e85138fcd77d0b7916679454c3aee3f4293b8aded8b9e45 = $this->env->getExtension("native_profiler");
        $__internal_ede7c21453d066038e85138fcd77d0b7916679454c3aee3f4293b8aded8b9e45->enter($__internal_ede7c21453d066038e85138fcd77d0b7916679454c3aee3f4293b8aded8b9e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ede7c21453d066038e85138fcd77d0b7916679454c3aee3f4293b8aded8b9e45->leave($__internal_ede7c21453d066038e85138fcd77d0b7916679454c3aee3f4293b8aded8b9e45_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
