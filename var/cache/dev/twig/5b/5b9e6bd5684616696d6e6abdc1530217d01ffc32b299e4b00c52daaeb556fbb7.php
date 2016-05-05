<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b21b514b7342e798a3630f5a0fbe921ad4b4c041056670b5fa4f3f27143d1b5d extends Twig_Template
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
        $__internal_ad2271b5548a078b97ba9be4cf07d0290af784ae3aecb1ba913058193aeb7241 = $this->env->getExtension("native_profiler");
        $__internal_ad2271b5548a078b97ba9be4cf07d0290af784ae3aecb1ba913058193aeb7241->enter($__internal_ad2271b5548a078b97ba9be4cf07d0290af784ae3aecb1ba913058193aeb7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ad2271b5548a078b97ba9be4cf07d0290af784ae3aecb1ba913058193aeb7241->leave($__internal_ad2271b5548a078b97ba9be4cf07d0290af784ae3aecb1ba913058193aeb7241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
