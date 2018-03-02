<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0cbf647f1b32b118b9e0e8f2f4fd6b1ec95ca71ab145cad3524a1dea2cd12e75 extends Twig_Template
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
        $__internal_4ce02f143a44106c38d6d9e5dcb096daaf1e558c773cc2c53626b21d01facd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce02f143a44106c38d6d9e5dcb096daaf1e558c773cc2c53626b21d01facd6a->enter($__internal_4ce02f143a44106c38d6d9e5dcb096daaf1e558c773cc2c53626b21d01facd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3b627a20013163e8d18a4bbe5aac81005ee6d66ed42f448044749f2a8efb84de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b627a20013163e8d18a4bbe5aac81005ee6d66ed42f448044749f2a8efb84de->enter($__internal_3b627a20013163e8d18a4bbe5aac81005ee6d66ed42f448044749f2a8efb84de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4ce02f143a44106c38d6d9e5dcb096daaf1e558c773cc2c53626b21d01facd6a->leave($__internal_4ce02f143a44106c38d6d9e5dcb096daaf1e558c773cc2c53626b21d01facd6a_prof);

        
        $__internal_3b627a20013163e8d18a4bbe5aac81005ee6d66ed42f448044749f2a8efb84de->leave($__internal_3b627a20013163e8d18a4bbe5aac81005ee6d66ed42f448044749f2a8efb84de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
