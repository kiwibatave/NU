<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_78c3882b844cec1e31837e024033d9aae13842e081d6ca19540c70c18cfa8f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26843fc678309c1878a37f0a37ab95e88f450d68d9c078be75b599743792142b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26843fc678309c1878a37f0a37ab95e88f450d68d9c078be75b599743792142b->enter($__internal_26843fc678309c1878a37f0a37ab95e88f450d68d9c078be75b599743792142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_af79d6c9b39ee86af84f58ccd9bd21a9a8fac3b94601f75d21df36a6ec167ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af79d6c9b39ee86af84f58ccd9bd21a9a8fac3b94601f75d21df36a6ec167ab9->enter($__internal_af79d6c9b39ee86af84f58ccd9bd21a9a8fac3b94601f75d21df36a6ec167ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26843fc678309c1878a37f0a37ab95e88f450d68d9c078be75b599743792142b->leave($__internal_26843fc678309c1878a37f0a37ab95e88f450d68d9c078be75b599743792142b_prof);

        
        $__internal_af79d6c9b39ee86af84f58ccd9bd21a9a8fac3b94601f75d21df36a6ec167ab9->leave($__internal_af79d6c9b39ee86af84f58ccd9bd21a9a8fac3b94601f75d21df36a6ec167ab9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_63f5cab7ad24f07e0584eb9b1e1a33cb5b740c579dd4a40802cf65a82b841096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f5cab7ad24f07e0584eb9b1e1a33cb5b740c579dd4a40802cf65a82b841096->enter($__internal_63f5cab7ad24f07e0584eb9b1e1a33cb5b740c579dd4a40802cf65a82b841096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_de1c863bc37139517c8f424b6b7be5411f95f15400cbaf66162998ba94835397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1c863bc37139517c8f424b6b7be5411f95f15400cbaf66162998ba94835397->enter($__internal_de1c863bc37139517c8f424b6b7be5411f95f15400cbaf66162998ba94835397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_de1c863bc37139517c8f424b6b7be5411f95f15400cbaf66162998ba94835397->leave($__internal_de1c863bc37139517c8f424b6b7be5411f95f15400cbaf66162998ba94835397_prof);

        
        $__internal_63f5cab7ad24f07e0584eb9b1e1a33cb5b740c579dd4a40802cf65a82b841096->leave($__internal_63f5cab7ad24f07e0584eb9b1e1a33cb5b740c579dd4a40802cf65a82b841096_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6348b7395311940aae1eb15fd6ef3a55abd411dadbadacad24e0fed6c2eadac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6348b7395311940aae1eb15fd6ef3a55abd411dadbadacad24e0fed6c2eadac0->enter($__internal_6348b7395311940aae1eb15fd6ef3a55abd411dadbadacad24e0fed6c2eadac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_283d8ee5d1be5ed786b21cd67b2c98df7190ec958847d96b3aedf9e0ce568da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283d8ee5d1be5ed786b21cd67b2c98df7190ec958847d96b3aedf9e0ce568da9->enter($__internal_283d8ee5d1be5ed786b21cd67b2c98df7190ec958847d96b3aedf9e0ce568da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_283d8ee5d1be5ed786b21cd67b2c98df7190ec958847d96b3aedf9e0ce568da9->leave($__internal_283d8ee5d1be5ed786b21cd67b2c98df7190ec958847d96b3aedf9e0ce568da9_prof);

        
        $__internal_6348b7395311940aae1eb15fd6ef3a55abd411dadbadacad24e0fed6c2eadac0->leave($__internal_6348b7395311940aae1eb15fd6ef3a55abd411dadbadacad24e0fed6c2eadac0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
