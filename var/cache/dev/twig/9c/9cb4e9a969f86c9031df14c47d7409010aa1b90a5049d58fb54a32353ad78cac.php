<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f999e95e988c4d0a39f7c9ef3dc2aba9c02bc657cb330c0ea8cf81c7c49ac4be extends Twig_Template
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
        $__internal_765f40efa0d2955d379465392ed29c5c050ee01eaa10b675200447fef8f8388c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765f40efa0d2955d379465392ed29c5c050ee01eaa10b675200447fef8f8388c->enter($__internal_765f40efa0d2955d379465392ed29c5c050ee01eaa10b675200447fef8f8388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a01bf31aa67cd7350ce24839afe26653347ea1267c193969ae3cf15c2c32e08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01bf31aa67cd7350ce24839afe26653347ea1267c193969ae3cf15c2c32e08f->enter($__internal_a01bf31aa67cd7350ce24839afe26653347ea1267c193969ae3cf15c2c32e08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_765f40efa0d2955d379465392ed29c5c050ee01eaa10b675200447fef8f8388c->leave($__internal_765f40efa0d2955d379465392ed29c5c050ee01eaa10b675200447fef8f8388c_prof);

        
        $__internal_a01bf31aa67cd7350ce24839afe26653347ea1267c193969ae3cf15c2c32e08f->leave($__internal_a01bf31aa67cd7350ce24839afe26653347ea1267c193969ae3cf15c2c32e08f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
