<?php

/* BCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_3b8a787f8f9728348e61a39522a68fa33d1b93308c3e60af506b6c57a3cbcd82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:add.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c20fd586cb399c64f82691f1a83dcbc3472d406a271b148cbc81965675fdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c20fd586cb399c64f82691f1a83dcbc3472d406a271b148cbc81965675fdbc->enter($__internal_06c20fd586cb399c64f82691f1a83dcbc3472d406a271b148cbc81965675fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:add.html.twig"));

        $__internal_debac14043d259672ef9fcff8004820b935c12748117a752d8b778d45b63b204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debac14043d259672ef9fcff8004820b935c12748117a752d8b778d45b63b204->enter($__internal_debac14043d259672ef9fcff8004820b935c12748117a752d8b778d45b63b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c20fd586cb399c64f82691f1a83dcbc3472d406a271b148cbc81965675fdbc->leave($__internal_06c20fd586cb399c64f82691f1a83dcbc3472d406a271b148cbc81965675fdbc_prof);

        
        $__internal_debac14043d259672ef9fcff8004820b935c12748117a752d8b778d45b63b204->leave($__internal_debac14043d259672ef9fcff8004820b935c12748117a752d8b778d45b63b204_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1e225c1664528164d76438d42e56c2eb5cd20ccb13890e4492883c8a9ca6e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e225c1664528164d76438d42e56c2eb5cd20ccb13890e4492883c8a9ca6e11->enter($__internal_f1e225c1664528164d76438d42e56c2eb5cd20ccb13890e4492883c8a9ca6e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_306b911c46b735433d7331b05d2346493865dc05721c5a36cbd323286b05cfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306b911c46b735433d7331b05d2346493865dc05721c5a36cbd323286b05cfce->enter($__internal_306b911c46b735433d7331b05d2346493865dc05721c5a36cbd323286b05cfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "BCPlatformBundle:Advert:form.html.twig");
        echo "
    <div class=\"row center-align\">
        <div class=\"col m4 offset-m4\">
            <p>
                <span class=\"red-text\"><i class=\"material-icons left\">warning</i></span>
                Votre annonce sera ajoutée automatiquement après validation
                <span class=\"red-text\"><i class=\"material-icons right\">warning</i></span>
            </p>
        </div>
    </div>
";
        
        $__internal_306b911c46b735433d7331b05d2346493865dc05721c5a36cbd323286b05cfce->leave($__internal_306b911c46b735433d7331b05d2346493865dc05721c5a36cbd323286b05cfce_prof);

        
        $__internal_f1e225c1664528164d76438d42e56c2eb5cd20ccb13890e4492883c8a9ca6e11->leave($__internal_f1e225c1664528164d76438d42e56c2eb5cd20ccb13890e4492883c8a9ca6e11_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Vue du formulaire pour ajouter une annonce #}
{% extends \"BCPlatformBundle::layout.html.twig\" %}
{% block body %}
    {{ include(\"BCPlatformBundle:Advert:form.html.twig\") }}
    <div class=\"row center-align\">
        <div class=\"col m4 offset-m4\">
            <p>
                <span class=\"red-text\"><i class=\"material-icons left\">warning</i></span>
                Votre annonce sera ajoutée automatiquement après validation
                <span class=\"red-text\"><i class=\"material-icons right\">warning</i></span>
            </p>
        </div>
    </div>
{% endblock %}", "BCPlatformBundle:Advert:add.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
