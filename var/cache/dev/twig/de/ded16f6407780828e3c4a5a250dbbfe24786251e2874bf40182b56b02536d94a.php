<?php

/* BCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_546489fe1c5b1a470ee7b68839f121037b5cd2bc8ecedabeae795f03d30b1cd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_6b1d9a58846dd8730d8c03bae431961be47e9ddec613b0a7c09f48ac7f446237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1d9a58846dd8730d8c03bae431961be47e9ddec613b0a7c09f48ac7f446237->enter($__internal_6b1d9a58846dd8730d8c03bae431961be47e9ddec613b0a7c09f48ac7f446237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:view.html.twig"));

        $__internal_51580ed8242793b3e493c0cdfad6f2d6551dd41b0e2d679b28f4fc01198ff034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51580ed8242793b3e493c0cdfad6f2d6551dd41b0e2d679b28f4fc01198ff034->enter($__internal_51580ed8242793b3e493c0cdfad6f2d6551dd41b0e2d679b28f4fc01198ff034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1d9a58846dd8730d8c03bae431961be47e9ddec613b0a7c09f48ac7f446237->leave($__internal_6b1d9a58846dd8730d8c03bae431961be47e9ddec613b0a7c09f48ac7f446237_prof);

        
        $__internal_51580ed8242793b3e493c0cdfad6f2d6551dd41b0e2d679b28f4fc01198ff034->leave($__internal_51580ed8242793b3e493c0cdfad6f2d6551dd41b0e2d679b28f4fc01198ff034_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79cce915e7ef5261de330aa07f6b23ffbfc98a027267d1ab5a917e093f5b4021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cce915e7ef5261de330aa07f6b23ffbfc98a027267d1ab5a917e093f5b4021->enter($__internal_79cce915e7ef5261de330aa07f6b23ffbfc98a027267d1ab5a917e093f5b4021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f946268503f9cd44cb1de1c6cc816b37aa725e765bc151c38ec7e48bc72657ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f946268503f9cd44cb1de1c6cc816b37aa725e765bc151c38ec7e48bc72657ed->enter($__internal_f946268503f9cd44cb1de1c6cc816b37aa725e765bc151c38ec7e48bc72657ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f946268503f9cd44cb1de1c6cc816b37aa725e765bc151c38ec7e48bc72657ed->leave($__internal_f946268503f9cd44cb1de1c6cc816b37aa725e765bc151c38ec7e48bc72657ed_prof);

        
        $__internal_79cce915e7ef5261de330aa07f6b23ffbfc98a027267d1ab5a917e093f5b4021->leave($__internal_79cce915e7ef5261de330aa07f6b23ffbfc98a027267d1ab5a917e093f5b4021_prof);

    }

    // line 7
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_818d3557ea480dccd3d0dad84ed54455d2db4f04519d493cd0794defa3063e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818d3557ea480dccd3d0dad84ed54455d2db4f04519d493cd0794defa3063e4a->enter($__internal_818d3557ea480dccd3d0dad84ed54455d2db4f04519d493cd0794defa3063e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_beacde5f9d56d4ffd43767ef53ba71be854ede355515ebed93ca338465643f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beacde5f9d56d4ffd43767ef53ba71be854ede355515ebed93ca338465643f2b->enter($__internal_beacde5f9d56d4ffd43767ef53ba71be854ede355515ebed93ca338465643f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 8
        echo "    <div class=\"row center-align\" id=\"viewadvert\">
        <div class=\"s3 offset-s3\">
            ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "image", array()))) {
            // line 13
            echo "                <img id=\"photoview\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\"/>
            ";
        }
        // line 15
        echo "
            <h5>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h5>
            <i>Par ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

            <div class=\"well\">
                ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 20, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
            </div>
            <div class=\"row\">
                <div class=\"offset-s3\">
                    <p>La tente est disponible à la location dans le ville de : <span class=\"blue-text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 24, $this->getSourceContext()); })()), "city", array()), "html", null, true);
        echo "</span></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"offset-m3\">
                    <p>La tente est disponible à la location du
                        <span class=\"green-text darken-1\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "startdate", array()), "d-m-Y"), "html", null, true);
        echo "</span>
                        au
                        <span class=\"red-text accent-4\">";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 32, $this->getSourceContext()); })()), "enddate", array()), "d-m-Y"), "html", null, true);
        echo "</span>
                    </p>
                </div>
            </div>
            <div id=\"mapid\"></div>
        </div>
    </div>
    ";
        // line 40
        echo "    ";
        // line 41
        echo "    <div class=\"row center-align\">
        <div class=\"offset-s3\" id=\"buttonsaction\">
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_home");
        echo "\" class=\"waves-effect waves-light btn-large blue\"><i
                        class=\"material-icons left\">list</i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 47, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"
               class=\"waves-effect waves-light btn-large green\">
                <i class=\"material-icons left\">mode_edit</i>
                Modifier l'annonce
            </a>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 52, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"
               class=\"waves-effect waves-light btn-large red\">
                <i class=\"material-icons left\">delete</i>
                Supprimer l'annonce
            </a>
        </div>
    </div>
";
        
        $__internal_beacde5f9d56d4ffd43767ef53ba71be854ede355515ebed93ca338465643f2b->leave($__internal_beacde5f9d56d4ffd43767ef53ba71be854ede355515ebed93ca338465643f2b_prof);

        
        $__internal_818d3557ea480dccd3d0dad84ed54455d2db4f04519d493cd0794defa3063e4a->leave($__internal_818d3557ea480dccd3d0dad84ed54455d2db4f04519d493cd0794defa3063e4a_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  148 => 47,  141 => 43,  137 => 41,  135 => 40,  125 => 32,  120 => 30,  111 => 24,  104 => 20,  96 => 17,  92 => 16,  89 => 15,  81 => 13,  78 => 12,  76 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}
    <div class=\"row center-align\" id=\"viewadvert\">
        <div class=\"s3 offset-s3\">
            {# Vérification liaison image/advert #}
            {# Modif du 06/02/18 #}
            {% if advert.image is not null %}
                <img id=\"photoview\" src=\"{{ asset(advert.image.webPath) }}\" alt=\"{{ advert.image.alt }}\"/>
            {% endif %}

            <h5>{{ advert.title }}</h5>
            <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

            <div class=\"well\">
                {{ advert.content }}
            </div>
            <div class=\"row\">
                <div class=\"offset-s3\">
                    <p>La tente est disponible à la location dans le ville de : <span class=\"blue-text\">{{ advert.city }}</span></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"offset-m3\">
                    <p>La tente est disponible à la location du
                        <span class=\"green-text darken-1\">{{ advert.startdate|date('d-m-Y') }}</span>
                        au
                        <span class=\"red-text accent-4\">{{ advert.enddate|date('d-m-Y') }}</span>
                    </p>
                </div>
            </div>
            <div id=\"mapid\"></div>
        </div>
    </div>
    {# test map #}
    {# fin test map #}
    <div class=\"row center-align\">
        <div class=\"offset-s3\" id=\"buttonsaction\">
            <a href=\"{{ path('bc_platform_home') }}\" class=\"waves-effect waves-light btn-large blue\"><i
                        class=\"material-icons left\">list</i>
                Retour à la liste
            </a>
            <a href=\"{{ path('bc_platform_edit', {'id': advert.id}) }}\"
               class=\"waves-effect waves-light btn-large green\">
                <i class=\"material-icons left\">mode_edit</i>
                Modifier l'annonce
            </a>
            <a href=\"{{ path('bc_platform_delete', {'id': advert.id}) }}\"
               class=\"waves-effect waves-light btn-large red\">
                <i class=\"material-icons left\">delete</i>
                Supprimer l'annonce
            </a>
        </div>
    </div>
{% endblock %}
", "BCPlatformBundle:Advert:view.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
