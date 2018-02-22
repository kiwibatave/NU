<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3761060dd5dce5fc4d356cc4ac8d295f7ec70da46f921c29a2d9e89500d444b7 extends Twig_Template
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
        $__internal_b2adfbc5ff0e8f8a44ac947de75e66158d368e0e438a79759909da42f559a73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2adfbc5ff0e8f8a44ac947de75e66158d368e0e438a79759909da42f559a73a->enter($__internal_b2adfbc5ff0e8f8a44ac947de75e66158d368e0e438a79759909da42f559a73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6a1b1582d3ad37bd05af83880b65b52ce4e43908b2acd1730e72d419794221d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1b1582d3ad37bd05af83880b65b52ce4e43908b2acd1730e72d419794221d5->enter($__internal_6a1b1582d3ad37bd05af83880b65b52ce4e43908b2acd1730e72d419794221d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b2adfbc5ff0e8f8a44ac947de75e66158d368e0e438a79759909da42f559a73a->leave($__internal_b2adfbc5ff0e8f8a44ac947de75e66158d368e0e438a79759909da42f559a73a_prof);

        
        $__internal_6a1b1582d3ad37bd05af83880b65b52ce4e43908b2acd1730e72d419794221d5->leave($__internal_6a1b1582d3ad37bd05af83880b65b52ce4e43908b2acd1730e72d419794221d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
