<?php

/* BCPlatformBundle::layout.html.twig */
class __TwigTemplate_53efc0cac554eb2a9908161ff44ecb9292715ef56c3b9d8878d95eb3a43cfd8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCCoreBundle::layout.html.twig", "BCPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bcplatform_body' => array($this, 'block_bcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c0606dab79997d23a6f510e7e0f2b0f07930440a7da4a18b1177977ded7042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c0606dab79997d23a6f510e7e0f2b0f07930440a7da4a18b1177977ded7042->enter($__internal_62c0606dab79997d23a6f510e7e0f2b0f07930440a7da4a18b1177977ded7042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle::layout.html.twig"));

        $__internal_3ebb56139ff27fe1d25a5461b3f3a41feb9c8cc26896c5c888658ef264542655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebb56139ff27fe1d25a5461b3f3a41feb9c8cc26896c5c888658ef264542655->enter($__internal_3ebb56139ff27fe1d25a5461b3f3a41feb9c8cc26896c5c888658ef264542655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c0606dab79997d23a6f510e7e0f2b0f07930440a7da4a18b1177977ded7042->leave($__internal_62c0606dab79997d23a6f510e7e0f2b0f07930440a7da4a18b1177977ded7042_prof);

        
        $__internal_3ebb56139ff27fe1d25a5461b3f3a41feb9c8cc26896c5c888658ef264542655->leave($__internal_3ebb56139ff27fe1d25a5461b3f3a41feb9c8cc26896c5c888658ef264542655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_084110a0c59ee33db643ff4444da5f3a2a2602c8abc4675a2b3b4770c8ee4ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084110a0c59ee33db643ff4444da5f3a2a2602c8abc4675a2b3b4770c8ee4ed0->enter($__internal_084110a0c59ee33db643ff4444da5f3a2a2602c8abc4675a2b3b4770c8ee4ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aabfcbc131e79c6bc0a966af916bff349d01fca547ab93108b87af44eba041a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabfcbc131e79c6bc0a966af916bff349d01fca547ab93108b87af44eba041a2->enter($__internal_aabfcbc131e79c6bc0a966af916bff349d01fca547ab93108b87af44eba041a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aabfcbc131e79c6bc0a966af916bff349d01fca547ab93108b87af44eba041a2->leave($__internal_aabfcbc131e79c6bc0a966af916bff349d01fca547ab93108b87af44eba041a2_prof);

        
        $__internal_084110a0c59ee33db643ff4444da5f3a2a2602c8abc4675a2b3b4770c8ee4ed0->leave($__internal_084110a0c59ee33db643ff4444da5f3a2a2602c8abc4675a2b3b4770c8ee4ed0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d59f8c7dec6d81dbef7bdc5d8eb5cd59be08a38527854290224b4cdf092f9ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59f8c7dec6d81dbef7bdc5d8eb5cd59be08a38527854290224b4cdf092f9ea1->enter($__internal_d59f8c7dec6d81dbef7bdc5d8eb5cd59be08a38527854290224b4cdf092f9ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23b880844139b9910719f6cc1603560af63b830246e9184e7c42498cebd389a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b880844139b9910719f6cc1603560af63b830246e9184e7c42498cebd389a4->enter($__internal_23b880844139b9910719f6cc1603560af63b830246e9184e7c42498cebd389a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayBlock('bcplatform_body', $context, $blocks);
        
        $__internal_23b880844139b9910719f6cc1603560af63b830246e9184e7c42498cebd389a4->leave($__internal_23b880844139b9910719f6cc1603560af63b830246e9184e7c42498cebd389a4_prof);

        
        $__internal_d59f8c7dec6d81dbef7bdc5d8eb5cd59be08a38527854290224b4cdf092f9ea1->leave($__internal_d59f8c7dec6d81dbef7bdc5d8eb5cd59be08a38527854290224b4cdf092f9ea1_prof);

    }

    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_f60f9a8c3501cf19fbaef621e89ba0a73c704b8bde0aa33de0c6eb534189920d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60f9a8c3501cf19fbaef621e89ba0a73c704b8bde0aa33de0c6eb534189920d->enter($__internal_f60f9a8c3501cf19fbaef621e89ba0a73c704b8bde0aa33de0c6eb534189920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_95ce98c7bc155cd714f462cc411cf4fa2d5ce00c9079fd36937ad703b735c41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ce98c7bc155cd714f462cc411cf4fa2d5ce00c9079fd36937ad703b735c41d->enter($__internal_95ce98c7bc155cd714f462cc411cf4fa2d5ce00c9079fd36937ad703b735c41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 9
        echo "    ";
        
        $__internal_95ce98c7bc155cd714f462cc411cf4fa2d5ce00c9079fd36937ad703b735c41d->leave($__internal_95ce98c7bc155cd714f462cc411cf4fa2d5ce00c9079fd36937ad703b735c41d_prof);

        
        $__internal_f60f9a8c3501cf19fbaef621e89ba0a73c704b8bde0aa33de0c6eb534189920d->leave($__internal_f60f9a8c3501cf19fbaef621e89ba0a73c704b8bde0aa33de0c6eb534189920d_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}
    {% block bcplatform_body %}
    {% endblock %}
{% endblock %}", "BCPlatformBundle::layout.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
