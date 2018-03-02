<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_fa5c42730709cdb176309fc79413ba27c0a691e0766056aa298cea120fb92fd1 extends Twig_Template
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
        $__internal_5aebf1d779591224bbb5ac3de816fbc445755810d443ea276b6b605f60c3f345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aebf1d779591224bbb5ac3de816fbc445755810d443ea276b6b605f60c3f345->enter($__internal_5aebf1d779591224bbb5ac3de816fbc445755810d443ea276b6b605f60c3f345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineBundle:Collector:explain.html.twig"));

        $__internal_ef7cd4c8d866fd2a4b195274ec0179c84808c13176656637d7636d2710387edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7cd4c8d866fd2a4b195274ec0179c84808c13176656637d7636d2710387edb->enter($__internal_ef7cd4c8d866fd2a4b195274ec0179c84808c13176656637d7636d2710387edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineBundle:Collector:explain.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), 0, array(), "array")) > 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 6, $this->getSourceContext()); })()), 0, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 7
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "            <tr>
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 15
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["item"], array("," => ", ")), "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </tbody>
    </table>
";
        } else {
            // line 22
            echo "    ";
            // line 23
            echo "    <pre style=\"margin: 5px 0;\">";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 24, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 25
                echo twig_escape_filter($this->env, twig_first($this->env, $context["row"]), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</pre>
";
        }
        
        $__internal_5aebf1d779591224bbb5ac3de816fbc445755810d443ea276b6b605f60c3f345->leave($__internal_5aebf1d779591224bbb5ac3de816fbc445755810d443ea276b6b605f60c3f345_prof);

        
        $__internal_ef7cd4c8d866fd2a4b195274ec0179c84808c13176656637d7636d2710387edb->leave($__internal_ef7cd4c8d866fd2a4b195274ec0179c84808c13176656637d7636d2710387edb_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  92 => 25,  88 => 24,  86 => 23,  84 => 22,  79 => 19,  72 => 17,  63 => 15,  59 => 14,  56 => 13,  52 => 12,  47 => 9,  38 => 7,  34 => 6,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data[0]|length > 1 %}
    {# The platform returns a table for the explanation (e.g. MySQL), display all columns #}
    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                {% for label in data[0]|keys %}
                    <th>{{ label }}</th>
                {% endfor %}
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
            <tr>
                {% for key, item in row %}
                    <td>{{ item|replace({',': ', '}) }}</td>
                {% endfor %}
            </tr>
            {% endfor %}
        </tbody>
    </table>
{% else %}
    {# The Platform returns a single column for a textual explanation (e.g. PostgreSQL), display all lines #}
    <pre style=\"margin: 5px 0;\">
        {%- for row in data -%}
            {{ row|first }}{{ \"\\n\" }}
        {%- endfor -%}
    </pre>
{% endif %}
", "DoctrineBundle:Collector:explain.html.twig", "/var/www/html/NU/vendor/doctrine/doctrine-bundle/Resources/views/Collector/explain.html.twig");
    }
}
