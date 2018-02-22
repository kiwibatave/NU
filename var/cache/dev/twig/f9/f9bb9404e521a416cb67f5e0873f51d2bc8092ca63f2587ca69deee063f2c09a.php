<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3a774001ced387b8e3fbd4fd8f5ff15c5ab6613927efd56e287157f2a3658b8f extends Twig_Template
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
        $__internal_0f2bb2ad795aea8a84d645b79a7f29161c17df80d96bbfdb1569e28c4ff8366e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2bb2ad795aea8a84d645b79a7f29161c17df80d96bbfdb1569e28c4ff8366e->enter($__internal_0f2bb2ad795aea8a84d645b79a7f29161c17df80d96bbfdb1569e28c4ff8366e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_23f6405339d78b1f9f573e41a8b22c48207fd9efe90e60c735e9d8ff270b7b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f6405339d78b1f9f573e41a8b22c48207fd9efe90e60c735e9d8ff270b7b0a->enter($__internal_23f6405339d78b1f9f573e41a8b22c48207fd9efe90e60c735e9d8ff270b7b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0f2bb2ad795aea8a84d645b79a7f29161c17df80d96bbfdb1569e28c4ff8366e->leave($__internal_0f2bb2ad795aea8a84d645b79a7f29161c17df80d96bbfdb1569e28c4ff8366e_prof);

        
        $__internal_23f6405339d78b1f9f573e41a8b22c48207fd9efe90e60c735e9d8ff270b7b0a->leave($__internal_23f6405339d78b1f9f573e41a8b22c48207fd9efe90e60c735e9d8ff270b7b0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
