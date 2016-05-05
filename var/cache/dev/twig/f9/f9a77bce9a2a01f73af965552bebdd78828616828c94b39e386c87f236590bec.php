<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d1dd7874fd2abd9bee515be93f8d196d5843a4bb2c3c005908114fd62fb90cf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_11fdb660fefb2f81ca6b293866c425c851946c7740b2c96e4780bea662849691 = $this->env->getExtension("native_profiler");
        $__internal_11fdb660fefb2f81ca6b293866c425c851946c7740b2c96e4780bea662849691->enter($__internal_11fdb660fefb2f81ca6b293866c425c851946c7740b2c96e4780bea662849691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11fdb660fefb2f81ca6b293866c425c851946c7740b2c96e4780bea662849691->leave($__internal_11fdb660fefb2f81ca6b293866c425c851946c7740b2c96e4780bea662849691_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eca41972797e036222914d178b74c082b3d160d4f09a15f4691081f47e3028e3 = $this->env->getExtension("native_profiler");
        $__internal_eca41972797e036222914d178b74c082b3d160d4f09a15f4691081f47e3028e3->enter($__internal_eca41972797e036222914d178b74c082b3d160d4f09a15f4691081f47e3028e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eca41972797e036222914d178b74c082b3d160d4f09a15f4691081f47e3028e3->leave($__internal_eca41972797e036222914d178b74c082b3d160d4f09a15f4691081f47e3028e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bf5fe4f327ff15b292a5f5a3f99d7250f7b6f475552c546f497e6f31f0c5d50 = $this->env->getExtension("native_profiler");
        $__internal_2bf5fe4f327ff15b292a5f5a3f99d7250f7b6f475552c546f497e6f31f0c5d50->enter($__internal_2bf5fe4f327ff15b292a5f5a3f99d7250f7b6f475552c546f497e6f31f0c5d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2bf5fe4f327ff15b292a5f5a3f99d7250f7b6f475552c546f497e6f31f0c5d50->leave($__internal_2bf5fe4f327ff15b292a5f5a3f99d7250f7b6f475552c546f497e6f31f0c5d50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fd045884b225f899a0063205864c28700110f2caa10d3fe05a5e3656faa3bd9 = $this->env->getExtension("native_profiler");
        $__internal_3fd045884b225f899a0063205864c28700110f2caa10d3fe05a5e3656faa3bd9->enter($__internal_3fd045884b225f899a0063205864c28700110f2caa10d3fe05a5e3656faa3bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3fd045884b225f899a0063205864c28700110f2caa10d3fe05a5e3656faa3bd9->leave($__internal_3fd045884b225f899a0063205864c28700110f2caa10d3fe05a5e3656faa3bd9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
