<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1dd821dc3c3086041f9bbe2e79e988724c365da5bf6358c5d9ad785dc5793763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b49ee7e99678ff11c70541940c11085960f029a0e0aff29844a54928cd80f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b49ee7e99678ff11c70541940c11085960f029a0e0aff29844a54928cd80f05->enter($__internal_9b49ee7e99678ff11c70541940c11085960f029a0e0aff29844a54928cd80f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_157b42666f2173604a4731fa1461f9a90a077dd5e2b9672c5917a16f8c979104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157b42666f2173604a4731fa1461f9a90a077dd5e2b9672c5917a16f8c979104->enter($__internal_157b42666f2173604a4731fa1461f9a90a077dd5e2b9672c5917a16f8c979104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b49ee7e99678ff11c70541940c11085960f029a0e0aff29844a54928cd80f05->leave($__internal_9b49ee7e99678ff11c70541940c11085960f029a0e0aff29844a54928cd80f05_prof);

        
        $__internal_157b42666f2173604a4731fa1461f9a90a077dd5e2b9672c5917a16f8c979104->leave($__internal_157b42666f2173604a4731fa1461f9a90a077dd5e2b9672c5917a16f8c979104_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_12d5c684241db6f41865c79bd323d7f47d47bf379a865b5abe34d0ba7dc1b714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d5c684241db6f41865c79bd323d7f47d47bf379a865b5abe34d0ba7dc1b714->enter($__internal_12d5c684241db6f41865c79bd323d7f47d47bf379a865b5abe34d0ba7dc1b714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f53ba7b82092e4f8d1db8f4e60047e801f9b32cd1d69c20349b2c8ed8d2b6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f53ba7b82092e4f8d1db8f4e60047e801f9b32cd1d69c20349b2c8ed8d2b6a9->enter($__internal_5f53ba7b82092e4f8d1db8f4e60047e801f9b32cd1d69c20349b2c8ed8d2b6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5f53ba7b82092e4f8d1db8f4e60047e801f9b32cd1d69c20349b2c8ed8d2b6a9->leave($__internal_5f53ba7b82092e4f8d1db8f4e60047e801f9b32cd1d69c20349b2c8ed8d2b6a9_prof);

        
        $__internal_12d5c684241db6f41865c79bd323d7f47d47bf379a865b5abe34d0ba7dc1b714->leave($__internal_12d5c684241db6f41865c79bd323d7f47d47bf379a865b5abe34d0ba7dc1b714_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
