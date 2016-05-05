<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_4537bad7fd3a8a0d76843858d1edd288e789b86fb33c7b28297cb1df18f401b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1133a9123bc16c4467ee0e185905c9c1968dfe8f72c4a750dcf8ef330c88bd09 = $this->env->getExtension("native_profiler");
        $__internal_1133a9123bc16c4467ee0e185905c9c1968dfe8f72c4a750dcf8ef330c88bd09->enter($__internal_1133a9123bc16c4467ee0e185905c9c1968dfe8f72c4a750dcf8ef330c88bd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1133a9123bc16c4467ee0e185905c9c1968dfe8f72c4a750dcf8ef330c88bd09->leave($__internal_1133a9123bc16c4467ee0e185905c9c1968dfe8f72c4a750dcf8ef330c88bd09_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29f991c87b10e5367d1409c9686a61a9560cf3752f9f300f4e69dc09e0ef4425 = $this->env->getExtension("native_profiler");
        $__internal_29f991c87b10e5367d1409c9686a61a9560cf3752f9f300f4e69dc09e0ef4425->enter($__internal_29f991c87b10e5367d1409c9686a61a9560cf3752f9f300f4e69dc09e0ef4425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29f991c87b10e5367d1409c9686a61a9560cf3752f9f300f4e69dc09e0ef4425->leave($__internal_29f991c87b10e5367d1409c9686a61a9560cf3752f9f300f4e69dc09e0ef4425_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2631c804cc4801db722721f21cb3493484f152cacb56e9f2b5b62bfc30ed7e1f = $this->env->getExtension("native_profiler");
        $__internal_2631c804cc4801db722721f21cb3493484f152cacb56e9f2b5b62bfc30ed7e1f->enter($__internal_2631c804cc4801db722721f21cb3493484f152cacb56e9f2b5b62bfc30ed7e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_2631c804cc4801db722721f21cb3493484f152cacb56e9f2b5b62bfc30ed7e1f->leave($__internal_2631c804cc4801db722721f21cb3493484f152cacb56e9f2b5b62bfc30ed7e1f_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_495bd590a02f54182a738912afdf9e92e07bf5580a4e59379c55887773ac0a42 = $this->env->getExtension("native_profiler");
        $__internal_495bd590a02f54182a738912afdf9e92e07bf5580a4e59379c55887773ac0a42->enter($__internal_495bd590a02f54182a738912afdf9e92e07bf5580a4e59379c55887773ac0a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_495bd590a02f54182a738912afdf9e92e07bf5580a4e59379c55887773ac0a42->leave($__internal_495bd590a02f54182a738912afdf9e92e07bf5580a4e59379c55887773ac0a42_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
