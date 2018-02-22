<?php

/* BCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_546489fe1c5b1a470ee7b68839f121037b5cd2bc8ecedabeae795f03d30b1cd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bcplatform_body' => array($this, 'block_bcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28db4ca327fcfa339d5f85e0042bf59777e2139a2e699fc948f754e5876188d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28db4ca327fcfa339d5f85e0042bf59777e2139a2e699fc948f754e5876188d3->enter($__internal_28db4ca327fcfa339d5f85e0042bf59777e2139a2e699fc948f754e5876188d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:view.html.twig"));

        $__internal_6ef1e4d34057a0565121c42de628afbae41ad3c44e57c5e215ddc14c22298b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef1e4d34057a0565121c42de628afbae41ad3c44e57c5e215ddc14c22298b35->enter($__internal_6ef1e4d34057a0565121c42de628afbae41ad3c44e57c5e215ddc14c22298b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28db4ca327fcfa339d5f85e0042bf59777e2139a2e699fc948f754e5876188d3->leave($__internal_28db4ca327fcfa339d5f85e0042bf59777e2139a2e699fc948f754e5876188d3_prof);

        
        $__internal_6ef1e4d34057a0565121c42de628afbae41ad3c44e57c5e215ddc14c22298b35->leave($__internal_6ef1e4d34057a0565121c42de628afbae41ad3c44e57c5e215ddc14c22298b35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e088a22650860e0e096baf07dccdfc376f1f58c50044ca9b19e7b5fed7a23646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e088a22650860e0e096baf07dccdfc376f1f58c50044ca9b19e7b5fed7a23646->enter($__internal_e088a22650860e0e096baf07dccdfc376f1f58c50044ca9b19e7b5fed7a23646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a10a45fb0d2d73f5a02bf0ce10a26f4fbe1e7839c7d8398d69ee5a8c886cb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a10a45fb0d2d73f5a02bf0ce10a26f4fbe1e7839c7d8398d69ee5a8c886cb6e->enter($__internal_8a10a45fb0d2d73f5a02bf0ce10a26f4fbe1e7839c7d8398d69ee5a8c886cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a10a45fb0d2d73f5a02bf0ce10a26f4fbe1e7839c7d8398d69ee5a8c886cb6e->leave($__internal_8a10a45fb0d2d73f5a02bf0ce10a26f4fbe1e7839c7d8398d69ee5a8c886cb6e_prof);

        
        $__internal_e088a22650860e0e096baf07dccdfc376f1f58c50044ca9b19e7b5fed7a23646->leave($__internal_e088a22650860e0e096baf07dccdfc376f1f58c50044ca9b19e7b5fed7a23646_prof);

    }

    // line 7
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_6684a2af0c75b0c3778ed9fe372ae1bdf338ff91f1c4e7e4d8346696afc851e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6684a2af0c75b0c3778ed9fe372ae1bdf338ff91f1c4e7e4d8346696afc851e1->enter($__internal_6684a2af0c75b0c3778ed9fe372ae1bdf338ff91f1c4e7e4d8346696afc851e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_6b36e5ba0aa40482dd57604e07ca2c391780b69a7a4def27e1b18c6c3f0ecf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b36e5ba0aa40482dd57604e07ca2c391780b69a7a4def27e1b18c6c3f0ecf22->enter($__internal_6b36e5ba0aa40482dd57604e07ca2c391780b69a7a4def27e1b18c6c3f0ecf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 8
        echo "
    <div style=\"float: left; margin-right: 1em;\">
        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "image", array()))) {
            // line 13
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                 alt=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\"
                 height=\"60\"
            />
        ";
        }
        // line 18
        echo "    </div>

    <h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 20, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 24, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 27
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 27, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 28
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 32
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </p>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 36, $this->getSourceContext()); })())) > 0)) {
            // line 37
            echo "        <div>
            Cette annonce possède les caractèristiques suivantes :
            <ul>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 40, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 41
                echo "                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </ul>
        </div>
    ";
        }
        // line 46
        echo "
    <div class=\"container\">
        <div class=\"offset-s3\">
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_home");
        echo "\" class=\"waves-effect waves-light btn-large blue\"><i
                        class=\"material-icons left\">list</i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 53, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"
               class=\"waves-effect waves-light btn-large green\">
                <i class=\"material-icons left\">mode_edit</i>
                Modifier l'annonce
            </a>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 58, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"
               class=\"waves-effect waves-light btn-large red\">
                <i class=\"material-icons left\">delete</i>
                Supprimer l'annonce
            </a>
        </div>
    </div>
";
        
        $__internal_6b36e5ba0aa40482dd57604e07ca2c391780b69a7a4def27e1b18c6c3f0ecf22->leave($__internal_6b36e5ba0aa40482dd57604e07ca2c391780b69a7a4def27e1b18c6c3f0ecf22_prof);

        
        $__internal_6684a2af0c75b0c3778ed9fe372ae1bdf338ff91f1c4e7e4d8346696afc851e1->leave($__internal_6684a2af0c75b0c3778ed9fe372ae1bdf338ff91f1c4e7e4d8346696afc851e1_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 58,  204 => 53,  197 => 49,  192 => 46,  187 => 43,  176 => 41,  172 => 40,  167 => 37,  165 => 36,  162 => 35,  158 => 33,  144 => 32,  138 => 31,  121 => 30,  117 => 28,  114 => 27,  109 => 24,  101 => 21,  97 => 20,  93 => 18,  86 => 14,  81 => 13,  78 => 12,  76 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}

    <div style=\"float: left; margin-right: 1em;\">
        {# Vérification liaison image/advert #}
        {# Modif du 06/02/18 #}
        {% if advert.image is not null %}
            <img src=\"{{ asset(advert.image.webPath) }}\"
                 alt=\"{{ advert.image.alt }}\"
                 height=\"60\"
            />
        {% endif %}
    </div>

    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ advert.content }}
    </div>
    {# Ajout des catégories 17/01/18 #}
    {% if not advert.categories.empty %}
        <p>
            Cette annonce est parue dans les catégories suivantes :
            {% for category in advert.categories %}
                {{ category.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
    {% endif %}

    {% if listAdvertSkills|length > 0 %}
        <div>
            Cette annonce possède les caractèristiques suivantes :
            <ul>
                {% for advertSkill in listAdvertSkills %}
                    <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    <div class=\"container\">
        <div class=\"offset-s3\">
            <a href=\"{{ path('bc_platform_home') }}\" class=\"waves-effect waves-light btn-large blue\"><i
                        class=\"material-icons left\">list</i>
                Retour à la liste
            </a>
            <a href=\"{{ path('bc_platform_edit', {'id': advert.id}) }}\"
               class=\"waves-effect waves-light btn-large green\">
                <i class=\"material-icons left\">mode_edit</i>
                Modifier l'annonce
            </a>
            <a href=\"{{ path('bc_platform_delete', {'id': advert.id}) }}\"
               class=\"waves-effect waves-light btn-large red\">
                <i class=\"material-icons left\">delete</i>
                Supprimer l'annonce
            </a>
        </div>
    </div>
{% endblock %}", "BCPlatformBundle:Advert:view.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
