<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8e6779a30ba544fe942079611e8c5181b393b81ac4551047269dd029b8919883 extends Twig_Template
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
        $__internal_b7b4482453fd741ac4beb05ccb986fa0c7fdbe1eb6449fe4b8830f5252fa48dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b4482453fd741ac4beb05ccb986fa0c7fdbe1eb6449fe4b8830f5252fa48dd->enter($__internal_b7b4482453fd741ac4beb05ccb986fa0c7fdbe1eb6449fe4b8830f5252fa48dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_58ae53c57d834abd044b2b1da330dbe3908d3a280c9a4e657cc59d6849524745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ae53c57d834abd044b2b1da330dbe3908d3a280c9a4e657cc59d6849524745->enter($__internal_58ae53c57d834abd044b2b1da330dbe3908d3a280c9a4e657cc59d6849524745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b7b4482453fd741ac4beb05ccb986fa0c7fdbe1eb6449fe4b8830f5252fa48dd->leave($__internal_b7b4482453fd741ac4beb05ccb986fa0c7fdbe1eb6449fe4b8830f5252fa48dd_prof);

        
        $__internal_58ae53c57d834abd044b2b1da330dbe3908d3a280c9a4e657cc59d6849524745->leave($__internal_58ae53c57d834abd044b2b1da330dbe3908d3a280c9a4e657cc59d6849524745_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
