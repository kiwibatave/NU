<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d199ff383b501f0b936cd3918d8d6ac3c4f1fca5432dfb79db2961f3c0d1e915 extends Twig_Template
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
        $__internal_5367ffa82f06291543458abf1b853e851a3ce3fcd4173657a4eb530ec7331e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5367ffa82f06291543458abf1b853e851a3ce3fcd4173657a4eb530ec7331e89->enter($__internal_5367ffa82f06291543458abf1b853e851a3ce3fcd4173657a4eb530ec7331e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c396d33b78ea8909b6431f938ceddb10c4eed272af40b2f4d148f11c8caf600f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c396d33b78ea8909b6431f938ceddb10c4eed272af40b2f4d148f11c8caf600f->enter($__internal_c396d33b78ea8909b6431f938ceddb10c4eed272af40b2f4d148f11c8caf600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5367ffa82f06291543458abf1b853e851a3ce3fcd4173657a4eb530ec7331e89->leave($__internal_5367ffa82f06291543458abf1b853e851a3ce3fcd4173657a4eb530ec7331e89_prof);

        
        $__internal_c396d33b78ea8909b6431f938ceddb10c4eed272af40b2f4d148f11c8caf600f->leave($__internal_c396d33b78ea8909b6431f938ceddb10c4eed272af40b2f4d148f11c8caf600f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
