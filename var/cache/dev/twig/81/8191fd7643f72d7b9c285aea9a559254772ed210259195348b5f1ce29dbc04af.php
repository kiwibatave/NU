<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_91b157cf96a3c1e1241dd7da89e4da5082d2b2530b9114c8cd65e0158f87c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0475a6988d0c48b54fcb46c101cdf7653e348e300a5f8fa98a5ea8c01a34988f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0475a6988d0c48b54fcb46c101cdf7653e348e300a5f8fa98a5ea8c01a34988f->enter($__internal_0475a6988d0c48b54fcb46c101cdf7653e348e300a5f8fa98a5ea8c01a34988f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_60f69f5d81bb064f443fb1a1690918768924413c8211888d264ab7c4db5066d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f69f5d81bb064f443fb1a1690918768924413c8211888d264ab7c4db5066d4->enter($__internal_60f69f5d81bb064f443fb1a1690918768924413c8211888d264ab7c4db5066d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0475a6988d0c48b54fcb46c101cdf7653e348e300a5f8fa98a5ea8c01a34988f->leave($__internal_0475a6988d0c48b54fcb46c101cdf7653e348e300a5f8fa98a5ea8c01a34988f_prof);

        
        $__internal_60f69f5d81bb064f443fb1a1690918768924413c8211888d264ab7c4db5066d4->leave($__internal_60f69f5d81bb064f443fb1a1690918768924413c8211888d264ab7c4db5066d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1ae0214217ae357e938360fca0817ad7ee95f77560f094a552313ee6e25f4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ae0214217ae357e938360fca0817ad7ee95f77560f094a552313ee6e25f4a3->enter($__internal_c1ae0214217ae357e938360fca0817ad7ee95f77560f094a552313ee6e25f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50fbcd21522691d3162f3453e367e9fdd84e4f1541957fea0ee35105b226cc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fbcd21522691d3162f3453e367e9fdd84e4f1541957fea0ee35105b226cc91->enter($__internal_50fbcd21522691d3162f3453e367e9fdd84e4f1541957fea0ee35105b226cc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_50fbcd21522691d3162f3453e367e9fdd84e4f1541957fea0ee35105b226cc91->leave($__internal_50fbcd21522691d3162f3453e367e9fdd84e4f1541957fea0ee35105b226cc91_prof);

        
        $__internal_c1ae0214217ae357e938360fca0817ad7ee95f77560f094a552313ee6e25f4a3->leave($__internal_c1ae0214217ae357e938360fca0817ad7ee95f77560f094a552313ee6e25f4a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
