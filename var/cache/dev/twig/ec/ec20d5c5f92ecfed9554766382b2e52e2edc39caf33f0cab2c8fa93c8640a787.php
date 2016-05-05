<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_2094cb075d37a8cc587ebf414e40316d70d4b168fe5148708bb228c297294682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d4d4485b1d2ed400f40911d40b5c67dbbfd7fd9b61b29d705af84dfe41f203d = $this->env->getExtension("native_profiler");
        $__internal_7d4d4485b1d2ed400f40911d40b5c67dbbfd7fd9b61b29d705af84dfe41f203d->enter($__internal_7d4d4485b1d2ed400f40911d40b5c67dbbfd7fd9b61b29d705af84dfe41f203d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
        <a class=\"btn btn-primary btn-lg\" href=";
        // line 28
        echo $this->env->getExtension('routing')->getPath("oc_platform_purge", array("days" => 10));
        echo ">
          Purge 10 Jours
        </a>
        <a class=\"btn btn-primary btn-lg\" href=";
        // line 31
        echo $this->env->getExtension('routing')->getPath("oc_platform_purge", array("days" => 20));
        echo ">
          Purge 20 Jours
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 46
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
  </body>
</html>
";
        
        $__internal_7d4d4485b1d2ed400f40911d40b5c67dbbfd7fd9b61b29d705af84dfe41f203d->leave($__internal_7d4d4485b1d2ed400f40911d40b5c67dbbfd7fd9b61b29d705af84dfe41f203d_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee2476694ebf85b6f78a2d0b1c4edc172b769f3f443db359d6a603f3fc76d03c = $this->env->getExtension("native_profiler");
        $__internal_ee2476694ebf85b6f78a2d0b1c4edc172b769f3f443db359d6a603f3fc76d03c->enter($__internal_ee2476694ebf85b6f78a2d0b1c4edc172b769f3f443db359d6a603f3fc76d03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_ee2476694ebf85b6f78a2d0b1c4edc172b769f3f443db359d6a603f3fc76d03c->leave($__internal_ee2476694ebf85b6f78a2d0b1c4edc172b769f3f443db359d6a603f3fc76d03c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c8dd4686e1eed29b641821ef38c470b3227a7d09725d693bff69341735cd477 = $this->env->getExtension("native_profiler");
        $__internal_2c8dd4686e1eed29b641821ef38c470b3227a7d09725d693bff69341735cd477->enter($__internal_2c8dd4686e1eed29b641821ef38c470b3227a7d09725d693bff69341735cd477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_2c8dd4686e1eed29b641821ef38c470b3227a7d09725d693bff69341735cd477->leave($__internal_2c8dd4686e1eed29b641821ef38c470b3227a7d09725d693bff69341735cd477_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_02effc3dab42ed8281c3b9a54d5a5348f4d17868a3d8011f6ceb66c6e1312bcd = $this->env->getExtension("native_profiler");
        $__internal_02effc3dab42ed8281c3b9a54d5a5348f4d17868a3d8011f6ceb66c6e1312bcd->enter($__internal_02effc3dab42ed8281c3b9a54d5a5348f4d17868a3d8011f6ceb66c6e1312bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_02effc3dab42ed8281c3b9a54d5a5348f4d17868a3d8011f6ceb66c6e1312bcd->leave($__internal_02effc3dab42ed8281c3b9a54d5a5348f4d17868a3d8011f6ceb66c6e1312bcd_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24e2c9b6f062f685bd8e1707033a51b0728d484a73f2f5b42c5622ca6049227f = $this->env->getExtension("native_profiler");
        $__internal_24e2c9b6f062f685bd8e1707033a51b0728d484a73f2f5b42c5622ca6049227f->enter($__internal_24e2c9b6f062f685bd8e1707033a51b0728d484a73f2f5b42c5622ca6049227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_24e2c9b6f062f685bd8e1707033a51b0728d484a73f2f5b42c5622ca6049227f->leave($__internal_24e2c9b6f062f685bd8e1707033a51b0728d484a73f2f5b42c5622ca6049227f_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  169 => 62,  163 => 61,  156 => 50,  150 => 49,  142 => 13,  140 => 12,  134 => 11,  122 => 9,  112 => 66,  110 => 61,  103 => 57,  95 => 51,  93 => 49,  87 => 46,  80 => 42,  76 => 41,  63 => 31,  57 => 28,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*         <a class="btn btn-primary btn-lg" href={{  path('oc_platform_purge', {'days' : 10}) }}>*/
/*           Purge 10 Jours*/
/*         </a>*/
/*         <a class="btn btn-primary btn-lg" href={{  path('oc_platform_purge', {'days' : 20}) }}>*/
/*           Purge 20 Jours*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
