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
        $__internal_180eed3be2a5824afd2897a3bc37fc626024b232b53c378c0c1979596d350541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180eed3be2a5824afd2897a3bc37fc626024b232b53c378c0c1979596d350541->enter($__internal_180eed3be2a5824afd2897a3bc37fc626024b232b53c378c0c1979596d350541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:delete.html.twig"));

        $__internal_2ba7a7df2aea530ee35838a614bea6dbad2a6d0de26d7dbeefed2f30c980ed3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba7a7df2aea530ee35838a614bea6dbad2a6d0de26d7dbeefed2f30c980ed3e->enter($__internal_2ba7a7df2aea530ee35838a614bea6dbad2a6d0de26d7dbeefed2f30c980ed3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180eed3be2a5824afd2897a3bc37fc626024b232b53c378c0c1979596d350541->leave($__internal_180eed3be2a5824afd2897a3bc37fc626024b232b53c378c0c1979596d350541_prof);

        
        $__internal_2ba7a7df2aea530ee35838a614bea6dbad2a6d0de26d7dbeefed2f30c980ed3e->leave($__internal_2ba7a7df2aea530ee35838a614bea6dbad2a6d0de26d7dbeefed2f30c980ed3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b602bd1314d5524e53af59636dad008308474c21395233bc324ab9a702b7cda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b602bd1314d5524e53af59636dad008308474c21395233bc324ab9a702b7cda0->enter($__internal_b602bd1314d5524e53af59636dad008308474c21395233bc324ab9a702b7cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_057ad5bd11d825de04648c2306006bad223079321e69a129b1be4504435e49a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057ad5bd11d825de04648c2306006bad223079321e69a129b1be4504435e49a3->enter($__internal_057ad5bd11d825de04648c2306006bad223079321e69a129b1be4504435e49a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_057ad5bd11d825de04648c2306006bad223079321e69a129b1be4504435e49a3->leave($__internal_057ad5bd11d825de04648c2306006bad223079321e69a129b1be4504435e49a3_prof);

        
        $__internal_b602bd1314d5524e53af59636dad008308474c21395233bc324ab9a702b7cda0->leave($__internal_b602bd1314d5524e53af59636dad008308474c21395233bc324ab9a702b7cda0_prof);

    }

    // line 9
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_b0d83f86816d21a24e20699e8df53ac209cea947f496d17812a267dc8354187e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d83f86816d21a24e20699e8df53ac209cea947f496d17812a267dc8354187e->enter($__internal_b0d83f86816d21a24e20699e8df53ac209cea947f496d17812a267dc8354187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_4530459c4177297b33779789c0770473f9a4dc750d5f3f4d0a3d86ba10d4473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4530459c4177297b33779789c0770473f9a4dc750d5f3f4d0a3d86ba10d4473a->enter($__internal_4530459c4177297b33779789c0770473f9a4dc750d5f3f4d0a3d86ba10d4473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

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
        
        $__internal_4530459c4177297b33779789c0770473f9a4dc750d5f3f4d0a3d86ba10d4473a->leave($__internal_4530459c4177297b33779789c0770473f9a4dc750d5f3f4d0a3d86ba10d4473a_prof);

        
        $__internal_b0d83f86816d21a24e20699e8df53ac209cea947f496d17812a267dc8354187e->leave($__internal_b0d83f86816d21a24e20699e8df53ac209cea947f496d17812a267dc8354187e_prof);

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
