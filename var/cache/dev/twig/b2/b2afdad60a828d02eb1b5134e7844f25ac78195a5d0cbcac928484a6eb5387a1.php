<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5d01d9301a52a575b0412469233ea1a5da4bb10dd209fb5150c74ee18fd4d6f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d47801588df61efbc551ff60b9e767c26b530f4aa1b7589cb0f505217d1f03d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47801588df61efbc551ff60b9e767c26b530f4aa1b7589cb0f505217d1f03d8->enter($__internal_d47801588df61efbc551ff60b9e767c26b530f4aa1b7589cb0f505217d1f03d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_457200733e412621ffe8da64149bd46b54d1873f3603b01f013e6cb0d490b0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457200733e412621ffe8da64149bd46b54d1873f3603b01f013e6cb0d490b0d8->enter($__internal_457200733e412621ffe8da64149bd46b54d1873f3603b01f013e6cb0d490b0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47801588df61efbc551ff60b9e767c26b530f4aa1b7589cb0f505217d1f03d8->leave($__internal_d47801588df61efbc551ff60b9e767c26b530f4aa1b7589cb0f505217d1f03d8_prof);

        
        $__internal_457200733e412621ffe8da64149bd46b54d1873f3603b01f013e6cb0d490b0d8->leave($__internal_457200733e412621ffe8da64149bd46b54d1873f3603b01f013e6cb0d490b0d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb816a4eedd624436666a1d0ae0f2e3cbe38cdbee1b14e4ba79cb041cf69ab64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb816a4eedd624436666a1d0ae0f2e3cbe38cdbee1b14e4ba79cb041cf69ab64->enter($__internal_bb816a4eedd624436666a1d0ae0f2e3cbe38cdbee1b14e4ba79cb041cf69ab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02d94640e9dfff40cfb363d76e2b8cd7bf76d2d3b1ccccbab3b030e162e4322d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d94640e9dfff40cfb363d76e2b8cd7bf76d2d3b1ccccbab3b030e162e4322d->enter($__internal_02d94640e9dfff40cfb363d76e2b8cd7bf76d2d3b1ccccbab3b030e162e4322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_02d94640e9dfff40cfb363d76e2b8cd7bf76d2d3b1ccccbab3b030e162e4322d->leave($__internal_02d94640e9dfff40cfb363d76e2b8cd7bf76d2d3b1ccccbab3b030e162e4322d_prof);

        
        $__internal_bb816a4eedd624436666a1d0ae0f2e3cbe38cdbee1b14e4ba79cb041cf69ab64->leave($__internal_bb816a4eedd624436666a1d0ae0f2e3cbe38cdbee1b14e4ba79cb041cf69ab64_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1244a8f57a82a3014c992d13d4eefbcaaa6111c6d9053e24e0a1549928878ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1244a8f57a82a3014c992d13d4eefbcaaa6111c6d9053e24e0a1549928878ef0->enter($__internal_1244a8f57a82a3014c992d13d4eefbcaaa6111c6d9053e24e0a1549928878ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0660bc1230c63078c9f50af6474c1dd725a55620e4d2f734a1e7c10a19ed27d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0660bc1230c63078c9f50af6474c1dd725a55620e4d2f734a1e7c10a19ed27d7->enter($__internal_0660bc1230c63078c9f50af6474c1dd725a55620e4d2f734a1e7c10a19ed27d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0660bc1230c63078c9f50af6474c1dd725a55620e4d2f734a1e7c10a19ed27d7->leave($__internal_0660bc1230c63078c9f50af6474c1dd725a55620e4d2f734a1e7c10a19ed27d7_prof);

        
        $__internal_1244a8f57a82a3014c992d13d4eefbcaaa6111c6d9053e24e0a1549928878ef0->leave($__internal_1244a8f57a82a3014c992d13d4eefbcaaa6111c6d9053e24e0a1549928878ef0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
