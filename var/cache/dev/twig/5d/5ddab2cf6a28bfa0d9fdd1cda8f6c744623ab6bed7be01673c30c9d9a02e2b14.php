<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_0544146e246d5e07dffa63020e59e74be1e4469de755734b7cd4e474987d8036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_30424ebb00e6ad6b274e55f2c52247c06df3b9d825beb9e4c8a3ec4762e04835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30424ebb00e6ad6b274e55f2c52247c06df3b9d825beb9e4c8a3ec4762e04835->enter($__internal_30424ebb00e6ad6b274e55f2c52247c06df3b9d825beb9e4c8a3ec4762e04835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8fd9003960bb67e3c5b1d6915ab4542367c7dd9fea49cf06b2e6f1fa71bc0ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd9003960bb67e3c5b1d6915ab4542367c7dd9fea49cf06b2e6f1fa71bc0ba6->enter($__internal_8fd9003960bb67e3c5b1d6915ab4542367c7dd9fea49cf06b2e6f1fa71bc0ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30424ebb00e6ad6b274e55f2c52247c06df3b9d825beb9e4c8a3ec4762e04835->leave($__internal_30424ebb00e6ad6b274e55f2c52247c06df3b9d825beb9e4c8a3ec4762e04835_prof);

        
        $__internal_8fd9003960bb67e3c5b1d6915ab4542367c7dd9fea49cf06b2e6f1fa71bc0ba6->leave($__internal_8fd9003960bb67e3c5b1d6915ab4542367c7dd9fea49cf06b2e6f1fa71bc0ba6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc6232d89205341ea0683ffad9a80d0024e53f061e594572719aa7e40c75c0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6232d89205341ea0683ffad9a80d0024e53f061e594572719aa7e40c75c0a9->enter($__internal_cc6232d89205341ea0683ffad9a80d0024e53f061e594572719aa7e40c75c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41d832531a3ec6a381d9fc9e8ff7782c104bc84076762ae0b51d6c4590834855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d832531a3ec6a381d9fc9e8ff7782c104bc84076762ae0b51d6c4590834855->enter($__internal_41d832531a3ec6a381d9fc9e8ff7782c104bc84076762ae0b51d6c4590834855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_41d832531a3ec6a381d9fc9e8ff7782c104bc84076762ae0b51d6c4590834855->leave($__internal_41d832531a3ec6a381d9fc9e8ff7782c104bc84076762ae0b51d6c4590834855_prof);

        
        $__internal_cc6232d89205341ea0683ffad9a80d0024e53f061e594572719aa7e40c75c0a9->leave($__internal_cc6232d89205341ea0683ffad9a80d0024e53f061e594572719aa7e40c75c0a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
