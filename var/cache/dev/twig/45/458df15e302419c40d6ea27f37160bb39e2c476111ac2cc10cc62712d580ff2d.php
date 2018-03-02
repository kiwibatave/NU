<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_122024184b6018727676bda5bfcf242975ace5df85846e345003c12f3be71a38 extends Twig_Template
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
        $__internal_1574d033f980c1a0d5db9e1950a0cabf67d7d749c4b3295a842b2e48ade11808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1574d033f980c1a0d5db9e1950a0cabf67d7d749c4b3295a842b2e48ade11808->enter($__internal_1574d033f980c1a0d5db9e1950a0cabf67d7d749c4b3295a842b2e48ade11808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6b4f62e93fc91169fc4bc6678af4e91383abc0d947c7c844dd6dd9c9c5e671cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4f62e93fc91169fc4bc6678af4e91383abc0d947c7c844dd6dd9c9c5e671cd->enter($__internal_6b4f62e93fc91169fc4bc6678af4e91383abc0d947c7c844dd6dd9c9c5e671cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1574d033f980c1a0d5db9e1950a0cabf67d7d749c4b3295a842b2e48ade11808->leave($__internal_1574d033f980c1a0d5db9e1950a0cabf67d7d749c4b3295a842b2e48ade11808_prof);

        
        $__internal_6b4f62e93fc91169fc4bc6678af4e91383abc0d947c7c844dd6dd9c9c5e671cd->leave($__internal_6b4f62e93fc91169fc4bc6678af4e91383abc0d947c7c844dd6dd9c9c5e671cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
