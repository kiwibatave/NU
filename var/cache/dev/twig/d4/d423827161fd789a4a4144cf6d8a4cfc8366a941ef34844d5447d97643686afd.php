<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_ccfb990cd311837e3c2a38f374628091b39283dc87e8bcf486c7671b3788a618 extends Twig_Template
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
        $__internal_9c9252b1254b90c7a77799861ba6d70327e814b7ea1b3b3ddb2ee6c96c7d8868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9252b1254b90c7a77799861ba6d70327e814b7ea1b3b3ddb2ee6c96c7d8868->enter($__internal_9c9252b1254b90c7a77799861ba6d70327e814b7ea1b3b3ddb2ee6c96c7d8868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_fe6baa71b3ff7977efdaff0b23c3f57ef62fd0e127a945fc7b0f5e3f11574f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6baa71b3ff7977efdaff0b23c3f57ef62fd0e127a945fc7b0f5e3f11574f9f->enter($__internal_fe6baa71b3ff7977efdaff0b23c3f57ef62fd0e127a945fc7b0f5e3f11574f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_9c9252b1254b90c7a77799861ba6d70327e814b7ea1b3b3ddb2ee6c96c7d8868->leave($__internal_9c9252b1254b90c7a77799861ba6d70327e814b7ea1b3b3ddb2ee6c96c7d8868_prof);

        
        $__internal_fe6baa71b3ff7977efdaff0b23c3f57ef62fd0e127a945fc7b0f5e3f11574f9f->leave($__internal_fe6baa71b3ff7977efdaff0b23c3f57ef62fd0e127a945fc7b0f5e3f11574f9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
