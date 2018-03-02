<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_0f446033287e70d776811e978b3f7c67a1a330e75fa0497ff48981bf8ecf31e5 extends Twig_Template
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
        $__internal_e841ce271d72a50691f30abbcc9a0e47fcc9cd27176f529ad0957aaa064fcdf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e841ce271d72a50691f30abbcc9a0e47fcc9cd27176f529ad0957aaa064fcdf5->enter($__internal_e841ce271d72a50691f30abbcc9a0e47fcc9cd27176f529ad0957aaa064fcdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_cc8f0ccbe2b896373dd92e2a0fda7eaa2a40a3fa28177a0c186a8bee5fed7185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8f0ccbe2b896373dd92e2a0fda7eaa2a40a3fa28177a0c186a8bee5fed7185->enter($__internal_cc8f0ccbe2b896373dd92e2a0fda7eaa2a40a3fa28177a0c186a8bee5fed7185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_e841ce271d72a50691f30abbcc9a0e47fcc9cd27176f529ad0957aaa064fcdf5->leave($__internal_e841ce271d72a50691f30abbcc9a0e47fcc9cd27176f529ad0957aaa064fcdf5_prof);

        
        $__internal_cc8f0ccbe2b896373dd92e2a0fda7eaa2a40a3fa28177a0c186a8bee5fed7185->leave($__internal_cc8f0ccbe2b896373dd92e2a0fda7eaa2a40a3fa28177a0c186a8bee5fed7185_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
