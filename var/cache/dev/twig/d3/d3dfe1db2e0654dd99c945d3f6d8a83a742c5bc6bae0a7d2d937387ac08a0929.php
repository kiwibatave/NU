<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cf01f697034f2abeabecc4322507398fcbbf4558e3e8682850e76331c075c3a5 extends Twig_Template
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
        $__internal_172ef51a897bae6f70b86ddc05c6cdb6d9e832eeea43c146579e8b6e7d749200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172ef51a897bae6f70b86ddc05c6cdb6d9e832eeea43c146579e8b6e7d749200->enter($__internal_172ef51a897bae6f70b86ddc05c6cdb6d9e832eeea43c146579e8b6e7d749200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c533b20de943ecb69bc34ace5603189b99f56b993a1a18b201739d821debe58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c533b20de943ecb69bc34ace5603189b99f56b993a1a18b201739d821debe58b->enter($__internal_c533b20de943ecb69bc34ace5603189b99f56b993a1a18b201739d821debe58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_172ef51a897bae6f70b86ddc05c6cdb6d9e832eeea43c146579e8b6e7d749200->leave($__internal_172ef51a897bae6f70b86ddc05c6cdb6d9e832eeea43c146579e8b6e7d749200_prof);

        
        $__internal_c533b20de943ecb69bc34ace5603189b99f56b993a1a18b201739d821debe58b->leave($__internal_c533b20de943ecb69bc34ace5603189b99f56b993a1a18b201739d821debe58b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
