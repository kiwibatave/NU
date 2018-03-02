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
        $__internal_fea9b97f451c1ce036541f592877df42e64175f44a25157552cfcb52b341397a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea9b97f451c1ce036541f592877df42e64175f44a25157552cfcb52b341397a->enter($__internal_fea9b97f451c1ce036541f592877df42e64175f44a25157552cfcb52b341397a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_657faaf3b3b152ebbd59ff386a03483557a4619321296cf0959e4ee6d1d0d814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657faaf3b3b152ebbd59ff386a03483557a4619321296cf0959e4ee6d1d0d814->enter($__internal_657faaf3b3b152ebbd59ff386a03483557a4619321296cf0959e4ee6d1d0d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fea9b97f451c1ce036541f592877df42e64175f44a25157552cfcb52b341397a->leave($__internal_fea9b97f451c1ce036541f592877df42e64175f44a25157552cfcb52b341397a_prof);

        
        $__internal_657faaf3b3b152ebbd59ff386a03483557a4619321296cf0959e4ee6d1d0d814->leave($__internal_657faaf3b3b152ebbd59ff386a03483557a4619321296cf0959e4ee6d1d0d814_prof);

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
