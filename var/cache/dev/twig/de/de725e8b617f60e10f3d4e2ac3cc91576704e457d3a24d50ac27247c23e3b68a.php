<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_962bd180d6a8af041e16037be9e141e520437a5523cd153d57c54ec421bc6db9 extends Twig_Template
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
        $__internal_d783d0095e6e6eaae26d1fb81bb0354c77bf5d649b834dbc03ddc5c4cb37a69e = $this->env->getExtension("native_profiler");
        $__internal_d783d0095e6e6eaae26d1fb81bb0354c77bf5d649b834dbc03ddc5c4cb37a69e->enter($__internal_d783d0095e6e6eaae26d1fb81bb0354c77bf5d649b834dbc03ddc5c4cb37a69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d783d0095e6e6eaae26d1fb81bb0354c77bf5d649b834dbc03ddc5c4cb37a69e->leave($__internal_d783d0095e6e6eaae26d1fb81bb0354c77bf5d649b834dbc03ddc5c4cb37a69e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
