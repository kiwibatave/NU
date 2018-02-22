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
        $__internal_6bbcfbc3c42a6e890c5073d0ac902164612464120c6b48d3011a265d76997777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbcfbc3c42a6e890c5073d0ac902164612464120c6b48d3011a265d76997777->enter($__internal_6bbcfbc3c42a6e890c5073d0ac902164612464120c6b48d3011a265d76997777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3596e92daf09b307f8d05e3a4cfec1a61a91524843663fce5ed33be2fd1a83e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3596e92daf09b307f8d05e3a4cfec1a61a91524843663fce5ed33be2fd1a83e2->enter($__internal_3596e92daf09b307f8d05e3a4cfec1a61a91524843663fce5ed33be2fd1a83e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6bbcfbc3c42a6e890c5073d0ac902164612464120c6b48d3011a265d76997777->leave($__internal_6bbcfbc3c42a6e890c5073d0ac902164612464120c6b48d3011a265d76997777_prof);

        
        $__internal_3596e92daf09b307f8d05e3a4cfec1a61a91524843663fce5ed33be2fd1a83e2->leave($__internal_3596e92daf09b307f8d05e3a4cfec1a61a91524843663fce5ed33be2fd1a83e2_prof);

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
