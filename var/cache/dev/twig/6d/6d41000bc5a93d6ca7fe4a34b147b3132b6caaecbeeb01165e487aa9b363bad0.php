<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b1ef16f493fb9513c07a63c2158fc81f0e24a5ed2f041cf639e58d8e87760762 extends Twig_Template
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
        $__internal_7ffdf98d88b5b8ce13e01e2a94204012416b3eec9989c36eb6f99926a2f9fbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffdf98d88b5b8ce13e01e2a94204012416b3eec9989c36eb6f99926a2f9fbf0->enter($__internal_7ffdf98d88b5b8ce13e01e2a94204012416b3eec9989c36eb6f99926a2f9fbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_20f22bbe2427b05cff280708bdbc94bed849593057acdc8380b6a4549dbbfbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f22bbe2427b05cff280708bdbc94bed849593057acdc8380b6a4549dbbfbab->enter($__internal_20f22bbe2427b05cff280708bdbc94bed849593057acdc8380b6a4549dbbfbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7ffdf98d88b5b8ce13e01e2a94204012416b3eec9989c36eb6f99926a2f9fbf0->leave($__internal_7ffdf98d88b5b8ce13e01e2a94204012416b3eec9989c36eb6f99926a2f9fbf0_prof);

        
        $__internal_20f22bbe2427b05cff280708bdbc94bed849593057acdc8380b6a4549dbbfbab->leave($__internal_20f22bbe2427b05cff280708bdbc94bed849593057acdc8380b6a4549dbbfbab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
