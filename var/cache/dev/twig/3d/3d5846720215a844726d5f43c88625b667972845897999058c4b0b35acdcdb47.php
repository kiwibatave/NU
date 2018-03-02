<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bca7133489a9626cb1c8972364901ad9514aa5bca579ca014f1e622f4437c9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_585c2bb0852cedf2bc347733097a57742ea3ea4243c00ecbc545e63cc14037a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585c2bb0852cedf2bc347733097a57742ea3ea4243c00ecbc545e63cc14037a9->enter($__internal_585c2bb0852cedf2bc347733097a57742ea3ea4243c00ecbc545e63cc14037a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5e67418b6beef22a3cc7d4e29c74570897ec4e39fffc4632a5ab831dac1ff041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e67418b6beef22a3cc7d4e29c74570897ec4e39fffc4632a5ab831dac1ff041->enter($__internal_5e67418b6beef22a3cc7d4e29c74570897ec4e39fffc4632a5ab831dac1ff041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585c2bb0852cedf2bc347733097a57742ea3ea4243c00ecbc545e63cc14037a9->leave($__internal_585c2bb0852cedf2bc347733097a57742ea3ea4243c00ecbc545e63cc14037a9_prof);

        
        $__internal_5e67418b6beef22a3cc7d4e29c74570897ec4e39fffc4632a5ab831dac1ff041->leave($__internal_5e67418b6beef22a3cc7d4e29c74570897ec4e39fffc4632a5ab831dac1ff041_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2bf01d090bcd69638241dfb6c424fb2b4161bf83775fee80ae8704d85ebba21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bf01d090bcd69638241dfb6c424fb2b4161bf83775fee80ae8704d85ebba21->enter($__internal_b2bf01d090bcd69638241dfb6c424fb2b4161bf83775fee80ae8704d85ebba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_56e3ad73429df13e033d82b9f9b9a713dd71a26cf32beafd713700143cfb4be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e3ad73429df13e033d82b9f9b9a713dd71a26cf32beafd713700143cfb4be0->enter($__internal_56e3ad73429df13e033d82b9f9b9a713dd71a26cf32beafd713700143cfb4be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_56e3ad73429df13e033d82b9f9b9a713dd71a26cf32beafd713700143cfb4be0->leave($__internal_56e3ad73429df13e033d82b9f9b9a713dd71a26cf32beafd713700143cfb4be0_prof);

        
        $__internal_b2bf01d090bcd69638241dfb6c424fb2b4161bf83775fee80ae8704d85ebba21->leave($__internal_b2bf01d090bcd69638241dfb6c424fb2b4161bf83775fee80ae8704d85ebba21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
