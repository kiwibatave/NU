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
        $__internal_6e0518fc46d4430dd27996553d9760f6cf079f3a8f419635ed43ce57c0736392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0518fc46d4430dd27996553d9760f6cf079f3a8f419635ed43ce57c0736392->enter($__internal_6e0518fc46d4430dd27996553d9760f6cf079f3a8f419635ed43ce57c0736392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCUserBundle::layout.html.twig"));

        $__internal_4c9754d657022a2f2740bddd668e36bc9c6393d0dde1e04886c3e4f36fb31dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9754d657022a2f2740bddd668e36bc9c6393d0dde1e04886c3e4f36fb31dcb->enter($__internal_4c9754d657022a2f2740bddd668e36bc9c6393d0dde1e04886c3e4f36fb31dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0518fc46d4430dd27996553d9760f6cf079f3a8f419635ed43ce57c0736392->leave($__internal_6e0518fc46d4430dd27996553d9760f6cf079f3a8f419635ed43ce57c0736392_prof);

        
        $__internal_4c9754d657022a2f2740bddd668e36bc9c6393d0dde1e04886c3e4f36fb31dcb->leave($__internal_4c9754d657022a2f2740bddd668e36bc9c6393d0dde1e04886c3e4f36fb31dcb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_02546c5f1edf8a9ac795a3c0897d4ee36d9af4cb1209fb75e29b3c81677adca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02546c5f1edf8a9ac795a3c0897d4ee36d9af4cb1209fb75e29b3c81677adca5->enter($__internal_02546c5f1edf8a9ac795a3c0897d4ee36d9af4cb1209fb75e29b3c81677adca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a09999d3067095805a9c6af83a7990e1532ef95cdc68103385a87c0e25f5d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a09999d3067095805a9c6af83a7990e1532ef95cdc68103385a87c0e25f5d92->enter($__internal_6a09999d3067095805a9c6af83a7990e1532ef95cdc68103385a87c0e25f5d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a09999d3067095805a9c6af83a7990e1532ef95cdc68103385a87c0e25f5d92->leave($__internal_6a09999d3067095805a9c6af83a7990e1532ef95cdc68103385a87c0e25f5d92_prof);

        
        $__internal_02546c5f1edf8a9ac795a3c0897d4ee36d9af4cb1209fb75e29b3c81677adca5->leave($__internal_02546c5f1edf8a9ac795a3c0897d4ee36d9af4cb1209fb75e29b3c81677adca5_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8aac690f8f9745e823c3318fd05d8077c49d74cda74dcc1cc6fa97756aaa038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8aac690f8f9745e823c3318fd05d8077c49d74cda74dcc1cc6fa97756aaa038->enter($__internal_d8aac690f8f9745e823c3318fd05d8077c49d74cda74dcc1cc6fa97756aaa038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24a0647b006712d67633345397e768aeb3d65adbbe43f3b4b750415cd1aa7597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a0647b006712d67633345397e768aeb3d65adbbe43f3b4b750415cd1aa7597->enter($__internal_24a0647b006712d67633345397e768aeb3d65adbbe43f3b4b750415cd1aa7597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        
        $__internal_24a0647b006712d67633345397e768aeb3d65adbbe43f3b4b750415cd1aa7597->leave($__internal_24a0647b006712d67633345397e768aeb3d65adbbe43f3b4b750415cd1aa7597_prof);

        
        $__internal_d8aac690f8f9745e823c3318fd05d8077c49d74cda74dcc1cc6fa97756aaa038->leave($__internal_d8aac690f8f9745e823c3318fd05d8077c49d74cda74dcc1cc6fa97756aaa038_prof);

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
