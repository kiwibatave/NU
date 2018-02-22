<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e981cd1f176b51e067a62dad8352bc5901beb238be3a8821c5cce8de01277906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ade202341cac952f83aea852e9fbf6ed79dc46f2fe6691bb36099b345f246096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade202341cac952f83aea852e9fbf6ed79dc46f2fe6691bb36099b345f246096->enter($__internal_ade202341cac952f83aea852e9fbf6ed79dc46f2fe6691bb36099b345f246096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_016cd08ddd0a64180d4b700b2c0d89eb01df15437af1ff50b8e5d20e4af9f0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016cd08ddd0a64180d4b700b2c0d89eb01df15437af1ff50b8e5d20e4af9f0b2->enter($__internal_016cd08ddd0a64180d4b700b2c0d89eb01df15437af1ff50b8e5d20e4af9f0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade202341cac952f83aea852e9fbf6ed79dc46f2fe6691bb36099b345f246096->leave($__internal_ade202341cac952f83aea852e9fbf6ed79dc46f2fe6691bb36099b345f246096_prof);

        
        $__internal_016cd08ddd0a64180d4b700b2c0d89eb01df15437af1ff50b8e5d20e4af9f0b2->leave($__internal_016cd08ddd0a64180d4b700b2c0d89eb01df15437af1ff50b8e5d20e4af9f0b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9098a27b488397f2cb4d4944f941b945f070487e6d19a37d818657d5deacdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9098a27b488397f2cb4d4944f941b945f070487e6d19a37d818657d5deacdff->enter($__internal_e9098a27b488397f2cb4d4944f941b945f070487e6d19a37d818657d5deacdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aeac83319f3a88e80e48d35fee7a66c5e299e100cb5133b95dbfc7655730b52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeac83319f3a88e80e48d35fee7a66c5e299e100cb5133b95dbfc7655730b52d->enter($__internal_aeac83319f3a88e80e48d35fee7a66c5e299e100cb5133b95dbfc7655730b52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_aeac83319f3a88e80e48d35fee7a66c5e299e100cb5133b95dbfc7655730b52d->leave($__internal_aeac83319f3a88e80e48d35fee7a66c5e299e100cb5133b95dbfc7655730b52d_prof);

        
        $__internal_e9098a27b488397f2cb4d4944f941b945f070487e6d19a37d818657d5deacdff->leave($__internal_e9098a27b488397f2cb4d4944f941b945f070487e6d19a37d818657d5deacdff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
