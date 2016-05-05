<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_602423d769ec36eb517ea8c7303bfaf716a37735a7a850c08c75bf12abf68c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_06314880b2a3f045cf383a0d7f15d77a5f5ca9395f5d8d082d4ab0c724be478a = $this->env->getExtension("native_profiler");
        $__internal_06314880b2a3f045cf383a0d7f15d77a5f5ca9395f5d8d082d4ab0c724be478a->enter($__internal_06314880b2a3f045cf383a0d7f15d77a5f5ca9395f5d8d082d4ab0c724be478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06314880b2a3f045cf383a0d7f15d77a5f5ca9395f5d8d082d4ab0c724be478a->leave($__internal_06314880b2a3f045cf383a0d7f15d77a5f5ca9395f5d8d082d4ab0c724be478a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8623a5697feac7e50ab6a44b749c286233a4ea8f7c9d9ba28914d5010d60140a = $this->env->getExtension("native_profiler");
        $__internal_8623a5697feac7e50ab6a44b749c286233a4ea8f7c9d9ba28914d5010d60140a->enter($__internal_8623a5697feac7e50ab6a44b749c286233a4ea8f7c9d9ba28914d5010d60140a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8623a5697feac7e50ab6a44b749c286233a4ea8f7c9d9ba28914d5010d60140a->leave($__internal_8623a5697feac7e50ab6a44b749c286233a4ea8f7c9d9ba28914d5010d60140a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_125869e5c393e45f35baf2413e6e209f518ae3ca9ed4ec4299cda876d749a794 = $this->env->getExtension("native_profiler");
        $__internal_125869e5c393e45f35baf2413e6e209f518ae3ca9ed4ec4299cda876d749a794->enter($__internal_125869e5c393e45f35baf2413e6e209f518ae3ca9ed4ec4299cda876d749a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_125869e5c393e45f35baf2413e6e209f518ae3ca9ed4ec4299cda876d749a794->leave($__internal_125869e5c393e45f35baf2413e6e209f518ae3ca9ed4ec4299cda876d749a794_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
