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
        $__internal_b8bc1829e1ace3e8335780de349ba40d7d78d1cc2d18e7c3ae3813cb2dc371f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bc1829e1ace3e8335780de349ba40d7d78d1cc2d18e7c3ae3813cb2dc371f6->enter($__internal_b8bc1829e1ace3e8335780de349ba40d7d78d1cc2d18e7c3ae3813cb2dc371f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3e544dbf3038d5be68f186faaa81d23bfc8844ada967f0a324e971db7dbfcaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e544dbf3038d5be68f186faaa81d23bfc8844ada967f0a324e971db7dbfcaaf->enter($__internal_3e544dbf3038d5be68f186faaa81d23bfc8844ada967f0a324e971db7dbfcaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b8bc1829e1ace3e8335780de349ba40d7d78d1cc2d18e7c3ae3813cb2dc371f6->leave($__internal_b8bc1829e1ace3e8335780de349ba40d7d78d1cc2d18e7c3ae3813cb2dc371f6_prof);

        
        $__internal_3e544dbf3038d5be68f186faaa81d23bfc8844ada967f0a324e971db7dbfcaaf->leave($__internal_3e544dbf3038d5be68f186faaa81d23bfc8844ada967f0a324e971db7dbfcaaf_prof);

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
