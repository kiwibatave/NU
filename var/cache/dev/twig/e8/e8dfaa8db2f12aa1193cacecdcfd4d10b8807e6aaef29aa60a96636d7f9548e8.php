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
        $__internal_0ec748e9d82e132ddd2fb3de94e8c762d36b5a562c733552d14863c118fa7388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec748e9d82e132ddd2fb3de94e8c762d36b5a562c733552d14863c118fa7388->enter($__internal_0ec748e9d82e132ddd2fb3de94e8c762d36b5a562c733552d14863c118fa7388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1b31ccea5ecfc51561eeea81966a1f85e783a82caa14a660000dcb38b19bf8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b31ccea5ecfc51561eeea81966a1f85e783a82caa14a660000dcb38b19bf8db->enter($__internal_1b31ccea5ecfc51561eeea81966a1f85e783a82caa14a660000dcb38b19bf8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0ec748e9d82e132ddd2fb3de94e8c762d36b5a562c733552d14863c118fa7388->leave($__internal_0ec748e9d82e132ddd2fb3de94e8c762d36b5a562c733552d14863c118fa7388_prof);

        
        $__internal_1b31ccea5ecfc51561eeea81966a1f85e783a82caa14a660000dcb38b19bf8db->leave($__internal_1b31ccea5ecfc51561eeea81966a1f85e783a82caa14a660000dcb38b19bf8db_prof);

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
