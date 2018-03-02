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
        $__internal_c01f605c864f934f5cc4e9db550fec0238510aa25249e96eb1963d11a15d977e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01f605c864f934f5cc4e9db550fec0238510aa25249e96eb1963d11a15d977e->enter($__internal_c01f605c864f934f5cc4e9db550fec0238510aa25249e96eb1963d11a15d977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_9d1687a8066a88bd1c7be15ce079e9fe51f348e61bc2b6a598f79f9b7658ff91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1687a8066a88bd1c7be15ce079e9fe51f348e61bc2b6a598f79f9b7658ff91->enter($__internal_9d1687a8066a88bd1c7be15ce079e9fe51f348e61bc2b6a598f79f9b7658ff91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01f605c864f934f5cc4e9db550fec0238510aa25249e96eb1963d11a15d977e->leave($__internal_c01f605c864f934f5cc4e9db550fec0238510aa25249e96eb1963d11a15d977e_prof);

        
        $__internal_9d1687a8066a88bd1c7be15ce079e9fe51f348e61bc2b6a598f79f9b7658ff91->leave($__internal_9d1687a8066a88bd1c7be15ce079e9fe51f348e61bc2b6a598f79f9b7658ff91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_887bb5daddcbb710cc0cf3f082bc99c3b3f482d297f5efd796f893a10a02a16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887bb5daddcbb710cc0cf3f082bc99c3b3f482d297f5efd796f893a10a02a16b->enter($__internal_887bb5daddcbb710cc0cf3f082bc99c3b3f482d297f5efd796f893a10a02a16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e17554f7e4f7d6012358b747273f4ff4fa9ed1c676370d7a4e846f901208ffba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17554f7e4f7d6012358b747273f4ff4fa9ed1c676370d7a4e846f901208ffba->enter($__internal_e17554f7e4f7d6012358b747273f4ff4fa9ed1c676370d7a4e846f901208ffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e17554f7e4f7d6012358b747273f4ff4fa9ed1c676370d7a4e846f901208ffba->leave($__internal_e17554f7e4f7d6012358b747273f4ff4fa9ed1c676370d7a4e846f901208ffba_prof);

        
        $__internal_887bb5daddcbb710cc0cf3f082bc99c3b3f482d297f5efd796f893a10a02a16b->leave($__internal_887bb5daddcbb710cc0cf3f082bc99c3b3f482d297f5efd796f893a10a02a16b_prof);

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
