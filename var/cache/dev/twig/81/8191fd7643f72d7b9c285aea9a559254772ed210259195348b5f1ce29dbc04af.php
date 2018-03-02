<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_91b157cf96a3c1e1241dd7da89e4da5082d2b2530b9114c8cd65e0158f87c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a2e48f4c128b46347a875dd0a6388a09028c47b48c29b75fd40e540788cf791a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e48f4c128b46347a875dd0a6388a09028c47b48c29b75fd40e540788cf791a->enter($__internal_a2e48f4c128b46347a875dd0a6388a09028c47b48c29b75fd40e540788cf791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_3626c2fe5ddb6c00de008c05043168ca930e4f6a7aa10a44287a8829ac486b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3626c2fe5ddb6c00de008c05043168ca930e4f6a7aa10a44287a8829ac486b70->enter($__internal_3626c2fe5ddb6c00de008c05043168ca930e4f6a7aa10a44287a8829ac486b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e48f4c128b46347a875dd0a6388a09028c47b48c29b75fd40e540788cf791a->leave($__internal_a2e48f4c128b46347a875dd0a6388a09028c47b48c29b75fd40e540788cf791a_prof);

        
        $__internal_3626c2fe5ddb6c00de008c05043168ca930e4f6a7aa10a44287a8829ac486b70->leave($__internal_3626c2fe5ddb6c00de008c05043168ca930e4f6a7aa10a44287a8829ac486b70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_533bab679ecb6dcf26283296f379832152ef0f5a243e25c52d3c9f2fe08412bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533bab679ecb6dcf26283296f379832152ef0f5a243e25c52d3c9f2fe08412bc->enter($__internal_533bab679ecb6dcf26283296f379832152ef0f5a243e25c52d3c9f2fe08412bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb6766d2bcd4098f42f9105c5ce047bf6e272bc4f3c3a603225da3ca2a6b2e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6766d2bcd4098f42f9105c5ce047bf6e272bc4f3c3a603225da3ca2a6b2e60->enter($__internal_cb6766d2bcd4098f42f9105c5ce047bf6e272bc4f3c3a603225da3ca2a6b2e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cb6766d2bcd4098f42f9105c5ce047bf6e272bc4f3c3a603225da3ca2a6b2e60->leave($__internal_cb6766d2bcd4098f42f9105c5ce047bf6e272bc4f3c3a603225da3ca2a6b2e60_prof);

        
        $__internal_533bab679ecb6dcf26283296f379832152ef0f5a243e25c52d3c9f2fe08412bc->leave($__internal_533bab679ecb6dcf26283296f379832152ef0f5a243e25c52d3c9f2fe08412bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
