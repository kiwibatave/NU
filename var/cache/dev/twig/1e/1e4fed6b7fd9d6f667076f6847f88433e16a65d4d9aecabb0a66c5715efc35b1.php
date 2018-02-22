<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_61f109115b2c26f1d5b0ce0dfeaa7380e56f00d347f236d86f9e633fc25eb4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_6d858e50514120410e2ac38bae5f2dbf9a2dc38c4afca72631927625759c57aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d858e50514120410e2ac38bae5f2dbf9a2dc38c4afca72631927625759c57aa->enter($__internal_6d858e50514120410e2ac38bae5f2dbf9a2dc38c4afca72631927625759c57aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3de92ce19a56ab71907081099d7f2a47a023bf0dc86ad630769da9e139484610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de92ce19a56ab71907081099d7f2a47a023bf0dc86ad630769da9e139484610->enter($__internal_3de92ce19a56ab71907081099d7f2a47a023bf0dc86ad630769da9e139484610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d858e50514120410e2ac38bae5f2dbf9a2dc38c4afca72631927625759c57aa->leave($__internal_6d858e50514120410e2ac38bae5f2dbf9a2dc38c4afca72631927625759c57aa_prof);

        
        $__internal_3de92ce19a56ab71907081099d7f2a47a023bf0dc86ad630769da9e139484610->leave($__internal_3de92ce19a56ab71907081099d7f2a47a023bf0dc86ad630769da9e139484610_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_503b0d0a25cc118753def3afa917b4710361a50c1fc7e6873df7c334eb14be64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503b0d0a25cc118753def3afa917b4710361a50c1fc7e6873df7c334eb14be64->enter($__internal_503b0d0a25cc118753def3afa917b4710361a50c1fc7e6873df7c334eb14be64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15ea9351de16edbb4eb2fb522f63d737d9e78745b416cb977f2bdef3bb81ea37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ea9351de16edbb4eb2fb522f63d737d9e78745b416cb977f2bdef3bb81ea37->enter($__internal_15ea9351de16edbb4eb2fb522f63d737d9e78745b416cb977f2bdef3bb81ea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_15ea9351de16edbb4eb2fb522f63d737d9e78745b416cb977f2bdef3bb81ea37->leave($__internal_15ea9351de16edbb4eb2fb522f63d737d9e78745b416cb977f2bdef3bb81ea37_prof);

        
        $__internal_503b0d0a25cc118753def3afa917b4710361a50c1fc7e6873df7c334eb14be64->leave($__internal_503b0d0a25cc118753def3afa917b4710361a50c1fc7e6873df7c334eb14be64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
