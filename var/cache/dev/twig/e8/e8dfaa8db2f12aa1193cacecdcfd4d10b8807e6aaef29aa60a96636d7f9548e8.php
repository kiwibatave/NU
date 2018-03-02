<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_49a84dfbd60ef270d5791b08607c7031c2440d3ac232ac1b94641876deaecc40 extends Twig_Template
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
        $__internal_4d3a803a9ffa5224440ea85cf906f43e4b5efe728d8e60700e1026a1dcd25577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3a803a9ffa5224440ea85cf906f43e4b5efe728d8e60700e1026a1dcd25577->enter($__internal_4d3a803a9ffa5224440ea85cf906f43e4b5efe728d8e60700e1026a1dcd25577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_147dce4a8d89e4074a68f378f935854d672a9698e380bb189e58e3a0a6b82307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147dce4a8d89e4074a68f378f935854d672a9698e380bb189e58e3a0a6b82307->enter($__internal_147dce4a8d89e4074a68f378f935854d672a9698e380bb189e58e3a0a6b82307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4d3a803a9ffa5224440ea85cf906f43e4b5efe728d8e60700e1026a1dcd25577->leave($__internal_4d3a803a9ffa5224440ea85cf906f43e4b5efe728d8e60700e1026a1dcd25577_prof);

        
        $__internal_147dce4a8d89e4074a68f378f935854d672a9698e380bb189e58e3a0a6b82307->leave($__internal_147dce4a8d89e4074a68f378f935854d672a9698e380bb189e58e3a0a6b82307_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
