<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e24bcd355b3f803e4b2700710b6444e5c316b12cebfe420f4c614ff3c0c539ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ee2ead9326e77d5e3c0d36acc480f5deb57d40986e8b897a8e67ee8c59650834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2ead9326e77d5e3c0d36acc480f5deb57d40986e8b897a8e67ee8c59650834->enter($__internal_ee2ead9326e77d5e3c0d36acc480f5deb57d40986e8b897a8e67ee8c59650834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_76a8289b995c8b2a7bbb3ecd64ed4b715106e7227b3f6aefbcfc400b62bf496e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a8289b995c8b2a7bbb3ecd64ed4b715106e7227b3f6aefbcfc400b62bf496e->enter($__internal_76a8289b995c8b2a7bbb3ecd64ed4b715106e7227b3f6aefbcfc400b62bf496e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2ead9326e77d5e3c0d36acc480f5deb57d40986e8b897a8e67ee8c59650834->leave($__internal_ee2ead9326e77d5e3c0d36acc480f5deb57d40986e8b897a8e67ee8c59650834_prof);

        
        $__internal_76a8289b995c8b2a7bbb3ecd64ed4b715106e7227b3f6aefbcfc400b62bf496e->leave($__internal_76a8289b995c8b2a7bbb3ecd64ed4b715106e7227b3f6aefbcfc400b62bf496e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1af8fd8afc09a6ae09bedfb1f054511d370f6879b86d9c8e4df3fa5ae9c7ed07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af8fd8afc09a6ae09bedfb1f054511d370f6879b86d9c8e4df3fa5ae9c7ed07->enter($__internal_1af8fd8afc09a6ae09bedfb1f054511d370f6879b86d9c8e4df3fa5ae9c7ed07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee41b5ad1831cc75963e46fb57fd2bfc76092e7dde927b10d978e0054bca91fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee41b5ad1831cc75963e46fb57fd2bfc76092e7dde927b10d978e0054bca91fd->enter($__internal_ee41b5ad1831cc75963e46fb57fd2bfc76092e7dde927b10d978e0054bca91fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ee41b5ad1831cc75963e46fb57fd2bfc76092e7dde927b10d978e0054bca91fd->leave($__internal_ee41b5ad1831cc75963e46fb57fd2bfc76092e7dde927b10d978e0054bca91fd_prof);

        
        $__internal_1af8fd8afc09a6ae09bedfb1f054511d370f6879b86d9c8e4df3fa5ae9c7ed07->leave($__internal_1af8fd8afc09a6ae09bedfb1f054511d370f6879b86d9c8e4df3fa5ae9c7ed07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
