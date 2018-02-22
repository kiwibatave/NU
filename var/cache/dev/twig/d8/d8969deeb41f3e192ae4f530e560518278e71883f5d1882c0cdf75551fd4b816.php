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
        $__internal_a0d83aa00cd832c363d88c32e1bc90f5a384f24249dc16bd4922944769248e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d83aa00cd832c363d88c32e1bc90f5a384f24249dc16bd4922944769248e77->enter($__internal_a0d83aa00cd832c363d88c32e1bc90f5a384f24249dc16bd4922944769248e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_e032f331a91a002aa89458c125a6478c74373828b8ff1a27b16c643cb1f5e17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e032f331a91a002aa89458c125a6478c74373828b8ff1a27b16c643cb1f5e17d->enter($__internal_e032f331a91a002aa89458c125a6478c74373828b8ff1a27b16c643cb1f5e17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_a0d83aa00cd832c363d88c32e1bc90f5a384f24249dc16bd4922944769248e77->leave($__internal_a0d83aa00cd832c363d88c32e1bc90f5a384f24249dc16bd4922944769248e77_prof);

        
        $__internal_e032f331a91a002aa89458c125a6478c74373828b8ff1a27b16c643cb1f5e17d->leave($__internal_e032f331a91a002aa89458c125a6478c74373828b8ff1a27b16c643cb1f5e17d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e1bfec09451df186d8f375b3c5e0cb34ad29df712d75fa892a9809d702e2d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1bfec09451df186d8f375b3c5e0cb34ad29df712d75fa892a9809d702e2d1b->enter($__internal_9e1bfec09451df186d8f375b3c5e0cb34ad29df712d75fa892a9809d702e2d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03a4c7eb8ebbb5b0fcabe388c2f9212c529a307dd0852b3a85ffec544d62c2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a4c7eb8ebbb5b0fcabe388c2f9212c529a307dd0852b3a85ffec544d62c2f3->enter($__internal_03a4c7eb8ebbb5b0fcabe388c2f9212c529a307dd0852b3a85ffec544d62c2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_03a4c7eb8ebbb5b0fcabe388c2f9212c529a307dd0852b3a85ffec544d62c2f3->leave($__internal_03a4c7eb8ebbb5b0fcabe388c2f9212c529a307dd0852b3a85ffec544d62c2f3_prof);

        
        $__internal_9e1bfec09451df186d8f375b3c5e0cb34ad29df712d75fa892a9809d702e2d1b->leave($__internal_9e1bfec09451df186d8f375b3c5e0cb34ad29df712d75fa892a9809d702e2d1b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9f58719522c492125bb33f99ae793586e08773ba84794df70c577d7304e3067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f58719522c492125bb33f99ae793586e08773ba84794df70c577d7304e3067->enter($__internal_a9f58719522c492125bb33f99ae793586e08773ba84794df70c577d7304e3067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c61d84cd17bff79d0fb8a0651bebcf5b0c5572d8757c2719e1fcc72a8284ff71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61d84cd17bff79d0fb8a0651bebcf5b0c5572d8757c2719e1fcc72a8284ff71->enter($__internal_c61d84cd17bff79d0fb8a0651bebcf5b0c5572d8757c2719e1fcc72a8284ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c61d84cd17bff79d0fb8a0651bebcf5b0c5572d8757c2719e1fcc72a8284ff71->leave($__internal_c61d84cd17bff79d0fb8a0651bebcf5b0c5572d8757c2719e1fcc72a8284ff71_prof);

        
        $__internal_a9f58719522c492125bb33f99ae793586e08773ba84794df70c577d7304e3067->leave($__internal_a9f58719522c492125bb33f99ae793586e08773ba84794df70c577d7304e3067_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_316ef9d98389914f134d389b1bccb8636e3bc6523200fd7b6f06ee982fab1ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316ef9d98389914f134d389b1bccb8636e3bc6523200fd7b6f06ee982fab1ee3->enter($__internal_316ef9d98389914f134d389b1bccb8636e3bc6523200fd7b6f06ee982fab1ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3802fc435b8740c0ffdd37613f5fdf52e16b44048f7a19ba7d815b75c4dfb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3802fc435b8740c0ffdd37613f5fdf52e16b44048f7a19ba7d815b75c4dfb51->enter($__internal_b3802fc435b8740c0ffdd37613f5fdf52e16b44048f7a19ba7d815b75c4dfb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3802fc435b8740c0ffdd37613f5fdf52e16b44048f7a19ba7d815b75c4dfb51->leave($__internal_b3802fc435b8740c0ffdd37613f5fdf52e16b44048f7a19ba7d815b75c4dfb51_prof);

        
        $__internal_316ef9d98389914f134d389b1bccb8636e3bc6523200fd7b6f06ee982fab1ee3->leave($__internal_316ef9d98389914f134d389b1bccb8636e3bc6523200fd7b6f06ee982fab1ee3_prof);

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
