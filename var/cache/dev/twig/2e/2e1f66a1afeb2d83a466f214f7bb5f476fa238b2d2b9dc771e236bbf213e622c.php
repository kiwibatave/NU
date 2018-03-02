<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36caf6b28dd4313c10a8467ff01c31bd58a61994a67df54ceec0c7a6ccf47787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_233b51043781c51e83055665c72e036e3210448dbb8155a7a68e350a98452323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233b51043781c51e83055665c72e036e3210448dbb8155a7a68e350a98452323->enter($__internal_233b51043781c51e83055665c72e036e3210448dbb8155a7a68e350a98452323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_58100f15de04ea70471c29dd07edca2138b08245a0202e64a01b9ffedc19b7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58100f15de04ea70471c29dd07edca2138b08245a0202e64a01b9ffedc19b7bf->enter($__internal_58100f15de04ea70471c29dd07edca2138b08245a0202e64a01b9ffedc19b7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_233b51043781c51e83055665c72e036e3210448dbb8155a7a68e350a98452323->leave($__internal_233b51043781c51e83055665c72e036e3210448dbb8155a7a68e350a98452323_prof);

        
        $__internal_58100f15de04ea70471c29dd07edca2138b08245a0202e64a01b9ffedc19b7bf->leave($__internal_58100f15de04ea70471c29dd07edca2138b08245a0202e64a01b9ffedc19b7bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02341618043497f0de3a783464429b3c5006e506b8c4a3c177710571b696bcc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02341618043497f0de3a783464429b3c5006e506b8c4a3c177710571b696bcc2->enter($__internal_02341618043497f0de3a783464429b3c5006e506b8c4a3c177710571b696bcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a509df1021069ec0046ffbdef2d7548cdc2fc278f5829cc0a87b93731781e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a509df1021069ec0046ffbdef2d7548cdc2fc278f5829cc0a87b93731781e25->enter($__internal_6a509df1021069ec0046ffbdef2d7548cdc2fc278f5829cc0a87b93731781e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6a509df1021069ec0046ffbdef2d7548cdc2fc278f5829cc0a87b93731781e25->leave($__internal_6a509df1021069ec0046ffbdef2d7548cdc2fc278f5829cc0a87b93731781e25_prof);

        
        $__internal_02341618043497f0de3a783464429b3c5006e506b8c4a3c177710571b696bcc2->leave($__internal_02341618043497f0de3a783464429b3c5006e506b8c4a3c177710571b696bcc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
