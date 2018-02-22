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
        $__internal_e2e8c36313e442d59194d6d85ed39c924463419dd9adb4cfa1190a4f3bd4fe75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e8c36313e442d59194d6d85ed39c924463419dd9adb4cfa1190a4f3bd4fe75->enter($__internal_e2e8c36313e442d59194d6d85ed39c924463419dd9adb4cfa1190a4f3bd4fe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_638c3ad54bcef167f80a204092a857f89e3bbe6789bfa7dc93c4f86194c8fc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638c3ad54bcef167f80a204092a857f89e3bbe6789bfa7dc93c4f86194c8fc24->enter($__internal_638c3ad54bcef167f80a204092a857f89e3bbe6789bfa7dc93c4f86194c8fc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2e8c36313e442d59194d6d85ed39c924463419dd9adb4cfa1190a4f3bd4fe75->leave($__internal_e2e8c36313e442d59194d6d85ed39c924463419dd9adb4cfa1190a4f3bd4fe75_prof);

        
        $__internal_638c3ad54bcef167f80a204092a857f89e3bbe6789bfa7dc93c4f86194c8fc24->leave($__internal_638c3ad54bcef167f80a204092a857f89e3bbe6789bfa7dc93c4f86194c8fc24_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_645b6c93a32f322d463aeba5ba64a30d6bbf3dc22aa0c8e55dcd498f7ac4e13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645b6c93a32f322d463aeba5ba64a30d6bbf3dc22aa0c8e55dcd498f7ac4e13c->enter($__internal_645b6c93a32f322d463aeba5ba64a30d6bbf3dc22aa0c8e55dcd498f7ac4e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8d43fa1f0bed0f105f37dabc799ff995ed944843fe82f1d9e4a745b858ff4066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d43fa1f0bed0f105f37dabc799ff995ed944843fe82f1d9e4a745b858ff4066->enter($__internal_8d43fa1f0bed0f105f37dabc799ff995ed944843fe82f1d9e4a745b858ff4066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_8d43fa1f0bed0f105f37dabc799ff995ed944843fe82f1d9e4a745b858ff4066->leave($__internal_8d43fa1f0bed0f105f37dabc799ff995ed944843fe82f1d9e4a745b858ff4066_prof);

        
        $__internal_645b6c93a32f322d463aeba5ba64a30d6bbf3dc22aa0c8e55dcd498f7ac4e13c->leave($__internal_645b6c93a32f322d463aeba5ba64a30d6bbf3dc22aa0c8e55dcd498f7ac4e13c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77926419250b133b50810d57306db28df4709998cac257295dd1e0f926c31548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77926419250b133b50810d57306db28df4709998cac257295dd1e0f926c31548->enter($__internal_77926419250b133b50810d57306db28df4709998cac257295dd1e0f926c31548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8a3d660293f22b9adb8095eba608834289051eae6b74103ebafc5e6e7c32c05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3d660293f22b9adb8095eba608834289051eae6b74103ebafc5e6e7c32c05c->enter($__internal_8a3d660293f22b9adb8095eba608834289051eae6b74103ebafc5e6e7c32c05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_8a3d660293f22b9adb8095eba608834289051eae6b74103ebafc5e6e7c32c05c->leave($__internal_8a3d660293f22b9adb8095eba608834289051eae6b74103ebafc5e6e7c32c05c_prof);

        
        $__internal_77926419250b133b50810d57306db28df4709998cac257295dd1e0f926c31548->leave($__internal_77926419250b133b50810d57306db28df4709998cac257295dd1e0f926c31548_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4258adcacd60224359ff81effa54a3c5f0924a089e13da89781703b1cdab9cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4258adcacd60224359ff81effa54a3c5f0924a089e13da89781703b1cdab9cea->enter($__internal_4258adcacd60224359ff81effa54a3c5f0924a089e13da89781703b1cdab9cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_93acc5959c4ea991aec7ebcbba13bf597e8fee852dd40f1ef5b25e15607838af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93acc5959c4ea991aec7ebcbba13bf597e8fee852dd40f1ef5b25e15607838af->enter($__internal_93acc5959c4ea991aec7ebcbba13bf597e8fee852dd40f1ef5b25e15607838af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_93acc5959c4ea991aec7ebcbba13bf597e8fee852dd40f1ef5b25e15607838af->leave($__internal_93acc5959c4ea991aec7ebcbba13bf597e8fee852dd40f1ef5b25e15607838af_prof);

        
        $__internal_4258adcacd60224359ff81effa54a3c5f0924a089e13da89781703b1cdab9cea->leave($__internal_4258adcacd60224359ff81effa54a3c5f0924a089e13da89781703b1cdab9cea_prof);

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
