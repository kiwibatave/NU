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
        $__internal_e79eef08fa3e5ac8d60fde1caae7b3255c0969baf7c953576271bb475699d51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79eef08fa3e5ac8d60fde1caae7b3255c0969baf7c953576271bb475699d51b->enter($__internal_e79eef08fa3e5ac8d60fde1caae7b3255c0969baf7c953576271bb475699d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ae4cf0fff761dbc606cefea3b3ae3e8dd277f1fdda5117aeda921ad598dcfc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4cf0fff761dbc606cefea3b3ae3e8dd277f1fdda5117aeda921ad598dcfc67->enter($__internal_ae4cf0fff761dbc606cefea3b3ae3e8dd277f1fdda5117aeda921ad598dcfc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e79eef08fa3e5ac8d60fde1caae7b3255c0969baf7c953576271bb475699d51b->leave($__internal_e79eef08fa3e5ac8d60fde1caae7b3255c0969baf7c953576271bb475699d51b_prof);

        
        $__internal_ae4cf0fff761dbc606cefea3b3ae3e8dd277f1fdda5117aeda921ad598dcfc67->leave($__internal_ae4cf0fff761dbc606cefea3b3ae3e8dd277f1fdda5117aeda921ad598dcfc67_prof);

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
