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
        $__internal_f86cb2fe651c437d2b7bdb9f2ec938fe2466150750709e5803bd403543a071e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86cb2fe651c437d2b7bdb9f2ec938fe2466150750709e5803bd403543a071e0->enter($__internal_f86cb2fe651c437d2b7bdb9f2ec938fe2466150750709e5803bd403543a071e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b007fe49021e12d0eab3e52152c313bb3fb488719812f01a88697617f27f09d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b007fe49021e12d0eab3e52152c313bb3fb488719812f01a88697617f27f09d8->enter($__internal_b007fe49021e12d0eab3e52152c313bb3fb488719812f01a88697617f27f09d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f86cb2fe651c437d2b7bdb9f2ec938fe2466150750709e5803bd403543a071e0->leave($__internal_f86cb2fe651c437d2b7bdb9f2ec938fe2466150750709e5803bd403543a071e0_prof);

        
        $__internal_b007fe49021e12d0eab3e52152c313bb3fb488719812f01a88697617f27f09d8->leave($__internal_b007fe49021e12d0eab3e52152c313bb3fb488719812f01a88697617f27f09d8_prof);

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
