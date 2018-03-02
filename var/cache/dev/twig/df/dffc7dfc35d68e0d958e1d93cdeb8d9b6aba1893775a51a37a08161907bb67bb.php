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
        $__internal_4e791f63105defa548472f9ff89944d50d92be677e8dd3cca6dd00bfcafe7fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e791f63105defa548472f9ff89944d50d92be677e8dd3cca6dd00bfcafe7fb4->enter($__internal_4e791f63105defa548472f9ff89944d50d92be677e8dd3cca6dd00bfcafe7fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b00457dfcb42adb1e577140fd517deb5224db61913060d83e9e78c172db7607d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00457dfcb42adb1e577140fd517deb5224db61913060d83e9e78c172db7607d->enter($__internal_b00457dfcb42adb1e577140fd517deb5224db61913060d83e9e78c172db7607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e791f63105defa548472f9ff89944d50d92be677e8dd3cca6dd00bfcafe7fb4->leave($__internal_4e791f63105defa548472f9ff89944d50d92be677e8dd3cca6dd00bfcafe7fb4_prof);

        
        $__internal_b00457dfcb42adb1e577140fd517deb5224db61913060d83e9e78c172db7607d->leave($__internal_b00457dfcb42adb1e577140fd517deb5224db61913060d83e9e78c172db7607d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81b8b34dbdfe36f15c6c4dccb68b3c91bb94dd94fbe5cbaf0a14adb73cf51b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b8b34dbdfe36f15c6c4dccb68b3c91bb94dd94fbe5cbaf0a14adb73cf51b90->enter($__internal_81b8b34dbdfe36f15c6c4dccb68b3c91bb94dd94fbe5cbaf0a14adb73cf51b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e78c9a10fe31797962cc91699b7f6b9164dab5484a317e20c4d5ec2851df5f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78c9a10fe31797962cc91699b7f6b9164dab5484a317e20c4d5ec2851df5f4e->enter($__internal_e78c9a10fe31797962cc91699b7f6b9164dab5484a317e20c4d5ec2851df5f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e78c9a10fe31797962cc91699b7f6b9164dab5484a317e20c4d5ec2851df5f4e->leave($__internal_e78c9a10fe31797962cc91699b7f6b9164dab5484a317e20c4d5ec2851df5f4e_prof);

        
        $__internal_81b8b34dbdfe36f15c6c4dccb68b3c91bb94dd94fbe5cbaf0a14adb73cf51b90->leave($__internal_81b8b34dbdfe36f15c6c4dccb68b3c91bb94dd94fbe5cbaf0a14adb73cf51b90_prof);

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
