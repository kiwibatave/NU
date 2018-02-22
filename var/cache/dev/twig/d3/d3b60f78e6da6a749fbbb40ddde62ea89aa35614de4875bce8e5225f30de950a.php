<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a8dbb363762642b4bfdc1527bc444d96e1aebb9cfa52fe09886b984e245baad3 extends Twig_Template
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
        $__internal_2e400268cc4a4cb8339a8524080063b5ef0e03da17043ca450725ad609ee2875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e400268cc4a4cb8339a8524080063b5ef0e03da17043ca450725ad609ee2875->enter($__internal_2e400268cc4a4cb8339a8524080063b5ef0e03da17043ca450725ad609ee2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c00769aa92b85f9b72a003c348086aac672f534f1a9f2aae1219d258418d7e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00769aa92b85f9b72a003c348086aac672f534f1a9f2aae1219d258418d7e89->enter($__internal_c00769aa92b85f9b72a003c348086aac672f534f1a9f2aae1219d258418d7e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2e400268cc4a4cb8339a8524080063b5ef0e03da17043ca450725ad609ee2875->leave($__internal_2e400268cc4a4cb8339a8524080063b5ef0e03da17043ca450725ad609ee2875_prof);

        
        $__internal_c00769aa92b85f9b72a003c348086aac672f534f1a9f2aae1219d258418d7e89->leave($__internal_c00769aa92b85f9b72a003c348086aac672f534f1a9f2aae1219d258418d7e89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
