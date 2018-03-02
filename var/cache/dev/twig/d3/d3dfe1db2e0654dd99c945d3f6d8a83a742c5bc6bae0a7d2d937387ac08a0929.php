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
        $__internal_c15bdd7d7f2f74511d09c4beef66c7b4df285f2e902908f79f00452b808adfae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15bdd7d7f2f74511d09c4beef66c7b4df285f2e902908f79f00452b808adfae->enter($__internal_c15bdd7d7f2f74511d09c4beef66c7b4df285f2e902908f79f00452b808adfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_392910be5847773cfd86d72e09bd68ff6bf49ab9f51a0e346c0e700ec3141497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392910be5847773cfd86d72e09bd68ff6bf49ab9f51a0e346c0e700ec3141497->enter($__internal_392910be5847773cfd86d72e09bd68ff6bf49ab9f51a0e346c0e700ec3141497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c15bdd7d7f2f74511d09c4beef66c7b4df285f2e902908f79f00452b808adfae->leave($__internal_c15bdd7d7f2f74511d09c4beef66c7b4df285f2e902908f79f00452b808adfae_prof);

        
        $__internal_392910be5847773cfd86d72e09bd68ff6bf49ab9f51a0e346c0e700ec3141497->leave($__internal_392910be5847773cfd86d72e09bd68ff6bf49ab9f51a0e346c0e700ec3141497_prof);

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
