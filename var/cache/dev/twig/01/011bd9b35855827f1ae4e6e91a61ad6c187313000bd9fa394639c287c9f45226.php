<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_75fb30951492e0e90dd731ef0a32c54388a884c78693f623b63449de9b6bf47e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a25227d646a90f6008e14fc1686b95f8adda57c6c00c530c866628f076eab210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25227d646a90f6008e14fc1686b95f8adda57c6c00c530c866628f076eab210->enter($__internal_a25227d646a90f6008e14fc1686b95f8adda57c6c00c530c866628f076eab210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_ff143c7bed538c32e49c2bcbd79f6d71b1173ebc31225877eb447e3110680bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff143c7bed538c32e49c2bcbd79f6d71b1173ebc31225877eb447e3110680bc7->enter($__internal_ff143c7bed538c32e49c2bcbd79f6d71b1173ebc31225877eb447e3110680bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25227d646a90f6008e14fc1686b95f8adda57c6c00c530c866628f076eab210->leave($__internal_a25227d646a90f6008e14fc1686b95f8adda57c6c00c530c866628f076eab210_prof);

        
        $__internal_ff143c7bed538c32e49c2bcbd79f6d71b1173ebc31225877eb447e3110680bc7->leave($__internal_ff143c7bed538c32e49c2bcbd79f6d71b1173ebc31225877eb447e3110680bc7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f48b664e586ca452ea78d9b2a6ed86e84e1ae9019c47b5acda50ed665acecef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f48b664e586ca452ea78d9b2a6ed86e84e1ae9019c47b5acda50ed665acecef->enter($__internal_8f48b664e586ca452ea78d9b2a6ed86e84e1ae9019c47b5acda50ed665acecef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b2e87106eea9513a9ff4ca6728170206e95eab4ddc245ad6a54d7ae60daa217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2e87106eea9513a9ff4ca6728170206e95eab4ddc245ad6a54d7ae60daa217->enter($__internal_7b2e87106eea9513a9ff4ca6728170206e95eab4ddc245ad6a54d7ae60daa217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7b2e87106eea9513a9ff4ca6728170206e95eab4ddc245ad6a54d7ae60daa217->leave($__internal_7b2e87106eea9513a9ff4ca6728170206e95eab4ddc245ad6a54d7ae60daa217_prof);

        
        $__internal_8f48b664e586ca452ea78d9b2a6ed86e84e1ae9019c47b5acda50ed665acecef->leave($__internal_8f48b664e586ca452ea78d9b2a6ed86e84e1ae9019c47b5acda50ed665acecef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
