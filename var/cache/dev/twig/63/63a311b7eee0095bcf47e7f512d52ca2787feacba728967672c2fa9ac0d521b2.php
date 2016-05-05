<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9c747f396d81dddac01fc7b43df9bd1823945f6adfdc8555972d181847262500 extends Twig_Template
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
        $__internal_4988f4517bd3a8cf62f4e668331c9090c390d3ea8ce601d1fa51e79318bc4e23 = $this->env->getExtension("native_profiler");
        $__internal_4988f4517bd3a8cf62f4e668331c9090c390d3ea8ce601d1fa51e79318bc4e23->enter($__internal_4988f4517bd3a8cf62f4e668331c9090c390d3ea8ce601d1fa51e79318bc4e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4988f4517bd3a8cf62f4e668331c9090c390d3ea8ce601d1fa51e79318bc4e23->leave($__internal_4988f4517bd3a8cf62f4e668331c9090c390d3ea8ce601d1fa51e79318bc4e23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
