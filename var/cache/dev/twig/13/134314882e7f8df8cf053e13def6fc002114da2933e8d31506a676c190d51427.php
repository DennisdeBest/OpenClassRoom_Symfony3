<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_b1afdd343675f7174c6c01a54d171c5d53d1601a1646bf2975c8257c652f7f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
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
        $__internal_2b9d49af9e19cc8a64c7ac8f9d365cb427eb41bfce7dc2243d9e439e38ac93c8 = $this->env->getExtension("native_profiler");
        $__internal_2b9d49af9e19cc8a64c7ac8f9d365cb427eb41bfce7dc2243d9e439e38ac93c8->enter($__internal_2b9d49af9e19cc8a64c7ac8f9d365cb427eb41bfce7dc2243d9e439e38ac93c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9d49af9e19cc8a64c7ac8f9d365cb427eb41bfce7dc2243d9e439e38ac93c8->leave($__internal_2b9d49af9e19cc8a64c7ac8f9d365cb427eb41bfce7dc2243d9e439e38ac93c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_222f9049c6b3d5f8787306621cea49f233a53846213b49473a35b5ad4919c134 = $this->env->getExtension("native_profiler");
        $__internal_222f9049c6b3d5f8787306621cea49f233a53846213b49473a35b5ad4919c134->enter($__internal_222f9049c6b3d5f8787306621cea49f233a53846213b49473a35b5ad4919c134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_222f9049c6b3d5f8787306621cea49f233a53846213b49473a35b5ad4919c134->leave($__internal_222f9049c6b3d5f8787306621cea49f233a53846213b49473a35b5ad4919c134_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_15becdf8b19b9623a37481282a14e0753cdc92bc6ffec440703fe49f02103a11 = $this->env->getExtension("native_profiler");
        $__internal_15becdf8b19b9623a37481282a14e0753cdc92bc6ffec440703fe49f02103a11->enter($__internal_15becdf8b19b9623a37481282a14e0753cdc92bc6ffec440703fe49f02103a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15becdf8b19b9623a37481282a14e0753cdc92bc6ffec440703fe49f02103a11->leave($__internal_15becdf8b19b9623a37481282a14e0753cdc92bc6ffec440703fe49f02103a11_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f09a93ec478a28c13ec8c080900c1ee58e5c0b9eead8e778046f583ac171b3c4 = $this->env->getExtension("native_profiler");
        $__internal_f09a93ec478a28c13ec8c080900c1ee58e5c0b9eead8e778046f583ac171b3c4->enter($__internal_f09a93ec478a28c13ec8c080900c1ee58e5c0b9eead8e778046f583ac171b3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_f09a93ec478a28c13ec8c080900c1ee58e5c0b9eead8e778046f583ac171b3c4->leave($__internal_f09a93ec478a28c13ec8c080900c1ee58e5c0b9eead8e778046f583ac171b3c4_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
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
