<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6857e6344b5f331e720a708101d69853ab449a5ce657060305d875ad3258afb0 extends Twig_Template
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
        $__internal_06332045f40198022f2d63288d4f9a90acd5f7d66cbbaa2988d10d382cd6777a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06332045f40198022f2d63288d4f9a90acd5f7d66cbbaa2988d10d382cd6777a->enter($__internal_06332045f40198022f2d63288d4f9a90acd5f7d66cbbaa2988d10d382cd6777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1ddda7db6ac2d957f9c42533f5340c308e51cc64bcf54c6aeacc304e2cf6d99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddda7db6ac2d957f9c42533f5340c308e51cc64bcf54c6aeacc304e2cf6d99f->enter($__internal_1ddda7db6ac2d957f9c42533f5340c308e51cc64bcf54c6aeacc304e2cf6d99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_06332045f40198022f2d63288d4f9a90acd5f7d66cbbaa2988d10d382cd6777a->leave($__internal_06332045f40198022f2d63288d4f9a90acd5f7d66cbbaa2988d10d382cd6777a_prof);

        
        $__internal_1ddda7db6ac2d957f9c42533f5340c308e51cc64bcf54c6aeacc304e2cf6d99f->leave($__internal_1ddda7db6ac2d957f9c42533f5340c308e51cc64bcf54c6aeacc304e2cf6d99f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
