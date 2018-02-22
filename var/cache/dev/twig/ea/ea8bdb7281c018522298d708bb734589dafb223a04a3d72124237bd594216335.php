<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ae9050183d1b3baa6f55453e5b52f280e9f320f3db8cacb6a9a3c9f44d35baf6 extends Twig_Template
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
        $__internal_812573b4e113d5b00ce50ded2b8801621019ea6d581e70b438174ce4196075d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812573b4e113d5b00ce50ded2b8801621019ea6d581e70b438174ce4196075d8->enter($__internal_812573b4e113d5b00ce50ded2b8801621019ea6d581e70b438174ce4196075d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2f04e5a93c8d68860e4e2e0dae36d25cbac4fc309ebe04bdff3760adfb8da156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f04e5a93c8d68860e4e2e0dae36d25cbac4fc309ebe04bdff3760adfb8da156->enter($__internal_2f04e5a93c8d68860e4e2e0dae36d25cbac4fc309ebe04bdff3760adfb8da156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_812573b4e113d5b00ce50ded2b8801621019ea6d581e70b438174ce4196075d8->leave($__internal_812573b4e113d5b00ce50ded2b8801621019ea6d581e70b438174ce4196075d8_prof);

        
        $__internal_2f04e5a93c8d68860e4e2e0dae36d25cbac4fc309ebe04bdff3760adfb8da156->leave($__internal_2f04e5a93c8d68860e4e2e0dae36d25cbac4fc309ebe04bdff3760adfb8da156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
