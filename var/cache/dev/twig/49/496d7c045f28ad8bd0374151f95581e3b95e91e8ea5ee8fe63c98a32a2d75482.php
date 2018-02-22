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
        $__internal_7d867d9fd1caf2f0dbb6ad09345aa25c8e6effabdaa66c06f54a76053d203a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d867d9fd1caf2f0dbb6ad09345aa25c8e6effabdaa66c06f54a76053d203a12->enter($__internal_7d867d9fd1caf2f0dbb6ad09345aa25c8e6effabdaa66c06f54a76053d203a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:add.html.twig"));

        $__internal_0f8ad3bfb79220a0c536fbf6090125797cfb9d756206512a2e940ace1eda8341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8ad3bfb79220a0c536fbf6090125797cfb9d756206512a2e940ace1eda8341->enter($__internal_0f8ad3bfb79220a0c536fbf6090125797cfb9d756206512a2e940ace1eda8341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d867d9fd1caf2f0dbb6ad09345aa25c8e6effabdaa66c06f54a76053d203a12->leave($__internal_7d867d9fd1caf2f0dbb6ad09345aa25c8e6effabdaa66c06f54a76053d203a12_prof);

        
        $__internal_0f8ad3bfb79220a0c536fbf6090125797cfb9d756206512a2e940ace1eda8341->leave($__internal_0f8ad3bfb79220a0c536fbf6090125797cfb9d756206512a2e940ace1eda8341_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a29302610b8a7c878da7d197ae054f4eb232c5271014d925860c3b4ae9e2fad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29302610b8a7c878da7d197ae054f4eb232c5271014d925860c3b4ae9e2fad3->enter($__internal_a29302610b8a7c878da7d197ae054f4eb232c5271014d925860c3b4ae9e2fad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a03d415fe5441468db7b17c4948ce67c3f8e58985875ae0b8870d1013893ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a03d415fe5441468db7b17c4948ce67c3f8e58985875ae0b8870d1013893ef2->enter($__internal_3a03d415fe5441468db7b17c4948ce67c3f8e58985875ae0b8870d1013893ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "BCPlatformBundle:Advert:form.html.twig");
        echo "
    <div class=\"row center-align\">
        <div class=\"offset-s3\">
            <p>
                <i class=\"material-icons left\">warning</i>
                Votre annonce sera ajoutée automatiquement après la validation du formulaire
                <i class=\"material-icons right\">warning</i>
            </p>
        </div>
    </div>
";
        
        $__internal_3a03d415fe5441468db7b17c4948ce67c3f8e58985875ae0b8870d1013893ef2->leave($__internal_3a03d415fe5441468db7b17c4948ce67c3f8e58985875ae0b8870d1013893ef2_prof);

        
        $__internal_a29302610b8a7c878da7d197ae054f4eb232c5271014d925860c3b4ae9e2fad3->leave($__internal_a29302610b8a7c878da7d197ae054f4eb232c5271014d925860c3b4ae9e2fad3_prof);

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
        <div class=\"offset-s3\">
            <p>
                <i class=\"material-icons left\">warning</i>
                Votre annonce sera ajoutée automatiquement après la validation du formulaire
                <i class=\"material-icons right\">warning</i>
            </p>
        </div>
    </div>
{% endblock %}", "BCPlatformBundle:Advert:add.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
