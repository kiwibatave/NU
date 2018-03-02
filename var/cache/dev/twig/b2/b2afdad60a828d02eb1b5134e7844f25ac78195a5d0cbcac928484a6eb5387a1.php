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
        $__internal_cb4d9cabdb42ec6e8c46ed93243cce9dc8bda19cb5f14ed08dec270f5097b491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4d9cabdb42ec6e8c46ed93243cce9dc8bda19cb5f14ed08dec270f5097b491->enter($__internal_cb4d9cabdb42ec6e8c46ed93243cce9dc8bda19cb5f14ed08dec270f5097b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c7cdd87975260c37b73d646cd5521c67170cb3271fe19a35894b08118bd56cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cdd87975260c37b73d646cd5521c67170cb3271fe19a35894b08118bd56cc1->enter($__internal_c7cdd87975260c37b73d646cd5521c67170cb3271fe19a35894b08118bd56cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4d9cabdb42ec6e8c46ed93243cce9dc8bda19cb5f14ed08dec270f5097b491->leave($__internal_cb4d9cabdb42ec6e8c46ed93243cce9dc8bda19cb5f14ed08dec270f5097b491_prof);

        
        $__internal_c7cdd87975260c37b73d646cd5521c67170cb3271fe19a35894b08118bd56cc1->leave($__internal_c7cdd87975260c37b73d646cd5521c67170cb3271fe19a35894b08118bd56cc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fc16fc9bdea090df33590ecdb370690eb1b2c450b9b55aace18f4156f873e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc16fc9bdea090df33590ecdb370690eb1b2c450b9b55aace18f4156f873e86->enter($__internal_3fc16fc9bdea090df33590ecdb370690eb1b2c450b9b55aace18f4156f873e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d346e9e1d74f0f75394e6a03b983a7d966a9f9854ac032eaddd776d2dd2c747d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d346e9e1d74f0f75394e6a03b983a7d966a9f9854ac032eaddd776d2dd2c747d->enter($__internal_d346e9e1d74f0f75394e6a03b983a7d966a9f9854ac032eaddd776d2dd2c747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d346e9e1d74f0f75394e6a03b983a7d966a9f9854ac032eaddd776d2dd2c747d->leave($__internal_d346e9e1d74f0f75394e6a03b983a7d966a9f9854ac032eaddd776d2dd2c747d_prof);

        
        $__internal_3fc16fc9bdea090df33590ecdb370690eb1b2c450b9b55aace18f4156f873e86->leave($__internal_3fc16fc9bdea090df33590ecdb370690eb1b2c450b9b55aace18f4156f873e86_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecda03e711945fde28f1198df566b3fc6fd082277ff7f262199d16f9daf0c200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecda03e711945fde28f1198df566b3fc6fd082277ff7f262199d16f9daf0c200->enter($__internal_ecda03e711945fde28f1198df566b3fc6fd082277ff7f262199d16f9daf0c200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_018b57654c726071ae7ad00093d26d5f4d2c2810c9c76ad42b45b52357668901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018b57654c726071ae7ad00093d26d5f4d2c2810c9c76ad42b45b52357668901->enter($__internal_018b57654c726071ae7ad00093d26d5f4d2c2810c9c76ad42b45b52357668901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_018b57654c726071ae7ad00093d26d5f4d2c2810c9c76ad42b45b52357668901->leave($__internal_018b57654c726071ae7ad00093d26d5f4d2c2810c9c76ad42b45b52357668901_prof);

        
        $__internal_ecda03e711945fde28f1198df566b3fc6fd082277ff7f262199d16f9daf0c200->leave($__internal_ecda03e711945fde28f1198df566b3fc6fd082277ff7f262199d16f9daf0c200_prof);

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
