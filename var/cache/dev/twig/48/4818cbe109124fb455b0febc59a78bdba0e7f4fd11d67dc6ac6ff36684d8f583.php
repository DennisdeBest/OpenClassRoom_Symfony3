<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1db8bbea32ddadd645d0db74b4b440aefed38469927e4689ae2c35c5a203b369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0b0e3b103b67897149353fe1431d19d7ad97ee4853cd6994df19cd1524dfce3 = $this->env->getExtension("native_profiler");
        $__internal_d0b0e3b103b67897149353fe1431d19d7ad97ee4853cd6994df19cd1524dfce3->enter($__internal_d0b0e3b103b67897149353fe1431d19d7ad97ee4853cd6994df19cd1524dfce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d0b0e3b103b67897149353fe1431d19d7ad97ee4853cd6994df19cd1524dfce3->leave($__internal_d0b0e3b103b67897149353fe1431d19d7ad97ee4853cd6994df19cd1524dfce3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b462d173827020caa4c16061bce6b0ebf3dad8edd9ef8fe5aae6800e36dbeb7e = $this->env->getExtension("native_profiler");
        $__internal_b462d173827020caa4c16061bce6b0ebf3dad8edd9ef8fe5aae6800e36dbeb7e->enter($__internal_b462d173827020caa4c16061bce6b0ebf3dad8edd9ef8fe5aae6800e36dbeb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b462d173827020caa4c16061bce6b0ebf3dad8edd9ef8fe5aae6800e36dbeb7e->leave($__internal_b462d173827020caa4c16061bce6b0ebf3dad8edd9ef8fe5aae6800e36dbeb7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
