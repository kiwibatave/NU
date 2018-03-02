<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0d2fd2a98588bbf19aced293789d8d63b69a676270a53339e611c33392b9f3ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a10592bdf9154696a93f9e545e52690e1f24da9591a7dee94feaeff7e721548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a10592bdf9154696a93f9e545e52690e1f24da9591a7dee94feaeff7e721548->enter($__internal_7a10592bdf9154696a93f9e545e52690e1f24da9591a7dee94feaeff7e721548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ed377c9f95750593e2aeac768a8a1f774a93d12c8c16d71288d626e6a188fda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed377c9f95750593e2aeac768a8a1f774a93d12c8c16d71288d626e6a188fda6->enter($__internal_ed377c9f95750593e2aeac768a8a1f774a93d12c8c16d71288d626e6a188fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a10592bdf9154696a93f9e545e52690e1f24da9591a7dee94feaeff7e721548->leave($__internal_7a10592bdf9154696a93f9e545e52690e1f24da9591a7dee94feaeff7e721548_prof);

        
        $__internal_ed377c9f95750593e2aeac768a8a1f774a93d12c8c16d71288d626e6a188fda6->leave($__internal_ed377c9f95750593e2aeac768a8a1f774a93d12c8c16d71288d626e6a188fda6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb20e1242d2c7cd3690a7d7905cb16f08ab85911606d126f46d05153f99ee1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb20e1242d2c7cd3690a7d7905cb16f08ab85911606d126f46d05153f99ee1bb->enter($__internal_eb20e1242d2c7cd3690a7d7905cb16f08ab85911606d126f46d05153f99ee1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_524240673f55aabf93cff6e3711313d2ca534235751f5bb9458bddc1d9f35a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524240673f55aabf93cff6e3711313d2ca534235751f5bb9458bddc1d9f35a61->enter($__internal_524240673f55aabf93cff6e3711313d2ca534235751f5bb9458bddc1d9f35a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_524240673f55aabf93cff6e3711313d2ca534235751f5bb9458bddc1d9f35a61->leave($__internal_524240673f55aabf93cff6e3711313d2ca534235751f5bb9458bddc1d9f35a61_prof);

        
        $__internal_eb20e1242d2c7cd3690a7d7905cb16f08ab85911606d126f46d05153f99ee1bb->leave($__internal_eb20e1242d2c7cd3690a7d7905cb16f08ab85911606d126f46d05153f99ee1bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/NU/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
