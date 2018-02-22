<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c46601dbd5158f9401294a93ece8e84cef4be4a0b3080a93ad3d2f4f5a4cd80 extends Twig_Template
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
        $__internal_886efe6e1dec6e6942fadbf1db60312303528d55969ef44ef113b3dd8e688c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886efe6e1dec6e6942fadbf1db60312303528d55969ef44ef113b3dd8e688c56->enter($__internal_886efe6e1dec6e6942fadbf1db60312303528d55969ef44ef113b3dd8e688c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_fcde1d4d2dcf2ca1956b35ac65e488d92836a3f80d67cf6e237e1a219eaee8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcde1d4d2dcf2ca1956b35ac65e488d92836a3f80d67cf6e237e1a219eaee8b6->enter($__internal_fcde1d4d2dcf2ca1956b35ac65e488d92836a3f80d67cf6e237e1a219eaee8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_886efe6e1dec6e6942fadbf1db60312303528d55969ef44ef113b3dd8e688c56->leave($__internal_886efe6e1dec6e6942fadbf1db60312303528d55969ef44ef113b3dd8e688c56_prof);

        
        $__internal_fcde1d4d2dcf2ca1956b35ac65e488d92836a3f80d67cf6e237e1a219eaee8b6->leave($__internal_fcde1d4d2dcf2ca1956b35ac65e488d92836a3f80d67cf6e237e1a219eaee8b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
