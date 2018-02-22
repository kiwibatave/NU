<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f80dddec9c4d6a9303660a150636a7c3d6deb21a8de0159bd194f1e58364e7c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8bda62b0a2e140d8bf0140c243bcae2690de2b0e5ae360eeebf18a823257bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bda62b0a2e140d8bf0140c243bcae2690de2b0e5ae360eeebf18a823257bc4->enter($__internal_b8bda62b0a2e140d8bf0140c243bcae2690de2b0e5ae360eeebf18a823257bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_1f1f7aeb77f85a518ae8431d1c8a8d051d20f41e83e996a99d1ca5b6897f7136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1f7aeb77f85a518ae8431d1c8a8d051d20f41e83e996a99d1ca5b6897f7136->enter($__internal_1f1f7aeb77f85a518ae8431d1c8a8d051d20f41e83e996a99d1ca5b6897f7136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8bda62b0a2e140d8bf0140c243bcae2690de2b0e5ae360eeebf18a823257bc4->leave($__internal_b8bda62b0a2e140d8bf0140c243bcae2690de2b0e5ae360eeebf18a823257bc4_prof);

        
        $__internal_1f1f7aeb77f85a518ae8431d1c8a8d051d20f41e83e996a99d1ca5b6897f7136->leave($__internal_1f1f7aeb77f85a518ae8431d1c8a8d051d20f41e83e996a99d1ca5b6897f7136_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb96a395dea8715383705bbb1758072588605e39d21c40b8fd5a2dcfed02f7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb96a395dea8715383705bbb1758072588605e39d21c40b8fd5a2dcfed02f7ed->enter($__internal_cb96a395dea8715383705bbb1758072588605e39d21c40b8fd5a2dcfed02f7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1616d355c745da0490eadcfb24eb4927be880bdcb02edc567e01e0509ed522cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1616d355c745da0490eadcfb24eb4927be880bdcb02edc567e01e0509ed522cd->enter($__internal_1616d355c745da0490eadcfb24eb4927be880bdcb02edc567e01e0509ed522cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1616d355c745da0490eadcfb24eb4927be880bdcb02edc567e01e0509ed522cd->leave($__internal_1616d355c745da0490eadcfb24eb4927be880bdcb02edc567e01e0509ed522cd_prof);

        
        $__internal_cb96a395dea8715383705bbb1758072588605e39d21c40b8fd5a2dcfed02f7ed->leave($__internal_cb96a395dea8715383705bbb1758072588605e39d21c40b8fd5a2dcfed02f7ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
