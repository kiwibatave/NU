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
        $__internal_0c326de53887f79bb30de4bf03e65e6969a86804f509b80cead9f049b1ac3a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c326de53887f79bb30de4bf03e65e6969a86804f509b80cead9f049b1ac3a7a->enter($__internal_0c326de53887f79bb30de4bf03e65e6969a86804f509b80cead9f049b1ac3a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_fd14dd5378dc172528d124924eda7f30653bb1cae351c65050c6eed553a6f5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd14dd5378dc172528d124924eda7f30653bb1cae351c65050c6eed553a6f5bd->enter($__internal_fd14dd5378dc172528d124924eda7f30653bb1cae351c65050c6eed553a6f5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_0c326de53887f79bb30de4bf03e65e6969a86804f509b80cead9f049b1ac3a7a->leave($__internal_0c326de53887f79bb30de4bf03e65e6969a86804f509b80cead9f049b1ac3a7a_prof);

        
        $__internal_fd14dd5378dc172528d124924eda7f30653bb1cae351c65050c6eed553a6f5bd->leave($__internal_fd14dd5378dc172528d124924eda7f30653bb1cae351c65050c6eed553a6f5bd_prof);

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
