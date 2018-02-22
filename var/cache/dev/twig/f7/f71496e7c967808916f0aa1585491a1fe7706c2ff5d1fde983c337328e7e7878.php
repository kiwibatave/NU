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
        $__internal_dfc1f006a466ed1aa2b5ea0228e7bc829a8c8be77064c627581a53d8cc223eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc1f006a466ed1aa2b5ea0228e7bc829a8c8be77064c627581a53d8cc223eb9->enter($__internal_dfc1f006a466ed1aa2b5ea0228e7bc829a8c8be77064c627581a53d8cc223eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_43d77ccd9c617e93456f7b894761444d29943e5c2760ec984ec61a5048d9a13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d77ccd9c617e93456f7b894761444d29943e5c2760ec984ec61a5048d9a13e->enter($__internal_43d77ccd9c617e93456f7b894761444d29943e5c2760ec984ec61a5048d9a13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dfc1f006a466ed1aa2b5ea0228e7bc829a8c8be77064c627581a53d8cc223eb9->leave($__internal_dfc1f006a466ed1aa2b5ea0228e7bc829a8c8be77064c627581a53d8cc223eb9_prof);

        
        $__internal_43d77ccd9c617e93456f7b894761444d29943e5c2760ec984ec61a5048d9a13e->leave($__internal_43d77ccd9c617e93456f7b894761444d29943e5c2760ec984ec61a5048d9a13e_prof);

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
