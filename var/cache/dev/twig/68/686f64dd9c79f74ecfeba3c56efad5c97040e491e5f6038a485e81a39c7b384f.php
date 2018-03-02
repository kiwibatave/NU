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
            'toto' => array($this, 'block_toto'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afdfbb98574de7a1dd480db0dea22682aae92151ca499d02874ca55772903272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdfbb98574de7a1dd480db0dea22682aae92151ca499d02874ca55772903272->enter($__internal_afdfbb98574de7a1dd480db0dea22682aae92151ca499d02874ca55772903272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle:Core:index.html.twig"));

        $__internal_989d4fda2a5437515e796cf89e693d3809cf3e9822639538e8eecbea3c448afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989d4fda2a5437515e796cf89e693d3809cf3e9822639538e8eecbea3c448afb->enter($__internal_989d4fda2a5437515e796cf89e693d3809cf3e9822639538e8eecbea3c448afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdfbb98574de7a1dd480db0dea22682aae92151ca499d02874ca55772903272->leave($__internal_afdfbb98574de7a1dd480db0dea22682aae92151ca499d02874ca55772903272_prof);

        
        $__internal_989d4fda2a5437515e796cf89e693d3809cf3e9822639538e8eecbea3c448afb->leave($__internal_989d4fda2a5437515e796cf89e693d3809cf3e9822639538e8eecbea3c448afb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b70acaa1675660e209b2a85aaee008156b5bfe75db419b556056e760d2abec40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70acaa1675660e209b2a85aaee008156b5bfe75db419b556056e760d2abec40->enter($__internal_b70acaa1675660e209b2a85aaee008156b5bfe75db419b556056e760d2abec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0ed39400d83c0f5c8c5466a457cff9d7e9a01edafbcaa99bfb63e88a0e9a19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ed39400d83c0f5c8c5466a457cff9d7e9a01edafbcaa99bfb63e88a0e9a19a->enter($__internal_b0ed39400d83c0f5c8c5466a457cff9d7e9a01edafbcaa99bfb63e88a0e9a19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b0ed39400d83c0f5c8c5466a457cff9d7e9a01edafbcaa99bfb63e88a0e9a19a->leave($__internal_b0ed39400d83c0f5c8c5466a457cff9d7e9a01edafbcaa99bfb63e88a0e9a19a_prof);

        
        $__internal_b70acaa1675660e209b2a85aaee008156b5bfe75db419b556056e760d2abec40->leave($__internal_b70acaa1675660e209b2a85aaee008156b5bfe75db419b556056e760d2abec40_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d1e209496e9ead526a084025929279b1665d49af2daafb09d08e9c78883855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d1e209496e9ead526a084025929279b1665d49af2daafb09d08e9c78883855->enter($__internal_a5d1e209496e9ead526a084025929279b1665d49af2daafb09d08e9c78883855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_257f7e9acc2092266d55db2232573b2ac7e466e31784f67b1d7faff021a0b62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f7e9acc2092266d55db2232573b2ac7e466e31784f67b1d7faff021a0b62a->enter($__internal_257f7e9acc2092266d55db2232573b2ac7e466e31784f67b1d7faff021a0b62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row center-align\">
    <h2>Bienvenue sur la plateforme de location NAÏTUP</h2>

    ";
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $this->displayBlock('toto', $context, $blocks);
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        
        $__internal_257f7e9acc2092266d55db2232573b2ac7e466e31784f67b1d7faff021a0b62a->leave($__internal_257f7e9acc2092266d55db2232573b2ac7e466e31784f67b1d7faff021a0b62a_prof);

        
        $__internal_a5d1e209496e9ead526a084025929279b1665d49af2daafb09d08e9c78883855->leave($__internal_a5d1e209496e9ead526a084025929279b1665d49af2daafb09d08e9c78883855_prof);

    }

    // line 15
    public function block_toto($context, array $blocks = array())
    {
        $__internal_71e09a41d89db02dfaa178116cb5e0e297681ef8d77e4ab133ac9bcb98f6a2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e09a41d89db02dfaa178116cb5e0e297681ef8d77e4ab133ac9bcb98f6a2e9->enter($__internal_71e09a41d89db02dfaa178116cb5e0e297681ef8d77e4ab133ac9bcb98f6a2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toto"));

        $__internal_b02432f5d7bc74154593dc5718e961704de1a3ca079e244425b7e9ffeafdafcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02432f5d7bc74154593dc5718e961704de1a3ca079e244425b7e9ffeafdafcf->enter($__internal_b02432f5d7bc74154593dc5718e961704de1a3ca079e244425b7e9ffeafdafcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toto"));

        // line 16
        echo "    ";
        
        $__internal_b02432f5d7bc74154593dc5718e961704de1a3ca079e244425b7e9ffeafdafcf->leave($__internal_b02432f5d7bc74154593dc5718e961704de1a3ca079e244425b7e9ffeafdafcf_prof);

        
        $__internal_71e09a41d89db02dfaa178116cb5e0e297681ef8d77e4ab133ac9bcb98f6a2e9->leave($__internal_71e09a41d89db02dfaa178116cb5e0e297681ef8d77e4ab133ac9bcb98f6a2e9_prof);

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
        return array (  120 => 16,  111 => 15,  101 => 20,  99 => 19,  97 => 18,  95 => 17,  92 => 15,  83 => 13,  78 => 12,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Utilisation layout général #}
{% extends \"BCCoreBundle::layout.html.twig\" %}
{% block title %}
    Page d'accueil - {{ parent() }}
{% endblock title %}

{% block body %}
    <div class=\"row center-align\">
    <h2>Bienvenue sur la plateforme de location NAÏTUP</h2>

    {# Affichage des messages flash \"info\" #}
    {% for message in app.session.flashbag.get('info') %}
        <div class=\"alert alert-info\">Message flash : {{ message }}</div>
    {% endfor %}
    {% block toto %}
    {% endblock toto %}
    {# Affichage des dernières annonces via le menu de PlatformBundle #}
    {#<h3>Dernières annonces</h3>#}
    {#{{ render(controller(\"BCPlatformBundle:Advert:menu\", {'limit': 3})) }}#}
    {#</div>#}
{% endblock body %}
", "BCCoreBundle:Core:index.html.twig", "/var/www/html/NU/src/BC/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
