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
        $__internal_72dee1b17a5efa39377e6e31c3ccfd023ceca43f73e2a9144af917ca532e024b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dee1b17a5efa39377e6e31c3ccfd023ceca43f73e2a9144af917ca532e024b->enter($__internal_72dee1b17a5efa39377e6e31c3ccfd023ceca43f73e2a9144af917ca532e024b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_12f1e8a64f59dcdd5725366b157f44ac7fd443d59aabc16a402a6377b35b78de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f1e8a64f59dcdd5725366b157f44ac7fd443d59aabc16a402a6377b35b78de->enter($__internal_12f1e8a64f59dcdd5725366b157f44ac7fd443d59aabc16a402a6377b35b78de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72dee1b17a5efa39377e6e31c3ccfd023ceca43f73e2a9144af917ca532e024b->leave($__internal_72dee1b17a5efa39377e6e31c3ccfd023ceca43f73e2a9144af917ca532e024b_prof);

        
        $__internal_12f1e8a64f59dcdd5725366b157f44ac7fd443d59aabc16a402a6377b35b78de->leave($__internal_12f1e8a64f59dcdd5725366b157f44ac7fd443d59aabc16a402a6377b35b78de_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6685ebcfa4d58095873237e27f9cbc7aa432091413b2a1604842a67c5063090a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6685ebcfa4d58095873237e27f9cbc7aa432091413b2a1604842a67c5063090a->enter($__internal_6685ebcfa4d58095873237e27f9cbc7aa432091413b2a1604842a67c5063090a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b083ef5ea7d971d19eb11fd880a69ed890a0d1d37c44fa316f8f1e3a70825053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b083ef5ea7d971d19eb11fd880a69ed890a0d1d37c44fa316f8f1e3a70825053->enter($__internal_b083ef5ea7d971d19eb11fd880a69ed890a0d1d37c44fa316f8f1e3a70825053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b083ef5ea7d971d19eb11fd880a69ed890a0d1d37c44fa316f8f1e3a70825053->leave($__internal_b083ef5ea7d971d19eb11fd880a69ed890a0d1d37c44fa316f8f1e3a70825053_prof);

        
        $__internal_6685ebcfa4d58095873237e27f9cbc7aa432091413b2a1604842a67c5063090a->leave($__internal_6685ebcfa4d58095873237e27f9cbc7aa432091413b2a1604842a67c5063090a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_021dd0cdff34a325399f04d1dabb4e02d136a7a2ac242a36c9aca99e1f024916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021dd0cdff34a325399f04d1dabb4e02d136a7a2ac242a36c9aca99e1f024916->enter($__internal_021dd0cdff34a325399f04d1dabb4e02d136a7a2ac242a36c9aca99e1f024916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1b68e0d5911779d0d8b9762ebf0372bad6a53039aa18bcc37b7702ccb28b802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b68e0d5911779d0d8b9762ebf0372bad6a53039aa18bcc37b7702ccb28b802->enter($__internal_c1b68e0d5911779d0d8b9762ebf0372bad6a53039aa18bcc37b7702ccb28b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c1b68e0d5911779d0d8b9762ebf0372bad6a53039aa18bcc37b7702ccb28b802->leave($__internal_c1b68e0d5911779d0d8b9762ebf0372bad6a53039aa18bcc37b7702ccb28b802_prof);

        
        $__internal_021dd0cdff34a325399f04d1dabb4e02d136a7a2ac242a36c9aca99e1f024916->leave($__internal_021dd0cdff34a325399f04d1dabb4e02d136a7a2ac242a36c9aca99e1f024916_prof);

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
