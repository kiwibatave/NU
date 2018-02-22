<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3cc0b91c38bdf8b8a742ce44d1e21dfcdffb7929c40c1bf2e02b94111209ebcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4c43585235ebf2bb3a841f4ad491bc8914158932e9c014fa4ce50e54ac878ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c43585235ebf2bb3a841f4ad491bc8914158932e9c014fa4ce50e54ac878ee->enter($__internal_d4c43585235ebf2bb3a841f4ad491bc8914158932e9c014fa4ce50e54ac878ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e332debd86cc7fe6791743dac7c37fe06608de72f9adc8e928ac1bee60a28e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e332debd86cc7fe6791743dac7c37fe06608de72f9adc8e928ac1bee60a28e67->enter($__internal_e332debd86cc7fe6791743dac7c37fe06608de72f9adc8e928ac1bee60a28e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c43585235ebf2bb3a841f4ad491bc8914158932e9c014fa4ce50e54ac878ee->leave($__internal_d4c43585235ebf2bb3a841f4ad491bc8914158932e9c014fa4ce50e54ac878ee_prof);

        
        $__internal_e332debd86cc7fe6791743dac7c37fe06608de72f9adc8e928ac1bee60a28e67->leave($__internal_e332debd86cc7fe6791743dac7c37fe06608de72f9adc8e928ac1bee60a28e67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3ec7aa070777e56d6b3fd3fea70fe2f212b4ab656e7139ac5fe8ab5fff55c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ec7aa070777e56d6b3fd3fea70fe2f212b4ab656e7139ac5fe8ab5fff55c16->enter($__internal_f3ec7aa070777e56d6b3fd3fea70fe2f212b4ab656e7139ac5fe8ab5fff55c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bfbf71be344f1731a4fb1c965cb8ca71d7c7a74a7d451a4f14d58d33cecde901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbf71be344f1731a4fb1c965cb8ca71d7c7a74a7d451a4f14d58d33cecde901->enter($__internal_bfbf71be344f1731a4fb1c965cb8ca71d7c7a74a7d451a4f14d58d33cecde901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bfbf71be344f1731a4fb1c965cb8ca71d7c7a74a7d451a4f14d58d33cecde901->leave($__internal_bfbf71be344f1731a4fb1c965cb8ca71d7c7a74a7d451a4f14d58d33cecde901_prof);

        
        $__internal_f3ec7aa070777e56d6b3fd3fea70fe2f212b4ab656e7139ac5fe8ab5fff55c16->leave($__internal_f3ec7aa070777e56d6b3fd3fea70fe2f212b4ab656e7139ac5fe8ab5fff55c16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
