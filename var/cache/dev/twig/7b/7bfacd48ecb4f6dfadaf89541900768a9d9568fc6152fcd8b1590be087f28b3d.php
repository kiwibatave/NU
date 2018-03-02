<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1dd821dc3c3086041f9bbe2e79e988724c365da5bf6358c5d9ad785dc5793763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccad05c4cf83f6805bafb40c3b653874ed027d0ddc2d79ffed3e3ac8dbbac268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccad05c4cf83f6805bafb40c3b653874ed027d0ddc2d79ffed3e3ac8dbbac268->enter($__internal_ccad05c4cf83f6805bafb40c3b653874ed027d0ddc2d79ffed3e3ac8dbbac268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_67b1b4a440f74105c815832a0ab441ee5e67d2bc5a9c750d0d0c19ae1c617399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b1b4a440f74105c815832a0ab441ee5e67d2bc5a9c750d0d0c19ae1c617399->enter($__internal_67b1b4a440f74105c815832a0ab441ee5e67d2bc5a9c750d0d0c19ae1c617399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ccad05c4cf83f6805bafb40c3b653874ed027d0ddc2d79ffed3e3ac8dbbac268->leave($__internal_ccad05c4cf83f6805bafb40c3b653874ed027d0ddc2d79ffed3e3ac8dbbac268_prof);

        
        $__internal_67b1b4a440f74105c815832a0ab441ee5e67d2bc5a9c750d0d0c19ae1c617399->leave($__internal_67b1b4a440f74105c815832a0ab441ee5e67d2bc5a9c750d0d0c19ae1c617399_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_66930ae0cdb3a48c55c848c0405ae767cb32e8356011aae4b4d9a401d663e906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66930ae0cdb3a48c55c848c0405ae767cb32e8356011aae4b4d9a401d663e906->enter($__internal_66930ae0cdb3a48c55c848c0405ae767cb32e8356011aae4b4d9a401d663e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06b1362c3a5367794ab9e7eaac964cfddc4f3b41bc8ea33d1148679341545124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b1362c3a5367794ab9e7eaac964cfddc4f3b41bc8ea33d1148679341545124->enter($__internal_06b1362c3a5367794ab9e7eaac964cfddc4f3b41bc8ea33d1148679341545124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_06b1362c3a5367794ab9e7eaac964cfddc4f3b41bc8ea33d1148679341545124->leave($__internal_06b1362c3a5367794ab9e7eaac964cfddc4f3b41bc8ea33d1148679341545124_prof);

        
        $__internal_66930ae0cdb3a48c55c848c0405ae767cb32e8356011aae4b4d9a401d663e906->leave($__internal_66930ae0cdb3a48c55c848c0405ae767cb32e8356011aae4b4d9a401d663e906_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
