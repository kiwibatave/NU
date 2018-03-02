<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0724770b8761b8fea419a82e2d7443df771883afae73b51b7542ef493bd43f31 extends Twig_Template
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
        $__internal_bcb3c04f34d4552aef773ecb25d617fd35f9c85fab893ed478e5c833e58b8585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb3c04f34d4552aef773ecb25d617fd35f9c85fab893ed478e5c833e58b8585->enter($__internal_bcb3c04f34d4552aef773ecb25d617fd35f9c85fab893ed478e5c833e58b8585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_fdddf310b8bcc95bf82c67474480da5731cbde533666f7077058d3bc86ff7442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdddf310b8bcc95bf82c67474480da5731cbde533666f7077058d3bc86ff7442->enter($__internal_fdddf310b8bcc95bf82c67474480da5731cbde533666f7077058d3bc86ff7442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bcb3c04f34d4552aef773ecb25d617fd35f9c85fab893ed478e5c833e58b8585->leave($__internal_bcb3c04f34d4552aef773ecb25d617fd35f9c85fab893ed478e5c833e58b8585_prof);

        
        $__internal_fdddf310b8bcc95bf82c67474480da5731cbde533666f7077058d3bc86ff7442->leave($__internal_fdddf310b8bcc95bf82c67474480da5731cbde533666f7077058d3bc86ff7442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
