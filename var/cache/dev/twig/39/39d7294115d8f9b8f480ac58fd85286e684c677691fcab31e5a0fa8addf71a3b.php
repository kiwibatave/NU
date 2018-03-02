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
        $__internal_d6ebb884dffc8de676c8c2ca3c947d5c1e6931888081027f1982593b13d5910d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ebb884dffc8de676c8c2ca3c947d5c1e6931888081027f1982593b13d5910d->enter($__internal_d6ebb884dffc8de676c8c2ca3c947d5c1e6931888081027f1982593b13d5910d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_fc868c048f945ccb7c9d54e9935017cfcab11a8330aeaefb412a9a68a9678f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc868c048f945ccb7c9d54e9935017cfcab11a8330aeaefb412a9a68a9678f89->enter($__internal_fc868c048f945ccb7c9d54e9935017cfcab11a8330aeaefb412a9a68a9678f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ebb884dffc8de676c8c2ca3c947d5c1e6931888081027f1982593b13d5910d->leave($__internal_d6ebb884dffc8de676c8c2ca3c947d5c1e6931888081027f1982593b13d5910d_prof);

        
        $__internal_fc868c048f945ccb7c9d54e9935017cfcab11a8330aeaefb412a9a68a9678f89->leave($__internal_fc868c048f945ccb7c9d54e9935017cfcab11a8330aeaefb412a9a68a9678f89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a53e42b4b3615d52dc85ff4b380f9c546105d89c56e03cc54165d8635f55ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a53e42b4b3615d52dc85ff4b380f9c546105d89c56e03cc54165d8635f55ee2->enter($__internal_1a53e42b4b3615d52dc85ff4b380f9c546105d89c56e03cc54165d8635f55ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f90004420cb57605097220728ae8d52a0a9dd9427ae4af02438e21204bbc0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f90004420cb57605097220728ae8d52a0a9dd9427ae4af02438e21204bbc0c5->enter($__internal_6f90004420cb57605097220728ae8d52a0a9dd9427ae4af02438e21204bbc0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6f90004420cb57605097220728ae8d52a0a9dd9427ae4af02438e21204bbc0c5->leave($__internal_6f90004420cb57605097220728ae8d52a0a9dd9427ae4af02438e21204bbc0c5_prof);

        
        $__internal_1a53e42b4b3615d52dc85ff4b380f9c546105d89c56e03cc54165d8635f55ee2->leave($__internal_1a53e42b4b3615d52dc85ff4b380f9c546105d89c56e03cc54165d8635f55ee2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ebddadfe228d7b7f97a728240931512209029b904da3bef98c32d7c9dc70c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebddadfe228d7b7f97a728240931512209029b904da3bef98c32d7c9dc70c7e->enter($__internal_8ebddadfe228d7b7f97a728240931512209029b904da3bef98c32d7c9dc70c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1425f3153a2f29ddf5feb5be7846d8edcc30f02aaf4cf1d65940b6c92d75fc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1425f3153a2f29ddf5feb5be7846d8edcc30f02aaf4cf1d65940b6c92d75fc4f->enter($__internal_1425f3153a2f29ddf5feb5be7846d8edcc30f02aaf4cf1d65940b6c92d75fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1425f3153a2f29ddf5feb5be7846d8edcc30f02aaf4cf1d65940b6c92d75fc4f->leave($__internal_1425f3153a2f29ddf5feb5be7846d8edcc30f02aaf4cf1d65940b6c92d75fc4f_prof);

        
        $__internal_8ebddadfe228d7b7f97a728240931512209029b904da3bef98c32d7c9dc70c7e->leave($__internal_8ebddadfe228d7b7f97a728240931512209029b904da3bef98c32d7c9dc70c7e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02fb8d428a8e0dc99e77888e8c373e67515586426ee77ef15ce7cb45db9b9952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fb8d428a8e0dc99e77888e8c373e67515586426ee77ef15ce7cb45db9b9952->enter($__internal_02fb8d428a8e0dc99e77888e8c373e67515586426ee77ef15ce7cb45db9b9952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d6515b48ba539d9330a0124bc128258316705c07dbe9177e32308662d31622c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6515b48ba539d9330a0124bc128258316705c07dbe9177e32308662d31622c->enter($__internal_1d6515b48ba539d9330a0124bc128258316705c07dbe9177e32308662d31622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1d6515b48ba539d9330a0124bc128258316705c07dbe9177e32308662d31622c->leave($__internal_1d6515b48ba539d9330a0124bc128258316705c07dbe9177e32308662d31622c_prof);

        
        $__internal_02fb8d428a8e0dc99e77888e8c373e67515586426ee77ef15ce7cb45db9b9952->leave($__internal_02fb8d428a8e0dc99e77888e8c373e67515586426ee77ef15ce7cb45db9b9952_prof);

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
