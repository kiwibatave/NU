<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b0b2d3e2028c1e2662fe61d8adf2f61232ffba47e94557e11a1eff5d188cb6b7 extends Twig_Template
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
        $__internal_7920e0ca41cfb6f7f92511bc5b859f7cfac7d9caa8859340943424d7b6f12358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7920e0ca41cfb6f7f92511bc5b859f7cfac7d9caa8859340943424d7b6f12358->enter($__internal_7920e0ca41cfb6f7f92511bc5b859f7cfac7d9caa8859340943424d7b6f12358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_13743ab8d682fede628f15515e6e94ba0b0d8ef41e06bfee4d543fdc33cf94a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13743ab8d682fede628f15515e6e94ba0b0d8ef41e06bfee4d543fdc33cf94a5->enter($__internal_13743ab8d682fede628f15515e6e94ba0b0d8ef41e06bfee4d543fdc33cf94a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7920e0ca41cfb6f7f92511bc5b859f7cfac7d9caa8859340943424d7b6f12358->leave($__internal_7920e0ca41cfb6f7f92511bc5b859f7cfac7d9caa8859340943424d7b6f12358_prof);

        
        $__internal_13743ab8d682fede628f15515e6e94ba0b0d8ef41e06bfee4d543fdc33cf94a5->leave($__internal_13743ab8d682fede628f15515e6e94ba0b0d8ef41e06bfee4d543fdc33cf94a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
