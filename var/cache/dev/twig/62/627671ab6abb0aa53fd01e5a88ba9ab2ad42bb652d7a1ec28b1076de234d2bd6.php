<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_26b54c47a71273bb9a2819d8ba66c47eea3049cc0d7cced0c39c905c216a7419 extends Twig_Template
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
        $__internal_da48beaa59503bf64de8b56ca947b67614c103cc3b36d34103ee50a7523300e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da48beaa59503bf64de8b56ca947b67614c103cc3b36d34103ee50a7523300e1->enter($__internal_da48beaa59503bf64de8b56ca947b67614c103cc3b36d34103ee50a7523300e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_86f8e0102fd7faf4ef184701dc35b7f6ca170de612de3cde39f266890c4dac85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f8e0102fd7faf4ef184701dc35b7f6ca170de612de3cde39f266890c4dac85->enter($__internal_86f8e0102fd7faf4ef184701dc35b7f6ca170de612de3cde39f266890c4dac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_da48beaa59503bf64de8b56ca947b67614c103cc3b36d34103ee50a7523300e1->leave($__internal_da48beaa59503bf64de8b56ca947b67614c103cc3b36d34103ee50a7523300e1_prof);

        
        $__internal_86f8e0102fd7faf4ef184701dc35b7f6ca170de612de3cde39f266890c4dac85->leave($__internal_86f8e0102fd7faf4ef184701dc35b7f6ca170de612de3cde39f266890c4dac85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
