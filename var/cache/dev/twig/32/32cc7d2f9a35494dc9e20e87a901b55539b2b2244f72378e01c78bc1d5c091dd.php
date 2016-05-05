<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6a63e7b99072f1854c519e5157a627197a34152b223d407a763db16bec34cb35 extends Twig_Template
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
        $__internal_e9f16bd7e079390654381df0a17d2c279ac36065d879b8cdaffa393cfe107956 = $this->env->getExtension("native_profiler");
        $__internal_e9f16bd7e079390654381df0a17d2c279ac36065d879b8cdaffa393cfe107956->enter($__internal_e9f16bd7e079390654381df0a17d2c279ac36065d879b8cdaffa393cfe107956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9f16bd7e079390654381df0a17d2c279ac36065d879b8cdaffa393cfe107956->leave($__internal_e9f16bd7e079390654381df0a17d2c279ac36065d879b8cdaffa393cfe107956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
