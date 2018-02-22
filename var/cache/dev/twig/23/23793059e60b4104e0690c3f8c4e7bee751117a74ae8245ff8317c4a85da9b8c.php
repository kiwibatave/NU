<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0724770b8761b8fea419a82e2d7443df771883afae73b51b7542ef493bd43f31 extends Twig_Template
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
        $__internal_7d6ce647c34902444a4c029100d954cf2deef13164e934a18bd8bc19b4aac3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6ce647c34902444a4c029100d954cf2deef13164e934a18bd8bc19b4aac3f0->enter($__internal_7d6ce647c34902444a4c029100d954cf2deef13164e934a18bd8bc19b4aac3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f2789bf510f1e15e7cf264fb0c523acf17d3e01819fd46cfd3ee8e4535f79281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2789bf510f1e15e7cf264fb0c523acf17d3e01819fd46cfd3ee8e4535f79281->enter($__internal_f2789bf510f1e15e7cf264fb0c523acf17d3e01819fd46cfd3ee8e4535f79281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7d6ce647c34902444a4c029100d954cf2deef13164e934a18bd8bc19b4aac3f0->leave($__internal_7d6ce647c34902444a4c029100d954cf2deef13164e934a18bd8bc19b4aac3f0_prof);

        
        $__internal_f2789bf510f1e15e7cf264fb0c523acf17d3e01819fd46cfd3ee8e4535f79281->leave($__internal_f2789bf510f1e15e7cf264fb0c523acf17d3e01819fd46cfd3ee8e4535f79281_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
