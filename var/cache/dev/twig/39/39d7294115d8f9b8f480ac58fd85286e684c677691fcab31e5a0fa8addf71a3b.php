<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_78fb8b41ded2ed91d7649caf07a8f33031d7049c35e971eb756e10d5d757e105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e18c3d8d72c7a37d9d3b634041ab323c8ede86bb44a64f4a2d612b5c505c87fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18c3d8d72c7a37d9d3b634041ab323c8ede86bb44a64f4a2d612b5c505c87fd->enter($__internal_e18c3d8d72c7a37d9d3b634041ab323c8ede86bb44a64f4a2d612b5c505c87fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_68ae0ec809f2d0e0d860caab8014593df770b6c17daa86e62f4ab03258e669ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ae0ec809f2d0e0d860caab8014593df770b6c17daa86e62f4ab03258e669ce->enter($__internal_68ae0ec809f2d0e0d860caab8014593df770b6c17daa86e62f4ab03258e669ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18c3d8d72c7a37d9d3b634041ab323c8ede86bb44a64f4a2d612b5c505c87fd->leave($__internal_e18c3d8d72c7a37d9d3b634041ab323c8ede86bb44a64f4a2d612b5c505c87fd_prof);

        
        $__internal_68ae0ec809f2d0e0d860caab8014593df770b6c17daa86e62f4ab03258e669ce->leave($__internal_68ae0ec809f2d0e0d860caab8014593df770b6c17daa86e62f4ab03258e669ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80a9c482cd023caa5ce1cde4627e78f74bbfc012d0dad6560d077105e3be3682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a9c482cd023caa5ce1cde4627e78f74bbfc012d0dad6560d077105e3be3682->enter($__internal_80a9c482cd023caa5ce1cde4627e78f74bbfc012d0dad6560d077105e3be3682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f7a09950a650c79d442959491ad35346230372f415c5a22436820e00ce9f5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7a09950a650c79d442959491ad35346230372f415c5a22436820e00ce9f5a3->enter($__internal_2f7a09950a650c79d442959491ad35346230372f415c5a22436820e00ce9f5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2f7a09950a650c79d442959491ad35346230372f415c5a22436820e00ce9f5a3->leave($__internal_2f7a09950a650c79d442959491ad35346230372f415c5a22436820e00ce9f5a3_prof);

        
        $__internal_80a9c482cd023caa5ce1cde4627e78f74bbfc012d0dad6560d077105e3be3682->leave($__internal_80a9c482cd023caa5ce1cde4627e78f74bbfc012d0dad6560d077105e3be3682_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9043134aec15cc3d8c88052eff5b8316e2cca0ae66da98fe4c893cf0455c98cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9043134aec15cc3d8c88052eff5b8316e2cca0ae66da98fe4c893cf0455c98cf->enter($__internal_9043134aec15cc3d8c88052eff5b8316e2cca0ae66da98fe4c893cf0455c98cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6acb5c8b2a257d8248f3e4c7571a56a8f2ca048db4ed8023cc4d4683ded11279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acb5c8b2a257d8248f3e4c7571a56a8f2ca048db4ed8023cc4d4683ded11279->enter($__internal_6acb5c8b2a257d8248f3e4c7571a56a8f2ca048db4ed8023cc4d4683ded11279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6acb5c8b2a257d8248f3e4c7571a56a8f2ca048db4ed8023cc4d4683ded11279->leave($__internal_6acb5c8b2a257d8248f3e4c7571a56a8f2ca048db4ed8023cc4d4683ded11279_prof);

        
        $__internal_9043134aec15cc3d8c88052eff5b8316e2cca0ae66da98fe4c893cf0455c98cf->leave($__internal_9043134aec15cc3d8c88052eff5b8316e2cca0ae66da98fe4c893cf0455c98cf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbc25d4bff0e991c2968c89131aa291b8df4bce340578635a3831ab80043a183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc25d4bff0e991c2968c89131aa291b8df4bce340578635a3831ab80043a183->enter($__internal_cbc25d4bff0e991c2968c89131aa291b8df4bce340578635a3831ab80043a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7617db950cf6f517e1fd01344c077cb15b24535e396c6eda31153c498a4db21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7617db950cf6f517e1fd01344c077cb15b24535e396c6eda31153c498a4db21d->enter($__internal_7617db950cf6f517e1fd01344c077cb15b24535e396c6eda31153c498a4db21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7617db950cf6f517e1fd01344c077cb15b24535e396c6eda31153c498a4db21d->leave($__internal_7617db950cf6f517e1fd01344c077cb15b24535e396c6eda31153c498a4db21d_prof);

        
        $__internal_cbc25d4bff0e991c2968c89131aa291b8df4bce340578635a3831ab80043a183->leave($__internal_cbc25d4bff0e991c2968c89131aa291b8df4bce340578635a3831ab80043a183_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
