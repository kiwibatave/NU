<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b85c8c62a8d04150a0c01ce08f942fcf7a878a7c05d3c075096fd95360c03a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0353e949a422b5509be1a05507a3f78a155e6eb1b174cfdc560bdbdf6a5bacab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0353e949a422b5509be1a05507a3f78a155e6eb1b174cfdc560bdbdf6a5bacab->enter($__internal_0353e949a422b5509be1a05507a3f78a155e6eb1b174cfdc560bdbdf6a5bacab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_43fe02b940e037f7312f34f5fdbf438e3c8d0009380121ea608a6b69ca6dd3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe02b940e037f7312f34f5fdbf438e3c8d0009380121ea608a6b69ca6dd3ea->enter($__internal_43fe02b940e037f7312f34f5fdbf438e3c8d0009380121ea608a6b69ca6dd3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0353e949a422b5509be1a05507a3f78a155e6eb1b174cfdc560bdbdf6a5bacab->leave($__internal_0353e949a422b5509be1a05507a3f78a155e6eb1b174cfdc560bdbdf6a5bacab_prof);

        
        $__internal_43fe02b940e037f7312f34f5fdbf438e3c8d0009380121ea608a6b69ca6dd3ea->leave($__internal_43fe02b940e037f7312f34f5fdbf438e3c8d0009380121ea608a6b69ca6dd3ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be633d884d0c47398f8e66131ce8a1edb9a767bbde344249a647a05db2d96d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be633d884d0c47398f8e66131ce8a1edb9a767bbde344249a647a05db2d96d6b->enter($__internal_be633d884d0c47398f8e66131ce8a1edb9a767bbde344249a647a05db2d96d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a9139ba05364d5797a2c5b587edace604099ba055470fe030f80ab2b6b5668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9139ba05364d5797a2c5b587edace604099ba055470fe030f80ab2b6b5668d->enter($__internal_1a9139ba05364d5797a2c5b587edace604099ba055470fe030f80ab2b6b5668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1a9139ba05364d5797a2c5b587edace604099ba055470fe030f80ab2b6b5668d->leave($__internal_1a9139ba05364d5797a2c5b587edace604099ba055470fe030f80ab2b6b5668d_prof);

        
        $__internal_be633d884d0c47398f8e66131ce8a1edb9a767bbde344249a647a05db2d96d6b->leave($__internal_be633d884d0c47398f8e66131ce8a1edb9a767bbde344249a647a05db2d96d6b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b201b271eef69da3dee7bb97efa0b0746a193f6e9a6dfedc628ba1d569db4acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b201b271eef69da3dee7bb97efa0b0746a193f6e9a6dfedc628ba1d569db4acc->enter($__internal_b201b271eef69da3dee7bb97efa0b0746a193f6e9a6dfedc628ba1d569db4acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b325e3f6f54de9601a68a312d3d9654555039aa2aa65d1a29eb5d5e8af136126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b325e3f6f54de9601a68a312d3d9654555039aa2aa65d1a29eb5d5e8af136126->enter($__internal_b325e3f6f54de9601a68a312d3d9654555039aa2aa65d1a29eb5d5e8af136126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_b325e3f6f54de9601a68a312d3d9654555039aa2aa65d1a29eb5d5e8af136126->leave($__internal_b325e3f6f54de9601a68a312d3d9654555039aa2aa65d1a29eb5d5e8af136126_prof);

        
        $__internal_b201b271eef69da3dee7bb97efa0b0746a193f6e9a6dfedc628ba1d569db4acc->leave($__internal_b201b271eef69da3dee7bb97efa0b0746a193f6e9a6dfedc628ba1d569db4acc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
