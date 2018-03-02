<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5a335bde4c028cf0e56e411b077efd5cf572ff0bd41ebb8a7b6c3a3e07077a06 extends Twig_Template
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
        $__internal_16497e75e48f1905f4e25d3fc2365f020947bd14790b68111052bdc32bdd7371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16497e75e48f1905f4e25d3fc2365f020947bd14790b68111052bdc32bdd7371->enter($__internal_16497e75e48f1905f4e25d3fc2365f020947bd14790b68111052bdc32bdd7371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_009db1ed862539e4e9fb4c6b40b4673143e77ab41c5b053de9b347931e37f615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009db1ed862539e4e9fb4c6b40b4673143e77ab41c5b053de9b347931e37f615->enter($__internal_009db1ed862539e4e9fb4c6b40b4673143e77ab41c5b053de9b347931e37f615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_16497e75e48f1905f4e25d3fc2365f020947bd14790b68111052bdc32bdd7371->leave($__internal_16497e75e48f1905f4e25d3fc2365f020947bd14790b68111052bdc32bdd7371_prof);

        
        $__internal_009db1ed862539e4e9fb4c6b40b4673143e77ab41c5b053de9b347931e37f615->leave($__internal_009db1ed862539e4e9fb4c6b40b4673143e77ab41c5b053de9b347931e37f615_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
