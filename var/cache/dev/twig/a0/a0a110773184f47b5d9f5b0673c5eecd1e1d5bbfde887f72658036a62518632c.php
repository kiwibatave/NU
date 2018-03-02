<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e24bcd355b3f803e4b2700710b6444e5c316b12cebfe420f4c614ff3c0c539ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_28489328d9c2fa31da6034d10aafc9c7d940fb4e592c901f39983de0f049f16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28489328d9c2fa31da6034d10aafc9c7d940fb4e592c901f39983de0f049f16e->enter($__internal_28489328d9c2fa31da6034d10aafc9c7d940fb4e592c901f39983de0f049f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_dd8f212bca794918621c63cca0729875fc423135761bb8a6f8d531c4b612233d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8f212bca794918621c63cca0729875fc423135761bb8a6f8d531c4b612233d->enter($__internal_dd8f212bca794918621c63cca0729875fc423135761bb8a6f8d531c4b612233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28489328d9c2fa31da6034d10aafc9c7d940fb4e592c901f39983de0f049f16e->leave($__internal_28489328d9c2fa31da6034d10aafc9c7d940fb4e592c901f39983de0f049f16e_prof);

        
        $__internal_dd8f212bca794918621c63cca0729875fc423135761bb8a6f8d531c4b612233d->leave($__internal_dd8f212bca794918621c63cca0729875fc423135761bb8a6f8d531c4b612233d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e34c022cf80cca4df9e88f147c33b68b42b8f1defb732d2caf0efc5a5b14de64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34c022cf80cca4df9e88f147c33b68b42b8f1defb732d2caf0efc5a5b14de64->enter($__internal_e34c022cf80cca4df9e88f147c33b68b42b8f1defb732d2caf0efc5a5b14de64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d085d9ddf29cbc4cf3404156a1aa53149b568af4867cb9cbf63ba37866f999b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d085d9ddf29cbc4cf3404156a1aa53149b568af4867cb9cbf63ba37866f999b8->enter($__internal_d085d9ddf29cbc4cf3404156a1aa53149b568af4867cb9cbf63ba37866f999b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d085d9ddf29cbc4cf3404156a1aa53149b568af4867cb9cbf63ba37866f999b8->leave($__internal_d085d9ddf29cbc4cf3404156a1aa53149b568af4867cb9cbf63ba37866f999b8_prof);

        
        $__internal_e34c022cf80cca4df9e88f147c33b68b42b8f1defb732d2caf0efc5a5b14de64->leave($__internal_e34c022cf80cca4df9e88f147c33b68b42b8f1defb732d2caf0efc5a5b14de64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
