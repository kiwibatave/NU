<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_8c7775010ecbd6c01b8ec25627c960aea12436cbf501ca622b8eaf27dfcba33d extends Twig_Template
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
        $__internal_bc1eeddeb008d21adfc40abad951c1a4aa91fccfa9d6cf60118e09450ddf48f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1eeddeb008d21adfc40abad951c1a4aa91fccfa9d6cf60118e09450ddf48f1->enter($__internal_bc1eeddeb008d21adfc40abad951c1a4aa91fccfa9d6cf60118e09450ddf48f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_1f3e0e6c440a0b8108855ff002f2e3ea81a57b4eda2f8dc1d399927cdef56677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3e0e6c440a0b8108855ff002f2e3ea81a57b4eda2f8dc1d399927cdef56677->enter($__internal_1f3e0e6c440a0b8108855ff002f2e3ea81a57b4eda2f8dc1d399927cdef56677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_bc1eeddeb008d21adfc40abad951c1a4aa91fccfa9d6cf60118e09450ddf48f1->leave($__internal_bc1eeddeb008d21adfc40abad951c1a4aa91fccfa9d6cf60118e09450ddf48f1_prof);

        
        $__internal_1f3e0e6c440a0b8108855ff002f2e3ea81a57b4eda2f8dc1d399927cdef56677->leave($__internal_1f3e0e6c440a0b8108855ff002f2e3ea81a57b4eda2f8dc1d399927cdef56677_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
