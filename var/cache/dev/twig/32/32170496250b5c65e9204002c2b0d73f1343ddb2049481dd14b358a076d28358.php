<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_10abf76f3e2f113b5de620a4e17ea990f1a413a8249607cc3d307bd894d9cb83 extends Twig_Template
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
        $__internal_5afd8ede66bad80c37f4161f8dddb920db3eaaf5f4887fb7665eed5e5059aa85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afd8ede66bad80c37f4161f8dddb920db3eaaf5f4887fb7665eed5e5059aa85->enter($__internal_5afd8ede66bad80c37f4161f8dddb920db3eaaf5f4887fb7665eed5e5059aa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c90fb7b1582eff7bab0312e252b2e6652a31a814852bb2d51ffe0dd03bc2649d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90fb7b1582eff7bab0312e252b2e6652a31a814852bb2d51ffe0dd03bc2649d->enter($__internal_c90fb7b1582eff7bab0312e252b2e6652a31a814852bb2d51ffe0dd03bc2649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5afd8ede66bad80c37f4161f8dddb920db3eaaf5f4887fb7665eed5e5059aa85->leave($__internal_5afd8ede66bad80c37f4161f8dddb920db3eaaf5f4887fb7665eed5e5059aa85_prof);

        
        $__internal_c90fb7b1582eff7bab0312e252b2e6652a31a814852bb2d51ffe0dd03bc2649d->leave($__internal_c90fb7b1582eff7bab0312e252b2e6652a31a814852bb2d51ffe0dd03bc2649d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
