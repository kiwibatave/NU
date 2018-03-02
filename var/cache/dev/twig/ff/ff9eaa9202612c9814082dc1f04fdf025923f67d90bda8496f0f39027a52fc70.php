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
        $__internal_6e54c0037c0ccacebac5bba0b5bad2d2d71bd901546629bc0a6252dfeab00b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e54c0037c0ccacebac5bba0b5bad2d2d71bd901546629bc0a6252dfeab00b67->enter($__internal_6e54c0037c0ccacebac5bba0b5bad2d2d71bd901546629bc0a6252dfeab00b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5bc5f2b1bb027400c984c0f4242be05469f6637e9786cc3bcc21ae0be8c412f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc5f2b1bb027400c984c0f4242be05469f6637e9786cc3bcc21ae0be8c412f3->enter($__internal_5bc5f2b1bb027400c984c0f4242be05469f6637e9786cc3bcc21ae0be8c412f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6e54c0037c0ccacebac5bba0b5bad2d2d71bd901546629bc0a6252dfeab00b67->leave($__internal_6e54c0037c0ccacebac5bba0b5bad2d2d71bd901546629bc0a6252dfeab00b67_prof);

        
        $__internal_5bc5f2b1bb027400c984c0f4242be05469f6637e9786cc3bcc21ae0be8c412f3->leave($__internal_5bc5f2b1bb027400c984c0f4242be05469f6637e9786cc3bcc21ae0be8c412f3_prof);

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
