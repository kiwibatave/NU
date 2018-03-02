<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6520de819977e32a31ef7ce4fca308f3cbfa14b60fe88aeac7aa3c928ff476ca extends Twig_Template
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
        $__internal_833ad874397876b208e09a57e1a5dc0e626e6b56360af1c01624f7bca5e47a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833ad874397876b208e09a57e1a5dc0e626e6b56360af1c01624f7bca5e47a8b->enter($__internal_833ad874397876b208e09a57e1a5dc0e626e6b56360af1c01624f7bca5e47a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0a5bb4115b3291b56465cddd625145e71eeb9f93c4c2e70de230903f23078726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5bb4115b3291b56465cddd625145e71eeb9f93c4c2e70de230903f23078726->enter($__internal_0a5bb4115b3291b56465cddd625145e71eeb9f93c4c2e70de230903f23078726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_833ad874397876b208e09a57e1a5dc0e626e6b56360af1c01624f7bca5e47a8b->leave($__internal_833ad874397876b208e09a57e1a5dc0e626e6b56360af1c01624f7bca5e47a8b_prof);

        
        $__internal_0a5bb4115b3291b56465cddd625145e71eeb9f93c4c2e70de230903f23078726->leave($__internal_0a5bb4115b3291b56465cddd625145e71eeb9f93c4c2e70de230903f23078726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
