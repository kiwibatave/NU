<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_259bd1423a0d3fcb48d443b44657ff7ccee46289cf073957f6c708e5c8e35784 extends Twig_Template
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
        $__internal_28bc1b0cc900a9cd7b83d18d49662a502377b109abfdd224939c2b07cc12cb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bc1b0cc900a9cd7b83d18d49662a502377b109abfdd224939c2b07cc12cb62->enter($__internal_28bc1b0cc900a9cd7b83d18d49662a502377b109abfdd224939c2b07cc12cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2a934cd7b459baed74cf891cf2b2f019d4d9467483a4707284eea1642e360905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a934cd7b459baed74cf891cf2b2f019d4d9467483a4707284eea1642e360905->enter($__internal_2a934cd7b459baed74cf891cf2b2f019d4d9467483a4707284eea1642e360905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_28bc1b0cc900a9cd7b83d18d49662a502377b109abfdd224939c2b07cc12cb62->leave($__internal_28bc1b0cc900a9cd7b83d18d49662a502377b109abfdd224939c2b07cc12cb62_prof);

        
        $__internal_2a934cd7b459baed74cf891cf2b2f019d4d9467483a4707284eea1642e360905->leave($__internal_2a934cd7b459baed74cf891cf2b2f019d4d9467483a4707284eea1642e360905_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
