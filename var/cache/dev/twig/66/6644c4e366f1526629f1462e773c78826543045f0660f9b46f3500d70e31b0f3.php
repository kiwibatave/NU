<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b3ca4b192943b04a0dc3636a08956bf6ee5f03cf18b4b9631aae64c5a59546b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BCCoreBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'connexion' => array($this, 'block_connexion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a6df13c8e538d2c4c7af74847cdad20f19d8ea0f5b3604305444f743503ca04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6df13c8e538d2c4c7af74847cdad20f19d8ea0f5b3604305444f743503ca04->enter($__internal_9a6df13c8e538d2c4c7af74847cdad20f19d8ea0f5b3604305444f743503ca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_940c22e3edb804a1f18b1816a95ac3b66248b2fec737fcbe5036d46281273daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940c22e3edb804a1f18b1816a95ac3b66248b2fec737fcbe5036d46281273daa->enter($__internal_940c22e3edb804a1f18b1816a95ac3b66248b2fec737fcbe5036d46281273daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6df13c8e538d2c4c7af74847cdad20f19d8ea0f5b3604305444f743503ca04->leave($__internal_9a6df13c8e538d2c4c7af74847cdad20f19d8ea0f5b3604305444f743503ca04_prof);

        
        $__internal_940c22e3edb804a1f18b1816a95ac3b66248b2fec737fcbe5036d46281273daa->leave($__internal_940c22e3edb804a1f18b1816a95ac3b66248b2fec737fcbe5036d46281273daa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f660512665ba876ac110f461291cac8a12cf737d3884b5ab3d3401cddf71832e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f660512665ba876ac110f461291cac8a12cf737d3884b5ab3d3401cddf71832e->enter($__internal_f660512665ba876ac110f461291cac8a12cf737d3884b5ab3d3401cddf71832e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5282ae0810d5651eaf7d6ba5a40965a215ce9bb8993bf13cf74bfe97980e885f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5282ae0810d5651eaf7d6ba5a40965a215ce9bb8993bf13cf74bfe97980e885f->enter($__internal_5282ae0810d5651eaf7d6ba5a40965a215ce9bb8993bf13cf74bfe97980e885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    ";
        $this->displayBlock('connexion', $context, $blocks);
        // line 9
        echo "    <div class=\"row center-align\">
        <div class=\"col s6 offset-s3\" id=\"formconnexion\">
            <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <label for=\"username\" class=\"col s6\">Login :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\"/>
                <label for=\"password\" class=\"col s6\">Password :</label>
                <input type=\"password\" id=\"password\" name=\"_password\"/>
                <br/>
                <input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Connexion\"/>
            </form>
        </div>
    </div>
";
        
        $__internal_5282ae0810d5651eaf7d6ba5a40965a215ce9bb8993bf13cf74bfe97980e885f->leave($__internal_5282ae0810d5651eaf7d6ba5a40965a215ce9bb8993bf13cf74bfe97980e885f_prof);

        
        $__internal_f660512665ba876ac110f461291cac8a12cf737d3884b5ab3d3401cddf71832e->leave($__internal_f660512665ba876ac110f461291cac8a12cf737d3884b5ab3d3401cddf71832e_prof);

    }

    // line 7
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_004104666a45b0bbfad4842ce4f06f22e2a183e3254dee2682671da8aee64c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004104666a45b0bbfad4842ce4f06f22e2a183e3254dee2682671da8aee64c1f->enter($__internal_004104666a45b0bbfad4842ce4f06f22e2a183e3254dee2682671da8aee64c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_54cd4e117b286fc4c5ef9eae3630d9e850a478f2f00e382e03751436cdac3564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cd4e117b286fc4c5ef9eae3630d9e850a478f2f00e382e03751436cdac3564->enter($__internal_54cd4e117b286fc4c5ef9eae3630d9e850a478f2f00e382e03751436cdac3564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 8
        echo "    ";
        
        $__internal_54cd4e117b286fc4c5ef9eae3630d9e850a478f2f00e382e03751436cdac3564->leave($__internal_54cd4e117b286fc4c5ef9eae3630d9e850a478f2f00e382e03751436cdac3564_prof);

        
        $__internal_004104666a45b0bbfad4842ce4f06f22e2a183e3254dee2682671da8aee64c1f->leave($__internal_004104666a45b0bbfad4842ce4f06f22e2a183e3254dee2682671da8aee64c1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 8,  90 => 7,  71 => 13,  66 => 11,  62 => 9,  59 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# modif secu du 09/02/18 #}
{% extends \"BCCoreBundle::layout.html.twig\" %}
{% block body %}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}
    {% block connexion %}
    {% endblock connexion %}
    <div class=\"row center-align\">
        <div class=\"col s6 offset-s3\" id=\"formconnexion\">
            <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
                <label for=\"username\" class=\"col s6\">Login :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"/>
                <label for=\"password\" class=\"col s6\">Password :</label>
                <input type=\"password\" id=\"password\" name=\"_password\"/>
                <br/>
                <input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Connexion\"/>
            </form>
        </div>
    </div>
{% endblock %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/NU/src/BC/UserBundle/Resources/views/Security/login.html.twig");
    }
}
