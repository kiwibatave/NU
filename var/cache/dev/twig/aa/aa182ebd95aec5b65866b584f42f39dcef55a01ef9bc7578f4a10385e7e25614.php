<?php

/* BCPlatformBundle::layout.html.twig */
class __TwigTemplate_53efc0cac554eb2a9908161ff44ecb9292715ef56c3b9d8878d95eb3a43cfd8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BCCoreBundle::layout.html.twig", "BCPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bcplatform_body' => array($this, 'block_bcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d59f519954dcfc60dd529dca37332f16db3bf6bddad14ac0e160ea0eecdc1037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59f519954dcfc60dd529dca37332f16db3bf6bddad14ac0e160ea0eecdc1037->enter($__internal_d59f519954dcfc60dd529dca37332f16db3bf6bddad14ac0e160ea0eecdc1037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle::layout.html.twig"));

        $__internal_a19ba993768abb383ba5b0ff6b5f2d8e9431b21614aad3bfe1159d839e518fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19ba993768abb383ba5b0ff6b5f2d8e9431b21614aad3bfe1159d839e518fec->enter($__internal_a19ba993768abb383ba5b0ff6b5f2d8e9431b21614aad3bfe1159d839e518fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59f519954dcfc60dd529dca37332f16db3bf6bddad14ac0e160ea0eecdc1037->leave($__internal_d59f519954dcfc60dd529dca37332f16db3bf6bddad14ac0e160ea0eecdc1037_prof);

        
        $__internal_a19ba993768abb383ba5b0ff6b5f2d8e9431b21614aad3bfe1159d839e518fec->leave($__internal_a19ba993768abb383ba5b0ff6b5f2d8e9431b21614aad3bfe1159d839e518fec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e99b1d93471cf804ecb7dfa406de572f98d6956b34d5605f262e9ea5bc63ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e99b1d93471cf804ecb7dfa406de572f98d6956b34d5605f262e9ea5bc63ead->enter($__internal_1e99b1d93471cf804ecb7dfa406de572f98d6956b34d5605f262e9ea5bc63ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cea5c82054cab95a00fab905871d30c62ff155bdddddf67859cba21006fb62d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea5c82054cab95a00fab905871d30c62ff155bdddddf67859cba21006fb62d9->enter($__internal_cea5c82054cab95a00fab905871d30c62ff155bdddddf67859cba21006fb62d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cea5c82054cab95a00fab905871d30c62ff155bdddddf67859cba21006fb62d9->leave($__internal_cea5c82054cab95a00fab905871d30c62ff155bdddddf67859cba21006fb62d9_prof);

        
        $__internal_1e99b1d93471cf804ecb7dfa406de572f98d6956b34d5605f262e9ea5bc63ead->leave($__internal_1e99b1d93471cf804ecb7dfa406de572f98d6956b34d5605f262e9ea5bc63ead_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba764f4f5c20fec6d2967bfacfe7714798e2a17b9666f70f6b360373f13a0257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba764f4f5c20fec6d2967bfacfe7714798e2a17b9666f70f6b360373f13a0257->enter($__internal_ba764f4f5c20fec6d2967bfacfe7714798e2a17b9666f70f6b360373f13a0257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed23344c14b6a7bc762ef6cbd1711e940eda77bb0bfbced67a655402fab4c9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed23344c14b6a7bc762ef6cbd1711e940eda77bb0bfbced67a655402fab4c9ac->enter($__internal_ed23344c14b6a7bc762ef6cbd1711e940eda77bb0bfbced67a655402fab4c9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayBlock('bcplatform_body', $context, $blocks);
        
        $__internal_ed23344c14b6a7bc762ef6cbd1711e940eda77bb0bfbced67a655402fab4c9ac->leave($__internal_ed23344c14b6a7bc762ef6cbd1711e940eda77bb0bfbced67a655402fab4c9ac_prof);

        
        $__internal_ba764f4f5c20fec6d2967bfacfe7714798e2a17b9666f70f6b360373f13a0257->leave($__internal_ba764f4f5c20fec6d2967bfacfe7714798e2a17b9666f70f6b360373f13a0257_prof);

    }

    public function block_bcplatform_body($context, array $blocks = array())
    {
        $__internal_65e5f1b2b646adfc9576f32adfe00cb0f88ddb3cdc75ae2a7d49576f145d737f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e5f1b2b646adfc9576f32adfe00cb0f88ddb3cdc75ae2a7d49576f145d737f->enter($__internal_65e5f1b2b646adfc9576f32adfe00cb0f88ddb3cdc75ae2a7d49576f145d737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        $__internal_561b73d0f5a3f490e37855d7148dffa2648b745bc6ae9a34d7276833f86fb137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561b73d0f5a3f490e37855d7148dffa2648b745bc6ae9a34d7276833f86fb137->enter($__internal_561b73d0f5a3f490e37855d7148dffa2648b745bc6ae9a34d7276833f86fb137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcplatform_body"));

        // line 9
        echo "    ";
        
        $__internal_561b73d0f5a3f490e37855d7148dffa2648b745bc6ae9a34d7276833f86fb137->leave($__internal_561b73d0f5a3f490e37855d7148dffa2648b745bc6ae9a34d7276833f86fb137_prof);

        
        $__internal_65e5f1b2b646adfc9576f32adfe00cb0f88ddb3cdc75ae2a7d49576f145d737f->leave($__internal_65e5f1b2b646adfc9576f32adfe00cb0f88ddb3cdc75ae2a7d49576f145d737f_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}
    {% block bcplatform_body %}
    {% endblock %}
{% endblock %}", "BCPlatformBundle::layout.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
