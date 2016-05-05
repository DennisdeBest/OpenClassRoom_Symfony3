<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_7366c04bb678c8023d50f1c6550e20c4a2bb1755af0ade06e81153b4ed5ce35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:index.html.twig", 2);
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
        $__internal_83f0dfd4c133ef9382524224d0d4446de9f9714af3e7ce536b97554f2d781ca8 = $this->env->getExtension("native_profiler");
        $__internal_83f0dfd4c133ef9382524224d0d4446de9f9714af3e7ce536b97554f2d781ca8->enter($__internal_83f0dfd4c133ef9382524224d0d4446de9f9714af3e7ce536b97554f2d781ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83f0dfd4c133ef9382524224d0d4446de9f9714af3e7ce536b97554f2d781ca8->leave($__internal_83f0dfd4c133ef9382524224d0d4446de9f9714af3e7ce536b97554f2d781ca8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17ae16549ee2c194a03cd7c2ce4f60b9bd9bd8375056931266c9335e5554f25 = $this->env->getExtension("native_profiler");
        $__internal_b17ae16549ee2c194a03cd7c2ce4f60b9bd9bd8375056931266c9335e5554f25->enter($__internal_b17ae16549ee2c194a03cd7c2ce4f60b9bd9bd8375056931266c9335e5554f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b17ae16549ee2c194a03cd7c2ce4f60b9bd9bd8375056931266c9335e5554f25->leave($__internal_b17ae16549ee2c194a03cd7c2ce4f60b9bd9bd8375056931266c9335e5554f25_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7659c9ca9b4ab0ace3432d86a7782419618f61b9d9a2224ab0c6f1a7fb90894 = $this->env->getExtension("native_profiler");
        $__internal_f7659c9ca9b4ab0ace3432d86a7782419618f61b9d9a2224ab0c6f1a7fb90894->enter($__internal_f7659c9ca9b4ab0ace3432d86a7782419618f61b9d9a2224ab0c6f1a7fb90894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7659c9ca9b4ab0ace3432d86a7782419618f61b9d9a2224ab0c6f1a7fb90894->leave($__internal_f7659c9ca9b4ab0ace3432d86a7782419618f61b9d9a2224ab0c6f1a7fb90894_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:index.html.twig";
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
