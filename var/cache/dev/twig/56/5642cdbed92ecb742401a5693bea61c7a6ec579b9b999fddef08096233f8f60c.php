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
        $__internal_9e069427453c8a0d6b6d849b379305b11bde7233aef47153865aa2407b4d4aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e069427453c8a0d6b6d849b379305b11bde7233aef47153865aa2407b4d4aa6->enter($__internal_9e069427453c8a0d6b6d849b379305b11bde7233aef47153865aa2407b4d4aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4e5c58341b9e58ee21e6000509cfe6756cb01f7dab8683056b9cf0786a9ef3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5c58341b9e58ee21e6000509cfe6756cb01f7dab8683056b9cf0786a9ef3c1->enter($__internal_4e5c58341b9e58ee21e6000509cfe6756cb01f7dab8683056b9cf0786a9ef3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9e069427453c8a0d6b6d849b379305b11bde7233aef47153865aa2407b4d4aa6->leave($__internal_9e069427453c8a0d6b6d849b379305b11bde7233aef47153865aa2407b4d4aa6_prof);

        
        $__internal_4e5c58341b9e58ee21e6000509cfe6756cb01f7dab8683056b9cf0786a9ef3c1->leave($__internal_4e5c58341b9e58ee21e6000509cfe6756cb01f7dab8683056b9cf0786a9ef3c1_prof);

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
