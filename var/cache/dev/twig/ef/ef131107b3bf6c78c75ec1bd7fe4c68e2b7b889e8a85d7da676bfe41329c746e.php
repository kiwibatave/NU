<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_94e76617d4b7f792904273d025e7bfbde52aa9b0a52c6ff98c74f0ccdccf5165 extends Twig_Template
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
        $__internal_e04ad463396851fc77b901f9b4427e1926d1d39b548d195af6dffaea0e445fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04ad463396851fc77b901f9b4427e1926d1d39b548d195af6dffaea0e445fee->enter($__internal_e04ad463396851fc77b901f9b4427e1926d1d39b548d195af6dffaea0e445fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_992c195e6cbd46338624e94ee3da9affd27df60526e8bc2ada81fdbd619498ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992c195e6cbd46338624e94ee3da9affd27df60526e8bc2ada81fdbd619498ed->enter($__internal_992c195e6cbd46338624e94ee3da9affd27df60526e8bc2ada81fdbd619498ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e04ad463396851fc77b901f9b4427e1926d1d39b548d195af6dffaea0e445fee->leave($__internal_e04ad463396851fc77b901f9b4427e1926d1d39b548d195af6dffaea0e445fee_prof);

        
        $__internal_992c195e6cbd46338624e94ee3da9affd27df60526e8bc2ada81fdbd619498ed->leave($__internal_992c195e6cbd46338624e94ee3da9affd27df60526e8bc2ada81fdbd619498ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
