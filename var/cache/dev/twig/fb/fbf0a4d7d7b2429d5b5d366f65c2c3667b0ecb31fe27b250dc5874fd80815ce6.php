<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a4a608e55507cde078e7f18c09a86cba10238507688749fb098076fa39569fbf extends Twig_Template
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
        $__internal_a8b00fd84f553c83e29376772a58df18e16e26d0c0355f4946cba4bee4748568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b00fd84f553c83e29376772a58df18e16e26d0c0355f4946cba4bee4748568->enter($__internal_a8b00fd84f553c83e29376772a58df18e16e26d0c0355f4946cba4bee4748568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b873e52f2a083657167b7894a9227e4937930b5cb8a8cac64672f73e3df476cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b873e52f2a083657167b7894a9227e4937930b5cb8a8cac64672f73e3df476cc->enter($__internal_b873e52f2a083657167b7894a9227e4937930b5cb8a8cac64672f73e3df476cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a8b00fd84f553c83e29376772a58df18e16e26d0c0355f4946cba4bee4748568->leave($__internal_a8b00fd84f553c83e29376772a58df18e16e26d0c0355f4946cba4bee4748568_prof);

        
        $__internal_b873e52f2a083657167b7894a9227e4937930b5cb8a8cac64672f73e3df476cc->leave($__internal_b873e52f2a083657167b7894a9227e4937930b5cb8a8cac64672f73e3df476cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
