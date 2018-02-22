<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_7f2a69d2e6531ca0594f3d4d04e13898e04960a202b126cfd7813db6c7c6308f extends Twig_Template
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
        $__internal_d5f29d84b9997bdd0a3f2b51b14749b99c62dfd256461fd40fbef379c4e162f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f29d84b9997bdd0a3f2b51b14749b99c62dfd256461fd40fbef379c4e162f4->enter($__internal_d5f29d84b9997bdd0a3f2b51b14749b99c62dfd256461fd40fbef379c4e162f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_57fa0f87966d7397198da7afe5c0f8d2040a7e20584377e487c3231294bb095d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fa0f87966d7397198da7afe5c0f8d2040a7e20584377e487c3231294bb095d->enter($__internal_57fa0f87966d7397198da7afe5c0f8d2040a7e20584377e487c3231294bb095d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo ".</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>


";
        
        $__internal_d5f29d84b9997bdd0a3f2b51b14749b99c62dfd256461fd40fbef379c4e162f4->leave($__internal_d5f29d84b9997bdd0a3f2b51b14749b99c62dfd256461fd40fbef379c4e162f4_prof);

        
        $__internal_57fa0f87966d7397198da7afe5c0f8d2040a7e20584377e487c3231294bb095d->leave($__internal_57fa0f87966d7397198da7afe5c0f8d2040a7e20584377e487c3231294bb095d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : {{ status_text }}</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur {{ status_code }} : {{ status_text }}.</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>


", "TwigBundle:Exception:error404.html.twig", "/var/www/html/NU/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
