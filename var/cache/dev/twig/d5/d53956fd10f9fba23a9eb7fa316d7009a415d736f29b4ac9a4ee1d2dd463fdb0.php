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
        $__internal_9564b96ed6c453aa4addc407da12a33a4f00ecdd6190e7935c0b5ed37c31fe50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9564b96ed6c453aa4addc407da12a33a4f00ecdd6190e7935c0b5ed37c31fe50->enter($__internal_9564b96ed6c453aa4addc407da12a33a4f00ecdd6190e7935c0b5ed37c31fe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_a1f82a0b57fccf72318bd363f9f5335b47fba68e2f9ab24803d11192c791ebeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f82a0b57fccf72318bd363f9f5335b47fba68e2f9ab24803d11192c791ebeb->enter($__internal_a1f82a0b57fccf72318bd363f9f5335b47fba68e2f9ab24803d11192c791ebeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_9564b96ed6c453aa4addc407da12a33a4f00ecdd6190e7935c0b5ed37c31fe50->leave($__internal_9564b96ed6c453aa4addc407da12a33a4f00ecdd6190e7935c0b5ed37c31fe50_prof);

        
        $__internal_a1f82a0b57fccf72318bd363f9f5335b47fba68e2f9ab24803d11192c791ebeb->leave($__internal_a1f82a0b57fccf72318bd363f9f5335b47fba68e2f9ab24803d11192c791ebeb_prof);

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
