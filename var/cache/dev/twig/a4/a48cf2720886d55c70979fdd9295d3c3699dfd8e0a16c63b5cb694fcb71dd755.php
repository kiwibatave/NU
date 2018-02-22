<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_66fa1f2daa647fd3e37dc435c5933fdfe903257b2f06fd6fef21673480d4e9d4 extends Twig_Template
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
        $__internal_ce092781152c78e6b199735de54a3424357b3a292a8b00ce6c2219eedcafb6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce092781152c78e6b199735de54a3424357b3a292a8b00ce6c2219eedcafb6ec->enter($__internal_ce092781152c78e6b199735de54a3424357b3a292a8b00ce6c2219eedcafb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_72ba873f0e0e6e4908ea7406a29f46db3957407e75c9f9ff6aaabec22275ecd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ba873f0e0e6e4908ea7406a29f46db3957407e75c9f9ff6aaabec22275ecd8->enter($__internal_72ba873f0e0e6e4908ea7406a29f46db3957407e75c9f9ff6aaabec22275ecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ce092781152c78e6b199735de54a3424357b3a292a8b00ce6c2219eedcafb6ec->leave($__internal_ce092781152c78e6b199735de54a3424357b3a292a8b00ce6c2219eedcafb6ec_prof);

        
        $__internal_72ba873f0e0e6e4908ea7406a29f46db3957407e75c9f9ff6aaabec22275ecd8->leave($__internal_72ba873f0e0e6e4908ea7406a29f46db3957407e75c9f9ff6aaabec22275ecd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
