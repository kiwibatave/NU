<?php

/* BCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_936d09c9e4ab582fb7554b8947ec08f1eecfd9013bd804657de7de578ce3d6e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bcplatform_body' => array($this, 'block_bcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbb2c19ca823bf674cfeb3f2878a8615443d3c79312be9c8909a85e2a943c475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb2c19ca823bf674cfeb3f2878a8615443d3c79312be9c8909a85e2a943c475->enter($__internal_dbb2c19ca823bf674cfeb3f2878a8615443d3c79312be9c8909a85e2a943c475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:edit.html.twig"));

        $__internal_f768680a39a5ed2b2a38b393d2ba775a771ff08f27d46f59fc868c72b7807b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f768680a39a5ed2b2a38b393d2ba775a771ff08f27d46f59fc868c72b7807b32->enter($__internal_f768680a39a5ed2b2a38b393d2ba775a771ff08f27d46f59fc868c72b7807b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb2c19ca823bf674cfeb3f2878a8615443d3c79312be9c8909a85e2a943c475->leave($__internal_dbb2c19ca823bf674cfeb3f2878a8615443d3c79312be9c8909a85e2a943c475_prof);

        
        $__internal_f768680a39a5ed2b2a38b393d2ba775a771ff08f27d46f59fc868c72b7807b32->leave($__internal_f768680a39a5ed2b2a38b393d2ba775a771ff08f27d46f59fc868c72b7807b32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d5b2f19ee234b67f0b866e907ff5c7f788f44eed1e982c2b494c0d31a24c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d5b2f19ee234b67f0b866e907ff5c7f788f44eed1e982c2b494c0d31a24c69->enter($__internal_e4d5b2f19ee234b67f0b866e907ff5c7f788f44eed1e982c2b494c0d31a24c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_617a1a8d6b68fafa1d9419aac3a2bde834d41e2f9f5f957c40f1eb5a7ec9649c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617a1a8d6b68fafa1d9419aac3a2bde834d41e2f9f5f957c40f1eb5a7ec9649c->enter($__internal_617a1a8d6b68fafa1d9419aac3a2bde834d41e2f9f5f957c40f1eb5a7ec9649c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_617a1a8d6b68fafa1d9419aac3a2bde834d41e2f9f5f957c40f1eb5a7ec9649c->leave($__internal_617a1a8d6b68fafa1d9419aac3a2bde834d41e2f9f5f957c40f1eb5a7ec9649c_prof);

        
        $__internal_e4d5b2f19ee234b67f0b866e907ff5c7f788f44eed1e982c2b494c0d31a24c69->leave($__internal_e4d5b2f19ee234b67f0b866e907ff5c7f788f44eed1e982c2b494c0d31a24c69_prof);

    }

    // line 7
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_35eb648f175618bfc7a7d218cecb490025f3852cb8e6ddb2e28292d114d3a23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35eb648f175618bfc7a7d218cecb490025f3852cb8e6ddb2e28292d114d3a23c->enter($__internal_35eb648f175618bfc7a7d218cecb490025f3852cb8e6ddb2e28292d114d3a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_db0cb2e4d8c8e6a7bd2bd52997c69bee9c47668dc06259de7389d4f0a2f57d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0cb2e4d8c8e6a7bd2bd52997c69bee9c47668dc06259de7389d4f0a2f57d41->enter($__internal_db0cb2e4d8c8e6a7bd2bd52997c69bee9c47668dc06259de7389d4f0a2f57d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 8
        echo "    <h2>Modifier une annonce</h2>

    ";
        // line 10
        echo twig_include($this->env, $context, "BCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>Vous allez pouvoir maintenant modifier votre annonce</p>

    <p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>
";
        
        $__internal_db0cb2e4d8c8e6a7bd2bd52997c69bee9c47668dc06259de7389d4f0a2f57d41->leave($__internal_db0cb2e4d8c8e6a7bd2bd52997c69bee9c47668dc06259de7389d4f0a2f57d41_prof);

        
        $__internal_35eb648f175618bfc7a7d218cecb490025f3852cb8e6ddb2e28292d114d3a23c->leave($__internal_35eb648f175618bfc7a7d218cecb490025f3852cb8e6ddb2e28292d114d3a23c_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}
    <h2>Modifier une annonce</h2>

    {{ include(\"BCPlatformBundle:Advert:form.html.twig\") }}

    <p>Vous allez pouvoir maintenant modifier votre annonce</p>

    <p>
        <a href=\"{{ path('bc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>
{% endblock %}", "BCPlatformBundle:Advert:edit.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
