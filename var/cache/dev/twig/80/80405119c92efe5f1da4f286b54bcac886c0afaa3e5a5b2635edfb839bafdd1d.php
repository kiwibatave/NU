<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0b136788425146a74f0dddaa2da973fe326e61f994387e9afa31c6c2cd5b2c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfffd36fe241b881ee35161bbe83cbc81d6173f89ce016fb5e92602595e6acbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfffd36fe241b881ee35161bbe83cbc81d6173f89ce016fb5e92602595e6acbd->enter($__internal_dfffd36fe241b881ee35161bbe83cbc81d6173f89ce016fb5e92602595e6acbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cdbda7a97ed511de1f80b3a1e6c9e81eed987ae9a879aa95e11fa209dae50cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbda7a97ed511de1f80b3a1e6c9e81eed987ae9a879aa95e11fa209dae50cfe->enter($__internal_cdbda7a97ed511de1f80b3a1e6c9e81eed987ae9a879aa95e11fa209dae50cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfffd36fe241b881ee35161bbe83cbc81d6173f89ce016fb5e92602595e6acbd->leave($__internal_dfffd36fe241b881ee35161bbe83cbc81d6173f89ce016fb5e92602595e6acbd_prof);

        
        $__internal_cdbda7a97ed511de1f80b3a1e6c9e81eed987ae9a879aa95e11fa209dae50cfe->leave($__internal_cdbda7a97ed511de1f80b3a1e6c9e81eed987ae9a879aa95e11fa209dae50cfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40dd8670d1e1efca819ef3c7d69c5b2e396a17920acdfbc96cdf736594ef94a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dd8670d1e1efca819ef3c7d69c5b2e396a17920acdfbc96cdf736594ef94a6->enter($__internal_40dd8670d1e1efca819ef3c7d69c5b2e396a17920acdfbc96cdf736594ef94a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_15fc9a3ea3d793986faf74c1e56a73e30d31c34fafebb4246fc573dfb4682091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fc9a3ea3d793986faf74c1e56a73e30d31c34fafebb4246fc573dfb4682091->enter($__internal_15fc9a3ea3d793986faf74c1e56a73e30d31c34fafebb4246fc573dfb4682091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15fc9a3ea3d793986faf74c1e56a73e30d31c34fafebb4246fc573dfb4682091->leave($__internal_15fc9a3ea3d793986faf74c1e56a73e30d31c34fafebb4246fc573dfb4682091_prof);

        
        $__internal_40dd8670d1e1efca819ef3c7d69c5b2e396a17920acdfbc96cdf736594ef94a6->leave($__internal_40dd8670d1e1efca819ef3c7d69c5b2e396a17920acdfbc96cdf736594ef94a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8425d053d9ff8cca2f2523efae187a6adefdce24868c16d4a27c6fc8fe85932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8425d053d9ff8cca2f2523efae187a6adefdce24868c16d4a27c6fc8fe85932->enter($__internal_a8425d053d9ff8cca2f2523efae187a6adefdce24868c16d4a27c6fc8fe85932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c60e50c1e97782d38e2acd1c8e8f27098c06e98e0a4500ec79d46b18c563236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c60e50c1e97782d38e2acd1c8e8f27098c06e98e0a4500ec79d46b18c563236->enter($__internal_8c60e50c1e97782d38e2acd1c8e8f27098c06e98e0a4500ec79d46b18c563236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c60e50c1e97782d38e2acd1c8e8f27098c06e98e0a4500ec79d46b18c563236->leave($__internal_8c60e50c1e97782d38e2acd1c8e8f27098c06e98e0a4500ec79d46b18c563236_prof);

        
        $__internal_a8425d053d9ff8cca2f2523efae187a6adefdce24868c16d4a27c6fc8fe85932->leave($__internal_a8425d053d9ff8cca2f2523efae187a6adefdce24868c16d4a27c6fc8fe85932_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_405cf0a389b4c085b9bdf14eb90298f01c49bf78fc22f38da4d639ab3fbb3a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405cf0a389b4c085b9bdf14eb90298f01c49bf78fc22f38da4d639ab3fbb3a40->enter($__internal_405cf0a389b4c085b9bdf14eb90298f01c49bf78fc22f38da4d639ab3fbb3a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5be57e79ac98a80038ec18b8f598863e603f017325252e3164fdf28fca366a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5be57e79ac98a80038ec18b8f598863e603f017325252e3164fdf28fca366a5->enter($__internal_b5be57e79ac98a80038ec18b8f598863e603f017325252e3164fdf28fca366a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b5be57e79ac98a80038ec18b8f598863e603f017325252e3164fdf28fca366a5->leave($__internal_b5be57e79ac98a80038ec18b8f598863e603f017325252e3164fdf28fca366a5_prof);

        
        $__internal_405cf0a389b4c085b9bdf14eb90298f01c49bf78fc22f38da4d639ab3fbb3a40->leave($__internal_405cf0a389b4c085b9bdf14eb90298f01c49bf78fc22f38da4d639ab3fbb3a40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
