<?php

/* BCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_871987aa908a797f23050c98c49a417c25a2fe26ccde8796188ed48f9892957e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_ee2d5545ded0b2482082d824ca65423f4ee057e2d269bd7c8f18513a5654fff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2d5545ded0b2482082d824ca65423f4ee057e2d269bd7c8f18513a5654fff5->enter($__internal_ee2d5545ded0b2482082d824ca65423f4ee057e2d269bd7c8f18513a5654fff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:index.html.twig"));

        $__internal_65bc8b93d05c77fab65f884890ba1d3719501b6d5342876284d83c01c23400f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bc8b93d05c77fab65f884890ba1d3719501b6d5342876284d83c01c23400f9->enter($__internal_65bc8b93d05c77fab65f884890ba1d3719501b6d5342876284d83c01c23400f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2d5545ded0b2482082d824ca65423f4ee057e2d269bd7c8f18513a5654fff5->leave($__internal_ee2d5545ded0b2482082d824ca65423f4ee057e2d269bd7c8f18513a5654fff5_prof);

        
        $__internal_65bc8b93d05c77fab65f884890ba1d3719501b6d5342876284d83c01c23400f9->leave($__internal_65bc8b93d05c77fab65f884890ba1d3719501b6d5342876284d83c01c23400f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1e3e371335957f16762404d77738566713529b8b77b5e36b38d5544ae224a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e3e371335957f16762404d77738566713529b8b77b5e36b38d5544ae224a82->enter($__internal_b1e3e371335957f16762404d77738566713529b8b77b5e36b38d5544ae224a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45a2de7a396adb316e2110a7be26fde98442de5c5284a4c53b05bc99feff2ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a2de7a396adb316e2110a7be26fde98442de5c5284a4c53b05bc99feff2ab4->enter($__internal_45a2de7a396adb316e2110a7be26fde98442de5c5284a4c53b05bc99feff2ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_45a2de7a396adb316e2110a7be26fde98442de5c5284a4c53b05bc99feff2ab4->leave($__internal_45a2de7a396adb316e2110a7be26fde98442de5c5284a4c53b05bc99feff2ab4_prof);

        
        $__internal_b1e3e371335957f16762404d77738566713529b8b77b5e36b38d5544ae224a82->leave($__internal_b1e3e371335957f16762404d77738566713529b8b77b5e36b38d5544ae224a82_prof);

    }

    // line 7
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_9a2591d85fa282ee37267384d550f421c3c428ad87b78cbf97734c1c1772a3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2591d85fa282ee37267384d550f421c3c428ad87b78cbf97734c1c1772a3c3->enter($__internal_9a2591d85fa282ee37267384d550f421c3c428ad87b78cbf97734c1c1772a3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_da2f063cda983f7f8cf883f39d0298536caae64a38376f06c987e68c467a16ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2f063cda983f7f8cf883f39d0298536caae64a38376f06c987e68c467a16ee->enter($__internal_da2f063cda983f7f8cf883f39d0298536caae64a38376f06c987e68c467a16ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row offset-s3 center-align\">
            <h4>Liste des annonces</h4>
            <ul>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 12, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "                    <li>
                       <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\"><span class=\"black-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</span></a>
                        par ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
                        le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "                    <li>Pas encore d'annonces disponible</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </div>
    </div>
    <div class=\"row center-align\">
        <ul class=\"pagination\">
            ";
        // line 27
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 27, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "                <li";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 28, $this->getSourceContext()); })()))) {
                echo " class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </ul>
    </div>
";
        
        $__internal_da2f063cda983f7f8cf883f39d0298536caae64a38376f06c987e68c467a16ee->leave($__internal_da2f063cda983f7f8cf883f39d0298536caae64a38376f06c987e68c467a16ee_prof);

        
        $__internal_9a2591d85fa282ee37267384d550f421c3c428ad87b78cbf97734c1c1772a3c3->leave($__internal_9a2591d85fa282ee37267384d550f421c3c428ad87b78cbf97734c1c1772a3c3_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 32,  130 => 29,  123 => 28,  118 => 27,  111 => 21,  104 => 19,  96 => 16,  92 => 15,  86 => 14,  83 => 13,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}
    <div class=\"container\">
        <div class=\"row offset-s3 center-align\">
            <h4>Liste des annonces</h4>
            <ul>
                {% for advert in listAdverts %}
                    <li>
                       <a href=\"{{ path('bc_platform_view', {'id':advert.id}) }}\"><span class=\"black-text\">{{ advert.title }}</span></a>
                        par {{ advert.author }},
                        le {{ advert.date|date('d/m/Y') }}
                    </li>
                {% else %}
                    <li>Pas encore d'annonces disponible</li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"row center-align\">
        <ul class=\"pagination\">
            {# Fonction range(a, b) qui crée un tableau de valeurs entre a et b#}
            {% for p in range(1, nbPages) %}
                <li{% if p == page %} class=\"active\"{% endif %}>
                    <a href=\"{{ path('bc_platform_home', {'page': p}) }}\">{{ p }}</a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}", "BCPlatformBundle:Advert:index.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
