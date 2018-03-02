<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d48e949e2206da7d2fef610654d9aae59d23cdf600067d0e7455e6f70891428a extends Twig_Template
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
        $__internal_61e2c33d7ff0ccda7849690a5e4d21fcb5e4b8a43f53f365b30651733a4fe36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e2c33d7ff0ccda7849690a5e4d21fcb5e4b8a43f53f365b30651733a4fe36c->enter($__internal_61e2c33d7ff0ccda7849690a5e4d21fcb5e4b8a43f53f365b30651733a4fe36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2f6733e53015dbcc123088d5811f65a7113c06e5af9655a12f5819c3020ffa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6733e53015dbcc123088d5811f65a7113c06e5af9655a12f5819c3020ffa37->enter($__internal_2f6733e53015dbcc123088d5811f65a7113c06e5af9655a12f5819c3020ffa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_61e2c33d7ff0ccda7849690a5e4d21fcb5e4b8a43f53f365b30651733a4fe36c->leave($__internal_61e2c33d7ff0ccda7849690a5e4d21fcb5e4b8a43f53f365b30651733a4fe36c_prof);

        
        $__internal_2f6733e53015dbcc123088d5811f65a7113c06e5af9655a12f5819c3020ffa37->leave($__internal_2f6733e53015dbcc123088d5811f65a7113c06e5af9655a12f5819c3020ffa37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
