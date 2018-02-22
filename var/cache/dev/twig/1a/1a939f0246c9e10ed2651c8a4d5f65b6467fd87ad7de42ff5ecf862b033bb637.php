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
        $__internal_239b31fc8ef067ebd4b5d34a95dbb621684313abdf72ea7b218ebe772fe0d981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239b31fc8ef067ebd4b5d34a95dbb621684313abdf72ea7b218ebe772fe0d981->enter($__internal_239b31fc8ef067ebd4b5d34a95dbb621684313abdf72ea7b218ebe772fe0d981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:index.html.twig"));

        $__internal_f780f73f6d0f5e4399d6f69f212583402e30f7e58abaef0ef2c76c776e205843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f780f73f6d0f5e4399d6f69f212583402e30f7e58abaef0ef2c76c776e205843->enter($__internal_f780f73f6d0f5e4399d6f69f212583402e30f7e58abaef0ef2c76c776e205843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239b31fc8ef067ebd4b5d34a95dbb621684313abdf72ea7b218ebe772fe0d981->leave($__internal_239b31fc8ef067ebd4b5d34a95dbb621684313abdf72ea7b218ebe772fe0d981_prof);

        
        $__internal_f780f73f6d0f5e4399d6f69f212583402e30f7e58abaef0ef2c76c776e205843->leave($__internal_f780f73f6d0f5e4399d6f69f212583402e30f7e58abaef0ef2c76c776e205843_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf24830fbe80a3f83c15b521a80abb13eae87c7a2dbb1b7b0fdbbad2c90db54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf24830fbe80a3f83c15b521a80abb13eae87c7a2dbb1b7b0fdbbad2c90db54d->enter($__internal_bf24830fbe80a3f83c15b521a80abb13eae87c7a2dbb1b7b0fdbbad2c90db54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb2f98d9b54a1e3ad89aa2408b55568198d0256e2a25dfa2422b0df0d6e222fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2f98d9b54a1e3ad89aa2408b55568198d0256e2a25dfa2422b0df0d6e222fa->enter($__internal_fb2f98d9b54a1e3ad89aa2408b55568198d0256e2a25dfa2422b0df0d6e222fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fb2f98d9b54a1e3ad89aa2408b55568198d0256e2a25dfa2422b0df0d6e222fa->leave($__internal_fb2f98d9b54a1e3ad89aa2408b55568198d0256e2a25dfa2422b0df0d6e222fa_prof);

        
        $__internal_bf24830fbe80a3f83c15b521a80abb13eae87c7a2dbb1b7b0fdbbad2c90db54d->leave($__internal_bf24830fbe80a3f83c15b521a80abb13eae87c7a2dbb1b7b0fdbbad2c90db54d_prof);

    }

    // line 7
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_a3259381bed142430ddbf2518ac015b511ca70391e8bf9246bc5152aceccf0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3259381bed142430ddbf2518ac015b511ca70391e8bf9246bc5152aceccf0a3->enter($__internal_a3259381bed142430ddbf2518ac015b511ca70391e8bf9246bc5152aceccf0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_426379fc3217ad547ef47ca893417be7718c9e57edf869c0a185253c38d692a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426379fc3217ad547ef47ca893417be7718c9e57edf869c0a185253c38d692a7->enter($__internal_426379fc3217ad547ef47ca893417be7718c9e57edf869c0a185253c38d692a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 8
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 12, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "            <li>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "            <li>Pas encore d'annonces disponible</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </ul>

    <ul class=\"pagination\">
        ";
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 27, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "            <li";
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
        echo "    </ul>
";
        
        $__internal_426379fc3217ad547ef47ca893417be7718c9e57edf869c0a185253c38d692a7->leave($__internal_426379fc3217ad547ef47ca893417be7718c9e57edf869c0a185253c38d692a7_prof);

        
        $__internal_a3259381bed142430ddbf2518ac015b511ca70391e8bf9246bc5152aceccf0a3->leave($__internal_a3259381bed142430ddbf2518ac015b511ca70391e8bf9246bc5152aceccf0a3_prof);

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
        return array (  142 => 32,  131 => 29,  124 => 28,  119 => 27,  114 => 23,  107 => 21,  99 => 18,  95 => 17,  90 => 15,  86 => 14,  83 => 13,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('bc_platform_view', {'id':advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas encore d'annonces disponible</li>
        {% endfor %}
    </ul>

    <ul class=\"pagination\">
        {# Fonction range(a, b) qui crée un tableau de valeurs entre a et b#}
        {% for p in range(1, nbPages) %}
            <li{% if p == page %} class=\"active\"{% endif %}>
                <a href=\"{{ path('bc_platform_home', {'page': p}) }}\">{{ p }}</a>
            </li>
        {% endfor %}
    </ul>
{% endblock %}", "BCPlatformBundle:Advert:index.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
