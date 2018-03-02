<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_91198485d2ffc8d886da70e08d55e7d84d9adf5728c1bf08b39d82f6e6556295 extends Twig_Template
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
        $__internal_2026c74ea81c999eb30b8a701e8b188e398069e8d8d4c344aa71d843323e8a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2026c74ea81c999eb30b8a701e8b188e398069e8d8d4c344aa71d843323e8a41->enter($__internal_2026c74ea81c999eb30b8a701e8b188e398069e8d8d4c344aa71d843323e8a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5e05b7179cff0045c36d7cd1a8be610a4cc0d663eb2556b00074f2b1ccc1801d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e05b7179cff0045c36d7cd1a8be610a4cc0d663eb2556b00074f2b1ccc1801d->enter($__internal_5e05b7179cff0045c36d7cd1a8be610a4cc0d663eb2556b00074f2b1ccc1801d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_2026c74ea81c999eb30b8a701e8b188e398069e8d8d4c344aa71d843323e8a41->leave($__internal_2026c74ea81c999eb30b8a701e8b188e398069e8d8d4c344aa71d843323e8a41_prof);

        
        $__internal_5e05b7179cff0045c36d7cd1a8be610a4cc0d663eb2556b00074f2b1ccc1801d->leave($__internal_5e05b7179cff0045c36d7cd1a8be610a4cc0d663eb2556b00074f2b1ccc1801d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
