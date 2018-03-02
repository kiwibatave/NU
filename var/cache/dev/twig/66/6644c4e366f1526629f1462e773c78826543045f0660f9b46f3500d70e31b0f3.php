<?php

/* BCUserBundle:Security:login.html.twig */
class __TwigTemplate_b3ca4b192943b04a0dc3636a08956bf6ee5f03cf18b4b9631aae64c5a59546b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BCCoreBundle::layout.html.twig", "BCUserBundle:Security:login.html.twig", 2);
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
        $__internal_b848b801f7ba8e8de967a8fd950399cae0827beafed6157a8fff031e8501dfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b848b801f7ba8e8de967a8fd950399cae0827beafed6157a8fff031e8501dfe8->enter($__internal_b848b801f7ba8e8de967a8fd950399cae0827beafed6157a8fff031e8501dfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCUserBundle:Security:login.html.twig"));

        $__internal_332f60756d7392f068f821480db227e8a617756b52e880453c0f55e2c45f6038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332f60756d7392f068f821480db227e8a617756b52e880453c0f55e2c45f6038->enter($__internal_332f60756d7392f068f821480db227e8a617756b52e880453c0f55e2c45f6038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b848b801f7ba8e8de967a8fd950399cae0827beafed6157a8fff031e8501dfe8->leave($__internal_b848b801f7ba8e8de967a8fd950399cae0827beafed6157a8fff031e8501dfe8_prof);

        
        $__internal_332f60756d7392f068f821480db227e8a617756b52e880453c0f55e2c45f6038->leave($__internal_332f60756d7392f068f821480db227e8a617756b52e880453c0f55e2c45f6038_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_738171a7a57a399b06b08752d4c60358373edbde23e91f54f163786e0aa0174d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738171a7a57a399b06b08752d4c60358373edbde23e91f54f163786e0aa0174d->enter($__internal_738171a7a57a399b06b08752d4c60358373edbde23e91f54f163786e0aa0174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bedd5a558c1b86b5cbc75b4ec2fa11f89812109a20ac0b37b28fb389f91bbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bedd5a558c1b86b5cbc75b4ec2fa11f89812109a20ac0b37b28fb389f91bbd2->enter($__internal_1bedd5a558c1b86b5cbc75b4ec2fa11f89812109a20ac0b37b28fb389f91bbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col m2 offset-m5\" id=\"formconnexion\">
            <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <label for=\"username\" class=\"col s6 offset-s3 center-align\"><span class=\"black-text\">LOGIN</span></label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\"/>
                <label for=\"password\" class=\"col s6 offset-s3 center-align\"><span class=\"black-text\">PASSWORD</span></label>
                <input type=\"password\" id=\"password\" name=\"_password\"/>
                <br/>
                <input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Connexion\"/>
            </form>
        </div>
    </div>
";
        
        $__internal_1bedd5a558c1b86b5cbc75b4ec2fa11f89812109a20ac0b37b28fb389f91bbd2->leave($__internal_1bedd5a558c1b86b5cbc75b4ec2fa11f89812109a20ac0b37b28fb389f91bbd2_prof);

        
        $__internal_738171a7a57a399b06b08752d4c60358373edbde23e91f54f163786e0aa0174d->leave($__internal_738171a7a57a399b06b08752d4c60358373edbde23e91f54f163786e0aa0174d_prof);

    }

    // line 7
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_897b8105ff9895825b17ee636331bbb50cce4a1dc9fd269ccf738158baeb4ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897b8105ff9895825b17ee636331bbb50cce4a1dc9fd269ccf738158baeb4ce9->enter($__internal_897b8105ff9895825b17ee636331bbb50cce4a1dc9fd269ccf738158baeb4ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_6cb198ab4c712686059bbda08a8458487bbf35ab45042b4ff4450a661aba686c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb198ab4c712686059bbda08a8458487bbf35ab45042b4ff4450a661aba686c->enter($__internal_6cb198ab4c712686059bbda08a8458487bbf35ab45042b4ff4450a661aba686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 8
        echo "    ";
        
        $__internal_6cb198ab4c712686059bbda08a8458487bbf35ab45042b4ff4450a661aba686c->leave($__internal_6cb198ab4c712686059bbda08a8458487bbf35ab45042b4ff4450a661aba686c_prof);

        
        $__internal_897b8105ff9895825b17ee636331bbb50cce4a1dc9fd269ccf738158baeb4ce9->leave($__internal_897b8105ff9895825b17ee636331bbb50cce4a1dc9fd269ccf738158baeb4ce9_prof);

    }

    public function getTemplateName()
    {
        return "BCUserBundle:Security:login.html.twig";
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
        <div class=\"col m2 offset-m5\" id=\"formconnexion\">
            <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
                <label for=\"username\" class=\"col s6 offset-s3 center-align\"><span class=\"black-text\">LOGIN</span></label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"/>
                <label for=\"password\" class=\"col s6 offset-s3 center-align\"><span class=\"black-text\">PASSWORD</span></label>
                <input type=\"password\" id=\"password\" name=\"_password\"/>
                <br/>
                <input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Connexion\"/>
            </form>
        </div>
    </div>
{% endblock %}
", "BCUserBundle:Security:login.html.twig", "/var/www/html/NU/src/BC/UserBundle/Resources/views/Security/login.html.twig");
    }
}
