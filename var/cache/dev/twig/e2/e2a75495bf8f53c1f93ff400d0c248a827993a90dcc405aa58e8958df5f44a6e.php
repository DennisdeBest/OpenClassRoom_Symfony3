<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8bcf07dbdd5f4c1fa72f7aa01e098f19209b529e4befd3e7f25ba8e92d147476 extends Twig_Template
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
        $__internal_9f9bbef238d19c58f422e823453e5fdd9bb49771e14404ae2358655ad5c3d63b = $this->env->getExtension("native_profiler");
        $__internal_9f9bbef238d19c58f422e823453e5fdd9bb49771e14404ae2358655ad5c3d63b->enter($__internal_9f9bbef238d19c58f422e823453e5fdd9bb49771e14404ae2358655ad5c3d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9f9bbef238d19c58f422e823453e5fdd9bb49771e14404ae2358655ad5c3d63b->leave($__internal_9f9bbef238d19c58f422e823453e5fdd9bb49771e14404ae2358655ad5c3d63b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
