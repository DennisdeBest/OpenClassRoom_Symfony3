<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_50be59834c561703cfbae27e43a81af41417675200c9cda90a34fdd0861a3233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a186ecacc811caa3a62519d871b22846ec5170c88aafe3842ed7b174e5d0285f = $this->env->getExtension("native_profiler");
        $__internal_a186ecacc811caa3a62519d871b22846ec5170c88aafe3842ed7b174e5d0285f->enter($__internal_a186ecacc811caa3a62519d871b22846ec5170c88aafe3842ed7b174e5d0285f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a186ecacc811caa3a62519d871b22846ec5170c88aafe3842ed7b174e5d0285f->leave($__internal_a186ecacc811caa3a62519d871b22846ec5170c88aafe3842ed7b174e5d0285f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d72e970cbffc8d59a611b139437ce94f8d07f4a91ba931698e212661a16ff878 = $this->env->getExtension("native_profiler");
        $__internal_d72e970cbffc8d59a611b139437ce94f8d07f4a91ba931698e212661a16ff878->enter($__internal_d72e970cbffc8d59a611b139437ce94f8d07f4a91ba931698e212661a16ff878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d72e970cbffc8d59a611b139437ce94f8d07f4a91ba931698e212661a16ff878->leave($__internal_d72e970cbffc8d59a611b139437ce94f8d07f4a91ba931698e212661a16ff878_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c32f1dc3f726e0e58b4b8a2a46f01b1f119c5832cce0b3149eb059ca390f9740 = $this->env->getExtension("native_profiler");
        $__internal_c32f1dc3f726e0e58b4b8a2a46f01b1f119c5832cce0b3149eb059ca390f9740->enter($__internal_c32f1dc3f726e0e58b4b8a2a46f01b1f119c5832cce0b3149eb059ca390f9740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c32f1dc3f726e0e58b4b8a2a46f01b1f119c5832cce0b3149eb059ca390f9740->leave($__internal_c32f1dc3f726e0e58b4b8a2a46f01b1f119c5832cce0b3149eb059ca390f9740_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ed80fccaddf779e1a02ab7dd74a0e016eb022644cbf3adb66c8ea3c1c7b44e8 = $this->env->getExtension("native_profiler");
        $__internal_8ed80fccaddf779e1a02ab7dd74a0e016eb022644cbf3adb66c8ea3c1c7b44e8->enter($__internal_8ed80fccaddf779e1a02ab7dd74a0e016eb022644cbf3adb66c8ea3c1c7b44e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8ed80fccaddf779e1a02ab7dd74a0e016eb022644cbf3adb66c8ea3c1c7b44e8->leave($__internal_8ed80fccaddf779e1a02ab7dd74a0e016eb022644cbf3adb66c8ea3c1c7b44e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
