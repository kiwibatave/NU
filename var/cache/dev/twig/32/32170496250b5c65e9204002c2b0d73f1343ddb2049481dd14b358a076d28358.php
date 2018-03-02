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
        $__internal_ec200e1a1241ec822e18c44f7d0e46c973908d403952e5ad2b4860dda6c91719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec200e1a1241ec822e18c44f7d0e46c973908d403952e5ad2b4860dda6c91719->enter($__internal_ec200e1a1241ec822e18c44f7d0e46c973908d403952e5ad2b4860dda6c91719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ce3f26eda0ca46ed28742a90eee9e45aa14b6a4f33116c9788469f0413ecba43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3f26eda0ca46ed28742a90eee9e45aa14b6a4f33116c9788469f0413ecba43->enter($__internal_ce3f26eda0ca46ed28742a90eee9e45aa14b6a4f33116c9788469f0413ecba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ec200e1a1241ec822e18c44f7d0e46c973908d403952e5ad2b4860dda6c91719->leave($__internal_ec200e1a1241ec822e18c44f7d0e46c973908d403952e5ad2b4860dda6c91719_prof);

        
        $__internal_ce3f26eda0ca46ed28742a90eee9e45aa14b6a4f33116c9788469f0413ecba43->leave($__internal_ce3f26eda0ca46ed28742a90eee9e45aa14b6a4f33116c9788469f0413ecba43_prof);

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
