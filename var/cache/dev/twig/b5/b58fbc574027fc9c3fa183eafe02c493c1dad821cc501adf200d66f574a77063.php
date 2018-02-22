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
        $__internal_5d2c743fd879d1de998205fa9298a7be6f1f4d3639a1251c4e850c7adfd2424c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2c743fd879d1de998205fa9298a7be6f1f4d3639a1251c4e850c7adfd2424c->enter($__internal_5d2c743fd879d1de998205fa9298a7be6f1f4d3639a1251c4e850c7adfd2424c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fb4768cca14a88bb5764b59497baba316e6ca99349d02d1988cd5e8d4e696dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4768cca14a88bb5764b59497baba316e6ca99349d02d1988cd5e8d4e696dbf->enter($__internal_fb4768cca14a88bb5764b59497baba316e6ca99349d02d1988cd5e8d4e696dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5d2c743fd879d1de998205fa9298a7be6f1f4d3639a1251c4e850c7adfd2424c->leave($__internal_5d2c743fd879d1de998205fa9298a7be6f1f4d3639a1251c4e850c7adfd2424c_prof);

        
        $__internal_fb4768cca14a88bb5764b59497baba316e6ca99349d02d1988cd5e8d4e696dbf->leave($__internal_fb4768cca14a88bb5764b59497baba316e6ca99349d02d1988cd5e8d4e696dbf_prof);

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
