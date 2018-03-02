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
        $__internal_50beb62dd2ea11f22efd304fa925231689c0068bc933aa17717fc0b950678e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50beb62dd2ea11f22efd304fa925231689c0068bc933aa17717fc0b950678e63->enter($__internal_50beb62dd2ea11f22efd304fa925231689c0068bc933aa17717fc0b950678e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fa80d1ebb914d87f9b487120a8b530911716e8e9a06c81d62f4b73ca9055dcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa80d1ebb914d87f9b487120a8b530911716e8e9a06c81d62f4b73ca9055dcbe->enter($__internal_fa80d1ebb914d87f9b487120a8b530911716e8e9a06c81d62f4b73ca9055dcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_50beb62dd2ea11f22efd304fa925231689c0068bc933aa17717fc0b950678e63->leave($__internal_50beb62dd2ea11f22efd304fa925231689c0068bc933aa17717fc0b950678e63_prof);

        
        $__internal_fa80d1ebb914d87f9b487120a8b530911716e8e9a06c81d62f4b73ca9055dcbe->leave($__internal_fa80d1ebb914d87f9b487120a8b530911716e8e9a06c81d62f4b73ca9055dcbe_prof);

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
