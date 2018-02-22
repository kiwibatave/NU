<?php

/* BCUserBundle::layout.html.twig */
class __TwigTemplate_7a5390a257a4214a4defe6ce96a4d97b43b8f468f7c5a5938670570fc325222a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BCCoreBundle::layout.html.twig", "BCUserBundle::layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8b96453ddcf7e787a4e156458f3f291688efed1d1624514700af29301010ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b96453ddcf7e787a4e156458f3f291688efed1d1624514700af29301010ab1->enter($__internal_f8b96453ddcf7e787a4e156458f3f291688efed1d1624514700af29301010ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCUserBundle::layout.html.twig"));

        $__internal_0be4cf912c1546f63d406abb9d90b46494a3c139d5c2662a6dd30c3e6f12080c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be4cf912c1546f63d406abb9d90b46494a3c139d5c2662a6dd30c3e6f12080c->enter($__internal_0be4cf912c1546f63d406abb9d90b46494a3c139d5c2662a6dd30c3e6f12080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b96453ddcf7e787a4e156458f3f291688efed1d1624514700af29301010ab1->leave($__internal_f8b96453ddcf7e787a4e156458f3f291688efed1d1624514700af29301010ab1_prof);

        
        $__internal_0be4cf912c1546f63d406abb9d90b46494a3c139d5c2662a6dd30c3e6f12080c->leave($__internal_0be4cf912c1546f63d406abb9d90b46494a3c139d5c2662a6dd30c3e6f12080c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf7490016666fe4b91307c15c3a43130bbd621f316b758949a851515308ad2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf7490016666fe4b91307c15c3a43130bbd621f316b758949a851515308ad2b->enter($__internal_5bf7490016666fe4b91307c15c3a43130bbd621f316b758949a851515308ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c9029951b74fe72799c8c6971f292e04d83550725ec79ddce42cfe9f5a4c078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9029951b74fe72799c8c6971f292e04d83550725ec79ddce42cfe9f5a4c078->enter($__internal_7c9029951b74fe72799c8c6971f292e04d83550725ec79ddce42cfe9f5a4c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 17
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_7c9029951b74fe72799c8c6971f292e04d83550725ec79ddce42cfe9f5a4c078->leave($__internal_7c9029951b74fe72799c8c6971f292e04d83550725ec79ddce42cfe9f5a4c078_prof);

        
        $__internal_5bf7490016666fe4b91307c15c3a43130bbd621f316b758949a851515308ad2b->leave($__internal_5bf7490016666fe4b91307c15c3a43130bbd621f316b758949a851515308ad2b_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d215a3736c5451e6ef543ede0572634b4a6efe1a14a8f7efddf049c957be1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d215a3736c5451e6ef543ede0572634b4a6efe1a14a8f7efddf049c957be1e6->enter($__internal_0d215a3736c5451e6ef543ede0572634b4a6efe1a14a8f7efddf049c957be1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6366b5706501b22e329c7f74300de3aec4f9fa892aa9943c46c6428c17b78d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6366b5706501b22e329c7f74300de3aec4f9fa892aa9943c46c6428c17b78d85->enter($__internal_6366b5706501b22e329c7f74300de3aec4f9fa892aa9943c46c6428c17b78d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        
        $__internal_6366b5706501b22e329c7f74300de3aec4f9fa892aa9943c46c6428c17b78d85->leave($__internal_6366b5706501b22e329c7f74300de3aec4f9fa892aa9943c46c6428c17b78d85_prof);

        
        $__internal_0d215a3736c5451e6ef543ede0572634b4a6efe1a14a8f7efddf049c957be1e6->leave($__internal_0d215a3736c5451e6ef543ede0572634b4a6efe1a14a8f7efddf049c957be1e6_prof);

    }

    public function getTemplateName()
    {
        return "BCUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 18,  97 => 17,  86 => 19,  83 => 17,  80 => 15,  74 => 14,  65 => 11,  60 => 10,  55 => 9,  50 => 8,  41 => 6,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On étend notre layout 11/02/18 #}

{% extends \"BCCoreBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
{# On affiche les messages flash que définissent les controleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ key }}\">
                {{ message|trans({}, 'FOSUserBundle') }}
            </div>
        {% endfor %}
    {% endfor %}

{# On définit ce block, dans lequel vont venir s'emboiter les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}
", "BCUserBundle::layout.html.twig", "/var/www/html/NU/src/BC/UserBundle/Resources/views/layout.html.twig");
    }
}
