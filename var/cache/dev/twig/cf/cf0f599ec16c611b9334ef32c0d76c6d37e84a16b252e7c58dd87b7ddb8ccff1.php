<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_7e7f16773596904f640c1bd5288a930f1bf06243a6f46f68c3a2818c3ae3b2ca extends Twig_Template
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
        $__internal_cdd7a00c9bb66a30a77ae82a530609f12e6b8161381d6cf1bf7eb8b30bffecce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd7a00c9bb66a30a77ae82a530609f12e6b8161381d6cf1bf7eb8b30bffecce->enter($__internal_cdd7a00c9bb66a30a77ae82a530609f12e6b8161381d6cf1bf7eb8b30bffecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_6a9585325a5ea9f136560e7f9b77bcca654865a29209ade65593ee3a2e008557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9585325a5ea9f136560e7f9b77bcca654865a29209ade65593ee3a2e008557->enter($__internal_6a9585325a5ea9f136560e7f9b77bcca654865a29209ade65593ee3a2e008557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_cdd7a00c9bb66a30a77ae82a530609f12e6b8161381d6cf1bf7eb8b30bffecce->leave($__internal_cdd7a00c9bb66a30a77ae82a530609f12e6b8161381d6cf1bf7eb8b30bffecce_prof);

        
        $__internal_6a9585325a5ea9f136560e7f9b77bcca654865a29209ade65593ee3a2e008557->leave($__internal_6a9585325a5ea9f136560e7f9b77bcca654865a29209ade65593ee3a2e008557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}