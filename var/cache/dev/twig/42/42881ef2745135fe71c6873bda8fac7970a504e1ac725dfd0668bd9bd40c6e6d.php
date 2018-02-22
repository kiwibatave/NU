<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_953f17690da9cf4789ad75dbb2bcf392d7657ffcf8672fb10d47bd6c4ec93838 extends Twig_Template
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
        $__internal_ee35148c18d7008d4875ea8408a8db5ec87f8d5d35527cd856a895e7e3a3c5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee35148c18d7008d4875ea8408a8db5ec87f8d5d35527cd856a895e7e3a3c5f1->enter($__internal_ee35148c18d7008d4875ea8408a8db5ec87f8d5d35527cd856a895e7e3a3c5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_16155c063cdbc627523f0cd93b74bf13e880d4cbfcc63fd87ed984e663ce36cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16155c063cdbc627523f0cd93b74bf13e880d4cbfcc63fd87ed984e663ce36cb->enter($__internal_16155c063cdbc627523f0cd93b74bf13e880d4cbfcc63fd87ed984e663ce36cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ee35148c18d7008d4875ea8408a8db5ec87f8d5d35527cd856a895e7e3a3c5f1->leave($__internal_ee35148c18d7008d4875ea8408a8db5ec87f8d5d35527cd856a895e7e3a3c5f1_prof);

        
        $__internal_16155c063cdbc627523f0cd93b74bf13e880d4cbfcc63fd87ed984e663ce36cb->leave($__internal_16155c063cdbc627523f0cd93b74bf13e880d4cbfcc63fd87ed984e663ce36cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
