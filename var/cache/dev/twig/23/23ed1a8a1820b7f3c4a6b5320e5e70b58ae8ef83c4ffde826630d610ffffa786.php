<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_59a095539f94600cbf9369d28874cdb4c045c9c197a480f0fe9db7297a182f3f extends Twig_Template
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
        $__internal_173ddeb533886280028ddeefa96615c3129c52d19e545f4fcb34432936565c0c = $this->env->getExtension("native_profiler");
        $__internal_173ddeb533886280028ddeefa96615c3129c52d19e545f4fcb34432936565c0c->enter($__internal_173ddeb533886280028ddeefa96615c3129c52d19e545f4fcb34432936565c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_173ddeb533886280028ddeefa96615c3129c52d19e545f4fcb34432936565c0c->leave($__internal_173ddeb533886280028ddeefa96615c3129c52d19e545f4fcb34432936565c0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
