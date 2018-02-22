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
        $__internal_caa673edf3958e21bdbd9764d444879fcc00710701238e2daac48ef35bd95ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa673edf3958e21bdbd9764d444879fcc00710701238e2daac48ef35bd95ea9->enter($__internal_caa673edf3958e21bdbd9764d444879fcc00710701238e2daac48ef35bd95ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_dc97d6b749e33ab5f3b1a6160641217254ccab56c701fc627d8de99043f59a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc97d6b749e33ab5f3b1a6160641217254ccab56c701fc627d8de99043f59a06->enter($__internal_dc97d6b749e33ab5f3b1a6160641217254ccab56c701fc627d8de99043f59a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_caa673edf3958e21bdbd9764d444879fcc00710701238e2daac48ef35bd95ea9->leave($__internal_caa673edf3958e21bdbd9764d444879fcc00710701238e2daac48ef35bd95ea9_prof);

        
        $__internal_dc97d6b749e33ab5f3b1a6160641217254ccab56c701fc627d8de99043f59a06->leave($__internal_dc97d6b749e33ab5f3b1a6160641217254ccab56c701fc627d8de99043f59a06_prof);

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
