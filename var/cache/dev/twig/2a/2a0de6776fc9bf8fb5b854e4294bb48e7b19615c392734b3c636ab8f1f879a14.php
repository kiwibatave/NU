<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_133f22c67b5cb41a6aa613bb3838fcd0c1df5cf4ba4547c57225b1fba8bd9082 extends Twig_Template
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
        $__internal_03d4fa3d46aad111646dab7c910b2172c6b25336084e726a17c81b488628cee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d4fa3d46aad111646dab7c910b2172c6b25336084e726a17c81b488628cee5->enter($__internal_03d4fa3d46aad111646dab7c910b2172c6b25336084e726a17c81b488628cee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_49ef5e4c13e6872c5a2f2143eef50d746a83b5f9fcaa8274c03c27f583076486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ef5e4c13e6872c5a2f2143eef50d746a83b5f9fcaa8274c03c27f583076486->enter($__internal_49ef5e4c13e6872c5a2f2143eef50d746a83b5f9fcaa8274c03c27f583076486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_03d4fa3d46aad111646dab7c910b2172c6b25336084e726a17c81b488628cee5->leave($__internal_03d4fa3d46aad111646dab7c910b2172c6b25336084e726a17c81b488628cee5_prof);

        
        $__internal_49ef5e4c13e6872c5a2f2143eef50d746a83b5f9fcaa8274c03c27f583076486->leave($__internal_49ef5e4c13e6872c5a2f2143eef50d746a83b5f9fcaa8274c03c27f583076486_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
