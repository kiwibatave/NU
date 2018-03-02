<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d81e6f72d85c44d84344df364676ed3a17398f85e4b34f4a70a82d4a11249e82 extends Twig_Template
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
        $__internal_23d5a0334ad951d365890702a5a8f1c0e559967da0d1057e837053ed37aeb7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d5a0334ad951d365890702a5a8f1c0e559967da0d1057e837053ed37aeb7d0->enter($__internal_23d5a0334ad951d365890702a5a8f1c0e559967da0d1057e837053ed37aeb7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_667ddf2cdd99ab02ee5d5d3b5d02c2840c77f9a4dbddb743130514a521fbee7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667ddf2cdd99ab02ee5d5d3b5d02c2840c77f9a4dbddb743130514a521fbee7f->enter($__internal_667ddf2cdd99ab02ee5d5d3b5d02c2840c77f9a4dbddb743130514a521fbee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_23d5a0334ad951d365890702a5a8f1c0e559967da0d1057e837053ed37aeb7d0->leave($__internal_23d5a0334ad951d365890702a5a8f1c0e559967da0d1057e837053ed37aeb7d0_prof);

        
        $__internal_667ddf2cdd99ab02ee5d5d3b5d02c2840c77f9a4dbddb743130514a521fbee7f->leave($__internal_667ddf2cdd99ab02ee5d5d3b5d02c2840c77f9a4dbddb743130514a521fbee7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
