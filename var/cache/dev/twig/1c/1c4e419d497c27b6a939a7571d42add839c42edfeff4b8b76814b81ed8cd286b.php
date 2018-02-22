<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_466df91fa614f6d7b53a0dab286d443a07edbd1c58cce7d5d3a721142c60ab83 extends Twig_Template
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
        $__internal_8eb365a893de380c02fcfee32d8804cbcf77cc5e06c8572395b0e556f25f874a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb365a893de380c02fcfee32d8804cbcf77cc5e06c8572395b0e556f25f874a->enter($__internal_8eb365a893de380c02fcfee32d8804cbcf77cc5e06c8572395b0e556f25f874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_246beac8b397612a0ff9b3b915f6323d4f38a56e1243e08f8a7234c42e2682b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246beac8b397612a0ff9b3b915f6323d4f38a56e1243e08f8a7234c42e2682b0->enter($__internal_246beac8b397612a0ff9b3b915f6323d4f38a56e1243e08f8a7234c42e2682b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8eb365a893de380c02fcfee32d8804cbcf77cc5e06c8572395b0e556f25f874a->leave($__internal_8eb365a893de380c02fcfee32d8804cbcf77cc5e06c8572395b0e556f25f874a_prof);

        
        $__internal_246beac8b397612a0ff9b3b915f6323d4f38a56e1243e08f8a7234c42e2682b0->leave($__internal_246beac8b397612a0ff9b3b915f6323d4f38a56e1243e08f8a7234c42e2682b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
