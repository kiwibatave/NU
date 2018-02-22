<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0b4fc852bc82e5d2003c855b8272f34a97b8e8071c1e6117c84eb6c8869c3339 extends Twig_Template
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
        $__internal_79ab6dde0ebdb83c8b33cf647bbf6ae9a05dee5421c3d8f89e2198f840df2a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ab6dde0ebdb83c8b33cf647bbf6ae9a05dee5421c3d8f89e2198f840df2a4b->enter($__internal_79ab6dde0ebdb83c8b33cf647bbf6ae9a05dee5421c3d8f89e2198f840df2a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_cc48c072e066958cd5feb47ada71238479bafec60e38a83942797ce37696014e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc48c072e066958cd5feb47ada71238479bafec60e38a83942797ce37696014e->enter($__internal_cc48c072e066958cd5feb47ada71238479bafec60e38a83942797ce37696014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_79ab6dde0ebdb83c8b33cf647bbf6ae9a05dee5421c3d8f89e2198f840df2a4b->leave($__internal_79ab6dde0ebdb83c8b33cf647bbf6ae9a05dee5421c3d8f89e2198f840df2a4b_prof);

        
        $__internal_cc48c072e066958cd5feb47ada71238479bafec60e38a83942797ce37696014e->leave($__internal_cc48c072e066958cd5feb47ada71238479bafec60e38a83942797ce37696014e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
