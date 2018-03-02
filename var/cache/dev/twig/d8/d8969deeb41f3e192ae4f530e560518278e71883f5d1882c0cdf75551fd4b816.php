<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_4d0fc6d95e2479b1a1e9365016d1817f400574676056b9c55e37533b9a45098a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ff819fce4acaf65aff46606a0973f8cb092752d799fdbb27a8975ca7a4295c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff819fce4acaf65aff46606a0973f8cb092752d799fdbb27a8975ca7a4295c9->enter($__internal_1ff819fce4acaf65aff46606a0973f8cb092752d799fdbb27a8975ca7a4295c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_5258b5faabb1b9b16029dc8e98090c31902d1a8423bbadeb40b544001b4ae57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5258b5faabb1b9b16029dc8e98090c31902d1a8423bbadeb40b544001b4ae57f->enter($__internal_5258b5faabb1b9b16029dc8e98090c31902d1a8423bbadeb40b544001b4ae57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1ff819fce4acaf65aff46606a0973f8cb092752d799fdbb27a8975ca7a4295c9->leave($__internal_1ff819fce4acaf65aff46606a0973f8cb092752d799fdbb27a8975ca7a4295c9_prof);

        
        $__internal_5258b5faabb1b9b16029dc8e98090c31902d1a8423bbadeb40b544001b4ae57f->leave($__internal_5258b5faabb1b9b16029dc8e98090c31902d1a8423bbadeb40b544001b4ae57f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5735c5790a7be3a37213843b17590f5d7ac6277f48b0af951eda765511df5711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5735c5790a7be3a37213843b17590f5d7ac6277f48b0af951eda765511df5711->enter($__internal_5735c5790a7be3a37213843b17590f5d7ac6277f48b0af951eda765511df5711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f82fe91941325c6f971719e176b7129995d4adf75a41e230c677b6197faf04da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82fe91941325c6f971719e176b7129995d4adf75a41e230c677b6197faf04da->enter($__internal_f82fe91941325c6f971719e176b7129995d4adf75a41e230c677b6197faf04da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f82fe91941325c6f971719e176b7129995d4adf75a41e230c677b6197faf04da->leave($__internal_f82fe91941325c6f971719e176b7129995d4adf75a41e230c677b6197faf04da_prof);

        
        $__internal_5735c5790a7be3a37213843b17590f5d7ac6277f48b0af951eda765511df5711->leave($__internal_5735c5790a7be3a37213843b17590f5d7ac6277f48b0af951eda765511df5711_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b194eca1bec5efb66b6e0464972a1e29cae91b7b7e5a7aa807f9492d6eca926a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b194eca1bec5efb66b6e0464972a1e29cae91b7b7e5a7aa807f9492d6eca926a->enter($__internal_b194eca1bec5efb66b6e0464972a1e29cae91b7b7e5a7aa807f9492d6eca926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6909456b73ea1e38c455120918ab5e7a7d65550eac3be954882392ab6091b6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6909456b73ea1e38c455120918ab5e7a7d65550eac3be954882392ab6091b6eb->enter($__internal_6909456b73ea1e38c455120918ab5e7a7d65550eac3be954882392ab6091b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6909456b73ea1e38c455120918ab5e7a7d65550eac3be954882392ab6091b6eb->leave($__internal_6909456b73ea1e38c455120918ab5e7a7d65550eac3be954882392ab6091b6eb_prof);

        
        $__internal_b194eca1bec5efb66b6e0464972a1e29cae91b7b7e5a7aa807f9492d6eca926a->leave($__internal_b194eca1bec5efb66b6e0464972a1e29cae91b7b7e5a7aa807f9492d6eca926a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e929e3e86889f25b4702467cd1cc33fc2b4cd9b73c5795c3fa0c750ba47067f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e929e3e86889f25b4702467cd1cc33fc2b4cd9b73c5795c3fa0c750ba47067f6->enter($__internal_e929e3e86889f25b4702467cd1cc33fc2b4cd9b73c5795c3fa0c750ba47067f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00e613928e544acddee4f6f6a0cdc96231559f4957bfb1055448512ef6772f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e613928e544acddee4f6f6a0cdc96231559f4957bfb1055448512ef6772f84->enter($__internal_00e613928e544acddee4f6f6a0cdc96231559f4957bfb1055448512ef6772f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00e613928e544acddee4f6f6a0cdc96231559f4957bfb1055448512ef6772f84->leave($__internal_00e613928e544acddee4f6f6a0cdc96231559f4957bfb1055448512ef6772f84_prof);

        
        $__internal_e929e3e86889f25b4702467cd1cc33fc2b4cd9b73c5795c3fa0c750ba47067f6->leave($__internal_e929e3e86889f25b4702467cd1cc33fc2b4cd9b73c5795c3fa0c750ba47067f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
