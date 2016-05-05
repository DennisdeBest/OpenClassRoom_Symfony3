<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a71ef38bb93056fddfa0c098549893c33c6b85f6dcc9960597f4687e63982c extends Twig_Template
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
        $__internal_a67019d7ebfbd574dcb16689a983ea20e993460ced5908d557e34ff73a580d6e = $this->env->getExtension("native_profiler");
        $__internal_a67019d7ebfbd574dcb16689a983ea20e993460ced5908d557e34ff73a580d6e->enter($__internal_a67019d7ebfbd574dcb16689a983ea20e993460ced5908d557e34ff73a580d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67019d7ebfbd574dcb16689a983ea20e993460ced5908d557e34ff73a580d6e->leave($__internal_a67019d7ebfbd574dcb16689a983ea20e993460ced5908d557e34ff73a580d6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c2c656afc8fcb631c202f7a8c70376d8d12e7b50684a4521016af1caa7f6e9d = $this->env->getExtension("native_profiler");
        $__internal_9c2c656afc8fcb631c202f7a8c70376d8d12e7b50684a4521016af1caa7f6e9d->enter($__internal_9c2c656afc8fcb631c202f7a8c70376d8d12e7b50684a4521016af1caa7f6e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c2c656afc8fcb631c202f7a8c70376d8d12e7b50684a4521016af1caa7f6e9d->leave($__internal_9c2c656afc8fcb631c202f7a8c70376d8d12e7b50684a4521016af1caa7f6e9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0ea2bc0f426dab485439916985d4facf938b66e8b0db29b5a300b9a092b2987 = $this->env->getExtension("native_profiler");
        $__internal_d0ea2bc0f426dab485439916985d4facf938b66e8b0db29b5a300b9a092b2987->enter($__internal_d0ea2bc0f426dab485439916985d4facf938b66e8b0db29b5a300b9a092b2987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0ea2bc0f426dab485439916985d4facf938b66e8b0db29b5a300b9a092b2987->leave($__internal_d0ea2bc0f426dab485439916985d4facf938b66e8b0db29b5a300b9a092b2987_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bb4ea34bb412d555d88c2256c3fb39703076a53bf14892f6b4c59a30f90031f = $this->env->getExtension("native_profiler");
        $__internal_5bb4ea34bb412d555d88c2256c3fb39703076a53bf14892f6b4c59a30f90031f->enter($__internal_5bb4ea34bb412d555d88c2256c3fb39703076a53bf14892f6b4c59a30f90031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5bb4ea34bb412d555d88c2256c3fb39703076a53bf14892f6b4c59a30f90031f->leave($__internal_5bb4ea34bb412d555d88c2256c3fb39703076a53bf14892f6b4c59a30f90031f_prof);

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
