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
        $__internal_03d6df9f9bf3a79b8b33ad4777b2776cfc0d01f56e2d529773c279cc6b6c6553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d6df9f9bf3a79b8b33ad4777b2776cfc0d01f56e2d529773c279cc6b6c6553->enter($__internal_03d6df9f9bf3a79b8b33ad4777b2776cfc0d01f56e2d529773c279cc6b6c6553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3913afb5e6cfe15ba0b0453468b4ec2ba402faca0cdb6d9ec05f93680541b936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3913afb5e6cfe15ba0b0453468b4ec2ba402faca0cdb6d9ec05f93680541b936->enter($__internal_3913afb5e6cfe15ba0b0453468b4ec2ba402faca0cdb6d9ec05f93680541b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_03d6df9f9bf3a79b8b33ad4777b2776cfc0d01f56e2d529773c279cc6b6c6553->leave($__internal_03d6df9f9bf3a79b8b33ad4777b2776cfc0d01f56e2d529773c279cc6b6c6553_prof);

        
        $__internal_3913afb5e6cfe15ba0b0453468b4ec2ba402faca0cdb6d9ec05f93680541b936->leave($__internal_3913afb5e6cfe15ba0b0453468b4ec2ba402faca0cdb6d9ec05f93680541b936_prof);

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
