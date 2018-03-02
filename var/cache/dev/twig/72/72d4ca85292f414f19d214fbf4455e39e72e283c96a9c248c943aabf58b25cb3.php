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
        $__internal_deb88df5825e0c14bf4ca2ffa4b55cc1448f0d5666cb7b0c830899ad3d1709c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb88df5825e0c14bf4ca2ffa4b55cc1448f0d5666cb7b0c830899ad3d1709c6->enter($__internal_deb88df5825e0c14bf4ca2ffa4b55cc1448f0d5666cb7b0c830899ad3d1709c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_fe0e5a0d235d4e195bf5201a5b6fdfa4af9b649f226e011dd9ef1d96f19e0c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0e5a0d235d4e195bf5201a5b6fdfa4af9b649f226e011dd9ef1d96f19e0c32->enter($__internal_fe0e5a0d235d4e195bf5201a5b6fdfa4af9b649f226e011dd9ef1d96f19e0c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_deb88df5825e0c14bf4ca2ffa4b55cc1448f0d5666cb7b0c830899ad3d1709c6->leave($__internal_deb88df5825e0c14bf4ca2ffa4b55cc1448f0d5666cb7b0c830899ad3d1709c6_prof);

        
        $__internal_fe0e5a0d235d4e195bf5201a5b6fdfa4af9b649f226e011dd9ef1d96f19e0c32->leave($__internal_fe0e5a0d235d4e195bf5201a5b6fdfa4af9b649f226e011dd9ef1d96f19e0c32_prof);

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
