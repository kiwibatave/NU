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
        $__internal_56760a2a1bad2264c2a36f26749186b3a0adc7d53bd5ec888a7f81dfdc9f20cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56760a2a1bad2264c2a36f26749186b3a0adc7d53bd5ec888a7f81dfdc9f20cb->enter($__internal_56760a2a1bad2264c2a36f26749186b3a0adc7d53bd5ec888a7f81dfdc9f20cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_396d636661880bc9b64158c5dd479cfc1eaa64de88739488cd6ab7dc511f1326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396d636661880bc9b64158c5dd479cfc1eaa64de88739488cd6ab7dc511f1326->enter($__internal_396d636661880bc9b64158c5dd479cfc1eaa64de88739488cd6ab7dc511f1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_56760a2a1bad2264c2a36f26749186b3a0adc7d53bd5ec888a7f81dfdc9f20cb->leave($__internal_56760a2a1bad2264c2a36f26749186b3a0adc7d53bd5ec888a7f81dfdc9f20cb_prof);

        
        $__internal_396d636661880bc9b64158c5dd479cfc1eaa64de88739488cd6ab7dc511f1326->leave($__internal_396d636661880bc9b64158c5dd479cfc1eaa64de88739488cd6ab7dc511f1326_prof);

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
