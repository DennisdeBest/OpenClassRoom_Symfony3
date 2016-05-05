<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ef023ef726adc344b537d192bfa6c955b7d9b984d53cc5872310f797659cba1f extends Twig_Template
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
        $__internal_fa302a4a8ad35dac1984f58bebf8a29594feed0c89fe248c2f09a0e27ceb057e = $this->env->getExtension("native_profiler");
        $__internal_fa302a4a8ad35dac1984f58bebf8a29594feed0c89fe248c2f09a0e27ceb057e->enter($__internal_fa302a4a8ad35dac1984f58bebf8a29594feed0c89fe248c2f09a0e27ceb057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fa302a4a8ad35dac1984f58bebf8a29594feed0c89fe248c2f09a0e27ceb057e->leave($__internal_fa302a4a8ad35dac1984f58bebf8a29594feed0c89fe248c2f09a0e27ceb057e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
