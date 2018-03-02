<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c46601dbd5158f9401294a93ece8e84cef4be4a0b3080a93ad3d2f4f5a4cd80 extends Twig_Template
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
        $__internal_0a572aab6cdd224ae083cc949f16557a24583382eaf37997a0b6f194629b0cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a572aab6cdd224ae083cc949f16557a24583382eaf37997a0b6f194629b0cd0->enter($__internal_0a572aab6cdd224ae083cc949f16557a24583382eaf37997a0b6f194629b0cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5bb05734179469ab8321d775325dcf39fb76251512c19b7758c057a39df82f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb05734179469ab8321d775325dcf39fb76251512c19b7758c057a39df82f6d->enter($__internal_5bb05734179469ab8321d775325dcf39fb76251512c19b7758c057a39df82f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0a572aab6cdd224ae083cc949f16557a24583382eaf37997a0b6f194629b0cd0->leave($__internal_0a572aab6cdd224ae083cc949f16557a24583382eaf37997a0b6f194629b0cd0_prof);

        
        $__internal_5bb05734179469ab8321d775325dcf39fb76251512c19b7758c057a39df82f6d->leave($__internal_5bb05734179469ab8321d775325dcf39fb76251512c19b7758c057a39df82f6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
