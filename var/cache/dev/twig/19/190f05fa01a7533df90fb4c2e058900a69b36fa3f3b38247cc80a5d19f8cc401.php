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
        $__internal_3feffc8755127e6b800dcd08a36158dcd5501629fbe73fdda86fa9a06b84a190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3feffc8755127e6b800dcd08a36158dcd5501629fbe73fdda86fa9a06b84a190->enter($__internal_3feffc8755127e6b800dcd08a36158dcd5501629fbe73fdda86fa9a06b84a190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:translation.html.twig"));

        $__internal_145d2e54a3d5a92284fca788c9a65f1001e5f16c30c31c6696afb7b2ad2d1272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145d2e54a3d5a92284fca788c9a65f1001e5f16c30c31c6696afb7b2ad2d1272->enter($__internal_145d2e54a3d5a92284fca788c9a65f1001e5f16c30c31c6696afb7b2ad2d1272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:translation.html.twig"));

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
        
        $__internal_3feffc8755127e6b800dcd08a36158dcd5501629fbe73fdda86fa9a06b84a190->leave($__internal_3feffc8755127e6b800dcd08a36158dcd5501629fbe73fdda86fa9a06b84a190_prof);

        
        $__internal_145d2e54a3d5a92284fca788c9a65f1001e5f16c30c31c6696afb7b2ad2d1272->leave($__internal_145d2e54a3d5a92284fca788c9a65f1001e5f16c30c31c6696afb7b2ad2d1272_prof);

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
