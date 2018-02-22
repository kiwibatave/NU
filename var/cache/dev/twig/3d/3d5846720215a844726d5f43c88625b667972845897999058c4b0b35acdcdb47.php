<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bca7133489a9626cb1c8972364901ad9514aa5bca579ca014f1e622f4437c9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_61d5b58e4340cc1548e8a3dfcf24f6048ed0135e30ef1d30c9260b568b09a71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d5b58e4340cc1548e8a3dfcf24f6048ed0135e30ef1d30c9260b568b09a71d->enter($__internal_61d5b58e4340cc1548e8a3dfcf24f6048ed0135e30ef1d30c9260b568b09a71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_418ee5179dbd19a49c8a27f15a4844e6901f4df5a0028a63834cb9eec91c2d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418ee5179dbd19a49c8a27f15a4844e6901f4df5a0028a63834cb9eec91c2d0d->enter($__internal_418ee5179dbd19a49c8a27f15a4844e6901f4df5a0028a63834cb9eec91c2d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d5b58e4340cc1548e8a3dfcf24f6048ed0135e30ef1d30c9260b568b09a71d->leave($__internal_61d5b58e4340cc1548e8a3dfcf24f6048ed0135e30ef1d30c9260b568b09a71d_prof);

        
        $__internal_418ee5179dbd19a49c8a27f15a4844e6901f4df5a0028a63834cb9eec91c2d0d->leave($__internal_418ee5179dbd19a49c8a27f15a4844e6901f4df5a0028a63834cb9eec91c2d0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_199c5d5a5ee5a1eb9c6b713650d20923d2af55b122b234da5ee206c898b2e17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199c5d5a5ee5a1eb9c6b713650d20923d2af55b122b234da5ee206c898b2e17f->enter($__internal_199c5d5a5ee5a1eb9c6b713650d20923d2af55b122b234da5ee206c898b2e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c460716076f43e05bc7022270eda8cb97a5e8d9cd1b2a477e0302277d74db22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c460716076f43e05bc7022270eda8cb97a5e8d9cd1b2a477e0302277d74db22->enter($__internal_0c460716076f43e05bc7022270eda8cb97a5e8d9cd1b2a477e0302277d74db22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0c460716076f43e05bc7022270eda8cb97a5e8d9cd1b2a477e0302277d74db22->leave($__internal_0c460716076f43e05bc7022270eda8cb97a5e8d9cd1b2a477e0302277d74db22_prof);

        
        $__internal_199c5d5a5ee5a1eb9c6b713650d20923d2af55b122b234da5ee206c898b2e17f->leave($__internal_199c5d5a5ee5a1eb9c6b713650d20923d2af55b122b234da5ee206c898b2e17f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
