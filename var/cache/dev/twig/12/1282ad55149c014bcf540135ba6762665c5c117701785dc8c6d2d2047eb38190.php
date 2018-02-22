<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_8e2414666007ca126a98a7b9d00558657e7b21b12cbd16c4a216b2fdddc00bb5 extends Twig_Template
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
        $__internal_c8954c696fb92558ac3f46ea396a83317922579a469f151bbd72bfe2518b120e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8954c696fb92558ac3f46ea396a83317922579a469f151bbd72bfe2518b120e->enter($__internal_c8954c696fb92558ac3f46ea396a83317922579a469f151bbd72bfe2518b120e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_47c71860791eba78305a109a607db64fe8de6a108bcce16dba5e5896b78eef6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c71860791eba78305a109a607db64fe8de6a108bcce16dba5e5896b78eef6b->enter($__internal_47c71860791eba78305a109a607db64fe8de6a108bcce16dba5e5896b78eef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c8954c696fb92558ac3f46ea396a83317922579a469f151bbd72bfe2518b120e->leave($__internal_c8954c696fb92558ac3f46ea396a83317922579a469f151bbd72bfe2518b120e_prof);

        
        $__internal_47c71860791eba78305a109a607db64fe8de6a108bcce16dba5e5896b78eef6b->leave($__internal_47c71860791eba78305a109a607db64fe8de6a108bcce16dba5e5896b78eef6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
