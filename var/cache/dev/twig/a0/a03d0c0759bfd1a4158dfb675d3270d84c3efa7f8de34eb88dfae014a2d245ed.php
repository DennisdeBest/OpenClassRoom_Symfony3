<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c133927cb4e69264215f978605eca263c4027c8f391a8deb8293e6465b82c5e4 extends Twig_Template
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
        $__internal_0e34e4adce3c392fc49f69745a124bc360b898f26c0857d7a18b4c2a4984d81a = $this->env->getExtension("native_profiler");
        $__internal_0e34e4adce3c392fc49f69745a124bc360b898f26c0857d7a18b4c2a4984d81a->enter($__internal_0e34e4adce3c392fc49f69745a124bc360b898f26c0857d7a18b4c2a4984d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0e34e4adce3c392fc49f69745a124bc360b898f26c0857d7a18b4c2a4984d81a->leave($__internal_0e34e4adce3c392fc49f69745a124bc360b898f26c0857d7a18b4c2a4984d81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
