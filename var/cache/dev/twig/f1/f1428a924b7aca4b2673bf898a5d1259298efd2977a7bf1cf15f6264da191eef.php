<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d199ff383b501f0b936cd3918d8d6ac3c4f1fca5432dfb79db2961f3c0d1e915 extends Twig_Template
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
        $__internal_fd37131dc0e8d95c51cba60b4abdc6f1baebc90332dc75f2bda18ad9cf0f3bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd37131dc0e8d95c51cba60b4abdc6f1baebc90332dc75f2bda18ad9cf0f3bc6->enter($__internal_fd37131dc0e8d95c51cba60b4abdc6f1baebc90332dc75f2bda18ad9cf0f3bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5861f8405d9f3c464d2af4d535e676b7f1cf5829bade33ad6e4a34f8e7464df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5861f8405d9f3c464d2af4d535e676b7f1cf5829bade33ad6e4a34f8e7464df7->enter($__internal_5861f8405d9f3c464d2af4d535e676b7f1cf5829bade33ad6e4a34f8e7464df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fd37131dc0e8d95c51cba60b4abdc6f1baebc90332dc75f2bda18ad9cf0f3bc6->leave($__internal_fd37131dc0e8d95c51cba60b4abdc6f1baebc90332dc75f2bda18ad9cf0f3bc6_prof);

        
        $__internal_5861f8405d9f3c464d2af4d535e676b7f1cf5829bade33ad6e4a34f8e7464df7->leave($__internal_5861f8405d9f3c464d2af4d535e676b7f1cf5829bade33ad6e4a34f8e7464df7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
