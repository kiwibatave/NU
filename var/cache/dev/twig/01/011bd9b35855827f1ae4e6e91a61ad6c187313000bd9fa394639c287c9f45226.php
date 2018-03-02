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
        $__internal_2f8c17571521b977311a00a3f57f632abeda48c7ad41471370c265da5bafd10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8c17571521b977311a00a3f57f632abeda48c7ad41471370c265da5bafd10d->enter($__internal_2f8c17571521b977311a00a3f57f632abeda48c7ad41471370c265da5bafd10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1188def85c580228e44d5d367d10a371aa76948073702c91c15d81cacce85256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1188def85c580228e44d5d367d10a371aa76948073702c91c15d81cacce85256->enter($__internal_1188def85c580228e44d5d367d10a371aa76948073702c91c15d81cacce85256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f8c17571521b977311a00a3f57f632abeda48c7ad41471370c265da5bafd10d->leave($__internal_2f8c17571521b977311a00a3f57f632abeda48c7ad41471370c265da5bafd10d_prof);

        
        $__internal_1188def85c580228e44d5d367d10a371aa76948073702c91c15d81cacce85256->leave($__internal_1188def85c580228e44d5d367d10a371aa76948073702c91c15d81cacce85256_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_099645c6a48db63c1b3d678ff6d0e3efb800a967988bf9c30c9eaa955edcaa06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099645c6a48db63c1b3d678ff6d0e3efb800a967988bf9c30c9eaa955edcaa06->enter($__internal_099645c6a48db63c1b3d678ff6d0e3efb800a967988bf9c30c9eaa955edcaa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d81e3913c365835305ba23c8ebb3cd399ce51ee74de5afc1d0c54094d108d26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81e3913c365835305ba23c8ebb3cd399ce51ee74de5afc1d0c54094d108d26f->enter($__internal_d81e3913c365835305ba23c8ebb3cd399ce51ee74de5afc1d0c54094d108d26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d81e3913c365835305ba23c8ebb3cd399ce51ee74de5afc1d0c54094d108d26f->leave($__internal_d81e3913c365835305ba23c8ebb3cd399ce51ee74de5afc1d0c54094d108d26f_prof);

        
        $__internal_099645c6a48db63c1b3d678ff6d0e3efb800a967988bf9c30c9eaa955edcaa06->leave($__internal_099645c6a48db63c1b3d678ff6d0e3efb800a967988bf9c30c9eaa955edcaa06_prof);

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
