<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_085df6323fe2565874dc9bd3ca16bbc4ced1d332c428bff6d932210e0d366215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f49999e9a868b57a3400098830499577141d2730c35a93b834961ec336c238 = $this->env->getExtension("native_profiler");
        $__internal_96f49999e9a868b57a3400098830499577141d2730c35a93b834961ec336c238->enter($__internal_96f49999e9a868b57a3400098830499577141d2730c35a93b834961ec336c238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f49999e9a868b57a3400098830499577141d2730c35a93b834961ec336c238->leave($__internal_96f49999e9a868b57a3400098830499577141d2730c35a93b834961ec336c238_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7d3d93c910acfccfc1076208c778282152eb4b677ac3e9fea260b140ee1fea9 = $this->env->getExtension("native_profiler");
        $__internal_f7d3d93c910acfccfc1076208c778282152eb4b677ac3e9fea260b140ee1fea9->enter($__internal_f7d3d93c910acfccfc1076208c778282152eb4b677ac3e9fea260b140ee1fea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f7d3d93c910acfccfc1076208c778282152eb4b677ac3e9fea260b140ee1fea9->leave($__internal_f7d3d93c910acfccfc1076208c778282152eb4b677ac3e9fea260b140ee1fea9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63e65accc0c14a2335773b98a50d0c8dc9cc73bc996f1d93a263c8dfe1deb26 = $this->env->getExtension("native_profiler");
        $__internal_e63e65accc0c14a2335773b98a50d0c8dc9cc73bc996f1d93a263c8dfe1deb26->enter($__internal_e63e65accc0c14a2335773b98a50d0c8dc9cc73bc996f1d93a263c8dfe1deb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e63e65accc0c14a2335773b98a50d0c8dc9cc73bc996f1d93a263c8dfe1deb26->leave($__internal_e63e65accc0c14a2335773b98a50d0c8dc9cc73bc996f1d93a263c8dfe1deb26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
