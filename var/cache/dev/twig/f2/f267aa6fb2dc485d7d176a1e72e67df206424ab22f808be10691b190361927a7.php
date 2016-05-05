<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_21c6e8ac183022fd6a54e0c4946109f064e75c8a6ff1ef3ea7c28d6c2ecdbd3f extends Twig_Template
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
        $__internal_faa84b027676e96cdff2c2e9fab34b5b46052407ca5354f1b5915f89bc10d4f2 = $this->env->getExtension("native_profiler");
        $__internal_faa84b027676e96cdff2c2e9fab34b5b46052407ca5354f1b5915f89bc10d4f2->enter($__internal_faa84b027676e96cdff2c2e9fab34b5b46052407ca5354f1b5915f89bc10d4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_faa84b027676e96cdff2c2e9fab34b5b46052407ca5354f1b5915f89bc10d4f2->leave($__internal_faa84b027676e96cdff2c2e9fab34b5b46052407ca5354f1b5915f89bc10d4f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
