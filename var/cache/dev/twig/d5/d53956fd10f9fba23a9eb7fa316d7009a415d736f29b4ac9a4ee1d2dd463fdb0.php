<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_7f66d316339bbb42b372f911fe9370022a315f56a5cf3a5a1d726a9aa92e1f22 extends Twig_Template
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
        $__internal_b25d6283ec0bf5c454a177a49345e54d548a5e56f2dc8d672df9e9b99d2d4708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25d6283ec0bf5c454a177a49345e54d548a5e56f2dc8d672df9e9b99d2d4708->enter($__internal_b25d6283ec0bf5c454a177a49345e54d548a5e56f2dc8d672df9e9b99d2d4708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_8230ed2a1346e5bd3950dfb56040283ff1b78d3f6c8343919a90616c329c4485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8230ed2a1346e5bd3950dfb56040283ff1b78d3f6c8343919a90616c329c4485->enter($__internal_8230ed2a1346e5bd3950dfb56040283ff1b78d3f6c8343919a90616c329c4485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_b25d6283ec0bf5c454a177a49345e54d548a5e56f2dc8d672df9e9b99d2d4708->leave($__internal_b25d6283ec0bf5c454a177a49345e54d548a5e56f2dc8d672df9e9b99d2d4708_prof);

        
        $__internal_8230ed2a1346e5bd3950dfb56040283ff1b78d3f6c8343919a90616c329c4485->leave($__internal_8230ed2a1346e5bd3950dfb56040283ff1b78d3f6c8343919a90616c329c4485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
