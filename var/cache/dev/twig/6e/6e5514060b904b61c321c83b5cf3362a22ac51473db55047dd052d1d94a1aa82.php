<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d7107d31b1f034eaf5ed53b4f078dc9424902dab3c1f28a064eeb027ad950ee7 extends Twig_Template
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
        $__internal_acf1362f50a58435d4cb142a9a3a1a9ede0e8a1c23f2ee9a345d8cee1c86ee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf1362f50a58435d4cb142a9a3a1a9ede0e8a1c23f2ee9a345d8cee1c86ee9c->enter($__internal_acf1362f50a58435d4cb142a9a3a1a9ede0e8a1c23f2ee9a345d8cee1c86ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d4be9389a2a3f9b048ddeb259171d581cc2fff2abe67877dc5256e331c180d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4be9389a2a3f9b048ddeb259171d581cc2fff2abe67877dc5256e331c180d8b->enter($__internal_d4be9389a2a3f9b048ddeb259171d581cc2fff2abe67877dc5256e331c180d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_acf1362f50a58435d4cb142a9a3a1a9ede0e8a1c23f2ee9a345d8cee1c86ee9c->leave($__internal_acf1362f50a58435d4cb142a9a3a1a9ede0e8a1c23f2ee9a345d8cee1c86ee9c_prof);

        
        $__internal_d4be9389a2a3f9b048ddeb259171d581cc2fff2abe67877dc5256e331c180d8b->leave($__internal_d4be9389a2a3f9b048ddeb259171d581cc2fff2abe67877dc5256e331c180d8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
