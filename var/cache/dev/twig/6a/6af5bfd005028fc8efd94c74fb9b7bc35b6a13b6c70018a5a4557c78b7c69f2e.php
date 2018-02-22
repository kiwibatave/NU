<?php

/* BCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_8cea2da5371e526a4dade6bc7c37cb42dea53f3520f6eeea0eed0f858f5ec308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0485b231a418e667b53b57870b09d4c119f79d09f61b3fa66a33f4b0653a89cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0485b231a418e667b53b57870b09d4c119f79d09f61b3fa66a33f4b0653a89cc->enter($__internal_0485b231a418e667b53b57870b09d4c119f79d09f61b3fa66a33f4b0653a89cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:form.html.twig"));

        $__internal_a74eb6100a650c29b008297b12f3bd140e0766780512d16ad26b9967dfb9bc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74eb6100a650c29b008297b12f3bd140e0766780512d16ad26b9967dfb9bc3c->enter($__internal_a74eb6100a650c29b008297b12f3bd140e0766780512d16ad26b9967dfb9bc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "<div class=\"row center-align\">
    <h3>Créer une annonce</h3>
</div>
";
        // line 6
        echo "<div class=\"row center-align\">
    ";
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 10
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'errors');
        echo "
    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "date", array()), 'row');
            echo "
    ";
        }
        // line 16
        echo "    ";
        // line 17
        echo "    <div class=\"form-group\">
        ";
        // line 19
        echo "        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Le titre de votre annonce"));
        echo "
            </div>
        </div>
        ";
        // line 25
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "title", array()), 'errors');
        echo "

        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>

    ";
        // line 36
        echo "    <div class=\"form-group\">
        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description de vote annonce"));
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "content", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"row center-align\">
        <div class=\"col s6 offset-s3\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "author", array()), 'row');
        echo "
        </div>
    </div>
    ";
        // line 51
        echo "    <div class=\"container\">
        ";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "published", array(), "any", true, true)) {
            // line 53
            echo "            <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\"/>
            <label for=\"filled-in-box\">Publier</label>
            ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "published", array()), 'row');
            echo "
        ";
        }
        // line 57
        echo "    </div>

    ";
        // line 60
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "image", array()), 'row');
        echo "

    ";
        // line 63
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "categories", array()), 'row');
        echo "
    <a href=\"#\" id=\"add_category\" class=\"waves-effect waves-light btn-large blue\">Ajouter une catégorie</a>

    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "startdate", array()), 'widget', array("attr" => array("value" => "", "placeholder" => "Début disponibilité")));
        echo "
    <input type=\"text\" class=\"datepicker\">

    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), "enddate", array()), 'row');
        echo "
    <input type=\"date\" class=\"datepicker\">

    ";
        // line 73
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "waves-effect waves-light btn-large blue")));
        echo "

    ";
        // line 76
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'rest');
        echo "
    ";
        // line 78
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_0485b231a418e667b53b57870b09d4c119f79d09f61b3fa66a33f4b0653a89cc->leave($__internal_0485b231a418e667b53b57870b09d4c119f79d09f61b3fa66a33f4b0653a89cc_prof);

        
        $__internal_a74eb6100a650c29b008297b12f3bd140e0766780512d16ad26b9967dfb9bc3c->leave($__internal_a74eb6100a650c29b008297b12f3bd140e0766780512d16ad26b9967dfb9bc3c_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 78,  163 => 76,  157 => 73,  151 => 69,  145 => 66,  138 => 63,  132 => 60,  128 => 57,  123 => 55,  119 => 53,  117 => 52,  114 => 51,  108 => 47,  99 => 41,  95 => 40,  91 => 39,  86 => 36,  77 => 30,  69 => 25,  63 => 21,  59 => 19,  56 => 17,  54 => 16,  48 => 14,  45 => 13,  43 => 12,  38 => 10,  33 => 8,  30 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Formulaire pour ajouter une annonce #}
<div class=\"row center-align\">
    <h3>Créer une annonce</h3>
</div>
{# modif 02/02/18 #}
<div class=\"row center-align\">
    {# balise d'ouverture du form #}
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
    {# Erreurs générales du form #}
    {{ form_errors(form) }}
    {# Génération du label + error + widget pour un champ #}
    {# Motif du 05/02/18 #}
    {% if form.date is defined %}
        {{ form_row(form.date) }}
    {% endif %}
    {# Génération manuelle et éclatée #}
    <div class=\"form-group\">
        {# Génération du label #}
        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                {{ form_label(form.title, \"Le titre de votre annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            </div>
        </div>
        {# Affichage des erreurs pour ce champ précis #}
        {{ form_errors(form.title) }}

        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                {# Génération de l'input #}
                {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
    </div>

    {# Génération du champs content #}
    <div class=\"form-group\">
        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                {{ form_label(form.content, \"Description de vote annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.content) }}
            {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
    </div>
    <div class=\"row center-align\">
        <div class=\"col s6 offset-s3\">
            {{ form_row(form.author) }}
        </div>
    </div>
    {# Motif du 05/02/18 #}
    <div class=\"container\">
        {% if form.published is defined %}
            <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\"/>
            <label for=\"filled-in-box\">Publier</label>
            {{ form_row(form.published) }}
        {% endif %}
    </div>

    {# Géréation des champs Image 02/02/18 #}
    {{ form_row (form.image) }}

    {# Génération des champs Categories 02/02/18 #}
    {{ form_row(form.categories) }}
    <a href=\"#\" id=\"add_category\" class=\"waves-effect waves-light btn-large blue\">Ajouter une catégorie</a>

    {{ form_widget(form.startdate, {'attr': {'value' :'', 'placeholder' :'Début disponibilité'}}) }}
    <input type=\"text\" class=\"datepicker\">

    {{ form_row(form.enddate) }}
    <input type=\"date\" class=\"datepicker\">

    {# Pour l'input pas de label ou error, on affiche simplement le widget #}
    {{ form_widget(form.save, {'attr': {'class': 'waves-effect waves-light btn-large blue'}}) }}

    {# Génération des autres champs par encore écrits. Champs CSRF (automatique avec Symfony) et les champs type \"hidden\" #}
    {{ form_rest(form) }}
    {# Fermeture de la balise <form> du form HTML #}
    {{ form_end(form) }}
</div>

", "BCPlatformBundle:Advert:form.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
