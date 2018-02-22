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
        $__internal_d214e8a89ea5efdcc43790fba7d937a2edf41e77d2a4161702278ac817b4acd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d214e8a89ea5efdcc43790fba7d937a2edf41e77d2a4161702278ac817b4acd0->enter($__internal_d214e8a89ea5efdcc43790fba7d937a2edf41e77d2a4161702278ac817b4acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_801ec07fca29ea07aa7ccb956b291e93b6ef3066a2d16f893fc85474e27ea1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801ec07fca29ea07aa7ccb956b291e93b6ef3066a2d16f893fc85474e27ea1f2->enter($__internal_801ec07fca29ea07aa7ccb956b291e93b6ef3066a2d16f893fc85474e27ea1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d214e8a89ea5efdcc43790fba7d937a2edf41e77d2a4161702278ac817b4acd0->leave($__internal_d214e8a89ea5efdcc43790fba7d937a2edf41e77d2a4161702278ac817b4acd0_prof);

        
        $__internal_801ec07fca29ea07aa7ccb956b291e93b6ef3066a2d16f893fc85474e27ea1f2->leave($__internal_801ec07fca29ea07aa7ccb956b291e93b6ef3066a2d16f893fc85474e27ea1f2_prof);

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
