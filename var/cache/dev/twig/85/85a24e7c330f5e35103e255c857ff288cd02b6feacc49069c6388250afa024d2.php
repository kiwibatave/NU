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
        $__internal_82c83d71f24018ea6ad9ee35bf15d091b26c938c185847047a2da1aa55f1f221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c83d71f24018ea6ad9ee35bf15d091b26c938c185847047a2da1aa55f1f221->enter($__internal_82c83d71f24018ea6ad9ee35bf15d091b26c938c185847047a2da1aa55f1f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_4557c7dc88938a232402a3426720dfd2b452f7a7332dcca4129a4fe38036b9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4557c7dc88938a232402a3426720dfd2b452f7a7332dcca4129a4fe38036b9d3->enter($__internal_4557c7dc88938a232402a3426720dfd2b452f7a7332dcca4129a4fe38036b9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c83d71f24018ea6ad9ee35bf15d091b26c938c185847047a2da1aa55f1f221->leave($__internal_82c83d71f24018ea6ad9ee35bf15d091b26c938c185847047a2da1aa55f1f221_prof);

        
        $__internal_4557c7dc88938a232402a3426720dfd2b452f7a7332dcca4129a4fe38036b9d3->leave($__internal_4557c7dc88938a232402a3426720dfd2b452f7a7332dcca4129a4fe38036b9d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_878ce0f2b189157433da38e66f70d471e2c9bf02c349c717445f9828a7f5f8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878ce0f2b189157433da38e66f70d471e2c9bf02c349c717445f9828a7f5f8f5->enter($__internal_878ce0f2b189157433da38e66f70d471e2c9bf02c349c717445f9828a7f5f8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_854aa9345c371ab68d3c67cd950648bcdac9d0533b28a66b7e2d7cbebc3c2ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854aa9345c371ab68d3c67cd950648bcdac9d0533b28a66b7e2d7cbebc3c2ceb->enter($__internal_854aa9345c371ab68d3c67cd950648bcdac9d0533b28a66b7e2d7cbebc3c2ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_854aa9345c371ab68d3c67cd950648bcdac9d0533b28a66b7e2d7cbebc3c2ceb->leave($__internal_854aa9345c371ab68d3c67cd950648bcdac9d0533b28a66b7e2d7cbebc3c2ceb_prof);

        
        $__internal_878ce0f2b189157433da38e66f70d471e2c9bf02c349c717445f9828a7f5f8f5->leave($__internal_878ce0f2b189157433da38e66f70d471e2c9bf02c349c717445f9828a7f5f8f5_prof);

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
