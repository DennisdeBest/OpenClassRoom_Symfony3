<?php

/* @OCCore/Core/index.html.twig */
class __TwigTemplate_a2b6024539267ea92cc52b59f48156c20a915d746ca920eb1fa06c0bc8a23801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCCore/Core/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21989edce0868d7267b02096b2d93065aa086452e2dc5bd6c55b5c1978795d96 = $this->env->getExtension("native_profiler");
        $__internal_21989edce0868d7267b02096b2d93065aa086452e2dc5bd6c55b5c1978795d96->enter($__internal_21989edce0868d7267b02096b2d93065aa086452e2dc5bd6c55b5c1978795d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Core/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21989edce0868d7267b02096b2d93065aa086452e2dc5bd6c55b5c1978795d96->leave($__internal_21989edce0868d7267b02096b2d93065aa086452e2dc5bd6c55b5c1978795d96_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_50985134564e814ad62aca998cbdafaf625ecb59cb5939d6f64f40cdab823d09 = $this->env->getExtension("native_profiler");
        $__internal_50985134564e814ad62aca998cbdafaf625ecb59cb5939d6f64f40cdab823d09->enter($__internal_50985134564e814ad62aca998cbdafaf625ecb59cb5939d6f64f40cdab823d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_50985134564e814ad62aca998cbdafaf625ecb59cb5939d6f64f40cdab823d09->leave($__internal_50985134564e814ad62aca998cbdafaf625ecb59cb5939d6f64f40cdab823d09_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd5a33a77e64b82ed3ebc94b47efb1561bda84aee5436485d28f3b6e3ea57048 = $this->env->getExtension("native_profiler");
        $__internal_fd5a33a77e64b82ed3ebc94b47efb1561bda84aee5436485d28f3b6e3ea57048->enter($__internal_fd5a33a77e64b82ed3ebc94b47efb1561bda84aee5436485d28f3b6e3ea57048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 100)));
        echo "

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_fd5a33a77e64b82ed3ebc94b47efb1561bda84aee5436485d28f3b6e3ea57048->leave($__internal_fd5a33a77e64b82ed3ebc94b47efb1561bda84aee5436485d28f3b6e3ea57048_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/Core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  82 => 19,  79 => 18,  76 => 16,  67 => 14,  62 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}*/
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Page d'accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Page d'accueil de notre site</h2>*/
/* */
/*   {# On affiche tous les messages flash dont le nom est « info » #}*/
/*   {% for message in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*   {% endfor %}*/
/* */
/*   {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}*/
/*   <h3>Dernières annonces</h3>*/
/*   {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 100})) }}*/
/* */
/*   <h3>Derniers messages sur le forum (hypothétique)</h3>*/
/*   <p>*/
/*     {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,*/
/*        ce n'est pas le sujet ici #}*/
/*     Bla bla bla...*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
