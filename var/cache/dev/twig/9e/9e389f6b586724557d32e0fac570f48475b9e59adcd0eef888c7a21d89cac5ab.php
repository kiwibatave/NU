<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2d46912150fa98ecf27a6ff81aea8ab6bad496a7f3b37aaf3526131fc09a964f extends Twig_Template
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
        $__internal_c5b1e28b7c2171a24862aea32a251856f857f998248dd63c8123a4abdd28255c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b1e28b7c2171a24862aea32a251856f857f998248dd63c8123a4abdd28255c->enter($__internal_c5b1e28b7c2171a24862aea32a251856f857f998248dd63c8123a4abdd28255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_fb5ace73b32ba9f84053b0c8285e6e57650689760c20e4cc571e7c76797026b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5ace73b32ba9f84053b0c8285e6e57650689760c20e4cc571e7c76797026b6->enter($__internal_fb5ace73b32ba9f84053b0c8285e6e57650689760c20e4cc571e7c76797026b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c5b1e28b7c2171a24862aea32a251856f857f998248dd63c8123a4abdd28255c->leave($__internal_c5b1e28b7c2171a24862aea32a251856f857f998248dd63c8123a4abdd28255c_prof);

        
        $__internal_fb5ace73b32ba9f84053b0c8285e6e57650689760c20e4cc571e7c76797026b6->leave($__internal_fb5ace73b32ba9f84053b0c8285e6e57650689760c20e4cc571e7c76797026b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
