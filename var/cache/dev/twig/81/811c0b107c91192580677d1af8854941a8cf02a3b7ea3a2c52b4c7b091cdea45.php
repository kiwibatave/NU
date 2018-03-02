<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5dc19ad6beb67bc0528de3e6436d7550adb92cf032b477589a308de5cb0f5048 extends Twig_Template
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
        $__internal_b9c6ff9749b96a4c96ace6d602f7f64712af1351ffa9a7734dc76ba1bdbc37dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c6ff9749b96a4c96ace6d602f7f64712af1351ffa9a7734dc76ba1bdbc37dc->enter($__internal_b9c6ff9749b96a4c96ace6d602f7f64712af1351ffa9a7734dc76ba1bdbc37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a3ba419fd2a32cb6813971f1e9bac037d71018b88e86e563c4a1b8cf314961e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ba419fd2a32cb6813971f1e9bac037d71018b88e86e563c4a1b8cf314961e6->enter($__internal_a3ba419fd2a32cb6813971f1e9bac037d71018b88e86e563c4a1b8cf314961e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b9c6ff9749b96a4c96ace6d602f7f64712af1351ffa9a7734dc76ba1bdbc37dc->leave($__internal_b9c6ff9749b96a4c96ace6d602f7f64712af1351ffa9a7734dc76ba1bdbc37dc_prof);

        
        $__internal_a3ba419fd2a32cb6813971f1e9bac037d71018b88e86e563c4a1b8cf314961e6->leave($__internal_a3ba419fd2a32cb6813971f1e9bac037d71018b88e86e563c4a1b8cf314961e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
