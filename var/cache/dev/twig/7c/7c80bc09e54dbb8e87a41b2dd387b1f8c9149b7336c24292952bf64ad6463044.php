<?php

/* form_table_layout.html.twig */
class __TwigTemplate_6e761ef322a49b9aa83f31496cf05601d4d8625d655083e871b37b7544f06fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9defe175903f3e8a9dd3a0dffc87d020003f4724a310b8403c40c60933dbb635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9defe175903f3e8a9dd3a0dffc87d020003f4724a310b8403c40c60933dbb635->enter($__internal_9defe175903f3e8a9dd3a0dffc87d020003f4724a310b8403c40c60933dbb635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_9ae265fc4b4908360909e28a9814e6e953e4db629813b02f88ea1cc74ab54fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae265fc4b4908360909e28a9814e6e953e4db629813b02f88ea1cc74ab54fa1->enter($__internal_9ae265fc4b4908360909e28a9814e6e953e4db629813b02f88ea1cc74ab54fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9defe175903f3e8a9dd3a0dffc87d020003f4724a310b8403c40c60933dbb635->leave($__internal_9defe175903f3e8a9dd3a0dffc87d020003f4724a310b8403c40c60933dbb635_prof);

        
        $__internal_9ae265fc4b4908360909e28a9814e6e953e4db629813b02f88ea1cc74ab54fa1->leave($__internal_9ae265fc4b4908360909e28a9814e6e953e4db629813b02f88ea1cc74ab54fa1_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3cdd76c4307fcc6ed9b6d49943cbcfc1612fc957470ef1241033ff1eedd03778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdd76c4307fcc6ed9b6d49943cbcfc1612fc957470ef1241033ff1eedd03778->enter($__internal_3cdd76c4307fcc6ed9b6d49943cbcfc1612fc957470ef1241033ff1eedd03778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bc2893a0fef9ae6488c32ba399f80b148869824eb2d048f8f097605cac41189f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2893a0fef9ae6488c32ba399f80b148869824eb2d048f8f097605cac41189f->enter($__internal_bc2893a0fef9ae6488c32ba399f80b148869824eb2d048f8f097605cac41189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_bc2893a0fef9ae6488c32ba399f80b148869824eb2d048f8f097605cac41189f->leave($__internal_bc2893a0fef9ae6488c32ba399f80b148869824eb2d048f8f097605cac41189f_prof);

        
        $__internal_3cdd76c4307fcc6ed9b6d49943cbcfc1612fc957470ef1241033ff1eedd03778->leave($__internal_3cdd76c4307fcc6ed9b6d49943cbcfc1612fc957470ef1241033ff1eedd03778_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_84f8414c56ac5c32a42f38ae16ecc61ea49a5bd412c5d830a398a1c32c97db67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f8414c56ac5c32a42f38ae16ecc61ea49a5bd412c5d830a398a1c32c97db67->enter($__internal_84f8414c56ac5c32a42f38ae16ecc61ea49a5bd412c5d830a398a1c32c97db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_efe2ddf8175c8db0eb24a9b28b650fd1f520b683f6dc132055e9e99adaabf8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe2ddf8175c8db0eb24a9b28b650fd1f520b683f6dc132055e9e99adaabf8f2->enter($__internal_efe2ddf8175c8db0eb24a9b28b650fd1f520b683f6dc132055e9e99adaabf8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_efe2ddf8175c8db0eb24a9b28b650fd1f520b683f6dc132055e9e99adaabf8f2->leave($__internal_efe2ddf8175c8db0eb24a9b28b650fd1f520b683f6dc132055e9e99adaabf8f2_prof);

        
        $__internal_84f8414c56ac5c32a42f38ae16ecc61ea49a5bd412c5d830a398a1c32c97db67->leave($__internal_84f8414c56ac5c32a42f38ae16ecc61ea49a5bd412c5d830a398a1c32c97db67_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_df3260238c3ee07b1c1a0bb4598845c38a544803a16c6ae8ba4b99b5d33da30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3260238c3ee07b1c1a0bb4598845c38a544803a16c6ae8ba4b99b5d33da30b->enter($__internal_df3260238c3ee07b1c1a0bb4598845c38a544803a16c6ae8ba4b99b5d33da30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0759e11b6c86d51a760bc65fb2f00ceca7422af40d5c5d815d8ed3f08d44a83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0759e11b6c86d51a760bc65fb2f00ceca7422af40d5c5d815d8ed3f08d44a83e->enter($__internal_0759e11b6c86d51a760bc65fb2f00ceca7422af40d5c5d815d8ed3f08d44a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0759e11b6c86d51a760bc65fb2f00ceca7422af40d5c5d815d8ed3f08d44a83e->leave($__internal_0759e11b6c86d51a760bc65fb2f00ceca7422af40d5c5d815d8ed3f08d44a83e_prof);

        
        $__internal_df3260238c3ee07b1c1a0bb4598845c38a544803a16c6ae8ba4b99b5d33da30b->leave($__internal_df3260238c3ee07b1c1a0bb4598845c38a544803a16c6ae8ba4b99b5d33da30b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_8311a14b2ced1020297ab537c6f7cfdab0174beee862caaecc62659883960a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8311a14b2ced1020297ab537c6f7cfdab0174beee862caaecc62659883960a8c->enter($__internal_8311a14b2ced1020297ab537c6f7cfdab0174beee862caaecc62659883960a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7a03c827b925b6ee86d2048d90effc82aadf457c0627430716353d75f8997fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a03c827b925b6ee86d2048d90effc82aadf457c0627430716353d75f8997fc1->enter($__internal_7a03c827b925b6ee86d2048d90effc82aadf457c0627430716353d75f8997fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_7a03c827b925b6ee86d2048d90effc82aadf457c0627430716353d75f8997fc1->leave($__internal_7a03c827b925b6ee86d2048d90effc82aadf457c0627430716353d75f8997fc1_prof);

        
        $__internal_8311a14b2ced1020297ab537c6f7cfdab0174beee862caaecc62659883960a8c->leave($__internal_8311a14b2ced1020297ab537c6f7cfdab0174beee862caaecc62659883960a8c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
