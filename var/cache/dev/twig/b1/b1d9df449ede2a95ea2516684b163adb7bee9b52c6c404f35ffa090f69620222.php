<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_392ab13b42336ac36be07ce67c47b88089a36eb50f941efba8d28f298f3c5e25 extends Twig_Template
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
        $__internal_b5f1ba947ec213369f81b0b526af1871a7a7ae0634f003e23bc7178f47a46c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f1ba947ec213369f81b0b526af1871a7a7ae0634f003e23bc7178f47a46c94->enter($__internal_b5f1ba947ec213369f81b0b526af1871a7a7ae0634f003e23bc7178f47a46c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ac5b1fe12ff6f9ec747e9b312606e5b46d54bddde788317b12264dbaa00c5b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5b1fe12ff6f9ec747e9b312606e5b46d54bddde788317b12264dbaa00c5b27->enter($__internal_ac5b1fe12ff6f9ec747e9b312606e5b46d54bddde788317b12264dbaa00c5b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b5f1ba947ec213369f81b0b526af1871a7a7ae0634f003e23bc7178f47a46c94->leave($__internal_b5f1ba947ec213369f81b0b526af1871a7a7ae0634f003e23bc7178f47a46c94_prof);

        
        $__internal_ac5b1fe12ff6f9ec747e9b312606e5b46d54bddde788317b12264dbaa00c5b27->leave($__internal_ac5b1fe12ff6f9ec747e9b312606e5b46d54bddde788317b12264dbaa00c5b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
