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
        $__internal_23bd599b282df20d0a8016c35c23b080e595de80c5ac1448e4581ce39d47ab7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bd599b282df20d0a8016c35c23b080e595de80c5ac1448e4581ce39d47ab7f->enter($__internal_23bd599b282df20d0a8016c35c23b080e595de80c5ac1448e4581ce39d47ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_77e9c297e09509fa81cfdf4c011633b68204cddbcd54b11f9b86c56ec381c00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e9c297e09509fa81cfdf4c011633b68204cddbcd54b11f9b86c56ec381c00e->enter($__internal_77e9c297e09509fa81cfdf4c011633b68204cddbcd54b11f9b86c56ec381c00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_23bd599b282df20d0a8016c35c23b080e595de80c5ac1448e4581ce39d47ab7f->leave($__internal_23bd599b282df20d0a8016c35c23b080e595de80c5ac1448e4581ce39d47ab7f_prof);

        
        $__internal_77e9c297e09509fa81cfdf4c011633b68204cddbcd54b11f9b86c56ec381c00e->leave($__internal_77e9c297e09509fa81cfdf4c011633b68204cddbcd54b11f9b86c56ec381c00e_prof);

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
