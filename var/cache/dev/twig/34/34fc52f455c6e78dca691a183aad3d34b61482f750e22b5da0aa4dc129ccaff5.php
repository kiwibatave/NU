<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e6a503cd3d342fe21a19e59a453691f99b31b42cfa0802e14e55651645b3f8eb extends Twig_Template
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
        $__internal_f9e58c6522c7f30ac20891af37336fe1e87a218e657fe45f1ea5db91f8b2f39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e58c6522c7f30ac20891af37336fe1e87a218e657fe45f1ea5db91f8b2f39e->enter($__internal_f9e58c6522c7f30ac20891af37336fe1e87a218e657fe45f1ea5db91f8b2f39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_003cade0bc59676a9b8e74c4e8c2037c46a4ca9e986f767c16de9cf1d4d0aedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003cade0bc59676a9b8e74c4e8c2037c46a4ca9e986f767c16de9cf1d4d0aedc->enter($__internal_003cade0bc59676a9b8e74c4e8c2037c46a4ca9e986f767c16de9cf1d4d0aedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f9e58c6522c7f30ac20891af37336fe1e87a218e657fe45f1ea5db91f8b2f39e->leave($__internal_f9e58c6522c7f30ac20891af37336fe1e87a218e657fe45f1ea5db91f8b2f39e_prof);

        
        $__internal_003cade0bc59676a9b8e74c4e8c2037c46a4ca9e986f767c16de9cf1d4d0aedc->leave($__internal_003cade0bc59676a9b8e74c4e8c2037c46a4ca9e986f767c16de9cf1d4d0aedc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
