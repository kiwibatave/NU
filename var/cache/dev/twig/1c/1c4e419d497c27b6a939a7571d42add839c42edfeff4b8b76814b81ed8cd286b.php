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
        $__internal_01c1a6ac19da0aa021f3ef6da7eba7542707fac071197d49c3482a7ec00666c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c1a6ac19da0aa021f3ef6da7eba7542707fac071197d49c3482a7ec00666c9->enter($__internal_01c1a6ac19da0aa021f3ef6da7eba7542707fac071197d49c3482a7ec00666c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_372a2b86c71bd3e4ac41d0f47080167799609f7d342f61412b1839e25cd7f566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372a2b86c71bd3e4ac41d0f47080167799609f7d342f61412b1839e25cd7f566->enter($__internal_372a2b86c71bd3e4ac41d0f47080167799609f7d342f61412b1839e25cd7f566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_01c1a6ac19da0aa021f3ef6da7eba7542707fac071197d49c3482a7ec00666c9->leave($__internal_01c1a6ac19da0aa021f3ef6da7eba7542707fac071197d49c3482a7ec00666c9_prof);

        
        $__internal_372a2b86c71bd3e4ac41d0f47080167799609f7d342f61412b1839e25cd7f566->leave($__internal_372a2b86c71bd3e4ac41d0f47080167799609f7d342f61412b1839e25cd7f566_prof);

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
