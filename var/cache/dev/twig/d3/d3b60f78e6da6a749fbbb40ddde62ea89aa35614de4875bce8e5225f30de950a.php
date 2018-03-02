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
        $__internal_ecffec00ef044afc80d31f0c95d4e63a73d71e1ad30d4def34c13eb9cd44641a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecffec00ef044afc80d31f0c95d4e63a73d71e1ad30d4def34c13eb9cd44641a->enter($__internal_ecffec00ef044afc80d31f0c95d4e63a73d71e1ad30d4def34c13eb9cd44641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2104b15bb3a667a2c9a3e3c427a4c33f6dd113a8e65485179f2bdd03cd58d2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2104b15bb3a667a2c9a3e3c427a4c33f6dd113a8e65485179f2bdd03cd58d2a6->enter($__internal_2104b15bb3a667a2c9a3e3c427a4c33f6dd113a8e65485179f2bdd03cd58d2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ecffec00ef044afc80d31f0c95d4e63a73d71e1ad30d4def34c13eb9cd44641a->leave($__internal_ecffec00ef044afc80d31f0c95d4e63a73d71e1ad30d4def34c13eb9cd44641a_prof);

        
        $__internal_2104b15bb3a667a2c9a3e3c427a4c33f6dd113a8e65485179f2bdd03cd58d2a6->leave($__internal_2104b15bb3a667a2c9a3e3c427a4c33f6dd113a8e65485179f2bdd03cd58d2a6_prof);

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
