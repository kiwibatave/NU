<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4b7efbd39cb35417bdf40dab33fe4a7950d2d2ff2d084dfcc6c374c1bd6fefc5 extends Twig_Template
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
        $__internal_25278fd8579c25eada1b0c7deb4a691dad58786d3c363dfafdf2affffd3d426a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25278fd8579c25eada1b0c7deb4a691dad58786d3c363dfafdf2affffd3d426a->enter($__internal_25278fd8579c25eada1b0c7deb4a691dad58786d3c363dfafdf2affffd3d426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4ffc545123f4ddab0e47b187ea604801800709054adfb2994b2478aedc230087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffc545123f4ddab0e47b187ea604801800709054adfb2994b2478aedc230087->enter($__internal_4ffc545123f4ddab0e47b187ea604801800709054adfb2994b2478aedc230087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_25278fd8579c25eada1b0c7deb4a691dad58786d3c363dfafdf2affffd3d426a->leave($__internal_25278fd8579c25eada1b0c7deb4a691dad58786d3c363dfafdf2affffd3d426a_prof);

        
        $__internal_4ffc545123f4ddab0e47b187ea604801800709054adfb2994b2478aedc230087->leave($__internal_4ffc545123f4ddab0e47b187ea604801800709054adfb2994b2478aedc230087_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
