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
        $__internal_c1c6b8dae0ebdabfbff77454509fc7dbbcabf90a24060ffcdd34dcbe5d2e9ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c6b8dae0ebdabfbff77454509fc7dbbcabf90a24060ffcdd34dcbe5d2e9ccf->enter($__internal_c1c6b8dae0ebdabfbff77454509fc7dbbcabf90a24060ffcdd34dcbe5d2e9ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:form.html.twig"));

        $__internal_245b9e6a5c5ad50e9a9b6d5295027cb8ae1c8db6006271758b5607ecd0428ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245b9e6a5c5ad50e9a9b6d5295027cb8ae1c8db6006271758b5607ecd0428ae2->enter($__internal_245b9e6a5c5ad50e9a9b6d5295027cb8ae1c8db6006271758b5607ecd0428ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "<div class=\"row center-align\">
    <h3>Créer une annonce</h3>
</div>
";
        // line 6
        echo "<div class=\"row center-align\">
    ";
        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 11
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'errors');
        echo "
    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "        ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "        ";
        // line 19
        echo "        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "title", array()), 'label', array("label" => "Le titre de votre annonce"));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "title", array()), 'widget');
        echo "
            </div>
        </div>

    ";
        // line 35
        echo "    <div class=\"form-group\">
        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "content", array()), 'label', array("label" => "Description de vote annonce"));
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "content", array()), 'errors');
        echo "
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "content", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row center-align\">
        <div class=\"col s6 offset-s3\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "author", array()), 'row');
        echo "
        </div>
    </div>
    ";
        // line 50
        echo "    ";
        // line 51
        echo "        ";
        // line 52
        echo "            ";
        // line 53
        echo "            ";
        // line 54
        echo "            ";
        // line 55
        echo "        ";
        // line 56
        echo "    ";
        // line 57
        echo "
    ";
        // line 59
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "image", array()), 'row');
        echo "

    ";
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "
    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "startdate", array()), 'widget');
        echo "
    ";
        // line 69
        echo "        ";
        // line 70
        echo "         ";
        // line 71
        echo "        ";
        // line 72
        echo "    ";
        // line 73
        echo "
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), "enddate", array()), 'widget');
        echo "
    ";
        // line 76
        echo "        ";
        // line 77
        echo "            ";
        // line 78
        echo "        ";
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "city", array()), 'widget', array("attr" => array("class" => "placeholder", "label" => "Ville")));
        echo "

    ";
        // line 83
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "waves-effect waves-light btn", "label" => "SAVE")));
        echo "

    ";
        // line 86
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), 'rest');
        echo "
    ";
        // line 88
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_c1c6b8dae0ebdabfbff77454509fc7dbbcabf90a24060ffcdd34dcbe5d2e9ccf->leave($__internal_c1c6b8dae0ebdabfbff77454509fc7dbbcabf90a24060ffcdd34dcbe5d2e9ccf_prof);

        
        $__internal_245b9e6a5c5ad50e9a9b6d5295027cb8ae1c8db6006271758b5607ecd0428ae2->leave($__internal_245b9e6a5c5ad50e9a9b6d5295027cb8ae1c8db6006271758b5607ecd0428ae2_prof);

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
        return array (  189 => 88,  184 => 86,  178 => 83,  172 => 80,  170 => 79,  168 => 78,  166 => 77,  164 => 76,  160 => 74,  157 => 73,  155 => 72,  153 => 71,  151 => 70,  149 => 69,  145 => 67,  142 => 66,  140 => 65,  138 => 64,  136 => 63,  134 => 62,  128 => 59,  125 => 57,  123 => 56,  121 => 55,  119 => 54,  117 => 53,  115 => 52,  113 => 51,  111 => 50,  105 => 46,  96 => 40,  92 => 39,  88 => 38,  83 => 35,  75 => 30,  67 => 25,  61 => 21,  57 => 19,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  47 => 14,  45 => 13,  40 => 11,  36 => 9,  33 => 8,  30 => 6,  25 => 2,);
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

    {{ form_start(form) }}
    {# Erreurs générales du form #}
    {{ form_errors(form) }}
    {# Génération du label + error + widget pour un champ #}
    {# Motif du 05/02/18 #}
    {#{% if form.date is defined %}#}
        {#{{ form_row(form.date) }}#}
    {#{% endif %}#}
    {# Génération manuelle et éclatée #}
        {# Génération du label #}
        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                {{ form_label(form.title, \"Le titre de votre annonce\") }}
            </div>
        </div>
        {# Affichage des erreurs pour ce champ précis #}
        {{ form_errors(form.title) }}

        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                {# Génération de l'input #}
                {{ form_widget(form.title) }}
            </div>
        </div>

    {# Génération du champs content #}
    <div class=\"form-group\">
        <div class=\"row center-align\">
            <div class=\"col s6 offset-s3\">
                {{ form_label(form.content, \"Description de vote annonce\") }}
        {{ form_errors(form.content) }}
            {{ form_widget(form.content) }}
            </div>
        </div>
    </div>
    <div class=\"row center-align\">
        <div class=\"col s6 offset-s3\">
            {{ form_row(form.author) }}
        </div>
    </div>
    {# Motif du 05/02/18 #}
    {#<div class=\"container\">#}
        {#{% if form.published is defined %}#}
            {#<input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\"/>#}
            {#<label for=\"filled-in-box\">Publier</label>#}
            {#{{ form_row(form.published) }}#}
        {#{% endif %}#}
    {#</div>#}

    {# Géréation des champs Image 02/02/18 #}
    {{ form_row (form.image) }}

    {# Génération des champs Categories 02/02/18 #}
    {#{{ form_row(form.categories) }}#}
    {#<a href=\"#\" id=\"add_category\" class=\"waves-effect waves-light btn-large blue\">#}
        {#<i class=\"material-icons left\">add</i>#}
        {#Ajouter une catégorie</a>#}

    {{ form_widget(form.startdate) }}
    {#<div class=\"row center-align\">#}
        {#<div class=\"col s6 offset-s3\">#}
         {#<input type=\"text\" class=\"datepicker\" value=\"\">#}
        {#</div>#}
    {#</div>#}

    {{ form_widget(form.enddate) }}
    {#<div class=\"row center-align\">#}
        {#<div class=\"col s6 offset-s3\">#}
            {#<input type=\"text\" class=\"datepicker\" value=\"\">#}
        {#</div>#}
    {#</div>#}
    {{ form_widget(form.city, {'attr': {'class': 'placeholder', 'label': 'Ville'}}) }}

    {# Pour l'input pas de label ou error, on affiche simplement le widget #}
    {{ form_widget(form.save, {'attr': {'class': 'waves-effect waves-light btn', 'label': 'SAVE'}}) }}

    {# Génération des autres champs par encore écrits. Champs CSRF (automatique avec Symfony) et les champs type \"hidden\" #}
    {{ form_rest(form) }}
    {# Fermeture de la balise <form> du form HTML #}
    {{ form_end(form) }}
</div>

", "BCPlatformBundle:Advert:form.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
