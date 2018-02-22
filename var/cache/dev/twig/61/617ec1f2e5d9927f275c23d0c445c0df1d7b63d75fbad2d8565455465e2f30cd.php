<?php

/* BCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_6337e15d0574ee19644b9f5963901f7ba11d324928f71b9654ab49fda8799bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_4d601493d31ad9a5d43b39b04733bd0aa7ab8002b4181a18286eb27f75e3706d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d601493d31ad9a5d43b39b04733bd0aa7ab8002b4181a18286eb27f75e3706d->enter($__internal_4d601493d31ad9a5d43b39b04733bd0aa7ab8002b4181a18286eb27f75e3706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:delete.html.twig"));

        $__internal_141ffc1dff9a158b960eb53c70e19bbf8c8326746153e3cb0ffe224a8fc1b7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141ffc1dff9a158b960eb53c70e19bbf8c8326746153e3cb0ffe224a8fc1b7e6->enter($__internal_141ffc1dff9a158b960eb53c70e19bbf8c8326746153e3cb0ffe224a8fc1b7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d601493d31ad9a5d43b39b04733bd0aa7ab8002b4181a18286eb27f75e3706d->leave($__internal_4d601493d31ad9a5d43b39b04733bd0aa7ab8002b4181a18286eb27f75e3706d_prof);

        
        $__internal_141ffc1dff9a158b960eb53c70e19bbf8c8326746153e3cb0ffe224a8fc1b7e6->leave($__internal_141ffc1dff9a158b960eb53c70e19bbf8c8326746153e3cb0ffe224a8fc1b7e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a45cc3aafb7ed991a75f080c4380cbfed2cfb0ccb3c4ee5a2d9a2d63803cf5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a45cc3aafb7ed991a75f080c4380cbfed2cfb0ccb3c4ee5a2d9a2d63803cf5b->enter($__internal_1a45cc3aafb7ed991a75f080c4380cbfed2cfb0ccb3c4ee5a2d9a2d63803cf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce89e2d37787924454ba834a97dcfb7e1bbd71f40a0688480c04e187178a1a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce89e2d37787924454ba834a97dcfb7e1bbd71f40a0688480c04e187178a1a84->enter($__internal_ce89e2d37787924454ba834a97dcfb7e1bbd71f40a0688480c04e187178a1a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce89e2d37787924454ba834a97dcfb7e1bbd71f40a0688480c04e187178a1a84->leave($__internal_ce89e2d37787924454ba834a97dcfb7e1bbd71f40a0688480c04e187178a1a84_prof);

        
        $__internal_1a45cc3aafb7ed991a75f080c4380cbfed2cfb0ccb3c4ee5a2d9a2d63803cf5b->leave($__internal_1a45cc3aafb7ed991a75f080c4380cbfed2cfb0ccb3c4ee5a2d9a2d63803cf5b_prof);

    }

    // line 9
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_657bb7591c2c755ae9aec7cf896a38fdf5a1fe156a64e738e75f75d915afe8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657bb7591c2c755ae9aec7cf896a38fdf5a1fe156a64e738e75f75d915afe8b6->enter($__internal_657bb7591c2c755ae9aec7cf896a38fdf5a1fe156a64e738e75f75d915afe8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_0fd9d189f4954ee62a7e630c9b0d9ff0d9414450c5a97fc3ecbcb374b727dac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd9d189f4954ee62a7e630c9b0d9ff0d9414450c5a97fc3ecbcb374b727dac6->enter($__internal_0fd9d189f4954ee62a7e630c9b0d9ff0d9414450c5a97fc3ecbcb374b727dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 10
        echo "
    <h2>Supprimer une annonce</h2>

    <p>
        Voulez-vous vraiment supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" ?
    </p>

";
        // line 18
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\"/>
        ";
        // line 25
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), 'rest');
        echo "
    </form>

";
        
        $__internal_0fd9d189f4954ee62a7e630c9b0d9ff0d9414450c5a97fc3ecbcb374b727dac6->leave($__internal_0fd9d189f4954ee62a7e630c9b0d9ff0d9414450c5a97fc3ecbcb374b727dac6_prof);

        
        $__internal_657bb7591c2c755ae9aec7cf896a38fdf5a1fe156a64e738e75f75d915afe8b6->leave($__internal_657bb7591c2c755ae9aec7cf896a38fdf5a1fe156a64e738e75f75d915afe8b6_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  89 => 19,  84 => 18,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Modif du 06/02/18 #}

{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}

    <h2>Supprimer une annonce</h2>

    <p>
        Voulez-vous vraiment supprimer l'annonce \"{{ advert.title }}\" ?
    </p>

{# On place l'id de l'advert dans la route d'action du form #}
    <form action=\"{{ path('bc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
        <a href=\"{{ path('bc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\"/>
        {# Génération du champ CSRF via la ligne suivante #}
        {{ form_rest(form) }}
    </form>

{% endblock %}", "BCPlatformBundle:Advert:delete.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
