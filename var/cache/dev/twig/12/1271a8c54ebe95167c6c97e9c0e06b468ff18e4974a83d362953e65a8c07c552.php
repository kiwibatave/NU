<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e1dfc66c2b09387122b7417c6e505c5d99334cfa002446b400e2f582268328fa extends Twig_Template
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
        $__internal_fe4d88f75868f9e1047fd270655118f29bb191a2bb64b67f7c721a56d9bfdcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4d88f75868f9e1047fd270655118f29bb191a2bb64b67f7c721a56d9bfdcd4->enter($__internal_fe4d88f75868f9e1047fd270655118f29bb191a2bb64b67f7c721a56d9bfdcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_91a9b6332023c3d403a292075e1162eaf553eda3c2737def203d38b5f3bcab53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a9b6332023c3d403a292075e1162eaf553eda3c2737def203d38b5f3bcab53->enter($__internal_91a9b6332023c3d403a292075e1162eaf553eda3c2737def203d38b5f3bcab53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fe4d88f75868f9e1047fd270655118f29bb191a2bb64b67f7c721a56d9bfdcd4->leave($__internal_fe4d88f75868f9e1047fd270655118f29bb191a2bb64b67f7c721a56d9bfdcd4_prof);

        
        $__internal_91a9b6332023c3d403a292075e1162eaf553eda3c2737def203d38b5f3bcab53->leave($__internal_91a9b6332023c3d403a292075e1162eaf553eda3c2737def203d38b5f3bcab53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
