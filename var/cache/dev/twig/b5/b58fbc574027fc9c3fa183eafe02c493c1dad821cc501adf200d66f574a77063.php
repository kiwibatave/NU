<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5da267aa7e5441e874db048eec3189121cb7f20262a4b36c4a89dbf89ff95e7e extends Twig_Template
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
        $__internal_89c2969a2b528ba4fad27a7e9270b230952c198328180545558159db6e1fb455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c2969a2b528ba4fad27a7e9270b230952c198328180545558159db6e1fb455->enter($__internal_89c2969a2b528ba4fad27a7e9270b230952c198328180545558159db6e1fb455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_14ca9157c7949e536cfadf70e4cbd0cc66613be84287171b02ce3de6618ee5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ca9157c7949e536cfadf70e4cbd0cc66613be84287171b02ce3de6618ee5b4->enter($__internal_14ca9157c7949e536cfadf70e4cbd0cc66613be84287171b02ce3de6618ee5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_89c2969a2b528ba4fad27a7e9270b230952c198328180545558159db6e1fb455->leave($__internal_89c2969a2b528ba4fad27a7e9270b230952c198328180545558159db6e1fb455_prof);

        
        $__internal_14ca9157c7949e536cfadf70e4cbd0cc66613be84287171b02ce3de6618ee5b4->leave($__internal_14ca9157c7949e536cfadf70e4cbd0cc66613be84287171b02ce3de6618ee5b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
