<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0ba37a8a27cd4b474d7e63daa3534d6e26d86d5c7337b8dc189f978503e3ce4c extends Twig_Template
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
        $__internal_966edcc3b976a8450650fdda29b768aab3b31dd77b4b6954fd1c1b3b0a7ff678 = $this->env->getExtension("native_profiler");
        $__internal_966edcc3b976a8450650fdda29b768aab3b31dd77b4b6954fd1c1b3b0a7ff678->enter($__internal_966edcc3b976a8450650fdda29b768aab3b31dd77b4b6954fd1c1b3b0a7ff678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_966edcc3b976a8450650fdda29b768aab3b31dd77b4b6954fd1c1b3b0a7ff678->leave($__internal_966edcc3b976a8450650fdda29b768aab3b31dd77b4b6954fd1c1b3b0a7ff678_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
