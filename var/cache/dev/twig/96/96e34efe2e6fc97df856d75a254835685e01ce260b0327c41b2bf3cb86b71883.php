<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d429f9eb48bd65b078f4f3b6b7f8f7ba9229e01f1e9622af8afbe4eb174d26ff extends Twig_Template
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
        $__internal_400421625855392523986df3cfc86857825e1a8d5de6bf09ee78573dab59b175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400421625855392523986df3cfc86857825e1a8d5de6bf09ee78573dab59b175->enter($__internal_400421625855392523986df3cfc86857825e1a8d5de6bf09ee78573dab59b175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_79d3e99cf070906055a8c6ff9a1ef255cd459ff2c2e627ec6876348112be8f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d3e99cf070906055a8c6ff9a1ef255cd459ff2c2e627ec6876348112be8f51->enter($__internal_79d3e99cf070906055a8c6ff9a1ef255cd459ff2c2e627ec6876348112be8f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_400421625855392523986df3cfc86857825e1a8d5de6bf09ee78573dab59b175->leave($__internal_400421625855392523986df3cfc86857825e1a8d5de6bf09ee78573dab59b175_prof);

        
        $__internal_79d3e99cf070906055a8c6ff9a1ef255cd459ff2c2e627ec6876348112be8f51->leave($__internal_79d3e99cf070906055a8c6ff9a1ef255cd459ff2c2e627ec6876348112be8f51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
