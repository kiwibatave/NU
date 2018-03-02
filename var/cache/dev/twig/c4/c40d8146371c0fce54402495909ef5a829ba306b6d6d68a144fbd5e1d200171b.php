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
        $__internal_1f944e5a6afb9a5488dbb1c37da0b2bfd31e919a1067151816f119b1056b222b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f944e5a6afb9a5488dbb1c37da0b2bfd31e919a1067151816f119b1056b222b->enter($__internal_1f944e5a6afb9a5488dbb1c37da0b2bfd31e919a1067151816f119b1056b222b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9c75131ab7c8e1b67bf00b5ad634a035c1ad23a15385c3a48da1160ad61e1ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c75131ab7c8e1b67bf00b5ad634a035c1ad23a15385c3a48da1160ad61e1ad6->enter($__internal_9c75131ab7c8e1b67bf00b5ad634a035c1ad23a15385c3a48da1160ad61e1ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_1f944e5a6afb9a5488dbb1c37da0b2bfd31e919a1067151816f119b1056b222b->leave($__internal_1f944e5a6afb9a5488dbb1c37da0b2bfd31e919a1067151816f119b1056b222b_prof);

        
        $__internal_9c75131ab7c8e1b67bf00b5ad634a035c1ad23a15385c3a48da1160ad61e1ad6->leave($__internal_9c75131ab7c8e1b67bf00b5ad634a035c1ad23a15385c3a48da1160ad61e1ad6_prof);

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
