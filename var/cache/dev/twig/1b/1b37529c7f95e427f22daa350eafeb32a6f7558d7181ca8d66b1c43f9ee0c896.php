<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_2ca12dae9e55e6e5a0f636b5da883d87ab365daa402dc577abeeb94eed2c55d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ab081b839464c6d0094444a910c84427e37a82bb172b198148fde22041c3472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab081b839464c6d0094444a910c84427e37a82bb172b198148fde22041c3472->enter($__internal_5ab081b839464c6d0094444a910c84427e37a82bb172b198148fde22041c3472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e4c0b03b399ddf4cd20a705deb884e5a4280543eb9e0010d8f84321560e918d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c0b03b399ddf4cd20a705deb884e5a4280543eb9e0010d8f84321560e918d7->enter($__internal_e4c0b03b399ddf4cd20a705deb884e5a4280543eb9e0010d8f84321560e918d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5ab081b839464c6d0094444a910c84427e37a82bb172b198148fde22041c3472->leave($__internal_5ab081b839464c6d0094444a910c84427e37a82bb172b198148fde22041c3472_prof);

        
        $__internal_e4c0b03b399ddf4cd20a705deb884e5a4280543eb9e0010d8f84321560e918d7->leave($__internal_e4c0b03b399ddf4cd20a705deb884e5a4280543eb9e0010d8f84321560e918d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
