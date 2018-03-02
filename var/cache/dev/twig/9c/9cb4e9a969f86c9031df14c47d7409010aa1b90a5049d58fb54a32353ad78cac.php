<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f999e95e988c4d0a39f7c9ef3dc2aba9c02bc657cb330c0ea8cf81c7c49ac4be extends Twig_Template
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
        $__internal_eef9c1ef8bf5edf77ce78bfc98503f1855fae09ddb46ecb81f5ab9ac7f88ad6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef9c1ef8bf5edf77ce78bfc98503f1855fae09ddb46ecb81f5ab9ac7f88ad6c->enter($__internal_eef9c1ef8bf5edf77ce78bfc98503f1855fae09ddb46ecb81f5ab9ac7f88ad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0b6f75235875f901ba2103a87f283dd88705041ee98896f02bdcce9b02e2f093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6f75235875f901ba2103a87f283dd88705041ee98896f02bdcce9b02e2f093->enter($__internal_0b6f75235875f901ba2103a87f283dd88705041ee98896f02bdcce9b02e2f093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_eef9c1ef8bf5edf77ce78bfc98503f1855fae09ddb46ecb81f5ab9ac7f88ad6c->leave($__internal_eef9c1ef8bf5edf77ce78bfc98503f1855fae09ddb46ecb81f5ab9ac7f88ad6c_prof);

        
        $__internal_0b6f75235875f901ba2103a87f283dd88705041ee98896f02bdcce9b02e2f093->leave($__internal_0b6f75235875f901ba2103a87f283dd88705041ee98896f02bdcce9b02e2f093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
