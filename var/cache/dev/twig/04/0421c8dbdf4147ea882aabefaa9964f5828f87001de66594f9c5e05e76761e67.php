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
        $__internal_410fc4810421f55321f328e48eebba5cc82c6ffc3863d299d7fb90018661a6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410fc4810421f55321f328e48eebba5cc82c6ffc3863d299d7fb90018661a6bd->enter($__internal_410fc4810421f55321f328e48eebba5cc82c6ffc3863d299d7fb90018661a6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_74d0022cb7c78bb46446fd837a2a33b2c76d5d9f8de4448f881b1e4fe9bfca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d0022cb7c78bb46446fd837a2a33b2c76d5d9f8de4448f881b1e4fe9bfca75->enter($__internal_74d0022cb7c78bb46446fd837a2a33b2c76d5d9f8de4448f881b1e4fe9bfca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410fc4810421f55321f328e48eebba5cc82c6ffc3863d299d7fb90018661a6bd->leave($__internal_410fc4810421f55321f328e48eebba5cc82c6ffc3863d299d7fb90018661a6bd_prof);

        
        $__internal_74d0022cb7c78bb46446fd837a2a33b2c76d5d9f8de4448f881b1e4fe9bfca75->leave($__internal_74d0022cb7c78bb46446fd837a2a33b2c76d5d9f8de4448f881b1e4fe9bfca75_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6a399fd05a30738f4dbf7a0dad29459acd9c76964f257e73233d1c7265fb9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a399fd05a30738f4dbf7a0dad29459acd9c76964f257e73233d1c7265fb9f8->enter($__internal_e6a399fd05a30738f4dbf7a0dad29459acd9c76964f257e73233d1c7265fb9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a3904823e6458d079766a3c7be261def43d9706adc53ad9ec05d3b0a9c8a3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3904823e6458d079766a3c7be261def43d9706adc53ad9ec05d3b0a9c8a3d7->enter($__internal_6a3904823e6458d079766a3c7be261def43d9706adc53ad9ec05d3b0a9c8a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6a3904823e6458d079766a3c7be261def43d9706adc53ad9ec05d3b0a9c8a3d7->leave($__internal_6a3904823e6458d079766a3c7be261def43d9706adc53ad9ec05d3b0a9c8a3d7_prof);

        
        $__internal_e6a399fd05a30738f4dbf7a0dad29459acd9c76964f257e73233d1c7265fb9f8->leave($__internal_e6a399fd05a30738f4dbf7a0dad29459acd9c76964f257e73233d1c7265fb9f8_prof);

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
