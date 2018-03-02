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
            'toto' => array($this, 'block_toto'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66aecd77d3aaba062a348a9534ee8a4e5b39513701df718278bbf4af7ae34ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66aecd77d3aaba062a348a9534ee8a4e5b39513701df718278bbf4af7ae34ff9->enter($__internal_66aecd77d3aaba062a348a9534ee8a4e5b39513701df718278bbf4af7ae34ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle::layout.html.twig"));

        $__internal_2ce1f28358a75ab0fb8a8bc1ce34a61996574e6a16a249f9394f228072518834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce1f28358a75ab0fb8a8bc1ce34a61996574e6a16a249f9394f228072518834->enter($__internal_2ce1f28358a75ab0fb8a8bc1ce34a61996574e6a16a249f9394f228072518834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCCoreBundle::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    ";
        // line 21
        echo "    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\"
            integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
            crossorigin=\"\"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.js'></script>


</head>

<body>
<main>
    ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "    <div class=\"row valign-wrapper\" id=\"sidemenu\">
        <div class=\"col s3 center-align\">
            <ul id=\"dropdown2\" class=\"dropdown-content\">
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_home");
        echo "\"><span class=\"black-text\">Accueil</span></a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_add");
        echo "\"><span class=\"black-text\">Ajouter une annonce</span></a></li>
                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"><span class=\"black-text\">Créer un compte</span></a></li>
            </ul>
            <a class=\"btn-large dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">MENU<i class=\"material-icons right\">arrow_drop_down</i></a>
            ";
        // line 73
        echo "                ";
        // line 74
        echo "                ";
        // line 75
        echo "                ";
        // line 76
        echo "                ";
        // line 77
        echo "                ";
        // line 78
        echo "                ";
        // line 79
        echo "            ";
        // line 80
        echo "        </div>
        ";
        // line 81
        $this->displayBlock('toto', $context, $blocks);
        // line 88
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "        </div>
        ";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 160
        echo "    </div>
</main>
";
        // line 162
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "</body>
</html>";
        
        $__internal_66aecd77d3aaba062a348a9534ee8a4e5b39513701df718278bbf4af7ae34ff9->leave($__internal_66aecd77d3aaba062a348a9534ee8a4e5b39513701df718278bbf4af7ae34ff9_prof);

        
        $__internal_2ce1f28358a75ab0fb8a8bc1ce34a61996574e6a16a249f9394f228072518834->leave($__internal_2ce1f28358a75ab0fb8a8bc1ce34a61996574e6a16a249f9394f228072518834_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01152105e7a2f100575339310f99a21a651c0874bff54177758f604ddd5340a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01152105e7a2f100575339310f99a21a651c0874bff54177758f604ddd5340a4->enter($__internal_01152105e7a2f100575339310f99a21a651c0874bff54177758f604ddd5340a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_645709917ea0a9b9a57bd1fb9265020c8ad1b4d2c76afe2a907e4ca979b61eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645709917ea0a9b9a57bd1fb9265020c8ad1b4d2c76afe2a907e4ca979b61eaa->enter($__internal_645709917ea0a9b9a57bd1fb9265020c8ad1b4d2c76afe2a907e4ca979b61eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NaïtUp Share";
        
        $__internal_645709917ea0a9b9a57bd1fb9265020c8ad1b4d2c76afe2a907e4ca979b61eaa->leave($__internal_645709917ea0a9b9a57bd1fb9265020c8ad1b4d2c76afe2a907e4ca979b61eaa_prof);

        
        $__internal_01152105e7a2f100575339310f99a21a651c0874bff54177758f604ddd5340a4->leave($__internal_01152105e7a2f100575339310f99a21a651c0874bff54177758f604ddd5340a4_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3590f9b2e5e6da7c51cdf082ed3d3eca06918ddaf0ab3b8e7da61770aac412c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3590f9b2e5e6da7c51cdf082ed3d3eca06918ddaf0ab3b8e7da61770aac412c->enter($__internal_b3590f9b2e5e6da7c51cdf082ed3d3eca06918ddaf0ab3b8e7da61770aac412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d648876eae44dcd5daf919c733307fad6da04fc6fd5498d1c38593e68f6a10cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d648876eae44dcd5daf919c733307fad6da04fc6fd5498d1c38593e68f6a10cb->enter($__internal_d648876eae44dcd5daf919c733307fad6da04fc6fd5498d1c38593e68f6a10cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mainstyle.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/roboto"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        // line 15
        echo "        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
              integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
              crossorigin=\"\"/>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.css' rel='stylesheet' />
    ";
        
        $__internal_d648876eae44dcd5daf919c733307fad6da04fc6fd5498d1c38593e68f6a10cb->leave($__internal_d648876eae44dcd5daf919c733307fad6da04fc6fd5498d1c38593e68f6a10cb_prof);

        
        $__internal_b3590f9b2e5e6da7c51cdf082ed3d3eca06918ddaf0ab3b8e7da61770aac412c->leave($__internal_b3590f9b2e5e6da7c51cdf082ed3d3eca06918ddaf0ab3b8e7da61770aac412c_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_851628ea8079a13b255ceb86f60fe100a85070e30acc3cbe661874bedb7ea814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851628ea8079a13b255ceb86f60fe100a85070e30acc3cbe661874bedb7ea814->enter($__internal_851628ea8079a13b255ceb86f60fe100a85070e30acc3cbe661874bedb7ea814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6af402dc49a2b668ba4e39f92a278b159cd87ff4e971ebcd8403f6791d4b06ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af402dc49a2b668ba4e39f92a278b159cd87ff4e971ebcd8403f6791d4b06ac->enter($__internal_6af402dc49a2b668ba4e39f92a278b159cd87ff4e971ebcd8403f6791d4b06ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "        <nav id=\"navheader\">
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo left\">
                    <img src=\"https://naitup.com/wp-content/uploads/2017/06/nu.png\" id=\"mainlogo\"/>
                </a>
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    ";
        // line 38
        $this->displayBlock('connexion', $context, $blocks);
        // line 60
        echo "                </ul>
            </div>
        </nav>
    ";
        
        $__internal_6af402dc49a2b668ba4e39f92a278b159cd87ff4e971ebcd8403f6791d4b06ac->leave($__internal_6af402dc49a2b668ba4e39f92a278b159cd87ff4e971ebcd8403f6791d4b06ac_prof);

        
        $__internal_851628ea8079a13b255ceb86f60fe100a85070e30acc3cbe661874bedb7ea814->leave($__internal_851628ea8079a13b255ceb86f60fe100a85070e30acc3cbe661874bedb7ea814_prof);

    }

    // line 38
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_73cd1757afc73822f1485b9ab3052998734d9225658852d53ea671bff5fbde23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cd1757afc73822f1485b9ab3052998734d9225658852d53ea671bff5fbde23->enter($__internal_73cd1757afc73822f1485b9ab3052998734d9225658852d53ea671bff5fbde23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_6420c2abfdaf362788a5d7722a63c4c9b1301a565bd180805eba6d3a7032ef87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6420c2abfdaf362788a5d7722a63c4c9b1301a565bd180805eba6d3a7032ef87->enter($__internal_6420c2abfdaf362788a5d7722a63c4c9b1301a565bd180805eba6d3a7032ef87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 39
        echo "                        <li>
                        ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                            <span class=\"black-text\"><i
                                        class=\"material-icons left\">verified_user</i>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                            ";
            // line 44
            echo "                            <li>
                                <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><span class=\"black-text\">Vos infos</span></a>
                             </li>
                            <li>
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"black-text\">Modifier vos paramètres</span>
                            </li>
                            <li>
                            <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"black-text\"><i
                                            class=\"material-icons left\">assignment_ind</i>Déconnexion</span></a>
                            </li>
                        ";
        } else {
            // line 55
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><span class=\"black-text\"><i
                                                class=\"material-icons left\">assignment_ind</i>Connexion</span></a></li>
                            </li>
                        ";
        }
        // line 59
        echo "                    ";
        
        $__internal_6420c2abfdaf362788a5d7722a63c4c9b1301a565bd180805eba6d3a7032ef87->leave($__internal_6420c2abfdaf362788a5d7722a63c4c9b1301a565bd180805eba6d3a7032ef87_prof);

        
        $__internal_73cd1757afc73822f1485b9ab3052998734d9225658852d53ea671bff5fbde23->leave($__internal_73cd1757afc73822f1485b9ab3052998734d9225658852d53ea671bff5fbde23_prof);

    }

    // line 81
    public function block_toto($context, array $blocks = array())
    {
        $__internal_2c4303ee6bcb2dea5a681deac1a529c7a524f18a22a29cd4d5f7e5a33381cfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4303ee6bcb2dea5a681deac1a529c7a524f18a22a29cd4d5f7e5a33381cfa4->enter($__internal_2c4303ee6bcb2dea5a681deac1a529c7a524f18a22a29cd4d5f7e5a33381cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toto"));

        $__internal_a964b688ed5a567234ef27be7928c849e00c296a499096a44ba78c448925a445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a964b688ed5a567234ef27be7928c849e00c296a499096a44ba78c448925a445->enter($__internal_a964b688ed5a567234ef27be7928c849e00c296a499096a44ba78c448925a445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toto"));

        // line 82
        echo "        <div class=\"col s9 center-align\" id=\"lastsadverts\">
                <h4>Dernières annonces</h4>
            <span class=\"black-text\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BCPlatformBundle:Advert:menu", array("limit" => 4)));
        echo "</span>
        </div>
    </div>
        ";
        
        $__internal_a964b688ed5a567234ef27be7928c849e00c296a499096a44ba78c448925a445->leave($__internal_a964b688ed5a567234ef27be7928c849e00c296a499096a44ba78c448925a445_prof);

        
        $__internal_2c4303ee6bcb2dea5a681deac1a529c7a524f18a22a29cd4d5f7e5a33381cfa4->leave($__internal_2c4303ee6bcb2dea5a681deac1a529c7a524f18a22a29cd4d5f7e5a33381cfa4_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_7868e8e5e9ff080e2f13a10aacbca820474dbbde4a81e17625464cfe1f2fcab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7868e8e5e9ff080e2f13a10aacbca820474dbbde4a81e17625464cfe1f2fcab9->enter($__internal_7868e8e5e9ff080e2f13a10aacbca820474dbbde4a81e17625464cfe1f2fcab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cd2ab0e20dba959afd8043bfa04e6231f13da02a07880aef99f4665411fbbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd2ab0e20dba959afd8043bfa04e6231f13da02a07880aef99f4665411fbbb1->enter($__internal_1cd2ab0e20dba959afd8043bfa04e6231f13da02a07880aef99f4665411fbbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "            ";
        
        $__internal_1cd2ab0e20dba959afd8043bfa04e6231f13da02a07880aef99f4665411fbbb1->leave($__internal_1cd2ab0e20dba959afd8043bfa04e6231f13da02a07880aef99f4665411fbbb1_prof);

        
        $__internal_7868e8e5e9ff080e2f13a10aacbca820474dbbde4a81e17625464cfe1f2fcab9->leave($__internal_7868e8e5e9ff080e2f13a10aacbca820474dbbde4a81e17625464cfe1f2fcab9_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        $__internal_866a1f400ba301ca32f4e0a35dbfc05cb37799caf5765ffbb36435b87a6aa9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866a1f400ba301ca32f4e0a35dbfc05cb37799caf5765ffbb36435b87a6aa9f1->enter($__internal_866a1f400ba301ca32f4e0a35dbfc05cb37799caf5765ffbb36435b87a6aa9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_53776cfb99c288dcd3e9ea60fc3b6dcb00551b75dcde815a3eefb5382b5da8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53776cfb99c288dcd3e9ea60fc3b6dcb00551b75dcde815a3eefb5382b5da8aa->enter($__internal_53776cfb99c288dcd3e9ea60fc3b6dcb00551b75dcde815a3eefb5382b5da8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        echo "            <footer class=\"page-footer\" id=\"mainfooter\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col s3\">
                            <h5 class=\"white-text\">NaïtUp</h5>
                            <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your
                                footer
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
                                <li><a class=\"grey-text text-lighten-3\"
                                       href=\"https://naitup.com/avantages/\">Avantages</a>
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
                                <li><a class=\"grey-text text-lighten-3\"
                                       href=\"https://naitup.com/avantages/\">Avantages</a>
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
                                <li><a class=\"grey-text text-lighten-3\"
                                       href=\"https://naitup.com/avantages/\">Avantages</a>
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
        
        $__internal_53776cfb99c288dcd3e9ea60fc3b6dcb00551b75dcde815a3eefb5382b5da8aa->leave($__internal_53776cfb99c288dcd3e9ea60fc3b6dcb00551b75dcde815a3eefb5382b5da8aa_prof);

        
        $__internal_866a1f400ba301ca32f4e0a35dbfc05cb37799caf5765ffbb36435b87a6aa9f1->leave($__internal_866a1f400ba301ca32f4e0a35dbfc05cb37799caf5765ffbb36435b87a6aa9f1_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_767bb522b2aca2f616042a7ac4d3b763ee9bb8261bab9c0b2494f879fe9fe64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767bb522b2aca2f616042a7ac4d3b763ee9bb8261bab9c0b2494f879fe9fe64a->enter($__internal_767bb522b2aca2f616042a7ac4d3b763ee9bb8261bab9c0b2494f879fe9fe64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32f1ecfed6c1d5d927240d1a6284e4585c53e3d55d864f0e534be33efd8e9690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f1ecfed6c1d5d927240d1a6284e4585c53e3d55d864f0e534be33efd8e9690->enter($__internal_32f1ecfed6c1d5d927240d1a6284e4585c53e3d55d864f0e534be33efd8e9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery3.2.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 167
        echo "        ";
        // line 168
        echo "        ";
        // line 169
        echo "            ";
        // line 170
        echo "            ";
        // line 171
        echo "        ";
        // line 172
        echo "    ";
        
        $__internal_32f1ecfed6c1d5d927240d1a6284e4585c53e3d55d864f0e534be33efd8e9690->leave($__internal_32f1ecfed6c1d5d927240d1a6284e4585c53e3d55d864f0e534be33efd8e9690_prof);

        
        $__internal_767bb522b2aca2f616042a7ac4d3b763ee9bb8261bab9c0b2494f879fe9fe64a->leave($__internal_767bb522b2aca2f616042a7ac4d3b763ee9bb8261bab9c0b2494f879fe9fe64a_prof);

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
        return array (  439 => 172,  437 => 171,  435 => 170,  433 => 169,  431 => 168,  429 => 167,  425 => 165,  421 => 164,  416 => 163,  407 => 162,  332 => 94,  323 => 93,  313 => 91,  304 => 90,  290 => 84,  286 => 82,  277 => 81,  267 => 59,  259 => 55,  252 => 51,  246 => 48,  240 => 45,  237 => 44,  233 => 42,  230 => 41,  228 => 40,  225 => 39,  216 => 38,  203 => 60,  201 => 38,  193 => 32,  184 => 31,  170 => 15,  165 => 12,  161 => 11,  156 => 10,  147 => 9,  129 => 7,  118 => 174,  116 => 162,  112 => 160,  110 => 93,  107 => 92,  105 => 90,  101 => 88,  99 => 81,  96 => 80,  94 => 79,  92 => 78,  90 => 77,  88 => 76,  86 => 75,  84 => 74,  82 => 73,  76 => 69,  72 => 68,  68 => 67,  63 => 64,  61 => 31,  49 => 21,  47 => 20,  45 => 9,  40 => 7,  33 => 2,);
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
        {# ajout map #}
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
              integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
              crossorigin=\"\"/>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.css' rel='stylesheet' />
    {% endblock %}
    {# suite ajout map #}
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\"
            integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
            crossorigin=\"\"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.js'></script>


</head>

<body>
<main>
    {% block header %}
        <nav id=\"navheader\">
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo left\">
                    <img src=\"https://naitup.com/wp-content/uploads/2017/06/nu.png\" id=\"mainlogo\"/>
                </a>
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    {% block connexion %}
                        <li>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <span class=\"black-text\"><i
                                        class=\"material-icons left\">verified_user</i>{{ app.user.username }}</span>
                            {# test vu profil et resetting#}
                            <li>
                                <a href=\"{{ path('fos_user_profile_show') }}\"><span class=\"black-text\">Vos infos</span></a>
                             </li>
                            <li>
                                <a href=\"{{ path('fos_user_profile_edit') }}\"><span class=\"black-text\">Modifier vos paramètres</span>
                            </li>
                            <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\"><span class=\"black-text\"><i
                                            class=\"material-icons left\">assignment_ind</i>Déconnexion</span></a>
                            </li>
                        {% else %}
                            <li><a href=\"{{ path('fos_user_security_login') }}\"><span class=\"black-text\"><i
                                                class=\"material-icons left\">assignment_ind</i>Connexion</span></a></li>
                            </li>
                        {% endif %}
                    {% endblock connexion %}
                </ul>
            </div>
        </nav>
    {% endblock header %}
    <div class=\"row valign-wrapper\" id=\"sidemenu\">
        <div class=\"col s3 center-align\">
            <ul id=\"dropdown2\" class=\"dropdown-content\">
                <li><a href=\"{{ path('bc_platform_home') }}\"><span class=\"black-text\">Accueil</span></a></li>
                <li><a href=\"{{ path('bc_platform_add') }}\"><span class=\"black-text\">Ajouter une annonce</span></a></li>
                <li><a href=\"{{ path('fos_user_registration_register') }}\"><span class=\"black-text\">Créer un compte</span></a></li>
            </ul>
            <a class=\"btn-large dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">MENU<i class=\"material-icons right\">arrow_drop_down</i></a>
            {#<ul>#}
                {#<li></li>#}
                {# test secu du 09/02/01 #}
                {#{% if is_granted('ROLE_AUTEUR') %}#}
                {#<li></li>#}
                {#{% endif %}#}
                {# test OK #}
            {#</ul>#}
        </div>
        {% block toto %}
        <div class=\"col s9 center-align\" id=\"lastsadverts\">
                <h4>Dernières annonces</h4>
            <span class=\"black-text\">{{ render(controller(\"BCPlatformBundle:Advert:menu\", {'limit': 4})) }}</span>
        </div>
    </div>
        {% endblock toto %}
    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">
            {% block body %}
            {% endblock body %}
        </div>
        {% block footer %}
            <footer class=\"page-footer\" id=\"mainfooter\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col s3\">
                            <h5 class=\"white-text\">NaïtUp</h5>
                            <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your
                                footer
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
                                <li><a class=\"grey-text text-lighten-3\"
                                       href=\"https://naitup.com/avantages/\">Avantages</a>
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
                                <li><a class=\"grey-text text-lighten-3\"
                                       href=\"https://naitup.com/avantages/\">Avantages</a>
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
                                <li><a class=\"grey-text text-lighten-3\"
                                       href=\"https://naitup.com/avantages/\">Avantages</a>
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
    {#<script>#}
        {#mapboxgl.accessToken = 'pk.eyJ1IjoiYmVuODQiLCJhIjoiY2plNW1yYmN3M2hjMzJ6czZ6dGR4d2k0YiJ9.ttsIoMN5JKzdASCZFKHgaA';#}
        {#var map = new mapboxgl.Map({#}
            {#container: 'map',#}
            {#style: 'mapbox://styles/mapbox/streets-v10'#}
        {#});#}
    {#</script>#}
{% endblock %}
</body>
</html>", "BCCoreBundle::layout.html.twig", "/var/www/html/NU/src/BC/CoreBundle/Resources/views/layout.html.twig");
    }
}
