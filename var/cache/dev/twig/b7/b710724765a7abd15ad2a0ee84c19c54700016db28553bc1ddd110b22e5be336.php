<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_53b0efbb790dfa54db986cf3c51e89295c82e2ae36b540113c735feebe5ed403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e61da4ad93cf20d0ddb6fd1fb17a6b41d38e7685e2edd57dff504d6ebe3cee6e = $this->env->getExtension("native_profiler");
        $__internal_e61da4ad93cf20d0ddb6fd1fb17a6b41d38e7685e2edd57dff504d6ebe3cee6e->enter($__internal_e61da4ad93cf20d0ddb6fd1fb17a6b41d38e7685e2edd57dff504d6ebe3cee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61da4ad93cf20d0ddb6fd1fb17a6b41d38e7685e2edd57dff504d6ebe3cee6e->leave($__internal_e61da4ad93cf20d0ddb6fd1fb17a6b41d38e7685e2edd57dff504d6ebe3cee6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a75f4a1bf74e05f160bdee7a81b63dcd596737cb45532817fb921fffda1c140e = $this->env->getExtension("native_profiler");
        $__internal_a75f4a1bf74e05f160bdee7a81b63dcd596737cb45532817fb921fffda1c140e->enter($__internal_a75f4a1bf74e05f160bdee7a81b63dcd596737cb45532817fb921fffda1c140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a75f4a1bf74e05f160bdee7a81b63dcd596737cb45532817fb921fffda1c140e->leave($__internal_a75f4a1bf74e05f160bdee7a81b63dcd596737cb45532817fb921fffda1c140e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_250340094c230582b3b170bc56a58e2563942d51d4ce66d3c155900ea4035b37 = $this->env->getExtension("native_profiler");
        $__internal_250340094c230582b3b170bc56a58e2563942d51d4ce66d3c155900ea4035b37->enter($__internal_250340094c230582b3b170bc56a58e2563942d51d4ce66d3c155900ea4035b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_250340094c230582b3b170bc56a58e2563942d51d4ce66d3c155900ea4035b37->leave($__internal_250340094c230582b3b170bc56a58e2563942d51d4ce66d3c155900ea4035b37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc865d86a93c694c9700a88a5d1e76cea4a53d31bf88fe5296496675e053ed09 = $this->env->getExtension("native_profiler");
        $__internal_dc865d86a93c694c9700a88a5d1e76cea4a53d31bf88fe5296496675e053ed09->enter($__internal_dc865d86a93c694c9700a88a5d1e76cea4a53d31bf88fe5296496675e053ed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc865d86a93c694c9700a88a5d1e76cea4a53d31bf88fe5296496675e053ed09->leave($__internal_dc865d86a93c694c9700a88a5d1e76cea4a53d31bf88fe5296496675e053ed09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
