<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9a6a7af7c270508acefe950881c12c817f249f1aec3ea6d3da9a9f2dcba5a9fe extends Twig_Template
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
        $__internal_02b1b6fa20dc4b10a0278852d4296336530b1ad7f07d0956d54b4ba47dd86af0 = $this->env->getExtension("native_profiler");
        $__internal_02b1b6fa20dc4b10a0278852d4296336530b1ad7f07d0956d54b4ba47dd86af0->enter($__internal_02b1b6fa20dc4b10a0278852d4296336530b1ad7f07d0956d54b4ba47dd86af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_02b1b6fa20dc4b10a0278852d4296336530b1ad7f07d0956d54b4ba47dd86af0->leave($__internal_02b1b6fa20dc4b10a0278852d4296336530b1ad7f07d0956d54b4ba47dd86af0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
