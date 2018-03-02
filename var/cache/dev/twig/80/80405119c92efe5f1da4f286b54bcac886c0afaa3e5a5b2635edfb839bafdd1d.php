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
        $__internal_f82696fb0c49e60913d7dd4d8f8bf6483ae20066104461a049c2058e716f8143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82696fb0c49e60913d7dd4d8f8bf6483ae20066104461a049c2058e716f8143->enter($__internal_f82696fb0c49e60913d7dd4d8f8bf6483ae20066104461a049c2058e716f8143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3954f1d9eabc310387f2e1d45a0fc5c64f69277b633718b8e32cf62c387f0c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3954f1d9eabc310387f2e1d45a0fc5c64f69277b633718b8e32cf62c387f0c32->enter($__internal_3954f1d9eabc310387f2e1d45a0fc5c64f69277b633718b8e32cf62c387f0c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82696fb0c49e60913d7dd4d8f8bf6483ae20066104461a049c2058e716f8143->leave($__internal_f82696fb0c49e60913d7dd4d8f8bf6483ae20066104461a049c2058e716f8143_prof);

        
        $__internal_3954f1d9eabc310387f2e1d45a0fc5c64f69277b633718b8e32cf62c387f0c32->leave($__internal_3954f1d9eabc310387f2e1d45a0fc5c64f69277b633718b8e32cf62c387f0c32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a2480e749041f2087ce49a1871bfdc53cdc8c8f5b69dda9934917862a24fcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2480e749041f2087ce49a1871bfdc53cdc8c8f5b69dda9934917862a24fcff->enter($__internal_2a2480e749041f2087ce49a1871bfdc53cdc8c8f5b69dda9934917862a24fcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1968ec2be02edb5b98990da295fbb8e17a4bc4bb4806a401ae7da1bb8643066c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1968ec2be02edb5b98990da295fbb8e17a4bc4bb4806a401ae7da1bb8643066c->enter($__internal_1968ec2be02edb5b98990da295fbb8e17a4bc4bb4806a401ae7da1bb8643066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1968ec2be02edb5b98990da295fbb8e17a4bc4bb4806a401ae7da1bb8643066c->leave($__internal_1968ec2be02edb5b98990da295fbb8e17a4bc4bb4806a401ae7da1bb8643066c_prof);

        
        $__internal_2a2480e749041f2087ce49a1871bfdc53cdc8c8f5b69dda9934917862a24fcff->leave($__internal_2a2480e749041f2087ce49a1871bfdc53cdc8c8f5b69dda9934917862a24fcff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e7b872d3c8b6a662ab72c5d1b93dcaca7309b979a9ace46c9537220aeb8127a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7b872d3c8b6a662ab72c5d1b93dcaca7309b979a9ace46c9537220aeb8127a->enter($__internal_4e7b872d3c8b6a662ab72c5d1b93dcaca7309b979a9ace46c9537220aeb8127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_358d010f52f003fbebee742b7f48c88050bd15467af1ab37579e872e5c3d475b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358d010f52f003fbebee742b7f48c88050bd15467af1ab37579e872e5c3d475b->enter($__internal_358d010f52f003fbebee742b7f48c88050bd15467af1ab37579e872e5c3d475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_358d010f52f003fbebee742b7f48c88050bd15467af1ab37579e872e5c3d475b->leave($__internal_358d010f52f003fbebee742b7f48c88050bd15467af1ab37579e872e5c3d475b_prof);

        
        $__internal_4e7b872d3c8b6a662ab72c5d1b93dcaca7309b979a9ace46c9537220aeb8127a->leave($__internal_4e7b872d3c8b6a662ab72c5d1b93dcaca7309b979a9ace46c9537220aeb8127a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_032bf59d97b365e66871c96ea71ad2dc9ea65c1709c2d8c28b38793ca9437682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032bf59d97b365e66871c96ea71ad2dc9ea65c1709c2d8c28b38793ca9437682->enter($__internal_032bf59d97b365e66871c96ea71ad2dc9ea65c1709c2d8c28b38793ca9437682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62942d871b175f85097b0b1ab5ef78d3c492b7b9cf0d2a4d7312748564ccaf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62942d871b175f85097b0b1ab5ef78d3c492b7b9cf0d2a4d7312748564ccaf47->enter($__internal_62942d871b175f85097b0b1ab5ef78d3c492b7b9cf0d2a4d7312748564ccaf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_62942d871b175f85097b0b1ab5ef78d3c492b7b9cf0d2a4d7312748564ccaf47->leave($__internal_62942d871b175f85097b0b1ab5ef78d3c492b7b9cf0d2a4d7312748564ccaf47_prof);

        
        $__internal_032bf59d97b365e66871c96ea71ad2dc9ea65c1709c2d8c28b38793ca9437682->leave($__internal_032bf59d97b365e66871c96ea71ad2dc9ea65c1709c2d8c28b38793ca9437682_prof);

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
