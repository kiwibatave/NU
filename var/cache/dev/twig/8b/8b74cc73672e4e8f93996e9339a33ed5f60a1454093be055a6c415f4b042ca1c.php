<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_0a34f017fc8151a0ee577b8d04f905f07cb9c8db7bd3f4c3007b9dbc32930ab7 extends Twig_Template
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
        $__internal_356ec9ca86066b48cdb47aa0985d0dbbfc232f89e9d15116af19f3900013ce4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356ec9ca86066b48cdb47aa0985d0dbbfc232f89e9d15116af19f3900013ce4a->enter($__internal_356ec9ca86066b48cdb47aa0985d0dbbfc232f89e9d15116af19f3900013ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_32e1e9715886069a0a6785bd2487acb7b33227e51bef87569570096c5bda4b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e1e9715886069a0a6785bd2487acb7b33227e51bef87569570096c5bda4b2b->enter($__internal_32e1e9715886069a0a6785bd2487acb7b33227e51bef87569570096c5bda4b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_356ec9ca86066b48cdb47aa0985d0dbbfc232f89e9d15116af19f3900013ce4a->leave($__internal_356ec9ca86066b48cdb47aa0985d0dbbfc232f89e9d15116af19f3900013ce4a_prof);

        
        $__internal_32e1e9715886069a0a6785bd2487acb7b33227e51bef87569570096c5bda4b2b->leave($__internal_32e1e9715886069a0a6785bd2487acb7b33227e51bef87569570096c5bda4b2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
