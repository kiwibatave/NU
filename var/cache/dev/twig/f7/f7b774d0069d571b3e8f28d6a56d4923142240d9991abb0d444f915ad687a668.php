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
        $__internal_b8049d54456a453bfd504ebf1c3b062f79ee9c05a4dd5abf8e546041550980d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8049d54456a453bfd504ebf1c3b062f79ee9c05a4dd5abf8e546041550980d2->enter($__internal_b8049d54456a453bfd504ebf1c3b062f79ee9c05a4dd5abf8e546041550980d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c20d05e3578baf554ceea14a221c72324c0fd2060e5752bd381318b203b99a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20d05e3578baf554ceea14a221c72324c0fd2060e5752bd381318b203b99a36->enter($__internal_c20d05e3578baf554ceea14a221c72324c0fd2060e5752bd381318b203b99a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b8049d54456a453bfd504ebf1c3b062f79ee9c05a4dd5abf8e546041550980d2->leave($__internal_b8049d54456a453bfd504ebf1c3b062f79ee9c05a4dd5abf8e546041550980d2_prof);

        
        $__internal_c20d05e3578baf554ceea14a221c72324c0fd2060e5752bd381318b203b99a36->leave($__internal_c20d05e3578baf554ceea14a221c72324c0fd2060e5752bd381318b203b99a36_prof);

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
