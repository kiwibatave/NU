<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3a774001ced387b8e3fbd4fd8f5ff15c5ab6613927efd56e287157f2a3658b8f extends Twig_Template
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
        $__internal_72e02376f39cd045977537a860d67524ba4b0787eb5c87084988b03f4e5754f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e02376f39cd045977537a860d67524ba4b0787eb5c87084988b03f4e5754f7->enter($__internal_72e02376f39cd045977537a860d67524ba4b0787eb5c87084988b03f4e5754f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6e9b3c241077465c681d38309b3d26ab7bcf25f177f054ac43e69b7af16b5e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9b3c241077465c681d38309b3d26ab7bcf25f177f054ac43e69b7af16b5e8d->enter($__internal_6e9b3c241077465c681d38309b3d26ab7bcf25f177f054ac43e69b7af16b5e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_72e02376f39cd045977537a860d67524ba4b0787eb5c87084988b03f4e5754f7->leave($__internal_72e02376f39cd045977537a860d67524ba4b0787eb5c87084988b03f4e5754f7_prof);

        
        $__internal_6e9b3c241077465c681d38309b3d26ab7bcf25f177f054ac43e69b7af16b5e8d->leave($__internal_6e9b3c241077465c681d38309b3d26ab7bcf25f177f054ac43e69b7af16b5e8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
