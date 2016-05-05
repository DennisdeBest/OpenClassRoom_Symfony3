<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0fed9e2c79d44f24899a74fa5a9783dfccf6737431504dc2c161dba9a899f45c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e88956dfac113d7e450c7a9b825942d0b12c0c0709e43e01fed2eec75052190f = $this->env->getExtension("native_profiler");
        $__internal_e88956dfac113d7e450c7a9b825942d0b12c0c0709e43e01fed2eec75052190f->enter($__internal_e88956dfac113d7e450c7a9b825942d0b12c0c0709e43e01fed2eec75052190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e88956dfac113d7e450c7a9b825942d0b12c0c0709e43e01fed2eec75052190f->leave($__internal_e88956dfac113d7e450c7a9b825942d0b12c0c0709e43e01fed2eec75052190f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
