<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_ea38c4325a21ef1de849b405692353f4eee60f0c2e21f4a695b148e5822610b2 extends Twig_Template
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
        $__internal_08ea9e77e711bf82b1f3fe94c83d72ea5c4424bd3a87a35d8114cad8a1135504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ea9e77e711bf82b1f3fe94c83d72ea5c4424bd3a87a35d8114cad8a1135504->enter($__internal_08ea9e77e711bf82b1f3fe94c83d72ea5c4424bd3a87a35d8114cad8a1135504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5c06fb1c8fdcc90a2111d7b6b1efeef70c305ef14234a85d3ba181e796339410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c06fb1c8fdcc90a2111d7b6b1efeef70c305ef14234a85d3ba181e796339410->enter($__internal_5c06fb1c8fdcc90a2111d7b6b1efeef70c305ef14234a85d3ba181e796339410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_08ea9e77e711bf82b1f3fe94c83d72ea5c4424bd3a87a35d8114cad8a1135504->leave($__internal_08ea9e77e711bf82b1f3fe94c83d72ea5c4424bd3a87a35d8114cad8a1135504_prof);

        
        $__internal_5c06fb1c8fdcc90a2111d7b6b1efeef70c305ef14234a85d3ba181e796339410->leave($__internal_5c06fb1c8fdcc90a2111d7b6b1efeef70c305ef14234a85d3ba181e796339410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
