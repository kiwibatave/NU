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
        $__internal_d76a9d5f5df4ee8675be24df80a5d153d396c6a419327b6ed4e657ce78334bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76a9d5f5df4ee8675be24df80a5d153d396c6a419327b6ed4e657ce78334bf9->enter($__internal_d76a9d5f5df4ee8675be24df80a5d153d396c6a419327b6ed4e657ce78334bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_24c3bc282d4f60c71c7fd2e5c23223484398f91d71db55a80c45776a384eda2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c3bc282d4f60c71c7fd2e5c23223484398f91d71db55a80c45776a384eda2b->enter($__internal_24c3bc282d4f60c71c7fd2e5c23223484398f91d71db55a80c45776a384eda2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d76a9d5f5df4ee8675be24df80a5d153d396c6a419327b6ed4e657ce78334bf9->leave($__internal_d76a9d5f5df4ee8675be24df80a5d153d396c6a419327b6ed4e657ce78334bf9_prof);

        
        $__internal_24c3bc282d4f60c71c7fd2e5c23223484398f91d71db55a80c45776a384eda2b->leave($__internal_24c3bc282d4f60c71c7fd2e5c23223484398f91d71db55a80c45776a384eda2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2054070e9d057dac4eaf0d82e6f803b47c71fad7b068dd82685175570fa5e81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2054070e9d057dac4eaf0d82e6f803b47c71fad7b068dd82685175570fa5e81b->enter($__internal_2054070e9d057dac4eaf0d82e6f803b47c71fad7b068dd82685175570fa5e81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99c1192fbcedfb0627de0d8e5221a4528a72ead5ebd933de97b47cccdd7832b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c1192fbcedfb0627de0d8e5221a4528a72ead5ebd933de97b47cccdd7832b0->enter($__internal_99c1192fbcedfb0627de0d8e5221a4528a72ead5ebd933de97b47cccdd7832b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_99c1192fbcedfb0627de0d8e5221a4528a72ead5ebd933de97b47cccdd7832b0->leave($__internal_99c1192fbcedfb0627de0d8e5221a4528a72ead5ebd933de97b47cccdd7832b0_prof);

        
        $__internal_2054070e9d057dac4eaf0d82e6f803b47c71fad7b068dd82685175570fa5e81b->leave($__internal_2054070e9d057dac4eaf0d82e6f803b47c71fad7b068dd82685175570fa5e81b_prof);

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
