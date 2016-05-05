<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_998752001a509ce5e981f190097fc1b8deb683ea18e056113e7c6b47bd5ffb1b extends Twig_Template
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
        $__internal_d1de724d112a3e97666775d2095e410abb398b2d4ed334a9a5bd91290d80fb9f = $this->env->getExtension("native_profiler");
        $__internal_d1de724d112a3e97666775d2095e410abb398b2d4ed334a9a5bd91290d80fb9f->enter($__internal_d1de724d112a3e97666775d2095e410abb398b2d4ed334a9a5bd91290d80fb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d1de724d112a3e97666775d2095e410abb398b2d4ed334a9a5bd91290d80fb9f->leave($__internal_d1de724d112a3e97666775d2095e410abb398b2d4ed334a9a5bd91290d80fb9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
