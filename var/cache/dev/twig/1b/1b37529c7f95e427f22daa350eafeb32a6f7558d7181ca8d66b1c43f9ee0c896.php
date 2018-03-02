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
        $__internal_7afe8377b1badf29f621d87d672db2c58cb9094e22997c98a5067d3e65e2bce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afe8377b1badf29f621d87d672db2c58cb9094e22997c98a5067d3e65e2bce9->enter($__internal_7afe8377b1badf29f621d87d672db2c58cb9094e22997c98a5067d3e65e2bce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_dda8b2f4de4ef0aa3935ad8351d58fd2d7c17941cb60c19677fdfd57d83f7445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda8b2f4de4ef0aa3935ad8351d58fd2d7c17941cb60c19677fdfd57d83f7445->enter($__internal_dda8b2f4de4ef0aa3935ad8351d58fd2d7c17941cb60c19677fdfd57d83f7445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_7afe8377b1badf29f621d87d672db2c58cb9094e22997c98a5067d3e65e2bce9->leave($__internal_7afe8377b1badf29f621d87d672db2c58cb9094e22997c98a5067d3e65e2bce9_prof);

        
        $__internal_dda8b2f4de4ef0aa3935ad8351d58fd2d7c17941cb60c19677fdfd57d83f7445->leave($__internal_dda8b2f4de4ef0aa3935ad8351d58fd2d7c17941cb60c19677fdfd57d83f7445_prof);

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
