<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_cd8923442f39ac565ed3d68d8216321cb30dfcd6b64eb9ddb18ba585c3e3296a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6da3f76329d7705c072e545f89a92c71acac8874bf608009568ada5156090c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da3f76329d7705c072e545f89a92c71acac8874bf608009568ada5156090c9c->enter($__internal_6da3f76329d7705c072e545f89a92c71acac8874bf608009568ada5156090c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_27b2c7775c9e8683dbeceae46d0373fdee292db22533f7b27bf312839192eaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b2c7775c9e8683dbeceae46d0373fdee292db22533f7b27bf312839192eaaf->enter($__internal_27b2c7775c9e8683dbeceae46d0373fdee292db22533f7b27bf312839192eaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6da3f76329d7705c072e545f89a92c71acac8874bf608009568ada5156090c9c->leave($__internal_6da3f76329d7705c072e545f89a92c71acac8874bf608009568ada5156090c9c_prof);

        
        $__internal_27b2c7775c9e8683dbeceae46d0373fdee292db22533f7b27bf312839192eaaf->leave($__internal_27b2c7775c9e8683dbeceae46d0373fdee292db22533f7b27bf312839192eaaf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ad5ba6e7034829795026f2affb95349b1bd8563a041251816b156d2289b4f0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5ba6e7034829795026f2affb95349b1bd8563a041251816b156d2289b4f0b0->enter($__internal_ad5ba6e7034829795026f2affb95349b1bd8563a041251816b156d2289b4f0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ef6c1417ee589d73253a45513f5ae66cf8a01cd69755c62fb0698c6603d9c9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6c1417ee589d73253a45513f5ae66cf8a01cd69755c62fb0698c6603d9c9a2->enter($__internal_ef6c1417ee589d73253a45513f5ae66cf8a01cd69755c62fb0698c6603d9c9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_ef6c1417ee589d73253a45513f5ae66cf8a01cd69755c62fb0698c6603d9c9a2->leave($__internal_ef6c1417ee589d73253a45513f5ae66cf8a01cd69755c62fb0698c6603d9c9a2_prof);

        
        $__internal_ad5ba6e7034829795026f2affb95349b1bd8563a041251816b156d2289b4f0b0->leave($__internal_ad5ba6e7034829795026f2affb95349b1bd8563a041251816b156d2289b4f0b0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ff01769aad34ccd926975a8b31d63335021dad1e78c0fdf20f010f96d8bb99b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff01769aad34ccd926975a8b31d63335021dad1e78c0fdf20f010f96d8bb99b4->enter($__internal_ff01769aad34ccd926975a8b31d63335021dad1e78c0fdf20f010f96d8bb99b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cba70a66919f60296a5ad1ecd511531e46e6eee8c303ea70eeec213408c09a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba70a66919f60296a5ad1ecd511531e46e6eee8c303ea70eeec213408c09a63->enter($__internal_cba70a66919f60296a5ad1ecd511531e46e6eee8c303ea70eeec213408c09a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_cba70a66919f60296a5ad1ecd511531e46e6eee8c303ea70eeec213408c09a63->leave($__internal_cba70a66919f60296a5ad1ecd511531e46e6eee8c303ea70eeec213408c09a63_prof);

        
        $__internal_ff01769aad34ccd926975a8b31d63335021dad1e78c0fdf20f010f96d8bb99b4->leave($__internal_ff01769aad34ccd926975a8b31d63335021dad1e78c0fdf20f010f96d8bb99b4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6116c879d025e100ac44a4f0673646afbff972cbbaf28bf514193159f7a23a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6116c879d025e100ac44a4f0673646afbff972cbbaf28bf514193159f7a23a9e->enter($__internal_6116c879d025e100ac44a4f0673646afbff972cbbaf28bf514193159f7a23a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e3c5c90f615603bfb160c6c8a834e39a365729ff5adf1d72635766236bd17158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c5c90f615603bfb160c6c8a834e39a365729ff5adf1d72635766236bd17158->enter($__internal_e3c5c90f615603bfb160c6c8a834e39a365729ff5adf1d72635766236bd17158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e3c5c90f615603bfb160c6c8a834e39a365729ff5adf1d72635766236bd17158->leave($__internal_e3c5c90f615603bfb160c6c8a834e39a365729ff5adf1d72635766236bd17158_prof);

        
        $__internal_6116c879d025e100ac44a4f0673646afbff972cbbaf28bf514193159f7a23a9e->leave($__internal_6116c879d025e100ac44a4f0673646afbff972cbbaf28bf514193159f7a23a9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
