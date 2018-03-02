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
        $__internal_d0747035ba4f364797e067b654c2d91149a37d109c90e5bf8eadcd600457f1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0747035ba4f364797e067b654c2d91149a37d109c90e5bf8eadcd600457f1f1->enter($__internal_d0747035ba4f364797e067b654c2d91149a37d109c90e5bf8eadcd600457f1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1e0b225fce0a61e59564d5605f43bbadf4981f0ab33396d99eb7ed162f4a2277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0b225fce0a61e59564d5605f43bbadf4981f0ab33396d99eb7ed162f4a2277->enter($__internal_1e0b225fce0a61e59564d5605f43bbadf4981f0ab33396d99eb7ed162f4a2277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d0747035ba4f364797e067b654c2d91149a37d109c90e5bf8eadcd600457f1f1->leave($__internal_d0747035ba4f364797e067b654c2d91149a37d109c90e5bf8eadcd600457f1f1_prof);

        
        $__internal_1e0b225fce0a61e59564d5605f43bbadf4981f0ab33396d99eb7ed162f4a2277->leave($__internal_1e0b225fce0a61e59564d5605f43bbadf4981f0ab33396d99eb7ed162f4a2277_prof);

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
