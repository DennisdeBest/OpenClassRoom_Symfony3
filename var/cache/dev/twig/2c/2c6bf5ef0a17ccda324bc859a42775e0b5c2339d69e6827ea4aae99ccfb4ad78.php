<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b193c0e3ea71f3ee0600d03c9dbb7944078ec70e2cd413421aa4811f2b0c678c extends Twig_Template
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
        $__internal_869957b134775979544d2f11d05fbf6b8caa489ac9452bfbefd1af6df40e5749 = $this->env->getExtension("native_profiler");
        $__internal_869957b134775979544d2f11d05fbf6b8caa489ac9452bfbefd1af6df40e5749->enter($__internal_869957b134775979544d2f11d05fbf6b8caa489ac9452bfbefd1af6df40e5749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_869957b134775979544d2f11d05fbf6b8caa489ac9452bfbefd1af6df40e5749->leave($__internal_869957b134775979544d2f11d05fbf6b8caa489ac9452bfbefd1af6df40e5749_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
