<?php

/* BCCoreBundle::layout.html.twig */
class __TwigTemplate_7a57b4dbc5722974340efef7f7d32b2ccec6e1bd78bac700d62af1e1b266ddb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'connexion' => array($this, 'block_connexion'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe0a6f7bf361d2004e39059e08472651db8e065972c1c1728042b95acb71933a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0a6f7bf361d2004e39059e08472651db8e065972c1c1728042b95acb71933a->enter($__internal_fe0a6f7bf361d2004e39059e08472651db8e065972c1c1728042b95acb71933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle::layout.html.twig"));

        $__internal_10841814e107df7365b45319219a3e125170e1e1e2e0f73075c7a6b70b8a0bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10841814e107df7365b45319219a3e125170e1e1e2e0f73075c7a6b70b8a0bf7->enter($__internal_10841814e107df7365b45319219a3e125170e1e1e2e0f73075c7a6b70b8a0bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>

<body>
    <main>
";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "
<div class=\"row\">
    <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_home");
        echo "\">Accueil</a></li>
            ";
        // line 37
        echo "            ";
        // line 38
        echo "            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_add");
        echo "\">Ajouter une annonce</a></li>
            ";
        // line 40
        echo "            ";
        // line 41
        echo "        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BCPlatformBundle:Advert:menu", array("limit" => 4)));
        echo "

        ";
        // line 46
        $this->displayBlock('connexion', $context, $blocks);
        // line 56
        echo "    </div>
    <div id=\"content\" class=\"col-md-9\">
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "    </div>
    <hr>
    ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "</div>
    </main>
