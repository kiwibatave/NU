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
        $__internal_c3101aae9780e6b3aeaa050a64300e6844999f8df7b503c06894236bd776b909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3101aae9780e6b3aeaa050a64300e6844999f8df7b503c06894236bd776b909->enter($__internal_c3101aae9780e6b3aeaa050a64300e6844999f8df7b503c06894236bd776b909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3df8b7b98b11f49a310be030eb73a9bc232c9fb374e9b252535146707c497beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df8b7b98b11f49a310be030eb73a9bc232c9fb374e9b252535146707c497beb->enter($__internal_3df8b7b98b11f49a310be030eb73a9bc232c9fb374e9b252535146707c497beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c3101aae9780e6b3aeaa050a64300e6844999f8df7b503c06894236bd776b909->leave($__internal_c3101aae9780e6b3aeaa050a64300e6844999f8df7b503c06894236bd776b909_prof);

        
        $__internal_3df8b7b98b11f49a310be030eb73a9bc232c9fb374e9b252535146707c497beb->leave($__internal_3df8b7b98b11f49a310be030eb73a9bc232c9fb374e9b252535146707c497beb_prof);

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
