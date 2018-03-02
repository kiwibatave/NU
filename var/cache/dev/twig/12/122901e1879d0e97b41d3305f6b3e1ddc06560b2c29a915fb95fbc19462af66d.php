<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c413222efa80b39dfe3bfd131b69b50cafd6f0da10cc9bd05ef55228393a5c71 extends Twig_Template
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
        $__internal_f065f756ce80d04719db8540dd841af19ea58a9a2711cdaed5f1bbc0b7d36b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f065f756ce80d04719db8540dd841af19ea58a9a2711cdaed5f1bbc0b7d36b46->enter($__internal_f065f756ce80d04719db8540dd841af19ea58a9a2711cdaed5f1bbc0b7d36b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6ca0f13826acb4a0483849d12a4f9d718ef7a92e15545c79fa78aa4fcd82a5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca0f13826acb4a0483849d12a4f9d718ef7a92e15545c79fa78aa4fcd82a5d1->enter($__internal_6ca0f13826acb4a0483849d12a4f9d718ef7a92e15545c79fa78aa4fcd82a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f065f756ce80d04719db8540dd841af19ea58a9a2711cdaed5f1bbc0b7d36b46->leave($__internal_f065f756ce80d04719db8540dd841af19ea58a9a2711cdaed5f1bbc0b7d36b46_prof);

        
        $__internal_6ca0f13826acb4a0483849d12a4f9d718ef7a92e15545c79fa78aa4fcd82a5d1->leave($__internal_6ca0f13826acb4a0483849d12a4f9d718ef7a92e15545c79fa78aa4fcd82a5d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
