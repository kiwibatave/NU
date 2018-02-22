<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36caf6b28dd4313c10a8467ff01c31bd58a61994a67df54ceec0c7a6ccf47787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b7754cbbcfcfe0678c0bafa59217f9799f3f736dfd048c6615c1e85e5a5e71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7754cbbcfcfe0678c0bafa59217f9799f3f736dfd048c6615c1e85e5a5e71a2->enter($__internal_b7754cbbcfcfe0678c0bafa59217f9799f3f736dfd048c6615c1e85e5a5e71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_55bf7abae72f5c2c2f49c0eaaef6c1243ce1269aa877234f1e8286306df633c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bf7abae72f5c2c2f49c0eaaef6c1243ce1269aa877234f1e8286306df633c9->enter($__internal_55bf7abae72f5c2c2f49c0eaaef6c1243ce1269aa877234f1e8286306df633c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7754cbbcfcfe0678c0bafa59217f9799f3f736dfd048c6615c1e85e5a5e71a2->leave($__internal_b7754cbbcfcfe0678c0bafa59217f9799f3f736dfd048c6615c1e85e5a5e71a2_prof);

        
        $__internal_55bf7abae72f5c2c2f49c0eaaef6c1243ce1269aa877234f1e8286306df633c9->leave($__internal_55bf7abae72f5c2c2f49c0eaaef6c1243ce1269aa877234f1e8286306df633c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e0720f81dffea044d7ffb10dfbdc946934be3fe5df6f977bd8aca51af6fffae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0720f81dffea044d7ffb10dfbdc946934be3fe5df6f977bd8aca51af6fffae->enter($__internal_9e0720f81dffea044d7ffb10dfbdc946934be3fe5df6f977bd8aca51af6fffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a91d3e8a043144735e5aee8e782302513e4c7ceafe31558b20ff45c8841ff234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91d3e8a043144735e5aee8e782302513e4c7ceafe31558b20ff45c8841ff234->enter($__internal_a91d3e8a043144735e5aee8e782302513e4c7ceafe31558b20ff45c8841ff234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a91d3e8a043144735e5aee8e782302513e4c7ceafe31558b20ff45c8841ff234->leave($__internal_a91d3e8a043144735e5aee8e782302513e4c7ceafe31558b20ff45c8841ff234_prof);

        
        $__internal_9e0720f81dffea044d7ffb10dfbdc946934be3fe5df6f977bd8aca51af6fffae->leave($__internal_9e0720f81dffea044d7ffb10dfbdc946934be3fe5df6f977bd8aca51af6fffae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
