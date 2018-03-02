<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9b0e8d49e22217c22889adfc3cf7ef0387f37dd0b9f7478e65ac77b20b47b204 extends Twig_Template
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
        $__internal_518c8fddc21c321fa30cd1efdc8e6edf4888b2913af3e3cc46bec5e01cdf8347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518c8fddc21c321fa30cd1efdc8e6edf4888b2913af3e3cc46bec5e01cdf8347->enter($__internal_518c8fddc21c321fa30cd1efdc8e6edf4888b2913af3e3cc46bec5e01cdf8347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f67f008001f6302c3a4353d1ddb92aa3e657fa5110b5d34cc89e16291064f6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67f008001f6302c3a4353d1ddb92aa3e657fa5110b5d34cc89e16291064f6fa->enter($__internal_f67f008001f6302c3a4353d1ddb92aa3e657fa5110b5d34cc89e16291064f6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_518c8fddc21c321fa30cd1efdc8e6edf4888b2913af3e3cc46bec5e01cdf8347->leave($__internal_518c8fddc21c321fa30cd1efdc8e6edf4888b2913af3e3cc46bec5e01cdf8347_prof);

        
        $__internal_f67f008001f6302c3a4353d1ddb92aa3e657fa5110b5d34cc89e16291064f6fa->leave($__internal_f67f008001f6302c3a4353d1ddb92aa3e657fa5110b5d34cc89e16291064f6fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
