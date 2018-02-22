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
        $__internal_e5f290c0b8c6c15f5115fe16f349550e6b9afb5876ff53ebe5eefc5e2d7df8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f290c0b8c6c15f5115fe16f349550e6b9afb5876ff53ebe5eefc5e2d7df8c4->enter($__internal_e5f290c0b8c6c15f5115fe16f349550e6b9afb5876ff53ebe5eefc5e2d7df8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_70c1423a3d6e7ad83daa27cdba790182b700cbc21e6cbeefab3136c66c229aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c1423a3d6e7ad83daa27cdba790182b700cbc21e6cbeefab3136c66c229aca->enter($__internal_70c1423a3d6e7ad83daa27cdba790182b700cbc21e6cbeefab3136c66c229aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f290c0b8c6c15f5115fe16f349550e6b9afb5876ff53ebe5eefc5e2d7df8c4->leave($__internal_e5f290c0b8c6c15f5115fe16f349550e6b9afb5876ff53ebe5eefc5e2d7df8c4_prof);

        
        $__internal_70c1423a3d6e7ad83daa27cdba790182b700cbc21e6cbeefab3136c66c229aca->leave($__internal_70c1423a3d6e7ad83daa27cdba790182b700cbc21e6cbeefab3136c66c229aca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c0e14764d91d48bd782e3ed630b15852dc1a839bad8bf8859f4fd6adc74f66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0e14764d91d48bd782e3ed630b15852dc1a839bad8bf8859f4fd6adc74f66f->enter($__internal_0c0e14764d91d48bd782e3ed630b15852dc1a839bad8bf8859f4fd6adc74f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a83e2b1b660c7dc7ada7f0982ba47621accadf7e9c0a6319889f76b5ccdca09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83e2b1b660c7dc7ada7f0982ba47621accadf7e9c0a6319889f76b5ccdca09d->enter($__internal_a83e2b1b660c7dc7ada7f0982ba47621accadf7e9c0a6319889f76b5ccdca09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a83e2b1b660c7dc7ada7f0982ba47621accadf7e9c0a6319889f76b5ccdca09d->leave($__internal_a83e2b1b660c7dc7ada7f0982ba47621accadf7e9c0a6319889f76b5ccdca09d_prof);

        
        $__internal_0c0e14764d91d48bd782e3ed630b15852dc1a839bad8bf8859f4fd6adc74f66f->leave($__internal_0c0e14764d91d48bd782e3ed630b15852dc1a839bad8bf8859f4fd6adc74f66f_prof);

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
