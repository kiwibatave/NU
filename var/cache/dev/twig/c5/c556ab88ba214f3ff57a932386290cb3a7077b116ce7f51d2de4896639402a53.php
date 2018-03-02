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
        $__internal_6318ae8d805a8223d326c845a2f26f4d68ada6603033c24d3c4343dc49abb856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6318ae8d805a8223d326c845a2f26f4d68ada6603033c24d3c4343dc49abb856->enter($__internal_6318ae8d805a8223d326c845a2f26f4d68ada6603033c24d3c4343dc49abb856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_422872dc61c4bb6604de910dffeab1cec26a09ca41d6e833e43f80d5dc1dee3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422872dc61c4bb6604de910dffeab1cec26a09ca41d6e833e43f80d5dc1dee3a->enter($__internal_422872dc61c4bb6604de910dffeab1cec26a09ca41d6e833e43f80d5dc1dee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6318ae8d805a8223d326c845a2f26f4d68ada6603033c24d3c4343dc49abb856->leave($__internal_6318ae8d805a8223d326c845a2f26f4d68ada6603033c24d3c4343dc49abb856_prof);

        
        $__internal_422872dc61c4bb6604de910dffeab1cec26a09ca41d6e833e43f80d5dc1dee3a->leave($__internal_422872dc61c4bb6604de910dffeab1cec26a09ca41d6e833e43f80d5dc1dee3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fca9fe929a8494dbdb39f9593d809b4c1de9b2dba6614579bb236acddf0abefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca9fe929a8494dbdb39f9593d809b4c1de9b2dba6614579bb236acddf0abefb->enter($__internal_fca9fe929a8494dbdb39f9593d809b4c1de9b2dba6614579bb236acddf0abefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26b9775a3c0db743a71a929a303f9e82c2f080428f544cb0810d199b454f4e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b9775a3c0db743a71a929a303f9e82c2f080428f544cb0810d199b454f4e61->enter($__internal_26b9775a3c0db743a71a929a303f9e82c2f080428f544cb0810d199b454f4e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_26b9775a3c0db743a71a929a303f9e82c2f080428f544cb0810d199b454f4e61->leave($__internal_26b9775a3c0db743a71a929a303f9e82c2f080428f544cb0810d199b454f4e61_prof);

        
        $__internal_fca9fe929a8494dbdb39f9593d809b4c1de9b2dba6614579bb236acddf0abefb->leave($__internal_fca9fe929a8494dbdb39f9593d809b4c1de9b2dba6614579bb236acddf0abefb_prof);

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
