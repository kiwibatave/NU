<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d135a25c1d2bfc3bc8357c612f3c289f8750f18e84019de90ec3ae46ad9ad1f1 extends Twig_Template
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
        $__internal_c781dccfb801fddb93f5fc104f23250862bc153543249ddd1e23b2573e747cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c781dccfb801fddb93f5fc104f23250862bc153543249ddd1e23b2573e747cce->enter($__internal_c781dccfb801fddb93f5fc104f23250862bc153543249ddd1e23b2573e747cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6e8be68aa6868e0e4e3b8958d724d7a22d76d59edae52574a252000e8bf2c1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8be68aa6868e0e4e3b8958d724d7a22d76d59edae52574a252000e8bf2c1e5->enter($__internal_6e8be68aa6868e0e4e3b8958d724d7a22d76d59edae52574a252000e8bf2c1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c781dccfb801fddb93f5fc104f23250862bc153543249ddd1e23b2573e747cce->leave($__internal_c781dccfb801fddb93f5fc104f23250862bc153543249ddd1e23b2573e747cce_prof);

        
        $__internal_6e8be68aa6868e0e4e3b8958d724d7a22d76d59edae52574a252000e8bf2c1e5->leave($__internal_6e8be68aa6868e0e4e3b8958d724d7a22d76d59edae52574a252000e8bf2c1e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
