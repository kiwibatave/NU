<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b1ef16f493fb9513c07a63c2158fc81f0e24a5ed2f041cf639e58d8e87760762 extends Twig_Template
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
        $__internal_2cd81bdd4a47422a88e50ef01b8bf4ed66bcd60d8d265599882c4bdac9b77015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd81bdd4a47422a88e50ef01b8bf4ed66bcd60d8d265599882c4bdac9b77015->enter($__internal_2cd81bdd4a47422a88e50ef01b8bf4ed66bcd60d8d265599882c4bdac9b77015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8e50cb84af5ab6c5d8c2f10f4cd24d5ec66fe181e512b255ef93c8d4a2438c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e50cb84af5ab6c5d8c2f10f4cd24d5ec66fe181e512b255ef93c8d4a2438c14->enter($__internal_8e50cb84af5ab6c5d8c2f10f4cd24d5ec66fe181e512b255ef93c8d4a2438c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2cd81bdd4a47422a88e50ef01b8bf4ed66bcd60d8d265599882c4bdac9b77015->leave($__internal_2cd81bdd4a47422a88e50ef01b8bf4ed66bcd60d8d265599882c4bdac9b77015_prof);

        
        $__internal_8e50cb84af5ab6c5d8c2f10f4cd24d5ec66fe181e512b255ef93c8d4a2438c14->leave($__internal_8e50cb84af5ab6c5d8c2f10f4cd24d5ec66fe181e512b255ef93c8d4a2438c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
