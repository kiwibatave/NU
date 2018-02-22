<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9b0e8d49e22217c22889adfc3cf7ef0387f37dd0b9f7478e65ac77b20b47b204 extends Twig_Template
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
        $__internal_467124cdcf2fe8b88d0de42893b06d7e9a654e16fab92b4beec38db6f72b4baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467124cdcf2fe8b88d0de42893b06d7e9a654e16fab92b4beec38db6f72b4baf->enter($__internal_467124cdcf2fe8b88d0de42893b06d7e9a654e16fab92b4beec38db6f72b4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f34e0f03152b00d5675095523c00a86160eda894d0c62e1a9b1d6f49e38faff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34e0f03152b00d5675095523c00a86160eda894d0c62e1a9b1d6f49e38faff0->enter($__internal_f34e0f03152b00d5675095523c00a86160eda894d0c62e1a9b1d6f49e38faff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_467124cdcf2fe8b88d0de42893b06d7e9a654e16fab92b4beec38db6f72b4baf->leave($__internal_467124cdcf2fe8b88d0de42893b06d7e9a654e16fab92b4beec38db6f72b4baf_prof);

        
        $__internal_f34e0f03152b00d5675095523c00a86160eda894d0c62e1a9b1d6f49e38faff0->leave($__internal_f34e0f03152b00d5675095523c00a86160eda894d0c62e1a9b1d6f49e38faff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
