<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e5a44576632faaeffc6d6fe7182a337f3e7da37ea1c7eecd735373382251876e extends Twig_Template
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
        $__internal_e06600570e6961e0a822c9d33ed7f203fc69ecaf1e10602fbfd95e29f8f4ae6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06600570e6961e0a822c9d33ed7f203fc69ecaf1e10602fbfd95e29f8f4ae6f->enter($__internal_e06600570e6961e0a822c9d33ed7f203fc69ecaf1e10602fbfd95e29f8f4ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_cabc84fb3e85a260061491e4ba5047c6dedb3311536745ecca26b61518c302c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabc84fb3e85a260061491e4ba5047c6dedb3311536745ecca26b61518c302c1->enter($__internal_cabc84fb3e85a260061491e4ba5047c6dedb3311536745ecca26b61518c302c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e06600570e6961e0a822c9d33ed7f203fc69ecaf1e10602fbfd95e29f8f4ae6f->leave($__internal_e06600570e6961e0a822c9d33ed7f203fc69ecaf1e10602fbfd95e29f8f4ae6f_prof);

        
        $__internal_cabc84fb3e85a260061491e4ba5047c6dedb3311536745ecca26b61518c302c1->leave($__internal_cabc84fb3e85a260061491e4ba5047c6dedb3311536745ecca26b61518c302c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
