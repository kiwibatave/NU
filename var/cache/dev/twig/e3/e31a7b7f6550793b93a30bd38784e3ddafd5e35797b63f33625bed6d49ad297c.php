<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1c96ceb57a465e52e1e88ae4c65fd32871776424a4588d5cf806265016e989fd extends Twig_Template
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
        $__internal_993633ad4c05947b3a0cd03de40c51cc499bf660da209b4a382f91b3bcd7a966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993633ad4c05947b3a0cd03de40c51cc499bf660da209b4a382f91b3bcd7a966->enter($__internal_993633ad4c05947b3a0cd03de40c51cc499bf660da209b4a382f91b3bcd7a966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2fb4ec9aba421c2e0108d5c86612befc48b73d2a1f3c8e16f737d93ab84ba85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb4ec9aba421c2e0108d5c86612befc48b73d2a1f3c8e16f737d93ab84ba85e->enter($__internal_2fb4ec9aba421c2e0108d5c86612befc48b73d2a1f3c8e16f737d93ab84ba85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_993633ad4c05947b3a0cd03de40c51cc499bf660da209b4a382f91b3bcd7a966->leave($__internal_993633ad4c05947b3a0cd03de40c51cc499bf660da209b4a382f91b3bcd7a966_prof);

        
        $__internal_2fb4ec9aba421c2e0108d5c86612befc48b73d2a1f3c8e16f737d93ab84ba85e->leave($__internal_2fb4ec9aba421c2e0108d5c86612befc48b73d2a1f3c8e16f737d93ab84ba85e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
