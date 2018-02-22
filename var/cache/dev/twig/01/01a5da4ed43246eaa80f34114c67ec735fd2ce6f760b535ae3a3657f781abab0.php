<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c1a60b2000c87a3829e9fdd607d4d3a6d7d770363ddb967e960b1693edf1a160 extends Twig_Template
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
        $__internal_b8695ee7be9b3505a702a3c4689afbb673ed54298f6300c1699cbb4d04a5ae34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8695ee7be9b3505a702a3c4689afbb673ed54298f6300c1699cbb4d04a5ae34->enter($__internal_b8695ee7be9b3505a702a3c4689afbb673ed54298f6300c1699cbb4d04a5ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2651e0fe6e64a645c7890431ce74c17764d3a98d3b338b28a811f4ea7746b024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2651e0fe6e64a645c7890431ce74c17764d3a98d3b338b28a811f4ea7746b024->enter($__internal_2651e0fe6e64a645c7890431ce74c17764d3a98d3b338b28a811f4ea7746b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b8695ee7be9b3505a702a3c4689afbb673ed54298f6300c1699cbb4d04a5ae34->leave($__internal_b8695ee7be9b3505a702a3c4689afbb673ed54298f6300c1699cbb4d04a5ae34_prof);

        
        $__internal_2651e0fe6e64a645c7890431ce74c17764d3a98d3b338b28a811f4ea7746b024->leave($__internal_2651e0fe6e64a645c7890431ce74c17764d3a98d3b338b28a811f4ea7746b024_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
