<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec250e7cd76dda86dec44d04f8a7e0ff958d539ce1fe0133e75aca0d1f70a185 extends Twig_Template
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
        $__internal_f12bf63c14747aa16785b248f6cac0b3a8749bc1ea07b245cfe926d1f4f89e10 = $this->env->getExtension("native_profiler");
        $__internal_f12bf63c14747aa16785b248f6cac0b3a8749bc1ea07b245cfe926d1f4f89e10->enter($__internal_f12bf63c14747aa16785b248f6cac0b3a8749bc1ea07b245cfe926d1f4f89e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f12bf63c14747aa16785b248f6cac0b3a8749bc1ea07b245cfe926d1f4f89e10->leave($__internal_f12bf63c14747aa16785b248f6cac0b3a8749bc1ea07b245cfe926d1f4f89e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
