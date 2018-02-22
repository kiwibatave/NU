<?php

/* BCCoreBundle:Core:index.html.twig */
class __TwigTemplate_7ca1a314c37ab8d3b77faaf509aeebd81d998dc57fcc7935f126a7768054c033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BCCoreBundle::layout.html.twig", "BCCoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_107166fcd90e0cb0391ae08b5073e646db691425c5aeae48cbc4afda41777478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107166fcd90e0cb0391ae08b5073e646db691425c5aeae48cbc4afda41777478->enter($__internal_107166fcd90e0cb0391ae08b5073e646db691425c5aeae48cbc4afda41777478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle:Core:index.html.twig"));

        $__internal_9e68fbcac5b5846160d54d04a7246e3bfa08be6f599b921bc3a92ed82f43498a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e68fbcac5b5846160d54d04a7246e3bfa08be6f599b921bc3a92ed82f43498a->enter($__internal_9e68fbcac5b5846160d54d04a7246e3bfa08be6f599b921bc3a92ed82f43498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107166fcd90e0cb0391ae08b5073e646db691425c5aeae48cbc4afda41777478->leave($__internal_107166fcd90e0cb0391ae08b5073e646db691425c5aeae48cbc4afda41777478_prof);

        
        $__internal_9e68fbcac5b5846160d54d04a7246e3bfa08be6f599b921bc3a92ed82f43498a->leave($__internal_9e68fbcac5b5846160d54d04a7246e3bfa08be6f599b921bc3a92ed82f43498a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f20da4473d445bc8c5ee5e68b283f5836bb6ececf7c059901760f8c19a48772b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20da4473d445bc8c5ee5e68b283f5836bb6ececf7c059901760f8c19a48772b->enter($__internal_f20da4473d445bc8c5ee5e68b283f5836bb6ececf7c059901760f8c19a48772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be8048e4f363eb0adacf823510a225d53e6ee605d6eb7a27ed8252de42d7ecc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8048e4f363eb0adacf823510a225d53e6ee605d6eb7a27ed8252de42d7ecc5->enter($__internal_be8048e4f363eb0adacf823510a225d53e6ee605d6eb7a27ed8252de42d7ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_be8048e4f363eb0adacf823510a225d53e6ee605d6eb7a27ed8252de42d7ecc5->leave($__internal_be8048e4f363eb0adacf823510a225d53e6ee605d6eb7a27ed8252de42d7ecc5_prof);

        
        $__internal_f20da4473d445bc8c5ee5e68b283f5836bb6ececf7c059901760f8c19a48772b->leave($__internal_f20da4473d445bc8c5ee5e68b283f5836bb6ececf7c059901760f8c19a48772b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_85671aa36020f06da7245d9a19fe401705147dfb42bbec7c6a1e44f9f85f3193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85671aa36020f06da7245d9a19fe401705147dfb42bbec7c6a1e44f9f85f3193->enter($__internal_85671aa36020f06da7245d9a19fe401705147dfb42bbec7c6a1e44f9f85f3193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_329b159a40a1d0d62e584875b9ff93e7bc32098cd796c92012fb409271aec4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329b159a40a1d0d62e584875b9ff93e7bc32098cd796c92012fb409271aec4d1->enter($__internal_329b159a40a1d0d62e584875b9ff93e7bc32098cd796c92012fb409271aec4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <h2>Page d'accueil de notre site</h2>

    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 18
        echo "    <h3>Dernières annonces</h3>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

";
        
        $__internal_329b159a40a1d0d62e584875b9ff93e7bc32098cd796c92012fb409271aec4d1->leave($__internal_329b159a40a1d0d62e584875b9ff93e7bc32098cd796c92012fb409271aec4d1_prof);

        
        $__internal_85671aa36020f06da7245d9a19fe401705147dfb42bbec7c6a1e44f9f85f3193->leave($__internal_85671aa36020f06da7245d9a19fe401705147dfb42bbec7c6a1e44f9f85f3193_prof);

    }

    public function getTemplateName()
    {
        return "BCCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Utilisation layout général #}
{% extends \"BCCoreBundle::layout.html.twig\" %}

{% block title %}
    Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

    <h2>Page d'accueil de notre site</h2>

    {# Affichage des messages flash \"info\" #}
    {% for message in app.session.flashbag.get('info') %}
        <div class=\"alert alert-info\">Message flash : {{ message }}</div>
    {% endfor %}

    {# Affichage des dernières annonces via le menu de PlatformBundle #}
    <h3>Dernières annonces</h3>
    {{ render(controller(\"BCPlatformBundle:Advert:menu\", {'limit': 3})) }}

{% endblock %}
", "BCCoreBundle:Core:index.html.twig", "/var/www/html/NU/src/BC/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
