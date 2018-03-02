<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1d1e8da896b64237f7c4050037b06df6471f307897fa01b8f2a221198ab87311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2f43820fa4b09e3f9993d5e5c600d74ff3178369919921680daf38bb8e305152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f43820fa4b09e3f9993d5e5c600d74ff3178369919921680daf38bb8e305152->enter($__internal_2f43820fa4b09e3f9993d5e5c600d74ff3178369919921680daf38bb8e305152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8cee8e1a51f7c21d306423531e3565604583b89cca54519b7d9490e5b827db4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cee8e1a51f7c21d306423531e3565604583b89cca54519b7d9490e5b827db4b->enter($__internal_8cee8e1a51f7c21d306423531e3565604583b89cca54519b7d9490e5b827db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f43820fa4b09e3f9993d5e5c600d74ff3178369919921680daf38bb8e305152->leave($__internal_2f43820fa4b09e3f9993d5e5c600d74ff3178369919921680daf38bb8e305152_prof);

        
        $__internal_8cee8e1a51f7c21d306423531e3565604583b89cca54519b7d9490e5b827db4b->leave($__internal_8cee8e1a51f7c21d306423531e3565604583b89cca54519b7d9490e5b827db4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e1c03ef9f43995025a797508836761a661493413553b346ad0327d90f2f5b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1c03ef9f43995025a797508836761a661493413553b346ad0327d90f2f5b5c->enter($__internal_5e1c03ef9f43995025a797508836761a661493413553b346ad0327d90f2f5b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a44c40d900dd75393cc1927859f743d370862f6b6f4b72c9603c39af4b70089a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44c40d900dd75393cc1927859f743d370862f6b6f4b72c9603c39af4b70089a->enter($__internal_a44c40d900dd75393cc1927859f743d370862f6b6f4b72c9603c39af4b70089a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a44c40d900dd75393cc1927859f743d370862f6b6f4b72c9603c39af4b70089a->leave($__internal_a44c40d900dd75393cc1927859f743d370862f6b6f4b72c9603c39af4b70089a_prof);

        
        $__internal_5e1c03ef9f43995025a797508836761a661493413553b346ad0327d90f2f5b5c->leave($__internal_5e1c03ef9f43995025a797508836761a661493413553b346ad0327d90f2f5b5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
