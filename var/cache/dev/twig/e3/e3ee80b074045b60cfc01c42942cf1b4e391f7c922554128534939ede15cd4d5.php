<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_070c6f513e27f82ba13918d95674b4607937493e7a5e0cea622b5b9be0fbf2f9 extends Twig_Template
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
        $__internal_c109fbcb3044ab1db3c163b869f327d3f9767c8866ce0b6e9fab8e823d51fcce = $this->env->getExtension("native_profiler");
        $__internal_c109fbcb3044ab1db3c163b869f327d3f9767c8866ce0b6e9fab8e823d51fcce->enter($__internal_c109fbcb3044ab1db3c163b869f327d3f9767c8866ce0b6e9fab8e823d51fcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c109fbcb3044ab1db3c163b869f327d3f9767c8866ce0b6e9fab8e823d51fcce->leave($__internal_c109fbcb3044ab1db3c163b869f327d3f9767c8866ce0b6e9fab8e823d51fcce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
