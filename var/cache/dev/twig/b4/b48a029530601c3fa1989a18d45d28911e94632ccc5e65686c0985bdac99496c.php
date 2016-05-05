<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_30a3efa928f66e62477abd530bf375bb1b5891b666fc602ffbfcde40da0c450c extends Twig_Template
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
        $__internal_32c9a7fd253027cc425e8d0dcb0ce1a6336d4c0c8f52321e2481f7c32d692d76 = $this->env->getExtension("native_profiler");
        $__internal_32c9a7fd253027cc425e8d0dcb0ce1a6336d4c0c8f52321e2481f7c32d692d76->enter($__internal_32c9a7fd253027cc425e8d0dcb0ce1a6336d4c0c8f52321e2481f7c32d692d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32c9a7fd253027cc425e8d0dcb0ce1a6336d4c0c8f52321e2481f7c32d692d76->leave($__internal_32c9a7fd253027cc425e8d0dcb0ce1a6336d4c0c8f52321e2481f7c32d692d76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
