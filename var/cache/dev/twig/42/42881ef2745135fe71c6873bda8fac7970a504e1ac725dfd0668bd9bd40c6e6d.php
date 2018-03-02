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
        $__internal_2cd7b91168ccb91003ad3ab3e2146818ff99f238df090b2dfbe469bdff19b407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd7b91168ccb91003ad3ab3e2146818ff99f238df090b2dfbe469bdff19b407->enter($__internal_2cd7b91168ccb91003ad3ab3e2146818ff99f238df090b2dfbe469bdff19b407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_308ec2d6887d392b610a61d6a243160e5fd1edbe66831c00b23a759a22ae7b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308ec2d6887d392b610a61d6a243160e5fd1edbe66831c00b23a759a22ae7b27->enter($__internal_308ec2d6887d392b610a61d6a243160e5fd1edbe66831c00b23a759a22ae7b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2cd7b91168ccb91003ad3ab3e2146818ff99f238df090b2dfbe469bdff19b407->leave($__internal_2cd7b91168ccb91003ad3ab3e2146818ff99f238df090b2dfbe469bdff19b407_prof);

        
        $__internal_308ec2d6887d392b610a61d6a243160e5fd1edbe66831c00b23a759a22ae7b27->leave($__internal_308ec2d6887d392b610a61d6a243160e5fd1edbe66831c00b23a759a22ae7b27_prof);

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
