<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_721dfc0466748c327541d6bc6e24687d149a5def15961c758d18cb57841cef56 extends Twig_Template
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
        $__internal_c49465bd3320cf38f6f536716012c2cc57569591d2839ca8e3604fafa55d1cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49465bd3320cf38f6f536716012c2cc57569591d2839ca8e3604fafa55d1cc8->enter($__internal_c49465bd3320cf38f6f536716012c2cc57569591d2839ca8e3604fafa55d1cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9a717feb5507c4f5b228cf8deef6b31d9ca1a52654b166fdabcf9edf1d14a935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a717feb5507c4f5b228cf8deef6b31d9ca1a52654b166fdabcf9edf1d14a935->enter($__internal_9a717feb5507c4f5b228cf8deef6b31d9ca1a52654b166fdabcf9edf1d14a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c49465bd3320cf38f6f536716012c2cc57569591d2839ca8e3604fafa55d1cc8->leave($__internal_c49465bd3320cf38f6f536716012c2cc57569591d2839ca8e3604fafa55d1cc8_prof);

        
        $__internal_9a717feb5507c4f5b228cf8deef6b31d9ca1a52654b166fdabcf9edf1d14a935->leave($__internal_9a717feb5507c4f5b228cf8deef6b31d9ca1a52654b166fdabcf9edf1d14a935_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
