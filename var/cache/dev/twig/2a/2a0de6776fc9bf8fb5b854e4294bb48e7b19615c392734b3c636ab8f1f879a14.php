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
        $__internal_7b5a3dd15148eeb642e7ed5760723f290683bbec16e8d3cf5cb8775bffc689bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5a3dd15148eeb642e7ed5760723f290683bbec16e8d3cf5cb8775bffc689bb->enter($__internal_7b5a3dd15148eeb642e7ed5760723f290683bbec16e8d3cf5cb8775bffc689bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0e89ad2f8cc2ca240ba3b83340e2b82cbffe3851b1f4f07b97aeb514b6756b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e89ad2f8cc2ca240ba3b83340e2b82cbffe3851b1f4f07b97aeb514b6756b8b->enter($__internal_0e89ad2f8cc2ca240ba3b83340e2b82cbffe3851b1f4f07b97aeb514b6756b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7b5a3dd15148eeb642e7ed5760723f290683bbec16e8d3cf5cb8775bffc689bb->leave($__internal_7b5a3dd15148eeb642e7ed5760723f290683bbec16e8d3cf5cb8775bffc689bb_prof);

        
        $__internal_0e89ad2f8cc2ca240ba3b83340e2b82cbffe3851b1f4f07b97aeb514b6756b8b->leave($__internal_0e89ad2f8cc2ca240ba3b83340e2b82cbffe3851b1f4f07b97aeb514b6756b8b_prof);

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
