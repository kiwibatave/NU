<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0d2fd2a98588bbf19aced293789d8d63b69a676270a53339e611c33392b9f3ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4407e7d1c90baaafd48e93270053ce54ea0306810d167480870663ce6ad31b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4407e7d1c90baaafd48e93270053ce54ea0306810d167480870663ce6ad31b53->enter($__internal_4407e7d1c90baaafd48e93270053ce54ea0306810d167480870663ce6ad31b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1965e9d5d25673795717edd84dd3b9739b9884aed18e34ba95d28db956e7cd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1965e9d5d25673795717edd84dd3b9739b9884aed18e34ba95d28db956e7cd86->enter($__internal_1965e9d5d25673795717edd84dd3b9739b9884aed18e34ba95d28db956e7cd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4407e7d1c90baaafd48e93270053ce54ea0306810d167480870663ce6ad31b53->leave($__internal_4407e7d1c90baaafd48e93270053ce54ea0306810d167480870663ce6ad31b53_prof);

        
        $__internal_1965e9d5d25673795717edd84dd3b9739b9884aed18e34ba95d28db956e7cd86->leave($__internal_1965e9d5d25673795717edd84dd3b9739b9884aed18e34ba95d28db956e7cd86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f5734da793a798aa8d1d4e1edb3b314add576a459736adb252245a205d29987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5734da793a798aa8d1d4e1edb3b314add576a459736adb252245a205d29987->enter($__internal_2f5734da793a798aa8d1d4e1edb3b314add576a459736adb252245a205d29987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff26b87442d4d1cffb7ceadec547e38dc597e35d5d5154261ed188c688bd4393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff26b87442d4d1cffb7ceadec547e38dc597e35d5d5154261ed188c688bd4393->enter($__internal_ff26b87442d4d1cffb7ceadec547e38dc597e35d5d5154261ed188c688bd4393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ff26b87442d4d1cffb7ceadec547e38dc597e35d5d5154261ed188c688bd4393->leave($__internal_ff26b87442d4d1cffb7ceadec547e38dc597e35d5d5154261ed188c688bd4393_prof);

        
        $__internal_2f5734da793a798aa8d1d4e1edb3b314add576a459736adb252245a205d29987->leave($__internal_2f5734da793a798aa8d1d4e1edb3b314add576a459736adb252245a205d29987_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
