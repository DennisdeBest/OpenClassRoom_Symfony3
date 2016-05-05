<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e5b686fb3e1a734f7a46fc3b060bcfb543026a2aa8cd66ec1eac39637659942c extends Twig_Template
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
        $__internal_2a4e38d5f7434ecf489e2b24b8610d34a3b7fe3d1202c2b98181c39f19584b69 = $this->env->getExtension("native_profiler");
        $__internal_2a4e38d5f7434ecf489e2b24b8610d34a3b7fe3d1202c2b98181c39f19584b69->enter($__internal_2a4e38d5f7434ecf489e2b24b8610d34a3b7fe3d1202c2b98181c39f19584b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2a4e38d5f7434ecf489e2b24b8610d34a3b7fe3d1202c2b98181c39f19584b69->leave($__internal_2a4e38d5f7434ecf489e2b24b8610d34a3b7fe3d1202c2b98181c39f19584b69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
