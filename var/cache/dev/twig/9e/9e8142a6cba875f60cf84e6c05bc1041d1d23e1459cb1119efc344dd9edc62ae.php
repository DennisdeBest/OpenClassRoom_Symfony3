<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cd798a09eab8a58ebdcd9422362d0c4efd3df8b1e322b4c12ecf2af39d0e6581 extends Twig_Template
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
        $__internal_cd9ddcbd9069bc98bfbed7d7a50d2fe15a8422ae30eee7340952cbcc9baf9483 = $this->env->getExtension("native_profiler");
        $__internal_cd9ddcbd9069bc98bfbed7d7a50d2fe15a8422ae30eee7340952cbcc9baf9483->enter($__internal_cd9ddcbd9069bc98bfbed7d7a50d2fe15a8422ae30eee7340952cbcc9baf9483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cd9ddcbd9069bc98bfbed7d7a50d2fe15a8422ae30eee7340952cbcc9baf9483->leave($__internal_cd9ddcbd9069bc98bfbed7d7a50d2fe15a8422ae30eee7340952cbcc9baf9483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
