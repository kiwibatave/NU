<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5918c3806b16666fccc210c7d57ceaea105e263896812fb3c4cba37c429076b3 extends Twig_Template
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
        $__internal_16efdee65cb81d7944cd9c8889244f3aa318f3c58012c5d1289c337218335dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16efdee65cb81d7944cd9c8889244f3aa318f3c58012c5d1289c337218335dd6->enter($__internal_16efdee65cb81d7944cd9c8889244f3aa318f3c58012c5d1289c337218335dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_382ca27a5d9a1ee8f434fe31ba8a38a04c6c9b5c44e0d526007cc9cdb7b6fe3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382ca27a5d9a1ee8f434fe31ba8a38a04c6c9b5c44e0d526007cc9cdb7b6fe3d->enter($__internal_382ca27a5d9a1ee8f434fe31ba8a38a04c6c9b5c44e0d526007cc9cdb7b6fe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_16efdee65cb81d7944cd9c8889244f3aa318f3c58012c5d1289c337218335dd6->leave($__internal_16efdee65cb81d7944cd9c8889244f3aa318f3c58012c5d1289c337218335dd6_prof);

        
        $__internal_382ca27a5d9a1ee8f434fe31ba8a38a04c6c9b5c44e0d526007cc9cdb7b6fe3d->leave($__internal_382ca27a5d9a1ee8f434fe31ba8a38a04c6c9b5c44e0d526007cc9cdb7b6fe3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
