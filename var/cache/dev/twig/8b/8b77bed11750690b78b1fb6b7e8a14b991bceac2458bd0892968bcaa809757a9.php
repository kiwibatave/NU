<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_485c78a59dfb2c34afe6736bcb144d819423495e31316733d2d0e1f7578d742c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_cdfa090287d39e7cd0c1801d015a929a332d6ceed790cdab0fd81afb40cedaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfa090287d39e7cd0c1801d015a929a332d6ceed790cdab0fd81afb40cedaef->enter($__internal_cdfa090287d39e7cd0c1801d015a929a332d6ceed790cdab0fd81afb40cedaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a4fbe627de387af28fdf4da06a95ece9685a84ae321f56d6b12df4771e2deddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fbe627de387af28fdf4da06a95ece9685a84ae321f56d6b12df4771e2deddc->enter($__internal_a4fbe627de387af28fdf4da06a95ece9685a84ae321f56d6b12df4771e2deddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfa090287d39e7cd0c1801d015a929a332d6ceed790cdab0fd81afb40cedaef->leave($__internal_cdfa090287d39e7cd0c1801d015a929a332d6ceed790cdab0fd81afb40cedaef_prof);

        
        $__internal_a4fbe627de387af28fdf4da06a95ece9685a84ae321f56d6b12df4771e2deddc->leave($__internal_a4fbe627de387af28fdf4da06a95ece9685a84ae321f56d6b12df4771e2deddc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5091f82f29d96b5113cd0db807da9f82a8f6568a0c1e8fad050fc5ce0d70095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5091f82f29d96b5113cd0db807da9f82a8f6568a0c1e8fad050fc5ce0d70095->enter($__internal_f5091f82f29d96b5113cd0db807da9f82a8f6568a0c1e8fad050fc5ce0d70095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c50fab4f5aa1d9c1142cc4645b1aa6a159ff4bea81e82cfe60672f381a2daf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c50fab4f5aa1d9c1142cc4645b1aa6a159ff4bea81e82cfe60672f381a2daf6->enter($__internal_5c50fab4f5aa1d9c1142cc4645b1aa6a159ff4bea81e82cfe60672f381a2daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5c50fab4f5aa1d9c1142cc4645b1aa6a159ff4bea81e82cfe60672f381a2daf6->leave($__internal_5c50fab4f5aa1d9c1142cc4645b1aa6a159ff4bea81e82cfe60672f381a2daf6_prof);

        
        $__internal_f5091f82f29d96b5113cd0db807da9f82a8f6568a0c1e8fad050fc5ce0d70095->leave($__internal_f5091f82f29d96b5113cd0db807da9f82a8f6568a0c1e8fad050fc5ce0d70095_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
