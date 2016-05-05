<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b54bd2fc7338e0658b0cdc72ba8042664b7eaf85ca166a92b0184e2b89f60a2d extends Twig_Template
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
        $__internal_1c20ee5973dc230ae61b51ac29bab8ba50846fd3816b7f723ff053e41b833d54 = $this->env->getExtension("native_profiler");
        $__internal_1c20ee5973dc230ae61b51ac29bab8ba50846fd3816b7f723ff053e41b833d54->enter($__internal_1c20ee5973dc230ae61b51ac29bab8ba50846fd3816b7f723ff053e41b833d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1c20ee5973dc230ae61b51ac29bab8ba50846fd3816b7f723ff053e41b833d54->leave($__internal_1c20ee5973dc230ae61b51ac29bab8ba50846fd3816b7f723ff053e41b833d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
