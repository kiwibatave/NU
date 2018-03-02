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
        $__internal_4d403c3510c42b032744993cd3bcb5560e741e700e1fd8d1f2e0109710a28e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d403c3510c42b032744993cd3bcb5560e741e700e1fd8d1f2e0109710a28e3c->enter($__internal_4d403c3510c42b032744993cd3bcb5560e741e700e1fd8d1f2e0109710a28e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7897ff257b131d28232ff475505cce3fb20188344b6e624792f34254e2d8d7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7897ff257b131d28232ff475505cce3fb20188344b6e624792f34254e2d8d7ab->enter($__internal_7897ff257b131d28232ff475505cce3fb20188344b6e624792f34254e2d8d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d403c3510c42b032744993cd3bcb5560e741e700e1fd8d1f2e0109710a28e3c->leave($__internal_4d403c3510c42b032744993cd3bcb5560e741e700e1fd8d1f2e0109710a28e3c_prof);

        
        $__internal_7897ff257b131d28232ff475505cce3fb20188344b6e624792f34254e2d8d7ab->leave($__internal_7897ff257b131d28232ff475505cce3fb20188344b6e624792f34254e2d8d7ab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_32ec26352a0353f2dda520f5fc1970a7715d4481e304c113e6dde328b54bf56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ec26352a0353f2dda520f5fc1970a7715d4481e304c113e6dde328b54bf56e->enter($__internal_32ec26352a0353f2dda520f5fc1970a7715d4481e304c113e6dde328b54bf56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1fdbb77f4a6c56bb58b210ea3f0b33fa48cfee83b5b1c3da5b1fad2fc5940f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdbb77f4a6c56bb58b210ea3f0b33fa48cfee83b5b1c3da5b1fad2fc5940f12->enter($__internal_1fdbb77f4a6c56bb58b210ea3f0b33fa48cfee83b5b1c3da5b1fad2fc5940f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_1fdbb77f4a6c56bb58b210ea3f0b33fa48cfee83b5b1c3da5b1fad2fc5940f12->leave($__internal_1fdbb77f4a6c56bb58b210ea3f0b33fa48cfee83b5b1c3da5b1fad2fc5940f12_prof);

        
        $__internal_32ec26352a0353f2dda520f5fc1970a7715d4481e304c113e6dde328b54bf56e->leave($__internal_32ec26352a0353f2dda520f5fc1970a7715d4481e304c113e6dde328b54bf56e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e7eb31310f8d02f314daf451bd3e0ff62598a0979bd5ffd1e25bb407147e43bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7eb31310f8d02f314daf451bd3e0ff62598a0979bd5ffd1e25bb407147e43bf->enter($__internal_e7eb31310f8d02f314daf451bd3e0ff62598a0979bd5ffd1e25bb407147e43bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_153b8d153cd61e6f4c2e64d0fa50f357ead56eb594663922dfc745c336852d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153b8d153cd61e6f4c2e64d0fa50f357ead56eb594663922dfc745c336852d2e->enter($__internal_153b8d153cd61e6f4c2e64d0fa50f357ead56eb594663922dfc745c336852d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_153b8d153cd61e6f4c2e64d0fa50f357ead56eb594663922dfc745c336852d2e->leave($__internal_153b8d153cd61e6f4c2e64d0fa50f357ead56eb594663922dfc745c336852d2e_prof);

        
        $__internal_e7eb31310f8d02f314daf451bd3e0ff62598a0979bd5ffd1e25bb407147e43bf->leave($__internal_e7eb31310f8d02f314daf451bd3e0ff62598a0979bd5ffd1e25bb407147e43bf_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e693ab01eb1104ba17b8d65521df86b5844ac6b0e9c3107ad2872e4af21d2c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e693ab01eb1104ba17b8d65521df86b5844ac6b0e9c3107ad2872e4af21d2c50->enter($__internal_e693ab01eb1104ba17b8d65521df86b5844ac6b0e9c3107ad2872e4af21d2c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a58f67a3fde6ede7ecd645564f73e8c9213db655314e6e4303b3f26150ae7fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58f67a3fde6ede7ecd645564f73e8c9213db655314e6e4303b3f26150ae7fed->enter($__internal_a58f67a3fde6ede7ecd645564f73e8c9213db655314e6e4303b3f26150ae7fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a58f67a3fde6ede7ecd645564f73e8c9213db655314e6e4303b3f26150ae7fed->leave($__internal_a58f67a3fde6ede7ecd645564f73e8c9213db655314e6e4303b3f26150ae7fed_prof);

        
        $__internal_e693ab01eb1104ba17b8d65521df86b5844ac6b0e9c3107ad2872e4af21d2c50->leave($__internal_e693ab01eb1104ba17b8d65521df86b5844ac6b0e9c3107ad2872e4af21d2c50_prof);

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
