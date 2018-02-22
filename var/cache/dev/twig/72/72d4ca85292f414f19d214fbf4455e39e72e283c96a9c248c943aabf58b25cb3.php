<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6f71f999fe5a6aabe26b8e433d6b61cd0778d301c2aaf0f4fc9f9684bd4fb1ae extends Twig_Template
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
        $__internal_75773e9f772f46bd50e5bed612d4dfb3a94e6a3419b8d6e3c4b10057d9c86685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75773e9f772f46bd50e5bed612d4dfb3a94e6a3419b8d6e3c4b10057d9c86685->enter($__internal_75773e9f772f46bd50e5bed612d4dfb3a94e6a3419b8d6e3c4b10057d9c86685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9acb1a7fce9cf0df7776bca645a50d1436eea008f0bc9454ada72b6cfb44b3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acb1a7fce9cf0df7776bca645a50d1436eea008f0bc9454ada72b6cfb44b3af->enter($__internal_9acb1a7fce9cf0df7776bca645a50d1436eea008f0bc9454ada72b6cfb44b3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_75773e9f772f46bd50e5bed612d4dfb3a94e6a3419b8d6e3c4b10057d9c86685->leave($__internal_75773e9f772f46bd50e5bed612d4dfb3a94e6a3419b8d6e3c4b10057d9c86685_prof);

        
        $__internal_9acb1a7fce9cf0df7776bca645a50d1436eea008f0bc9454ada72b6cfb44b3af->leave($__internal_9acb1a7fce9cf0df7776bca645a50d1436eea008f0bc9454ada72b6cfb44b3af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
