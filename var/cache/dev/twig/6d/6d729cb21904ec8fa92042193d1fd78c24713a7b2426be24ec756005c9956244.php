<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3b8d34f6ee137da513cc21cba976a80ab0e9f41f7839d1e1ca48218f06e63aa9 extends Twig_Template
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
        $__internal_b440d92712352fa25c5e2ce6fe0c64f7e9f727ab708fadb8329666e56d5ccf31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b440d92712352fa25c5e2ce6fe0c64f7e9f727ab708fadb8329666e56d5ccf31->enter($__internal_b440d92712352fa25c5e2ce6fe0c64f7e9f727ab708fadb8329666e56d5ccf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_377d77d73ec1c528282dfe845f624a8eff6d9cb327bbcf6e62f1dab6a3e8c1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377d77d73ec1c528282dfe845f624a8eff6d9cb327bbcf6e62f1dab6a3e8c1b2->enter($__internal_377d77d73ec1c528282dfe845f624a8eff6d9cb327bbcf6e62f1dab6a3e8c1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b440d92712352fa25c5e2ce6fe0c64f7e9f727ab708fadb8329666e56d5ccf31->leave($__internal_b440d92712352fa25c5e2ce6fe0c64f7e9f727ab708fadb8329666e56d5ccf31_prof);

        
        $__internal_377d77d73ec1c528282dfe845f624a8eff6d9cb327bbcf6e62f1dab6a3e8c1b2->leave($__internal_377d77d73ec1c528282dfe845f624a8eff6d9cb327bbcf6e62f1dab6a3e8c1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
