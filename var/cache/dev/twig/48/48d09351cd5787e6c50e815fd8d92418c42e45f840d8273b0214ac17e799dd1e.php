<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_979c79953360efcd6dc3622ce4c94813fe3b34ca5c1d436c677e859c3b99351c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3dd162af503750255e90427d8c891acd069030ef58981199ed9add4055b31dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd162af503750255e90427d8c891acd069030ef58981199ed9add4055b31dba->enter($__internal_3dd162af503750255e90427d8c891acd069030ef58981199ed9add4055b31dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_321edf1b0eca6c3b6a2e8ba687f6893f0176a68b54938a842f0dbfb1fb336551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321edf1b0eca6c3b6a2e8ba687f6893f0176a68b54938a842f0dbfb1fb336551->enter($__internal_321edf1b0eca6c3b6a2e8ba687f6893f0176a68b54938a842f0dbfb1fb336551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd162af503750255e90427d8c891acd069030ef58981199ed9add4055b31dba->leave($__internal_3dd162af503750255e90427d8c891acd069030ef58981199ed9add4055b31dba_prof);

        
        $__internal_321edf1b0eca6c3b6a2e8ba687f6893f0176a68b54938a842f0dbfb1fb336551->leave($__internal_321edf1b0eca6c3b6a2e8ba687f6893f0176a68b54938a842f0dbfb1fb336551_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40d63c81689aa80293dce7f111c9c3e8c8fd62c16028b54e44215688f4c2301d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d63c81689aa80293dce7f111c9c3e8c8fd62c16028b54e44215688f4c2301d->enter($__internal_40d63c81689aa80293dce7f111c9c3e8c8fd62c16028b54e44215688f4c2301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b09e88109c641b0ea5afc4b7922c4ebe0a20659d9a865c4d35d926e5e77af292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09e88109c641b0ea5afc4b7922c4ebe0a20659d9a865c4d35d926e5e77af292->enter($__internal_b09e88109c641b0ea5afc4b7922c4ebe0a20659d9a865c4d35d926e5e77af292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b09e88109c641b0ea5afc4b7922c4ebe0a20659d9a865c4d35d926e5e77af292->leave($__internal_b09e88109c641b0ea5afc4b7922c4ebe0a20659d9a865c4d35d926e5e77af292_prof);

        
        $__internal_40d63c81689aa80293dce7f111c9c3e8c8fd62c16028b54e44215688f4c2301d->leave($__internal_40d63c81689aa80293dce7f111c9c3e8c8fd62c16028b54e44215688f4c2301d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a1b1920948b5954577b290bfa79ac1b6bac517191eafa8667381ca122b7a5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1b1920948b5954577b290bfa79ac1b6bac517191eafa8667381ca122b7a5a1->enter($__internal_7a1b1920948b5954577b290bfa79ac1b6bac517191eafa8667381ca122b7a5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0356f65f33bd5c82708b5704df5eb557425b9b9acddaf725f4e6ffa9c125fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0356f65f33bd5c82708b5704df5eb557425b9b9acddaf725f4e6ffa9c125fbd->enter($__internal_d0356f65f33bd5c82708b5704df5eb557425b9b9acddaf725f4e6ffa9c125fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d0356f65f33bd5c82708b5704df5eb557425b9b9acddaf725f4e6ffa9c125fbd->leave($__internal_d0356f65f33bd5c82708b5704df5eb557425b9b9acddaf725f4e6ffa9c125fbd_prof);

        
        $__internal_7a1b1920948b5954577b290bfa79ac1b6bac517191eafa8667381ca122b7a5a1->leave($__internal_7a1b1920948b5954577b290bfa79ac1b6bac517191eafa8667381ca122b7a5a1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_df7868dedd144fa55a4a611af5b9c2d0325424b3b287269d06533af696476064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7868dedd144fa55a4a611af5b9c2d0325424b3b287269d06533af696476064->enter($__internal_df7868dedd144fa55a4a611af5b9c2d0325424b3b287269d06533af696476064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70cf2b47a9fe52e5f7024a67dc400bd443bece09bd8cee82455302b6c0ca393d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cf2b47a9fe52e5f7024a67dc400bd443bece09bd8cee82455302b6c0ca393d->enter($__internal_70cf2b47a9fe52e5f7024a67dc400bd443bece09bd8cee82455302b6c0ca393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_70cf2b47a9fe52e5f7024a67dc400bd443bece09bd8cee82455302b6c0ca393d->leave($__internal_70cf2b47a9fe52e5f7024a67dc400bd443bece09bd8cee82455302b6c0ca393d_prof);

        
        $__internal_df7868dedd144fa55a4a611af5b9c2d0325424b3b287269d06533af696476064->leave($__internal_df7868dedd144fa55a4a611af5b9c2d0325424b3b287269d06533af696476064_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
