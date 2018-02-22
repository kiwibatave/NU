<?php

/* BCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_eb80455de83dfb573eec7a71536d2555aa0c4a85c4ab9b5db0fd46092fb6ced3 extends Twig_Template
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
        $__internal_816e066dca7f61a1b30cc96b92bbb06f740e1adae58f9e4f2d10d80d0f0933a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816e066dca7f61a1b30cc96b92bbb06f740e1adae58f9e4f2d10d80d0f0933a3->enter($__internal_816e066dca7f61a1b30cc96b92bbb06f740e1adae58f9e4f2d10d80d0f0933a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:translation.html.twig"));

        $__internal_0f2578ae56ccf624e297141735dc87c73ff699d8a5fda893a1509ccf3cd9d928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2578ae56ccf624e297141735dc87c73ff699d8a5fda893a1509ccf3cd9d928->enter($__internal_0f2578ae56ccf624e297141735dc87c73ff699d8a5fda893a1509ccf3cd9d928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:translation.html.twig"));

        // line 1
        echo "<html>
    <body>
        ";
        // line 4
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array("%name%" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo " !
        <br>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bye"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo " !
        <br>
        Aujourd'hui nous sommes le ";
        // line 8
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "none"), "html", null, true);
        echo "
        et il est ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "none", "short"), "html", null, true);
        echo "
    </body>
</html>";
        
        $__internal_816e066dca7f61a1b30cc96b92bbb06f740e1adae58f9e4f2d10d80d0f0933a3->leave($__internal_816e066dca7f61a1b30cc96b92bbb06f740e1adae58f9e4f2d10d80d0f0933a3_prof);

        
        $__internal_0f2578ae56ccf624e297141735dc87c73ff699d8a5fda893a1509ccf3cd9d928->leave($__internal_0f2578ae56ccf624e297141735dc87c73ff699d8a5fda893a1509ccf3cd9d928_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  42 => 8,  35 => 6,  29 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        {# modif du 14/02/18 #}
        {{ 'Hello'|trans({'%name%': name}) }} !
        <br>
        {{ 'Bye'|trans }} {{ name }} !
        <br>
        Aujourd'hui nous sommes le {{ 'now'|localizeddate('full', 'none') }}
        et il est {{ 'now'|localizeddate('none', 'short') }}
    </body>
</html>", "BCPlatformBundle:Advert:translation.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
