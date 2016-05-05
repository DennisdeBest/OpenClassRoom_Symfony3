<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_84f99ad5e96c045d5e6fed5b477eb7caf970a071d697c65bbad6bf1acfcbdfc7 extends Twig_Template
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
        $__internal_2257a4d37cc5e83517bd5d7be80cf15a3674ae662310b3093822fdfffbd2384b = $this->env->getExtension("native_profiler");
        $__internal_2257a4d37cc5e83517bd5d7be80cf15a3674ae662310b3093822fdfffbd2384b->enter($__internal_2257a4d37cc5e83517bd5d7be80cf15a3674ae662310b3093822fdfffbd2384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2257a4d37cc5e83517bd5d7be80cf15a3674ae662310b3093822fdfffbd2384b->leave($__internal_2257a4d37cc5e83517bd5d7be80cf15a3674ae662310b3093822fdfffbd2384b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
