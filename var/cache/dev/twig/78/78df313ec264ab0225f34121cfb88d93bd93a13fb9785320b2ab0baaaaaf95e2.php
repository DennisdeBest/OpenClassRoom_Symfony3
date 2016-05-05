<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_d2d885a05472cebfffad1c1492d9dd3e53115465c765efe94bde69258f5437f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9403d566ab485d98843015a6697c796ca9ca1c6aaad7e51fe52da3c75209413a = $this->env->getExtension("native_profiler");
        $__internal_9403d566ab485d98843015a6697c796ca9ca1c6aaad7e51fe52da3c75209413a->enter($__internal_9403d566ab485d98843015a6697c796ca9ca1c6aaad7e51fe52da3c75209413a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9403d566ab485d98843015a6697c796ca9ca1c6aaad7e51fe52da3c75209413a->leave($__internal_9403d566ab485d98843015a6697c796ca9ca1c6aaad7e51fe52da3c75209413a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7392863ac61b1abcbdad0e338c6954c7cd518786dbdb66a4faf1acf6d88f60 = $this->env->getExtension("native_profiler");
        $__internal_ea7392863ac61b1abcbdad0e338c6954c7cd518786dbdb66a4faf1acf6d88f60->enter($__internal_ea7392863ac61b1abcbdad0e338c6954c7cd518786dbdb66a4faf1acf6d88f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ea7392863ac61b1abcbdad0e338c6954c7cd518786dbdb66a4faf1acf6d88f60->leave($__internal_ea7392863ac61b1abcbdad0e338c6954c7cd518786dbdb66a4faf1acf6d88f60_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8d5a690ce8e55d63137e46e683b79bb85fae9f1542fe7580cfa0b51bba90cda9 = $this->env->getExtension("native_profiler");
        $__internal_8d5a690ce8e55d63137e46e683b79bb85fae9f1542fe7580cfa0b51bba90cda9->enter($__internal_8d5a690ce8e55d63137e46e683b79bb85fae9f1542fe7580cfa0b51bba90cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_8d5a690ce8e55d63137e46e683b79bb85fae9f1542fe7580cfa0b51bba90cda9->leave($__internal_8d5a690ce8e55d63137e46e683b79bb85fae9f1542fe7580cfa0b51bba90cda9_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
