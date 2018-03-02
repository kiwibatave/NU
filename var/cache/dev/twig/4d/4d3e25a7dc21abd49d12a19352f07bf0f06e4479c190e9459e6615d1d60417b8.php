<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8608d652908b5a183a1134ef387a182068ac668a24713c4a124d4ff61827e3eb extends Twig_Template
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
        $__internal_342951ccb607c3229b0201561bdc08fa6b80a60383e160a8766eda106ce2ae29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342951ccb607c3229b0201561bdc08fa6b80a60383e160a8766eda106ce2ae29->enter($__internal_342951ccb607c3229b0201561bdc08fa6b80a60383e160a8766eda106ce2ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3fdbcb89c2a4a66705dca4ebc6241b648d714597503fa0e37c3e6217e4b697f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdbcb89c2a4a66705dca4ebc6241b648d714597503fa0e37c3e6217e4b697f3->enter($__internal_3fdbcb89c2a4a66705dca4ebc6241b648d714597503fa0e37c3e6217e4b697f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_342951ccb607c3229b0201561bdc08fa6b80a60383e160a8766eda106ce2ae29->leave($__internal_342951ccb607c3229b0201561bdc08fa6b80a60383e160a8766eda106ce2ae29_prof);

        
        $__internal_3fdbcb89c2a4a66705dca4ebc6241b648d714597503fa0e37c3e6217e4b697f3->leave($__internal_3fdbcb89c2a4a66705dca4ebc6241b648d714597503fa0e37c3e6217e4b697f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
