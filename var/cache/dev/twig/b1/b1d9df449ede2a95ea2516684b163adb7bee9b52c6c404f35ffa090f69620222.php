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
        $__internal_7d14b77d04b3a4db76ecc631f48018922bcab28586599d80cd6eb76e36280f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d14b77d04b3a4db76ecc631f48018922bcab28586599d80cd6eb76e36280f69->enter($__internal_7d14b77d04b3a4db76ecc631f48018922bcab28586599d80cd6eb76e36280f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ac7c60efca31c5788cf2bd2763c01bcf98712d07e1e1272b19cd48468455cc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7c60efca31c5788cf2bd2763c01bcf98712d07e1e1272b19cd48468455cc97->enter($__internal_ac7c60efca31c5788cf2bd2763c01bcf98712d07e1e1272b19cd48468455cc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7d14b77d04b3a4db76ecc631f48018922bcab28586599d80cd6eb76e36280f69->leave($__internal_7d14b77d04b3a4db76ecc631f48018922bcab28586599d80cd6eb76e36280f69_prof);

        
        $__internal_ac7c60efca31c5788cf2bd2763c01bcf98712d07e1e1272b19cd48468455cc97->leave($__internal_ac7c60efca31c5788cf2bd2763c01bcf98712d07e1e1272b19cd48468455cc97_prof);

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
