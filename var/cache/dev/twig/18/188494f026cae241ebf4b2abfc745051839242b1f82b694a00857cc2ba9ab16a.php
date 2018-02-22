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
        $__internal_78c4c02a5a3b8d6e489c05a4be2ffb59da89976e389bf32c9a1ca6471d3af81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c4c02a5a3b8d6e489c05a4be2ffb59da89976e389bf32c9a1ca6471d3af81d->enter($__internal_78c4c02a5a3b8d6e489c05a4be2ffb59da89976e389bf32c9a1ca6471d3af81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_731a5fcbde25c9621724c1baa49ba0e0e9726fba8fec645ea4e334085b10e63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731a5fcbde25c9621724c1baa49ba0e0e9726fba8fec645ea4e334085b10e63a->enter($__internal_731a5fcbde25c9621724c1baa49ba0e0e9726fba8fec645ea4e334085b10e63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c4c02a5a3b8d6e489c05a4be2ffb59da89976e389bf32c9a1ca6471d3af81d->leave($__internal_78c4c02a5a3b8d6e489c05a4be2ffb59da89976e389bf32c9a1ca6471d3af81d_prof);

        
        $__internal_731a5fcbde25c9621724c1baa49ba0e0e9726fba8fec645ea4e334085b10e63a->leave($__internal_731a5fcbde25c9621724c1baa49ba0e0e9726fba8fec645ea4e334085b10e63a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e83850597d4f378736e5854d5582b64b8b3848e3328160dfa6040d22b1436156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83850597d4f378736e5854d5582b64b8b3848e3328160dfa6040d22b1436156->enter($__internal_e83850597d4f378736e5854d5582b64b8b3848e3328160dfa6040d22b1436156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_194eb46d6b668076edd190f5f6f5c3a81083f274793bd25971f21fca026c091a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194eb46d6b668076edd190f5f6f5c3a81083f274793bd25971f21fca026c091a->enter($__internal_194eb46d6b668076edd190f5f6f5c3a81083f274793bd25971f21fca026c091a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_194eb46d6b668076edd190f5f6f5c3a81083f274793bd25971f21fca026c091a->leave($__internal_194eb46d6b668076edd190f5f6f5c3a81083f274793bd25971f21fca026c091a_prof);

        
        $__internal_e83850597d4f378736e5854d5582b64b8b3848e3328160dfa6040d22b1436156->leave($__internal_e83850597d4f378736e5854d5582b64b8b3848e3328160dfa6040d22b1436156_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c21dbccaaa85b092a00aa22febf145bae1881cbd0911de0db99b948d1600d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c21dbccaaa85b092a00aa22febf145bae1881cbd0911de0db99b948d1600d3a->enter($__internal_7c21dbccaaa85b092a00aa22febf145bae1881cbd0911de0db99b948d1600d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d81c7b1d2b0ea185a9cef65a65060cec0c7bfdd9e54535395167cc44dd9d7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d81c7b1d2b0ea185a9cef65a65060cec0c7bfdd9e54535395167cc44dd9d7fd->enter($__internal_1d81c7b1d2b0ea185a9cef65a65060cec0c7bfdd9e54535395167cc44dd9d7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d81c7b1d2b0ea185a9cef65a65060cec0c7bfdd9e54535395167cc44dd9d7fd->leave($__internal_1d81c7b1d2b0ea185a9cef65a65060cec0c7bfdd9e54535395167cc44dd9d7fd_prof);

        
        $__internal_7c21dbccaaa85b092a00aa22febf145bae1881cbd0911de0db99b948d1600d3a->leave($__internal_7c21dbccaaa85b092a00aa22febf145bae1881cbd0911de0db99b948d1600d3a_prof);

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
