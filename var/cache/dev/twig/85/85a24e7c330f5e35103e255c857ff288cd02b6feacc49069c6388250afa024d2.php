<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8b425e126d71ff87de115ec0866ee53b65a32aff296a398bcd5196c36e3295c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dfd059f8ad56fc05738fbabb4292853e0cdd356a616537dd6b34f1fee74eaeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd059f8ad56fc05738fbabb4292853e0cdd356a616537dd6b34f1fee74eaeee->enter($__internal_dfd059f8ad56fc05738fbabb4292853e0cdd356a616537dd6b34f1fee74eaeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ce60c7922b21af366b81aecf6d54371f018635dac4c62b8983355306e19c46be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce60c7922b21af366b81aecf6d54371f018635dac4c62b8983355306e19c46be->enter($__internal_ce60c7922b21af366b81aecf6d54371f018635dac4c62b8983355306e19c46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd059f8ad56fc05738fbabb4292853e0cdd356a616537dd6b34f1fee74eaeee->leave($__internal_dfd059f8ad56fc05738fbabb4292853e0cdd356a616537dd6b34f1fee74eaeee_prof);

        
        $__internal_ce60c7922b21af366b81aecf6d54371f018635dac4c62b8983355306e19c46be->leave($__internal_ce60c7922b21af366b81aecf6d54371f018635dac4c62b8983355306e19c46be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a4096f380d2ea0a6d291a63584fec99d965e1fa8fdf90e1a744b99b708187cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4096f380d2ea0a6d291a63584fec99d965e1fa8fdf90e1a744b99b708187cb->enter($__internal_2a4096f380d2ea0a6d291a63584fec99d965e1fa8fdf90e1a744b99b708187cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_623c89d400ba44d7db130721ccbb4f330e9191e7dd665422ebe6cd7ffb89c183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623c89d400ba44d7db130721ccbb4f330e9191e7dd665422ebe6cd7ffb89c183->enter($__internal_623c89d400ba44d7db130721ccbb4f330e9191e7dd665422ebe6cd7ffb89c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_623c89d400ba44d7db130721ccbb4f330e9191e7dd665422ebe6cd7ffb89c183->leave($__internal_623c89d400ba44d7db130721ccbb4f330e9191e7dd665422ebe6cd7ffb89c183_prof);

        
        $__internal_2a4096f380d2ea0a6d291a63584fec99d965e1fa8fdf90e1a744b99b708187cb->leave($__internal_2a4096f380d2ea0a6d291a63584fec99d965e1fa8fdf90e1a744b99b708187cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
