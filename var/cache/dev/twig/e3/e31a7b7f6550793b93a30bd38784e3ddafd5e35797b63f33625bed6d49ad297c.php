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
        $__internal_ceaba4e8d2f0e46a0969459652ad00f58871b49a6725064e3abaec8f968f519d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaba4e8d2f0e46a0969459652ad00f58871b49a6725064e3abaec8f968f519d->enter($__internal_ceaba4e8d2f0e46a0969459652ad00f58871b49a6725064e3abaec8f968f519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_058955c8e4e47b9fc52abe85603fe83b2291d14f2f90323726ee000ad904aadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058955c8e4e47b9fc52abe85603fe83b2291d14f2f90323726ee000ad904aadc->enter($__internal_058955c8e4e47b9fc52abe85603fe83b2291d14f2f90323726ee000ad904aadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ceaba4e8d2f0e46a0969459652ad00f58871b49a6725064e3abaec8f968f519d->leave($__internal_ceaba4e8d2f0e46a0969459652ad00f58871b49a6725064e3abaec8f968f519d_prof);

        
        $__internal_058955c8e4e47b9fc52abe85603fe83b2291d14f2f90323726ee000ad904aadc->leave($__internal_058955c8e4e47b9fc52abe85603fe83b2291d14f2f90323726ee000ad904aadc_prof);

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
