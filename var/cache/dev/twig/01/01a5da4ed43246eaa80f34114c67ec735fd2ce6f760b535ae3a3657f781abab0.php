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
        $__internal_e2c4738ad175f19709c64f42995afc273501b778ea49baee43613f5567f531d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c4738ad175f19709c64f42995afc273501b778ea49baee43613f5567f531d5->enter($__internal_e2c4738ad175f19709c64f42995afc273501b778ea49baee43613f5567f531d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c0c33ae9bb6b99e87de4d1685038ad6efc87ab623d90e5cbea007ec575a62a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c33ae9bb6b99e87de4d1685038ad6efc87ab623d90e5cbea007ec575a62a45->enter($__internal_c0c33ae9bb6b99e87de4d1685038ad6efc87ab623d90e5cbea007ec575a62a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e2c4738ad175f19709c64f42995afc273501b778ea49baee43613f5567f531d5->leave($__internal_e2c4738ad175f19709c64f42995afc273501b778ea49baee43613f5567f531d5_prof);

        
        $__internal_c0c33ae9bb6b99e87de4d1685038ad6efc87ab623d90e5cbea007ec575a62a45->leave($__internal_c0c33ae9bb6b99e87de4d1685038ad6efc87ab623d90e5cbea007ec575a62a45_prof);

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
