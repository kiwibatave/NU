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
        $__internal_df2225bc7fbd1699835f72b3b1921bb439127a61dd32ab957ce473ec45496095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2225bc7fbd1699835f72b3b1921bb439127a61dd32ab957ce473ec45496095->enter($__internal_df2225bc7fbd1699835f72b3b1921bb439127a61dd32ab957ce473ec45496095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_b526d26eb82f70c04707b1f103f1d60a489a10abfdead59d0fb74d7da34681cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b526d26eb82f70c04707b1f103f1d60a489a10abfdead59d0fb74d7da34681cd->enter($__internal_b526d26eb82f70c04707b1f103f1d60a489a10abfdead59d0fb74d7da34681cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_df2225bc7fbd1699835f72b3b1921bb439127a61dd32ab957ce473ec45496095->leave($__internal_df2225bc7fbd1699835f72b3b1921bb439127a61dd32ab957ce473ec45496095_prof);

        
        $__internal_b526d26eb82f70c04707b1f103f1d60a489a10abfdead59d0fb74d7da34681cd->leave($__internal_b526d26eb82f70c04707b1f103f1d60a489a10abfdead59d0fb74d7da34681cd_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b5b32cb9ae0fa7b27c4f60678a51540c4871cc72a3ff5a6cccfdbd8102a3b093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b32cb9ae0fa7b27c4f60678a51540c4871cc72a3ff5a6cccfdbd8102a3b093->enter($__internal_b5b32cb9ae0fa7b27c4f60678a51540c4871cc72a3ff5a6cccfdbd8102a3b093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d24150601dadde53b5b7f4401db0bcd6b88dc55077599461320e21a6f52471c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24150601dadde53b5b7f4401db0bcd6b88dc55077599461320e21a6f52471c2->enter($__internal_d24150601dadde53b5b7f4401db0bcd6b88dc55077599461320e21a6f52471c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d24150601dadde53b5b7f4401db0bcd6b88dc55077599461320e21a6f52471c2->leave($__internal_d24150601dadde53b5b7f4401db0bcd6b88dc55077599461320e21a6f52471c2_prof);

        
        $__internal_b5b32cb9ae0fa7b27c4f60678a51540c4871cc72a3ff5a6cccfdbd8102a3b093->leave($__internal_b5b32cb9ae0fa7b27c4f60678a51540c4871cc72a3ff5a6cccfdbd8102a3b093_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1e8f154db5d8f5e7723e100b2c6cb2a7a369acab2ef4f89de66e16c5f07ce886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8f154db5d8f5e7723e100b2c6cb2a7a369acab2ef4f89de66e16c5f07ce886->enter($__internal_1e8f154db5d8f5e7723e100b2c6cb2a7a369acab2ef4f89de66e16c5f07ce886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1033cf7a8a80afc0414e8f5e7aa1c2f63bd3db2da847172a839ccd514b0da9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1033cf7a8a80afc0414e8f5e7aa1c2f63bd3db2da847172a839ccd514b0da9bf->enter($__internal_1033cf7a8a80afc0414e8f5e7aa1c2f63bd3db2da847172a839ccd514b0da9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_1033cf7a8a80afc0414e8f5e7aa1c2f63bd3db2da847172a839ccd514b0da9bf->leave($__internal_1033cf7a8a80afc0414e8f5e7aa1c2f63bd3db2da847172a839ccd514b0da9bf_prof);

        
        $__internal_1e8f154db5d8f5e7723e100b2c6cb2a7a369acab2ef4f89de66e16c5f07ce886->leave($__internal_1e8f154db5d8f5e7723e100b2c6cb2a7a369acab2ef4f89de66e16c5f07ce886_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_989478dd47622ca02ce8f667e605a96c5e3474b5cb0e4b48b257fa14a49c4fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989478dd47622ca02ce8f667e605a96c5e3474b5cb0e4b48b257fa14a49c4fd0->enter($__internal_989478dd47622ca02ce8f667e605a96c5e3474b5cb0e4b48b257fa14a49c4fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_03b3c909393e08e9d096de7e34107d256c0fc3a091a4d5dc804770cb61d95a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b3c909393e08e9d096de7e34107d256c0fc3a091a4d5dc804770cb61d95a1f->enter($__internal_03b3c909393e08e9d096de7e34107d256c0fc3a091a4d5dc804770cb61d95a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_03b3c909393e08e9d096de7e34107d256c0fc3a091a4d5dc804770cb61d95a1f->leave($__internal_03b3c909393e08e9d096de7e34107d256c0fc3a091a4d5dc804770cb61d95a1f_prof);

        
        $__internal_989478dd47622ca02ce8f667e605a96c5e3474b5cb0e4b48b257fa14a49c4fd0->leave($__internal_989478dd47622ca02ce8f667e605a96c5e3474b5cb0e4b48b257fa14a49c4fd0_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6f67293f83b8ce6c3b0dc02f6a73d99fdf129470a414f7f8d27382ab155e825c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f67293f83b8ce6c3b0dc02f6a73d99fdf129470a414f7f8d27382ab155e825c->enter($__internal_6f67293f83b8ce6c3b0dc02f6a73d99fdf129470a414f7f8d27382ab155e825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_29e511dc81e9088b85721fc97c36b21d528448aba7bdac810a525a45be673c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e511dc81e9088b85721fc97c36b21d528448aba7bdac810a525a45be673c9f->enter($__internal_29e511dc81e9088b85721fc97c36b21d528448aba7bdac810a525a45be673c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_29e511dc81e9088b85721fc97c36b21d528448aba7bdac810a525a45be673c9f->leave($__internal_29e511dc81e9088b85721fc97c36b21d528448aba7bdac810a525a45be673c9f_prof);

        
        $__internal_6f67293f83b8ce6c3b0dc02f6a73d99fdf129470a414f7f8d27382ab155e825c->leave($__internal_6f67293f83b8ce6c3b0dc02f6a73d99fdf129470a414f7f8d27382ab155e825c_prof);

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
