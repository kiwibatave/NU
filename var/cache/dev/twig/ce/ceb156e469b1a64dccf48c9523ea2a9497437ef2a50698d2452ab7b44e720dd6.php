<?php

/* BCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_936d09c9e4ab582fb7554b8947ec08f1eecfd9013bd804657de7de578ce3d6e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCPlatformBundle::layout.html.twig", "BCPlatformBundle:Advert:edit.html.twig", 1);
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
        $__internal_08c24f5353bdc8a68ae4b5ce7382410daf9d5517fc03f52de96bb3dc75d8a962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c24f5353bdc8a68ae4b5ce7382410daf9d5517fc03f52de96bb3dc75d8a962->enter($__internal_08c24f5353bdc8a68ae4b5ce7382410daf9d5517fc03f52de96bb3dc75d8a962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:edit.html.twig"));

        $__internal_2e0127b653b7df6d9707882e0005ac879782651516729f1623601a7c203bcaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0127b653b7df6d9707882e0005ac879782651516729f1623601a7c203bcaa9->enter($__internal_2e0127b653b7df6d9707882e0005ac879782651516729f1623601a7c203bcaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c24f5353bdc8a68ae4b5ce7382410daf9d5517fc03f52de96bb3dc75d8a962->leave($__internal_08c24f5353bdc8a68ae4b5ce7382410daf9d5517fc03f52de96bb3dc75d8a962_prof);

        
        $__internal_2e0127b653b7df6d9707882e0005ac879782651516729f1623601a7c203bcaa9->leave($__internal_2e0127b653b7df6d9707882e0005ac879782651516729f1623601a7c203bcaa9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2b4b05fdd37b018753fce30fefdf9be495102a596ba3caf3469572c16086ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b4b05fdd37b018753fce30fefdf9be495102a596ba3caf3469572c16086ee5->enter($__internal_a2b4b05fdd37b018753fce30fefdf9be495102a596ba3caf3469572c16086ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bdd3eb9c57f5964ea96424e330a86f86cb27b3b889e8f576af4298523efe570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdd3eb9c57f5964ea96424e330a86f86cb27b3b889e8f576af4298523efe570->enter($__internal_2bdd3eb9c57f5964ea96424e330a86f86cb27b3b889e8f576af4298523efe570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2bdd3eb9c57f5964ea96424e330a86f86cb27b3b889e8f576af4298523efe570->leave($__internal_2bdd3eb9c57f5964ea96424e330a86f86cb27b3b889e8f576af4298523efe570_prof);

        
        $__internal_a2b4b05fdd37b018753fce30fefdf9be495102a596ba3caf3469572c16086ee5->leave($__internal_a2b4b05fdd37b018753fce30fefdf9be495102a596ba3caf3469572c16086ee5_prof);

    }

    // line 7
    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_2a67a96e0aeca4564b37020f21da43aaafe9112eff6d86b84a86a91f286016d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a67a96e0aeca4564b37020f21da43aaafe9112eff6d86b84a86a91f286016d2->enter($__internal_2a67a96e0aeca4564b37020f21da43aaafe9112eff6d86b84a86a91f286016d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_8d26424e5781fc6c7142ce1981380e9eae569048d93e5d36247c26d799328044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d26424e5781fc6c7142ce1981380e9eae569048d93e5d36247c26d799328044->enter($__internal_8d26424e5781fc6c7142ce1981380e9eae569048d93e5d36247c26d799328044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 8
        echo "    <h2>Modifier une annonce</h2>

    ";
        // line 10
        echo twig_include($this->env, $context, "BCPlatformBundle:Advert:form.html.twig");
        echo "

    <div class=\"row center-align\">
        <p>Vous allez pouvoir maintenant modifier votre annonce</p>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </div>
";
        
        $__internal_8d26424e5781fc6c7142ce1981380e9eae569048d93e5d36247c26d799328044->leave($__internal_8d26424e5781fc6c7142ce1981380e9eae569048d93e5d36247c26d799328044_prof);

        
        $__internal_2a67a96e0aeca4564b37020f21da43aaafe9112eff6d86b84a86a91f286016d2->leave($__internal_2a67a96e0aeca4564b37020f21da43aaafe9112eff6d86b84a86a91f286016d2_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block bcplatform_body %}
    <h2>Modifier une annonce</h2>

    {{ include(\"BCPlatformBundle:Advert:form.html.twig\") }}

    <div class=\"row center-align\">
        <p>Vous allez pouvoir maintenant modifier votre annonce</p>
        <a href=\"{{ path('bc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </div>
{% endblock %}", "BCPlatformBundle:Advert:edit.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
