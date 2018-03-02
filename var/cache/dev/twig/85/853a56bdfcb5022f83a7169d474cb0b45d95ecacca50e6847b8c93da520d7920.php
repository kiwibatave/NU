<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_e10918ebf7c77af7e0ee351e29278e02612d419c33135a135db149c281d625cc extends Twig_Template
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
        $__internal_8e6c602817b609aca0f99558c3a6152b184b1d0529d03e9ceac4d81f58751936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6c602817b609aca0f99558c3a6152b184b1d0529d03e9ceac4d81f58751936->enter($__internal_8e6c602817b609aca0f99558c3a6152b184b1d0529d03e9ceac4d81f58751936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_2edce3a84ab6320cb9dfac3441fde70b8ed93a8390a7a4b7e5fd3bc74247b4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edce3a84ab6320cb9dfac3441fde70b8ed93a8390a7a4b7e5fd3bc74247b4b2->enter($__internal_2edce3a84ab6320cb9dfac3441fde70b8ed93a8390a7a4b7e5fd3bc74247b4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_8e6c602817b609aca0f99558c3a6152b184b1d0529d03e9ceac4d81f58751936->leave($__internal_8e6c602817b609aca0f99558c3a6152b184b1d0529d03e9ceac4d81f58751936_prof);

        
        $__internal_2edce3a84ab6320cb9dfac3441fde70b8ed93a8390a7a4b7e5fd3bc74247b4b2->leave($__internal_2edce3a84ab6320cb9dfac3441fde70b8ed93a8390a7a4b7e5fd3bc74247b4b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
