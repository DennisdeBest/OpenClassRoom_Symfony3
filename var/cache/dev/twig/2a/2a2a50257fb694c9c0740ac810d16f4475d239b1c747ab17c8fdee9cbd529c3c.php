<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_06f7808a58eebbcf05bf7ebd8b2198a4f15d976613149d3e4adeb6bccad8099d extends Twig_Template
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
        $__internal_f16198e9a317b5dabd3cedb5b32205a06dd758a7f1c3e5d0ec3e148c52381051 = $this->env->getExtension("native_profiler");
        $__internal_f16198e9a317b5dabd3cedb5b32205a06dd758a7f1c3e5d0ec3e148c52381051->enter($__internal_f16198e9a317b5dabd3cedb5b32205a06dd758a7f1c3e5d0ec3e148c52381051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f16198e9a317b5dabd3cedb5b32205a06dd758a7f1c3e5d0ec3e148c52381051->leave($__internal_f16198e9a317b5dabd3cedb5b32205a06dd758a7f1c3e5d0ec3e148c52381051_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
