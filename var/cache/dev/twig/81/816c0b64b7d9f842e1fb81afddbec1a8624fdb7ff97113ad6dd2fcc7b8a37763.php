<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_84cd1735eac857b5ac6301f856f50b9dd49ecd38bcf9b9f8d0a7f3371def86a0 extends Twig_Template
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
        $__internal_78d4073a056e4c2a3af49ededae2d030e111021099a98888a455f29f7242295f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d4073a056e4c2a3af49ededae2d030e111021099a98888a455f29f7242295f->enter($__internal_78d4073a056e4c2a3af49ededae2d030e111021099a98888a455f29f7242295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d117c80ad463fbebd30dc86256029719d7d5ca373b2b49dea4f9cb55841f0a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d117c80ad463fbebd30dc86256029719d7d5ca373b2b49dea4f9cb55841f0a4c->enter($__internal_d117c80ad463fbebd30dc86256029719d7d5ca373b2b49dea4f9cb55841f0a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_78d4073a056e4c2a3af49ededae2d030e111021099a98888a455f29f7242295f->leave($__internal_78d4073a056e4c2a3af49ededae2d030e111021099a98888a455f29f7242295f_prof);

        
        $__internal_d117c80ad463fbebd30dc86256029719d7d5ca373b2b49dea4f9cb55841f0a4c->leave($__internal_d117c80ad463fbebd30dc86256029719d7d5ca373b2b49dea4f9cb55841f0a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
