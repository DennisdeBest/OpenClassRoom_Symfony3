<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd3ab06c0bac416e7f2303d86f3f0ee12f4127baf28fb93be8be1851362328f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_ef814b506c17fbc3028d8a304c1d6b1f92db5ba4ecbb8c4b51210616e77bf394 = $this->env->getExtension("native_profiler");
        $__internal_ef814b506c17fbc3028d8a304c1d6b1f92db5ba4ecbb8c4b51210616e77bf394->enter($__internal_ef814b506c17fbc3028d8a304c1d6b1f92db5ba4ecbb8c4b51210616e77bf394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef814b506c17fbc3028d8a304c1d6b1f92db5ba4ecbb8c4b51210616e77bf394->leave($__internal_ef814b506c17fbc3028d8a304c1d6b1f92db5ba4ecbb8c4b51210616e77bf394_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93fdc124d45c6004de88a4df282cf0727fb55f53822c5263de669beeeb8194e5 = $this->env->getExtension("native_profiler");
        $__internal_93fdc124d45c6004de88a4df282cf0727fb55f53822c5263de669beeeb8194e5->enter($__internal_93fdc124d45c6004de88a4df282cf0727fb55f53822c5263de669beeeb8194e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93fdc124d45c6004de88a4df282cf0727fb55f53822c5263de669beeeb8194e5->leave($__internal_93fdc124d45c6004de88a4df282cf0727fb55f53822c5263de669beeeb8194e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_562a067b0f1a26cd8aa0088875355ff0b36543e970bd91b2e621dc745c60ee31 = $this->env->getExtension("native_profiler");
        $__internal_562a067b0f1a26cd8aa0088875355ff0b36543e970bd91b2e621dc745c60ee31->enter($__internal_562a067b0f1a26cd8aa0088875355ff0b36543e970bd91b2e621dc745c60ee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_562a067b0f1a26cd8aa0088875355ff0b36543e970bd91b2e621dc745c60ee31->leave($__internal_562a067b0f1a26cd8aa0088875355ff0b36543e970bd91b2e621dc745c60ee31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de5b2694f6fe854ad4f90047a2733c1cb87c41e4af180b9e8bd2007bef9cfb19 = $this->env->getExtension("native_profiler");
        $__internal_de5b2694f6fe854ad4f90047a2733c1cb87c41e4af180b9e8bd2007bef9cfb19->enter($__internal_de5b2694f6fe854ad4f90047a2733c1cb87c41e4af180b9e8bd2007bef9cfb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de5b2694f6fe854ad4f90047a2733c1cb87c41e4af180b9e8bd2007bef9cfb19->leave($__internal_de5b2694f6fe854ad4f90047a2733c1cb87c41e4af180b9e8bd2007bef9cfb19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
