<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_79b84e519a63fa8dfb376ec10b38d950525e2188fe46a7f8e7be5d0f486f1bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
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
        $__internal_6c998a3ac74f7aa3b6914b1e2e10382f6b53e25724304ce3a9acfa7d230e1886 = $this->env->getExtension("native_profiler");
        $__internal_6c998a3ac74f7aa3b6914b1e2e10382f6b53e25724304ce3a9acfa7d230e1886->enter($__internal_6c998a3ac74f7aa3b6914b1e2e10382f6b53e25724304ce3a9acfa7d230e1886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c998a3ac74f7aa3b6914b1e2e10382f6b53e25724304ce3a9acfa7d230e1886->leave($__internal_6c998a3ac74f7aa3b6914b1e2e10382f6b53e25724304ce3a9acfa7d230e1886_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de066bb2558b43e89c566f0f303053c1733c7a177c843bcc6fd2b78dcd53313 = $this->env->getExtension("native_profiler");
        $__internal_7de066bb2558b43e89c566f0f303053c1733c7a177c843bcc6fd2b78dcd53313->enter($__internal_7de066bb2558b43e89c566f0f303053c1733c7a177c843bcc6fd2b78dcd53313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7de066bb2558b43e89c566f0f303053c1733c7a177c843bcc6fd2b78dcd53313->leave($__internal_7de066bb2558b43e89c566f0f303053c1733c7a177c843bcc6fd2b78dcd53313_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
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
