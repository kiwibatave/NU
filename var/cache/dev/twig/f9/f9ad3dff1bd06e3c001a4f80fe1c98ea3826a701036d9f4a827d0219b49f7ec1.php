<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b5a2483b8bd5eef16311cb9bdb740ba3489c861cdebde667b19f458390bda6e0 extends Twig_Template
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
        $__internal_1ee65951f9df125eeb539dc2c86f3ed0327a4f32536a19ebcd864cc557b71847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee65951f9df125eeb539dc2c86f3ed0327a4f32536a19ebcd864cc557b71847->enter($__internal_1ee65951f9df125eeb539dc2c86f3ed0327a4f32536a19ebcd864cc557b71847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_af2c4783d93f8f6f6df38081663c0dd90a640a78244609775041cdd14575ff0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2c4783d93f8f6f6df38081663c0dd90a640a78244609775041cdd14575ff0e->enter($__internal_af2c4783d93f8f6f6df38081663c0dd90a640a78244609775041cdd14575ff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1ee65951f9df125eeb539dc2c86f3ed0327a4f32536a19ebcd864cc557b71847->leave($__internal_1ee65951f9df125eeb539dc2c86f3ed0327a4f32536a19ebcd864cc557b71847_prof);

        
        $__internal_af2c4783d93f8f6f6df38081663c0dd90a640a78244609775041cdd14575ff0e->leave($__internal_af2c4783d93f8f6f6df38081663c0dd90a640a78244609775041cdd14575ff0e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_67210b27d22d0416f643728f01ab2b995b3cb24b503edc1232e59af4a4cb7ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67210b27d22d0416f643728f01ab2b995b3cb24b503edc1232e59af4a4cb7ebe->enter($__internal_67210b27d22d0416f643728f01ab2b995b3cb24b503edc1232e59af4a4cb7ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a2ec004ac611613ffeece63dc1b3aab3740fd9f93affa8a2ac93d89822bb5e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ec004ac611613ffeece63dc1b3aab3740fd9f93affa8a2ac93d89822bb5e83->enter($__internal_a2ec004ac611613ffeece63dc1b3aab3740fd9f93affa8a2ac93d89822bb5e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a2ec004ac611613ffeece63dc1b3aab3740fd9f93affa8a2ac93d89822bb5e83->leave($__internal_a2ec004ac611613ffeece63dc1b3aab3740fd9f93affa8a2ac93d89822bb5e83_prof);

        
        $__internal_67210b27d22d0416f643728f01ab2b995b3cb24b503edc1232e59af4a4cb7ebe->leave($__internal_67210b27d22d0416f643728f01ab2b995b3cb24b503edc1232e59af4a4cb7ebe_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c89802d3c88dffb3b7c30d4f8e51b83d249a95d09411d793103bb8dd857b8b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89802d3c88dffb3b7c30d4f8e51b83d249a95d09411d793103bb8dd857b8b71->enter($__internal_c89802d3c88dffb3b7c30d4f8e51b83d249a95d09411d793103bb8dd857b8b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f6db28c04ced33bbd7729055f0a8f20f7da109c67ed32771958cac2759af9d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6db28c04ced33bbd7729055f0a8f20f7da109c67ed32771958cac2759af9d82->enter($__internal_f6db28c04ced33bbd7729055f0a8f20f7da109c67ed32771958cac2759af9d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f6db28c04ced33bbd7729055f0a8f20f7da109c67ed32771958cac2759af9d82->leave($__internal_f6db28c04ced33bbd7729055f0a8f20f7da109c67ed32771958cac2759af9d82_prof);

        
        $__internal_c89802d3c88dffb3b7c30d4f8e51b83d249a95d09411d793103bb8dd857b8b71->leave($__internal_c89802d3c88dffb3b7c30d4f8e51b83d249a95d09411d793103bb8dd857b8b71_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_14a8c04371e414e8a7dbf519e53ff2cbd96de8e90698d3e3d30c64055fd3a101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a8c04371e414e8a7dbf519e53ff2cbd96de8e90698d3e3d30c64055fd3a101->enter($__internal_14a8c04371e414e8a7dbf519e53ff2cbd96de8e90698d3e3d30c64055fd3a101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_765d2c393d9ee2a4d156f3ed137f837a7b75a9c81fbd9147681919819d9be488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765d2c393d9ee2a4d156f3ed137f837a7b75a9c81fbd9147681919819d9be488->enter($__internal_765d2c393d9ee2a4d156f3ed137f837a7b75a9c81fbd9147681919819d9be488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_765d2c393d9ee2a4d156f3ed137f837a7b75a9c81fbd9147681919819d9be488->leave($__internal_765d2c393d9ee2a4d156f3ed137f837a7b75a9c81fbd9147681919819d9be488_prof);

        
        $__internal_14a8c04371e414e8a7dbf519e53ff2cbd96de8e90698d3e3d30c64055fd3a101->leave($__internal_14a8c04371e414e8a7dbf519e53ff2cbd96de8e90698d3e3d30c64055fd3a101_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
