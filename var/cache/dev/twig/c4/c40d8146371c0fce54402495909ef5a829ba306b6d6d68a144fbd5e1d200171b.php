<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_eeebbcd1731899f796fe53cb8f747c87269cec7051028e26ef4b83d76ff8d36c extends Twig_Template
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
        $__internal_1c2ca7454b782a5c65044defcc09e1841edb70e8f6c6fcef301c7aa5f5811ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2ca7454b782a5c65044defcc09e1841edb70e8f6c6fcef301c7aa5f5811ec7->enter($__internal_1c2ca7454b782a5c65044defcc09e1841edb70e8f6c6fcef301c7aa5f5811ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f54dfc7b1c785458f75318b8aa6e8d7f2b97541d23c9b8798f25222f257cbe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54dfc7b1c785458f75318b8aa6e8d7f2b97541d23c9b8798f25222f257cbe60->enter($__internal_f54dfc7b1c785458f75318b8aa6e8d7f2b97541d23c9b8798f25222f257cbe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1c2ca7454b782a5c65044defcc09e1841edb70e8f6c6fcef301c7aa5f5811ec7->leave($__internal_1c2ca7454b782a5c65044defcc09e1841edb70e8f6c6fcef301c7aa5f5811ec7_prof);

        
        $__internal_f54dfc7b1c785458f75318b8aa6e8d7f2b97541d23c9b8798f25222f257cbe60->leave($__internal_f54dfc7b1c785458f75318b8aa6e8d7f2b97541d23c9b8798f25222f257cbe60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
