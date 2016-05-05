<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d3bf96b30254f9fd68dc03e2d7a5d4db73c5c31c6ac4139269aafbdf6f174744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0399b7e3ad7bfba78e66efea140a0d1f7b9fd6ddb2cf322db23f684a43b9364 = $this->env->getExtension("native_profiler");
        $__internal_a0399b7e3ad7bfba78e66efea140a0d1f7b9fd6ddb2cf322db23f684a43b9364->enter($__internal_a0399b7e3ad7bfba78e66efea140a0d1f7b9fd6ddb2cf322db23f684a43b9364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0399b7e3ad7bfba78e66efea140a0d1f7b9fd6ddb2cf322db23f684a43b9364->leave($__internal_a0399b7e3ad7bfba78e66efea140a0d1f7b9fd6ddb2cf322db23f684a43b9364_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc5a9d04b0f9a6bd00e9f92d76003b937cab149fd7eb4f0c9cb56043c7b8f1c = $this->env->getExtension("native_profiler");
        $__internal_cfc5a9d04b0f9a6bd00e9f92d76003b937cab149fd7eb4f0c9cb56043c7b8f1c->enter($__internal_cfc5a9d04b0f9a6bd00e9f92d76003b937cab149fd7eb4f0c9cb56043c7b8f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_cfc5a9d04b0f9a6bd00e9f92d76003b937cab149fd7eb4f0c9cb56043c7b8f1c->leave($__internal_cfc5a9d04b0f9a6bd00e9f92d76003b937cab149fd7eb4f0c9cb56043c7b8f1c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
