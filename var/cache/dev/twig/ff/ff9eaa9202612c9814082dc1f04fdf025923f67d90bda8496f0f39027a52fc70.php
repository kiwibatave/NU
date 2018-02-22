<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bd204297d0d2c8db0a985ffd252b4ec8579d065b0045995f481916a290c5d5eb extends Twig_Template
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
        $__internal_0ca9dc9d619abf1349d37854ce634fba8affa7b67aff3de324d6c685fa418523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca9dc9d619abf1349d37854ce634fba8affa7b67aff3de324d6c685fa418523->enter($__internal_0ca9dc9d619abf1349d37854ce634fba8affa7b67aff3de324d6c685fa418523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e051e988d8a20f3c6b92a180b3856bfadef36ab87954c1ccc7c2425fbeb481a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e051e988d8a20f3c6b92a180b3856bfadef36ab87954c1ccc7c2425fbeb481a2->enter($__internal_e051e988d8a20f3c6b92a180b3856bfadef36ab87954c1ccc7c2425fbeb481a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0ca9dc9d619abf1349d37854ce634fba8affa7b67aff3de324d6c685fa418523->leave($__internal_0ca9dc9d619abf1349d37854ce634fba8affa7b67aff3de324d6c685fa418523_prof);

        
        $__internal_e051e988d8a20f3c6b92a180b3856bfadef36ab87954c1ccc7c2425fbeb481a2->leave($__internal_e051e988d8a20f3c6b92a180b3856bfadef36ab87954c1ccc7c2425fbeb481a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
