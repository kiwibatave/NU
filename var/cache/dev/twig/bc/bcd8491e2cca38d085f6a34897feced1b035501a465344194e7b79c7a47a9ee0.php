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
        $__internal_9ec9efb1ced03fb533f261a3b49dcf9760d81fae480d558b8132db66789e95ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec9efb1ced03fb533f261a3b49dcf9760d81fae480d558b8132db66789e95ab->enter($__internal_9ec9efb1ced03fb533f261a3b49dcf9760d81fae480d558b8132db66789e95ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:menu.html.twig"));

        $__internal_795647f738b50896753b3aad12767a7643225d9278061883a797e026c0b85d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795647f738b50896753b3aad12767a7643225d9278061883a797e026c0b85d06->enter($__internal_795647f738b50896753b3aad12767a7643225d9278061883a797e026c0b85d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "        <li>
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                <span class=\"black-text\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</span>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
        
        $__internal_9ec9efb1ced03fb533f261a3b49dcf9760d81fae480d558b8132db66789e95ab->leave($__internal_9ec9efb1ced03fb533f261a3b49dcf9760d81fae480d558b8132db66789e95ab_prof);

        
        $__internal_795647f738b50896753b3aad12767a7643225d9278061883a797e026c0b85d06->leave($__internal_795647f738b50896753b3aad12767a7643225d9278061883a797e026c0b85d06_prof);

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
        return array (  50 => 11,  40 => 7,  36 => 6,  33 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Vue menu test 04/01/18 #}

<ul class=\"nav nav-pills nav-stacked\">
    {% for advert in listAdverts %}
        <li>
            <a href=\"{{ path('bc_platform_view', {'id': advert.id}) }}\">
                <span class=\"black-text\">{{ advert.title }}</span>
            </a>
        </li>
    {% endfor %}
</ul>", "BCPlatformBundle:Advert:menu.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