";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "</body>
</html>";
        
        $__internal_fe0a6f7bf361d2004e39059e08472651db8e065972c1c1728042b95acb71933a->leave($__internal_fe0a6f7bf361d2004e39059e08472651db8e065972c1c1728042b95acb71933a_prof);

        
        $__internal_10841814e107df7365b45319219a3e125170e1e1e2e0f73075c7a6b70b8a0bf7->leave($__internal_10841814e107df7365b45319219a3e125170e1e1e2e0f73075c7a6b70b8a0bf7_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_187225202ea61069d3a9a2389c761c672a8682266d226370f5fbb0c835629b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187225202ea61069d3a9a2389c761c672a8682266d226370f5fbb0c835629b2c->enter($__internal_187225202ea61069d3a9a2389c761c672a8682266d226370f5fbb0c835629b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d164a561db31284dc5705b1f5f75c73f962df4d37e6835a4cca39774d2764e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d164a561db31284dc5705b1f5f75c73f962df4d37e6835a4cca39774d2764e8->enter($__internal_8d164a561db31284dc5705b1f5f75c73f962df4d37e6835a4cca39774d2764e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NaïtUp Share";
        
        $__internal_8d164a561db31284dc5705b1f5f75c73f962df4d37e6835a4cca39774d2764e8->leave($__internal_8d164a561db31284dc5705b1f5f75c73f962df4d37e6835a4cca39774d2764e8_prof);

        
        $__internal_187225202ea61069d3a9a2389c761c672a8682266d226370f5fbb0c835629b2c->leave($__internal_187225202ea61069d3a9a2389c761c672a8682266d226370f5fbb0c835629b2c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51aa0d9d4ba72eb1ff1b93b44b6de661da34cd2238f44da6791f5b29361dc39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51aa0d9d4ba72eb1ff1b93b44b6de661da34cd2238f44da6791f5b29361dc39f->enter($__internal_51aa0d9d4ba72eb1ff1b93b44b6de661da34cd2238f44da6791f5b29361dc39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8abae761bfb21ac58a0ff0fd8997c7aa4919fe070c12135d15e444b54308fa75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abae761bfb21ac58a0ff0fd8997c7aa4919fe070c12135d15e444b54308fa75->enter($__internal_8abae761bfb21ac58a0ff0fd8997c7aa4919fe070c12135d15e444b54308fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mainstyle.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/roboto"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    ";
        
        $__internal_8abae761bfb21ac58a0ff0fd8997c7aa4919fe070c12135d15e444b54308fa75->leave($__internal_8abae761bfb21ac58a0ff0fd8997c7aa4919fe070c12135d15e444b54308fa75_prof);

        
        $__internal_51aa0d9d4ba72eb1ff1b93b44b6de661da34cd2238f44da6791f5b29361dc39f->leave($__internal_51aa0d9d4ba72eb1ff1b93b44b6de661da34cd2238f44da6791f5b29361dc39f_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_a50afe7a26e5e1d7e229b4b7493de16f898d69c1337ec2c96907b7fa66f5b310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50afe7a26e5e1d7e229b4b7493de16f898d69c1337ec2c96907b7fa66f5b310->enter($__internal_a50afe7a26e5e1d7e229b4b7493de16f898d69c1337ec2c96907b7fa66f5b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ba1ebc399a99d37ef09a32563b975cfd636817cf5fa3a9c1004849aea761bfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1ebc399a99d37ef09a32563b975cfd636817cf5fa3a9c1004849aea761bfa7->enter($__internal_ba1ebc399a99d37ef09a32563b975cfd636817cf5fa3a9c1004849aea761bfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "    <nav id=\"navheader\">
        <div class=\"nav-wrapper\">
            <a href=\"#\" class=\"brand-logo center\">
                <img src=\"https://naitup.com/wp-content/uploads/2017/06/nu.png\" id=\"mainlogo\"/>
            </a>
            <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\"></ul>
        </div>
    </nav>
";
        
        $__internal_ba1ebc399a99d37ef09a32563b975cfd636817cf5fa3a9c1004849aea761bfa7->leave($__internal_ba1ebc399a99d37ef09a32563b975cfd636817cf5fa3a9c1004849aea761bfa7_prof);

        
        $__internal_a50afe7a26e5e1d7e229b4b7493de16f898d69c1337ec2c96907b7fa66f5b310->leave($__internal_a50afe7a26e5e1d7e229b4b7493de16f898d69c1337ec2c96907b7fa66f5b310_prof);

    }

    // line 46
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_21ea7757d318b561f78900efbb6638831ffe811602a4ab4debae73e3dc59b926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ea7757d318b561f78900efbb6638831ffe811602a4ab4debae73e3dc59b926->enter($__internal_21ea7757d318b561f78900efbb6638831ffe811602a4ab4debae73e3dc59b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_b67410919ce92857e9a5dde1e627f979a11b54d1da34d58edce085f64295d4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67410919ce92857e9a5dde1e627f979a11b54d1da34d58edce085f64295d4f5->enter($__internal_b67410919ce92857e9a5dde1e627f979a11b54d1da34d58edce085f64295d4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 47
        echo "            <h3>Utilisateurs</h3>
            ";
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "                Connecté en tant que ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
                <br>
                <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 53
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            ";
        }
        // line 55
        echo "        ";
        
        $__internal_b67410919ce92857e9a5dde1e627f979a11b54d1da34d58edce085f64295d4f5->leave($__internal_b67410919ce92857e9a5dde1e627f979a11b54d1da34d58edce085f64295d4f5_prof);

        
        $__internal_21ea7757d318b561f78900efbb6638831ffe811602a4ab4debae73e3dc59b926->leave($__internal_21ea7757d318b561f78900efbb6638831ffe811602a4ab4debae73e3dc59b926_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c1eac5ec369e3d4a3f637e3bac9de52f3610730af7c560642479384525defd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c1eac5ec369e3d4a3f637e3bac9de52f3610730af7c560642479384525defd->enter($__internal_f9c1eac5ec369e3d4a3f637e3bac9de52f3610730af7c560642479384525defd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c2cf30e808181ab080fc0feab64e6ed28f139a43ab63f042498850a145aa71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2cf30e808181ab080fc0feab64e6ed28f139a43ab63f042498850a145aa71e->enter($__internal_8c2cf30e808181ab080fc0feab64e6ed28f139a43ab63f042498850a145aa71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "        ";
        
        $__internal_8c2cf30e808181ab080fc0feab64e6ed28f139a43ab63f042498850a145aa71e->leave($__internal_8c2cf30e808181ab080fc0feab64e6ed28f139a43ab63f042498850a145aa71e_prof);

        
        $__internal_f9c1eac5ec369e3d4a3f637e3bac9de52f3610730af7c560642479384525defd->leave($__internal_f9c1eac5ec369e3d4a3f637e3bac9de52f3610730af7c560642479384525defd_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ba1a663cedcbfc721410419c697b98a5c4a7dabd5216c5f51e09c5c279c8b3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1a663cedcbfc721410419c697b98a5c4a7dabd5216c5f51e09c5c279c8b3fe->enter($__internal_ba1a663cedcbfc721410419c697b98a5c4a7dabd5216c5f51e09c5c279c8b3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_231bfd2f268dc07702dbb09da135c2afd47deef8bb48274b0e4a3e32f204d705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231bfd2f268dc07702dbb09da135c2afd47deef8bb48274b0e4a3e32f204d705->enter($__internal_231bfd2f268dc07702dbb09da135c2afd47deef8bb48274b0e4a3e32f204d705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "        <footer class=\"page-footer\" id=\"mainfooter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">NaïtUp</h5>
                        <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer
                            content.</p>
                    </div>
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">Liens utiles</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/conditions-generales-de-vente\">Conditions générales de
                                    ventes</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/mentions-legales\">Mentions
                                    légales</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/avantages/\">Avantages</a>
                            </li>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/ou-voir-une-hussarde-achat-location-demonstration/\">Nos
                                    magasins</a></li>
                        </ul>
                    </div>
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">Liens utiles</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/conditions-generales-de-vente\">Conditions générales de
                                    ventes</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/mentions-legales\">Mentions
                                    légales</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/avantages/\">Avantages</a>
                            </li>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/ou-voir-une-hussarde-achat-location-demonstration/\">Nos
                                    magasins</a></li>
                        </ul>
                    </div>
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">Liens utiles</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/conditions-generales-de-vente\">Conditions générales de
                                    ventes</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/mentions-legales\">Mentions
                                    légales</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/avantages/\">Avantages</a>
                            </li>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/ou-voir-une-hussarde-achat-location-demonstration/\">Nos
                                    magasins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\" id=\"secondfooter\">
                <div class=\"container\">
                    © 2018 Copyright NaïtUp
                </div>
            </div>
        </footer>
    ";
        
        $__internal_231bfd2f268dc07702dbb09da135c2afd47deef8bb48274b0e4a3e32f204d705->leave($__internal_231bfd2f268dc07702dbb09da135c2afd47deef8bb48274b0e4a3e32f204d705_prof);

        
        $__internal_ba1a663cedcbfc721410419c697b98a5c4a7dabd5216c5f51e09c5c279c8b3fe->leave($__internal_ba1a663cedcbfc721410419c697b98a5c4a7dabd5216c5f51e09c5c279c8b3fe_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a4a01c0753e46ff2eb0d127fe32baae6e948eaa9caf28e149e14362b3c12b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4a01c0753e46ff2eb0d127fe32baae6e948eaa9caf28e149e14362b3c12b15->enter($__internal_0a4a01c0753e46ff2eb0d127fe32baae6e948eaa9caf28e149e14362b3c12b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fa48c536ce07fc86e59f64e4a990ffbce8ba9a42ec60bd117e0a99f51ba8a0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa48c536ce07fc86e59f64e4a990ffbce8ba9a42ec60bd117e0a99f51ba8a0c7->enter($__internal_fa48c536ce07fc86e59f64e4a990ffbce8ba9a42ec60bd117e0a99f51ba8a0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery3.2.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fa48c536ce07fc86e59f64e4a990ffbce8ba9a42ec60bd117e0a99f51ba8a0c7->leave($__internal_fa48c536ce07fc86e59f64e4a990ffbce8ba9a42ec60bd117e0a99f51ba8a0c7_prof);

        
        $__internal_0a4a01c0753e46ff2eb0d127fe32baae6e948eaa9caf28e149e14362b3c12b15->leave($__internal_0a4a01c0753e46ff2eb0d127fe32baae6e948eaa9caf28e149e14362b3c12b15_prof);

    }

    public function getTemplateName()
    {
        return "BCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 130,  346 => 129,  341 => 128,  332 => 127,  261 => 63,  252 => 62,  242 => 59,  233 => 58,  223 => 55,  217 => 53,  212 => 51,  206 => 49,  204 => 48,  201 => 47,  192 => 46,  174 => 21,  165 => 20,  152 => 13,  148 => 12,  143 => 11,  134 => 10,  116 => 8,  105 => 132,  103 => 127,  99 => 125,  97 => 62,  93 => 60,  91 => 58,  87 => 56,  85 => 46,  80 => 44,  75 => 41,  73 => 40,  68 => 38,  66 => 37,  62 => 35,  55 => 30,  53 => 20,  47 => 16,  45 => 10,  40 => 8,  32 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Vue du layout général de NaitUp Share 05/01/18 #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}NaïtUp Share{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/mainstyle.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('fonts/roboto') }}\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
    <main>
{% block header %}
    <nav id=\"navheader\">
        <div class=\"nav-wrapper\">
            <a href=\"#\" class=\"brand-logo center\">
                <img src=\"https://naitup.com/wp-content/uploads/2017/06/nu.png\" id=\"mainlogo\"/>
            </a>
            <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\"></ul>
        </div>
    </nav>
{% endblock header %}

<div class=\"row\">
    <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"{{ path('bc_platform_home') }}\">Accueil</a></li>
            {# test secu du 09/02/01 #}
            {#{% if is_granted('ROLE_AUTEUR') %}#}
            <li><a href=\"{{ path('bc_platform_add') }}\">Ajouter une annonce</a></li>
            {#{% endif %}#}
            {# test OK #}
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"BCPlatformBundle:Advert:menu\", {'limit': 4})) }}

        {% block connexion %}
            <h3>Utilisateurs</h3>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                Connecté en tant que {{ app.user.username }}
                <br>
                <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            {% endif %}
        {% endblock connexion %}
    </div>
    <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
    </div>
    <hr>
    {% block footer %}
        <footer class=\"page-footer\" id=\"mainfooter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">NaïtUp</h5>
                        <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer
                            content.</p>
                    </div>
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">Liens utiles</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/conditions-generales-de-vente\">Conditions générales de
                                    ventes</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/mentions-legales\">Mentions
                                    légales</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/avantages/\">Avantages</a>
                            </li>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/ou-voir-une-hussarde-achat-location-demonstration/\">Nos
                                    magasins</a></li>
                        </ul>
                    </div>
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">Liens utiles</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/conditions-generales-de-vente\">Conditions générales de
                                    ventes</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/mentions-legales\">Mentions
                                    légales</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/avantages/\">Avantages</a>
                            </li>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/ou-voir-une-hussarde-achat-location-demonstration/\">Nos
                                    magasins</a></li>
                        </ul>
                    </div>
                    <div class=\"col s3\">
                        <h5 class=\"white-text\">Liens utiles</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/conditions-generales-de-vente\">Conditions générales de
                                    ventes</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/mentions-legales\">Mentions
                                    légales</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"https://naitup.com/avantages/\">Avantages</a>
                            </li>
                            <li><a class=\"grey-text text-lighten-3\"
                                   href=\"https://naitup.com/ou-voir-une-hussarde-achat-location-demonstration/\">Nos
                                    magasins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\" id=\"secondfooter\">
                <div class=\"container\">
                    © 2018 Copyright NaïtUp
                </div>
            </div>
        </footer>
    {% endblock footer %}
</div>
    </main>
{% block javascripts %}
    <script src=\"{{ asset('js/jquery3.2.1.js') }}\"></script>
    <script src=\"{{ asset('js/materialize.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
</body>
</html>", "BCCoreBundle::layout.html.twig", "/var/www/html/NU/src/BC/CoreBundle/Resources/views/layout.html.twig");
    }
}
