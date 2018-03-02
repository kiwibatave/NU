<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3761060dd5dce5fc4d356cc4ac8d295f7ec70da46f921c29a2d9e89500d444b7 extends Twig_Template
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
        $__internal_6df566766994a73bc0dc6618a1a4b8c28a00a5c8d4ffbb378b55bd917c44d32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df566766994a73bc0dc6618a1a4b8c28a00a5c8d4ffbb378b55bd917c44d32f->enter($__internal_6df566766994a73bc0dc6618a1a4b8c28a00a5c8d4ffbb378b55bd917c44d32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9a31c4d1dd501333de4b67b64d3583f8a6e161e4334263dd03217ba65647349f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a31c4d1dd501333de4b67b64d3583f8a6e161e4334263dd03217ba65647349f->enter($__internal_9a31c4d1dd501333de4b67b64d3583f8a6e161e4334263dd03217ba65647349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6df566766994a73bc0dc6618a1a4b8c28a00a5c8d4ffbb378b55bd917c44d32f->leave($__internal_6df566766994a73bc0dc6618a1a4b8c28a00a5c8d4ffbb378b55bd917c44d32f_prof);

        
        $__internal_9a31c4d1dd501333de4b67b64d3583f8a6e161e4334263dd03217ba65647349f->leave($__internal_9a31c4d1dd501333de4b67b64d3583f8a6e161e4334263dd03217ba65647349f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
