<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3b8d34f6ee137da513cc21cba976a80ab0e9f41f7839d1e1ca48218f06e63aa9 extends Twig_Template
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
        $__internal_5f446e264ee0dc435a88cfa3e968e9f2044a853efcfdc6a4980adf29a3722713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f446e264ee0dc435a88cfa3e968e9f2044a853efcfdc6a4980adf29a3722713->enter($__internal_5f446e264ee0dc435a88cfa3e968e9f2044a853efcfdc6a4980adf29a3722713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_af3f4e2f3aa4a188e195adbf51d06c3a8462e299bc1c51740f9803539020ed6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3f4e2f3aa4a188e195adbf51d06c3a8462e299bc1c51740f9803539020ed6e->enter($__internal_af3f4e2f3aa4a188e195adbf51d06c3a8462e299bc1c51740f9803539020ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5f446e264ee0dc435a88cfa3e968e9f2044a853efcfdc6a4980adf29a3722713->leave($__internal_5f446e264ee0dc435a88cfa3e968e9f2044a853efcfdc6a4980adf29a3722713_prof);

        
        $__internal_af3f4e2f3aa4a188e195adbf51d06c3a8462e299bc1c51740f9803539020ed6e->leave($__internal_af3f4e2f3aa4a188e195adbf51d06c3a8462e299bc1c51740f9803539020ed6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
