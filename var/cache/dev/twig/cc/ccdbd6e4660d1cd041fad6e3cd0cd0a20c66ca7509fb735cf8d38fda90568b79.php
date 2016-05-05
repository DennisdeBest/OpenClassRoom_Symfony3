<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_2ba1b19454add75c55cee910838ff368bed8de241dd8c90555825000d9d5c6b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_e8194efaa3ac8ce8fabc0c0cb4c5da9ed8083b027a58866a8e9d6e3c0c7e5c42 = $this->env->getExtension("native_profiler");
        $__internal_e8194efaa3ac8ce8fabc0c0cb4c5da9ed8083b027a58866a8e9d6e3c0c7e5c42->enter($__internal_e8194efaa3ac8ce8fabc0c0cb4c5da9ed8083b027a58866a8e9d6e3c0c7e5c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8194efaa3ac8ce8fabc0c0cb4c5da9ed8083b027a58866a8e9d6e3c0c7e5c42->leave($__internal_e8194efaa3ac8ce8fabc0c0cb4c5da9ed8083b027a58866a8e9d6e3c0c7e5c42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2900e0cd487447a3661fc6e8ff095d78afaf9001fc6f1295f0517772125f9549 = $this->env->getExtension("native_profiler");
        $__internal_2900e0cd487447a3661fc6e8ff095d78afaf9001fc6f1295f0517772125f9549->enter($__internal_2900e0cd487447a3661fc6e8ff095d78afaf9001fc6f1295f0517772125f9549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2900e0cd487447a3661fc6e8ff095d78afaf9001fc6f1295f0517772125f9549->leave($__internal_2900e0cd487447a3661fc6e8ff095d78afaf9001fc6f1295f0517772125f9549_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_168d11c96570e2a1be4994a08d92aababdc39428a4aad622ff116903a382ce53 = $this->env->getExtension("native_profiler");
        $__internal_168d11c96570e2a1be4994a08d92aababdc39428a4aad622ff116903a382ce53->enter($__internal_168d11c96570e2a1be4994a08d92aababdc39428a4aad622ff116903a382ce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_168d11c96570e2a1be4994a08d92aababdc39428a4aad622ff116903a382ce53->leave($__internal_168d11c96570e2a1be4994a08d92aababdc39428a4aad622ff116903a382ce53_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
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
