<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e1dfc66c2b09387122b7417c6e505c5d99334cfa002446b400e2f582268328fa extends Twig_Template
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
        $__internal_fee806b0c34b790f94ac23aeab519c7099386cd2a31e0881bf6aa369d24f1b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee806b0c34b790f94ac23aeab519c7099386cd2a31e0881bf6aa369d24f1b29->enter($__internal_fee806b0c34b790f94ac23aeab519c7099386cd2a31e0881bf6aa369d24f1b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1bf862125ff8809767c0c4b43a25de04a71b96c7c361143394f61b85c152c52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf862125ff8809767c0c4b43a25de04a71b96c7c361143394f61b85c152c52a->enter($__internal_1bf862125ff8809767c0c4b43a25de04a71b96c7c361143394f61b85c152c52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fee806b0c34b790f94ac23aeab519c7099386cd2a31e0881bf6aa369d24f1b29->leave($__internal_fee806b0c34b790f94ac23aeab519c7099386cd2a31e0881bf6aa369d24f1b29_prof);

        
        $__internal_1bf862125ff8809767c0c4b43a25de04a71b96c7c361143394f61b85c152c52a->leave($__internal_1bf862125ff8809767c0c4b43a25de04a71b96c7c361143394f61b85c152c52a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
