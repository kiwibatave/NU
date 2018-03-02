<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_66fa1f2daa647fd3e37dc435c5933fdfe903257b2f06fd6fef21673480d4e9d4 extends Twig_Template
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
        $__internal_73ddaf99d314ba35b6a21e169d2429fb2d2abb72332021441b11fafae7ef0fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ddaf99d314ba35b6a21e169d2429fb2d2abb72332021441b11fafae7ef0fe8->enter($__internal_73ddaf99d314ba35b6a21e169d2429fb2d2abb72332021441b11fafae7ef0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2eabc5bc565a8f7edf06cd2a6bc965a297d0f35f3aaba6fdd72d3b611ed7c5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eabc5bc565a8f7edf06cd2a6bc965a297d0f35f3aaba6fdd72d3b611ed7c5be->enter($__internal_2eabc5bc565a8f7edf06cd2a6bc965a297d0f35f3aaba6fdd72d3b611ed7c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_73ddaf99d314ba35b6a21e169d2429fb2d2abb72332021441b11fafae7ef0fe8->leave($__internal_73ddaf99d314ba35b6a21e169d2429fb2d2abb72332021441b11fafae7ef0fe8_prof);

        
        $__internal_2eabc5bc565a8f7edf06cd2a6bc965a297d0f35f3aaba6fdd72d3b611ed7c5be->leave($__internal_2eabc5bc565a8f7edf06cd2a6bc965a297d0f35f3aaba6fdd72d3b611ed7c5be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
