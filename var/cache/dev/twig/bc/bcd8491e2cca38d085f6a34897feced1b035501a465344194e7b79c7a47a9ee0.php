<?php

/* BCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_7596694ac03211b30c8506659082966f5bcc0bb034722cf23d854600d7523ad2 extends Twig_Template
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
        $__internal_d3016dac8e6fcbcc1708fef0854bf3f6bc808751f0774bffc4aaa175e2710b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3016dac8e6fcbcc1708fef0854bf3f6bc808751f0774bffc4aaa175e2710b39->enter($__internal_d3016dac8e6fcbcc1708fef0854bf3f6bc808751f0774bffc4aaa175e2710b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:menu.html.twig"));

        $__internal_30e55c6948bf6d5070699695425d128bbe7174690c5933114872e1318a3e17b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e55c6948bf6d5070699695425d128bbe7174690c5933114872e1318a3e17b4->enter($__internal_30e55c6948bf6d5070699695425d128bbe7174690c5933114872e1318a3e17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "        <ul class=\"collection\">
            <li class=\"collection-item avatar\">
                <img src=\"/var/www/html/NU/images/wally.jpg\" alt=\"\" class=\"circle\">
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
            <li class=\"collection-item avatar\">
                <i class=\"material-icons circle\">folder</i>
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
            <li class=\"collection-item avatar\">
                <i class=\"material-icons circle green\">insert_chart</i>
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
            <li class=\"collection-item avatar\">
                <i class=\"material-icons circle red\">play_arrow</i>
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
        </ul>
        <li>
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ul>";
        
        $__internal_d3016dac8e6fcbcc1708fef0854bf3f6bc808751f0774bffc4aaa175e2710b39->leave($__internal_d3016dac8e6fcbcc1708fef0854bf3f6bc808751f0774bffc4aaa175e2710b39_prof);

        
        $__internal_30e55c6948bf6d5070699695425d128bbe7174690c5933114872e1318a3e17b4->leave($__internal_30e55c6948bf6d5070699695425d128bbe7174690c5933114872e1318a3e17b4_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 45,  74 => 41,  70 => 40,  33 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Vue menu test 04/01/18 #}

<ul class=\"nav nav-pills nav-stacked\">
    {% for advert in listAdverts %}
        <ul class=\"collection\">
            <li class=\"collection-item avatar\">
                <img src=\"/var/www/html/NU/images/wally.jpg\" alt=\"\" class=\"circle\">
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
            <li class=\"collection-item avatar\">
                <i class=\"material-icons circle\">folder</i>
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
            <li class=\"collection-item avatar\">
                <i class=\"material-icons circle green\">insert_chart</i>
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
            <li class=\"collection-item avatar\">
                <i class=\"material-icons circle red\">play_arrow</i>
                <span class=\"title\">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href=\"#!\" class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>
            </li>
        </ul>
        <li>
            <a href=\"{{ path('bc_platform_view', {'id': advert.id}) }}\">
                {{ advert.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "BCPlatformBundle:Advert:menu.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
