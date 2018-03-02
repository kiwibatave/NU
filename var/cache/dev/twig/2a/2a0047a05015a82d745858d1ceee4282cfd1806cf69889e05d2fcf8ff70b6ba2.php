<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5918c3806b16666fccc210c7d57ceaea105e263896812fb3c4cba37c429076b3 extends Twig_Template
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
        $__internal_66b27e3e3f8805a9b426f12359d6c52d876f4b4aa6b18f85015f9a47a0ca1314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b27e3e3f8805a9b426f12359d6c52d876f4b4aa6b18f85015f9a47a0ca1314->enter($__internal_66b27e3e3f8805a9b426f12359d6c52d876f4b4aa6b18f85015f9a47a0ca1314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bf088e3e1a980049473a2ddd0e5daaad64e576c32e53a7531138f8368df80627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf088e3e1a980049473a2ddd0e5daaad64e576c32e53a7531138f8368df80627->enter($__internal_bf088e3e1a980049473a2ddd0e5daaad64e576c32e53a7531138f8368df80627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_66b27e3e3f8805a9b426f12359d6c52d876f4b4aa6b18f85015f9a47a0ca1314->leave($__internal_66b27e3e3f8805a9b426f12359d6c52d876f4b4aa6b18f85015f9a47a0ca1314_prof);

        
        $__internal_bf088e3e1a980049473a2ddd0e5daaad64e576c32e53a7531138f8368df80627->leave($__internal_bf088e3e1a980049473a2ddd0e5daaad64e576c32e53a7531138f8368df80627_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
