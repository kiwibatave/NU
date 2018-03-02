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
        $__internal_fe297dd9e94f6290a785e182eb4a678f0aa9188564ff98c33193f9eefa5fb967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe297dd9e94f6290a785e182eb4a678f0aa9188564ff98c33193f9eefa5fb967->enter($__internal_fe297dd9e94f6290a785e182eb4a678f0aa9188564ff98c33193f9eefa5fb967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1110aa5886e602f02546d6c962ca0be9633f4e94519915bd758294456e9a87b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1110aa5886e602f02546d6c962ca0be9633f4e94519915bd758294456e9a87b6->enter($__internal_1110aa5886e602f02546d6c962ca0be9633f4e94519915bd758294456e9a87b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fe297dd9e94f6290a785e182eb4a678f0aa9188564ff98c33193f9eefa5fb967->leave($__internal_fe297dd9e94f6290a785e182eb4a678f0aa9188564ff98c33193f9eefa5fb967_prof);

        
        $__internal_1110aa5886e602f02546d6c962ca0be9633f4e94519915bd758294456e9a87b6->leave($__internal_1110aa5886e602f02546d6c962ca0be9633f4e94519915bd758294456e9a87b6_prof);

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
