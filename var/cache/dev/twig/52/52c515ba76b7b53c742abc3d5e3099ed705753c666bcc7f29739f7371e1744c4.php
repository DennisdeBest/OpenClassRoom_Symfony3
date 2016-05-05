<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ee34da6e69bbd92d5080b8623915533d154e00a60411d3d9265b3446de1a311e extends Twig_Template
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
        $__internal_00497afebdc430a0e99e27d5db4e0aa93876a14590c8542acf54a45ed26e0b48 = $this->env->getExtension("native_profiler");
        $__internal_00497afebdc430a0e99e27d5db4e0aa93876a14590c8542acf54a45ed26e0b48->enter($__internal_00497afebdc430a0e99e27d5db4e0aa93876a14590c8542acf54a45ed26e0b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_00497afebdc430a0e99e27d5db4e0aa93876a14590c8542acf54a45ed26e0b48->leave($__internal_00497afebdc430a0e99e27d5db4e0aa93876a14590c8542acf54a45ed26e0b48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
