<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a428e0b5f624059ce2e87a03d00a57cf8f63ae9b8b993c5a925f5a77a64b05a3 extends Twig_Template
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
        $__internal_93212471beb389c8ea999dfb3adecb08cabd883fb65c82643af44bd0fabc0ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93212471beb389c8ea999dfb3adecb08cabd883fb65c82643af44bd0fabc0ddf->enter($__internal_93212471beb389c8ea999dfb3adecb08cabd883fb65c82643af44bd0fabc0ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e53414f301669a54a4cb7d5ba100539f2162dd64cc4e10c203eca2ecbdc5caf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53414f301669a54a4cb7d5ba100539f2162dd64cc4e10c203eca2ecbdc5caf2->enter($__internal_e53414f301669a54a4cb7d5ba100539f2162dd64cc4e10c203eca2ecbdc5caf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_93212471beb389c8ea999dfb3adecb08cabd883fb65c82643af44bd0fabc0ddf->leave($__internal_93212471beb389c8ea999dfb3adecb08cabd883fb65c82643af44bd0fabc0ddf_prof);

        
        $__internal_e53414f301669a54a4cb7d5ba100539f2162dd64cc4e10c203eca2ecbdc5caf2->leave($__internal_e53414f301669a54a4cb7d5ba100539f2162dd64cc4e10c203eca2ecbdc5caf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
