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
        $__internal_967467e6613f013a5b9a7e73efa7f42a42264f78332bc6e62f4d6972cf01fac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967467e6613f013a5b9a7e73efa7f42a42264f78332bc6e62f4d6972cf01fac1->enter($__internal_967467e6613f013a5b9a7e73efa7f42a42264f78332bc6e62f4d6972cf01fac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a75ca8bb9f6b24a143df02f805408295876a4c748f279d9cd6d111ed4b29fa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75ca8bb9f6b24a143df02f805408295876a4c748f279d9cd6d111ed4b29fa6f->enter($__internal_a75ca8bb9f6b24a143df02f805408295876a4c748f279d9cd6d111ed4b29fa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_967467e6613f013a5b9a7e73efa7f42a42264f78332bc6e62f4d6972cf01fac1->leave($__internal_967467e6613f013a5b9a7e73efa7f42a42264f78332bc6e62f4d6972cf01fac1_prof);

        
        $__internal_a75ca8bb9f6b24a143df02f805408295876a4c748f279d9cd6d111ed4b29fa6f->leave($__internal_a75ca8bb9f6b24a143df02f805408295876a4c748f279d9cd6d111ed4b29fa6f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e5943816a18999c55799a361d8edb2a8974efa42ae8c0da9b89d889726349ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5943816a18999c55799a361d8edb2a8974efa42ae8c0da9b89d889726349ea->enter($__internal_6e5943816a18999c55799a361d8edb2a8974efa42ae8c0da9b89d889726349ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64c8c9f6598ebbb7eae4946640c5af2895d21810a734860be7ca5e3a5c0a9da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c8c9f6598ebbb7eae4946640c5af2895d21810a734860be7ca5e3a5c0a9da6->enter($__internal_64c8c9f6598ebbb7eae4946640c5af2895d21810a734860be7ca5e3a5c0a9da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_64c8c9f6598ebbb7eae4946640c5af2895d21810a734860be7ca5e3a5c0a9da6->leave($__internal_64c8c9f6598ebbb7eae4946640c5af2895d21810a734860be7ca5e3a5c0a9da6_prof);

        
        $__internal_6e5943816a18999c55799a361d8edb2a8974efa42ae8c0da9b89d889726349ea->leave($__internal_6e5943816a18999c55799a361d8edb2a8974efa42ae8c0da9b89d889726349ea_prof);

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
