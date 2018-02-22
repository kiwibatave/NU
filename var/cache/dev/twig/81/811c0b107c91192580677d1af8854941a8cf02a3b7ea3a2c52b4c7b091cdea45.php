<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5dc19ad6beb67bc0528de3e6436d7550adb92cf032b477589a308de5cb0f5048 extends Twig_Template
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
        $__internal_8981c0cbf79ddf28fa034bbf928800f3f9d2847c84cdc9c07d6d1e4714c449a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8981c0cbf79ddf28fa034bbf928800f3f9d2847c84cdc9c07d6d1e4714c449a2->enter($__internal_8981c0cbf79ddf28fa034bbf928800f3f9d2847c84cdc9c07d6d1e4714c449a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1f4c2d68ceaf34e90052476df2238c871cf15099e3bca61dc392d8f9ad693eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4c2d68ceaf34e90052476df2238c871cf15099e3bca61dc392d8f9ad693eb6->enter($__internal_1f4c2d68ceaf34e90052476df2238c871cf15099e3bca61dc392d8f9ad693eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8981c0cbf79ddf28fa034bbf928800f3f9d2847c84cdc9c07d6d1e4714c449a2->leave($__internal_8981c0cbf79ddf28fa034bbf928800f3f9d2847c84cdc9c07d6d1e4714c449a2_prof);

        
        $__internal_1f4c2d68ceaf34e90052476df2238c871cf15099e3bca61dc392d8f9ad693eb6->leave($__internal_1f4c2d68ceaf34e90052476df2238c871cf15099e3bca61dc392d8f9ad693eb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
