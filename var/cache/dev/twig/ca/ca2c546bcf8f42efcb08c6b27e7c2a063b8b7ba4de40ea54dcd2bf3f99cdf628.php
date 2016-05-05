<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_cc4dc5f3b9fdf14b414dcf1ece9c4f568552b5e418df0c56eced4de3a4a75360 extends Twig_Template
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
        $__internal_738c009721f1adb9f1e4828f1e1c684a3c079f4651a73d3b07341f76b8310c51 = $this->env->getExtension("native_profiler");
        $__internal_738c009721f1adb9f1e4828f1e1c684a3c079f4651a73d3b07341f76b8310c51->enter($__internal_738c009721f1adb9f1e4828f1e1c684a3c079f4651a73d3b07341f76b8310c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_738c009721f1adb9f1e4828f1e1c684a3c079f4651a73d3b07341f76b8310c51->leave($__internal_738c009721f1adb9f1e4828f1e1c684a3c079f4651a73d3b07341f76b8310c51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
