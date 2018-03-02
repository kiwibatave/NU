<?php

/* BCPlatformBundle:Advert:materialize_layout.html.twig */
class __TwigTemplate_4ab53b3436a1f8188072f031d8af8f3f234d9e2a64c61fc86dbe01bc787e3a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "BCPlatformBundle:Advert:materialize_layout.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d59ec0629529acaf10e762c31935d019ae328b52cf21c5e945ee1ec3e973960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d59ec0629529acaf10e762c31935d019ae328b52cf21c5e945ee1ec3e973960->enter($__internal_2d59ec0629529acaf10e762c31935d019ae328b52cf21c5e945ee1ec3e973960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:materialize_layout.html.twig"));

        $__internal_8fcd1436d94b422825b3cd3789e40666ed7275cc05f38707d34636a88e8b1d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcd1436d94b422825b3cd3789e40666ed7275cc05f38707d34636a88e8b1d4d->enter($__internal_8fcd1436d94b422825b3cd3789e40666ed7275cc05f38707d34636a88e8b1d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BCPlatformBundle:Advert:materialize_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d59ec0629529acaf10e762c31935d019ae328b52cf21c5e945ee1ec3e973960->leave($__internal_2d59ec0629529acaf10e762c31935d019ae328b52cf21c5e945ee1ec3e973960_prof);

        
        $__internal_8fcd1436d94b422825b3cd3789e40666ed7275cc05f38707d34636a88e8b1d4d->leave($__internal_8fcd1436d94b422825b3cd3789e40666ed7275cc05f38707d34636a88e8b1d4d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_98652a97c4cc62ed8329723450d2d62d84c2b4427275d555d77c6f0aa0eab128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98652a97c4cc62ed8329723450d2d62d84c2b4427275d555d77c6f0aa0eab128->enter($__internal_98652a97c4cc62ed8329723450d2d62d84c2b4427275d555d77c6f0aa0eab128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_085baf2783900a53e32061a4bcbd2becefb02ba6764c4d878579ebf197adcac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085baf2783900a53e32061a4bcbd2becefb02ba6764c4d878579ebf197adcac7->enter($__internal_085baf2783900a53e32061a4bcbd2becefb02ba6764c4d878579ebf197adcac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 4, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 4, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'label');
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'errors');
        // line 9
        echo "</div>
    </div>";
        
        $__internal_085baf2783900a53e32061a4bcbd2becefb02ba6764c4d878579ebf197adcac7->leave($__internal_085baf2783900a53e32061a4bcbd2becefb02ba6764c4d878579ebf197adcac7_prof);

        
        $__internal_98652a97c4cc62ed8329723450d2d62d84c2b4427275d555d77c6f0aa0eab128->leave($__internal_98652a97c4cc62ed8329723450d2d62d84c2b4427275d555d77c6f0aa0eab128_prof);

    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3903204c21854545a19b5a87840dc96b1e57ff57e793ea921290e05faed90217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3903204c21854545a19b5a87840dc96b1e57ff57e793ea921290e05faed90217->enter($__internal_3903204c21854545a19b5a87840dc96b1e57ff57e793ea921290e05faed90217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6ae31bd95c290cc721f45dbc79f11b9aa6c5e7fab7231c742fdbdeec7944054f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae31bd95c290cc721f45dbc79f11b9aa6c5e7fab7231c742fdbdeec7944054f->enter($__internal_6ae31bd95c290cc721f45dbc79f11b9aa6c5e7fab7231c742fdbdeec7944054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 14
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 14, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 17
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 18
        if (array_key_exists("tooltip", $context)) {
            // line 19
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "tooltip" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_6ae31bd95c290cc721f45dbc79f11b9aa6c5e7fab7231c742fdbdeec7944054f->leave($__internal_6ae31bd95c290cc721f45dbc79f11b9aa6c5e7fab7231c742fdbdeec7944054f_prof);

        
        $__internal_3903204c21854545a19b5a87840dc96b1e57ff57e793ea921290e05faed90217->leave($__internal_3903204c21854545a19b5a87840dc96b1e57ff57e793ea921290e05faed90217_prof);

    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82accbc5ee378889121f088703c318960c8c6748718927ba35b89d58c5ee994e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82accbc5ee378889121f088703c318960c8c6748718927ba35b89d58c5ee994e->enter($__internal_82accbc5ee378889121f088703c318960c8c6748718927ba35b89d58c5ee994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_50e0159986b76c503090ade88d7b399efbc68c6f16b5622eda5e5636d4446d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e0159986b76c503090ade88d7b399efbc68c6f16b5622eda5e5636d4446d06->enter($__internal_50e0159986b76c503090ade88d7b399efbc68c6f16b5622eda5e5636d4446d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 26
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 26, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 27
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_50e0159986b76c503090ade88d7b399efbc68c6f16b5622eda5e5636d4446d06->leave($__internal_50e0159986b76c503090ade88d7b399efbc68c6f16b5622eda5e5636d4446d06_prof);

        
        $__internal_82accbc5ee378889121f088703c318960c8c6748718927ba35b89d58c5ee994e->leave($__internal_82accbc5ee378889121f088703c318960c8c6748718927ba35b89d58c5ee994e_prof);

    }

    // line 30
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_38f48471e1a0f52c87b64a34207e2a08e05ed945bc8ab8b244bc02e9f08ea67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f48471e1a0f52c87b64a34207e2a08e05ed945bc8ab8b244bc02e9f08ea67e->enter($__internal_38f48471e1a0f52c87b64a34207e2a08e05ed945bc8ab8b244bc02e9f08ea67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3b99bfcbfb4741c135bdc8f12d830ebc148a217d93330902d4b67a31f84550f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b99bfcbfb4741c135bdc8f12d830ebc148a217d93330902d4b67a31f84550f3->enter($__internal_3b99bfcbfb4741c135bdc8f12d830ebc148a217d93330902d4b67a31f84550f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 31
        echo "<div class=\"row ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 31, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'widget');
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'label');
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'errors');
        // line 35
        echo "</div>";
        
        $__internal_3b99bfcbfb4741c135bdc8f12d830ebc148a217d93330902d4b67a31f84550f3->leave($__internal_3b99bfcbfb4741c135bdc8f12d830ebc148a217d93330902d4b67a31f84550f3_prof);

        
        $__internal_38f48471e1a0f52c87b64a34207e2a08e05ed945bc8ab8b244bc02e9f08ea67e->leave($__internal_38f48471e1a0f52c87b64a34207e2a08e05ed945bc8ab8b244bc02e9f08ea67e_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b929a8ef42a59580d4f3fa19f6090a26bb1370d6cdd1f66f33f450828647ba12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b929a8ef42a59580d4f3fa19f6090a26bb1370d6cdd1f66f33f450828647ba12->enter($__internal_b929a8ef42a59580d4f3fa19f6090a26bb1370d6cdd1f66f33f450828647ba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6bf2b80d5b9f4d8e65e1b5358fcebe9c60f4da9e023239b3fba548a0b9ae7ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf2b80d5b9f4d8e65e1b5358fcebe9c60f4da9e023239b3fba548a0b9ae7ffc->enter($__internal_6bf2b80d5b9f4d8e65e1b5358fcebe9c60f4da9e023239b3fba548a0b9ae7ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 39
        echo "<input type=\"checkbox\" class=\"filled-in\"";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 39, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6bf2b80d5b9f4d8e65e1b5358fcebe9c60f4da9e023239b3fba548a0b9ae7ffc->leave($__internal_6bf2b80d5b9f4d8e65e1b5358fcebe9c60f4da9e023239b3fba548a0b9ae7ffc_prof);

        
        $__internal_b929a8ef42a59580d4f3fa19f6090a26bb1370d6cdd1f66f33f450828647ba12->leave($__internal_b929a8ef42a59580d4f3fa19f6090a26bb1370d6cdd1f66f33f450828647ba12_prof);

    }

    // line 43
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_31630c0936768351ed11a9dcf1f27944a5597071489d379322e9d1e79a542e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31630c0936768351ed11a9dcf1f27944a5597071489d379322e9d1e79a542e22->enter($__internal_31630c0936768351ed11a9dcf1f27944a5597071489d379322e9d1e79a542e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e08c5e731860dcc9ec567537706c729c6120206d0c6600ce5ec1986017f91456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08c5e731860dcc9ec567537706c729c6120206d0c6600ce5ec1986017f91456->enter($__internal_e08c5e731860dcc9ec567537706c729c6120206d0c6600ce5ec1986017f91456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 44
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 44, $this->getSourceContext()); })()) === false)) {
            // line 45
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 45, $this->getSourceContext()); })())) {
                // line 46
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 46, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 46, $this->getSourceContext()); })())));
            }
            // line 48
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 48, $this->getSourceContext()); })())) {
                // line 49
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 49, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 51
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 51, $this->getSourceContext()); })()))) {
                // line 52
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 52, $this->getSourceContext()); })()))) {
                    // line 53
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 53, $this->getSourceContext()); })()), array("%name%" =>                     // line 54
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 54, $this->getSourceContext()); })()), "%id%" =>                     // line 55
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 55, $this->getSourceContext()); })())));
                } else {
                    // line 58
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 58, $this->getSourceContext()); })()));
                }
            }
            // line 61
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 61, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 62
            echo ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 62, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 62, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 62, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 62, $this->getSourceContext()); })()))));
            echo "
        </label>";
        }
        
        $__internal_e08c5e731860dcc9ec567537706c729c6120206d0c6600ce5ec1986017f91456->leave($__internal_e08c5e731860dcc9ec567537706c729c6120206d0c6600ce5ec1986017f91456_prof);

        
        $__internal_31630c0936768351ed11a9dcf1f27944a5597071489d379322e9d1e79a542e22->leave($__internal_31630c0936768351ed11a9dcf1f27944a5597071489d379322e9d1e79a542e22_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ea3049c4039a7bcff2002aee5cff564434defd7fe6994c03a41bffa80407aa7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3049c4039a7bcff2002aee5cff564434defd7fe6994c03a41bffa80407aa7a->enter($__internal_ea3049c4039a7bcff2002aee5cff564434defd7fe6994c03a41bffa80407aa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_db550c416739e1335662fb46c8ed33573496aa6e10c8c32b9908eddcce48657a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db550c416739e1335662fb46c8ed33573496aa6e10c8c32b9908eddcce48657a->enter($__internal_db550c416739e1335662fb46c8ed33573496aa6e10c8c32b9908eddcce48657a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_db550c416739e1335662fb46c8ed33573496aa6e10c8c32b9908eddcce48657a->leave($__internal_db550c416739e1335662fb46c8ed33573496aa6e10c8c32b9908eddcce48657a_prof);

        
        $__internal_ea3049c4039a7bcff2002aee5cff564434defd7fe6994c03a41bffa80407aa7a->leave($__internal_ea3049c4039a7bcff2002aee5cff564434defd7fe6994c03a41bffa80407aa7a_prof);

    }

    // line 72
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1fdf111c89d03996fd1e64513ed07197dab8e33c6d26af71257978c88a85c04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdf111c89d03996fd1e64513ed07197dab8e33c6d26af71257978c88a85c04f->enter($__internal_1fdf111c89d03996fd1e64513ed07197dab8e33c6d26af71257978c88a85c04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_fd47a3eaad21052be92c0f17d3048cb474023848aa6b8490c7f620dbc79a8649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd47a3eaad21052be92c0f17d3048cb474023848aa6b8490c7f620dbc79a8649->enter($__internal_fd47a3eaad21052be92c0f17d3048cb474023848aa6b8490c7f620dbc79a8649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 73
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 73, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 73, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 73, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 73, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 73, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 74
            $context["required"] = false;
        }
        // line 76
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 76, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 77
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 77, $this->getSourceContext()); })()))) {
            // line 78
            echo "<option value=\"\"";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 78, $this->getSourceContext()); })())) {
                echo " disabled=\"disabled\" ";
                if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 78, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 78, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 78, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 78, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 78, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 78, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 80
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 80, $this->getSourceContext()); })())) > 0)) {
            // line 81
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 81, $this->getSourceContext()); })());
            // line 82
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 83
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 83, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 83, $this->getSourceContext()); })())))) {
                // line 84
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 84, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 87
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 87, $this->getSourceContext()); })());
        // line 88
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 89
        echo "</select>";
        
        $__internal_fd47a3eaad21052be92c0f17d3048cb474023848aa6b8490c7f620dbc79a8649->leave($__internal_fd47a3eaad21052be92c0f17d3048cb474023848aa6b8490c7f620dbc79a8649_prof);

        
        $__internal_1fdf111c89d03996fd1e64513ed07197dab8e33c6d26af71257978c88a85c04f->leave($__internal_1fdf111c89d03996fd1e64513ed07197dab8e33c6d26af71257978c88a85c04f_prof);

    }

    // line 92
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_aa6c1175b245b8a027a71c70ec8425d4280a14f3cf4e452887a2bed7384a7d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6c1175b245b8a027a71c70ec8425d4280a14f3cf4e452887a2bed7384a7d40->enter($__internal_aa6c1175b245b8a027a71c70ec8425d4280a14f3cf4e452887a2bed7384a7d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_372e5636eadc13e2cf49a9fc12a615c6c75443d33abce946368dac451ebe39b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372e5636eadc13e2cf49a9fc12a615c6c75443d33abce946368dac451ebe39b1->enter($__internal_372e5636eadc13e2cf49a9fc12a615c6c75443d33abce946368dac451ebe39b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 93
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 93, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 94
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_372e5636eadc13e2cf49a9fc12a615c6c75443d33abce946368dac451ebe39b1->leave($__internal_372e5636eadc13e2cf49a9fc12a615c6c75443d33abce946368dac451ebe39b1_prof);

        
        $__internal_aa6c1175b245b8a027a71c70ec8425d4280a14f3cf4e452887a2bed7384a7d40->leave($__internal_aa6c1175b245b8a027a71c70ec8425d4280a14f3cf4e452887a2bed7384a7d40_prof);

    }

    // line 97
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8970656550e1b97007cf4838c5fe3339cc7e20e61671e2c7a7651eb97b2ccc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8970656550e1b97007cf4838c5fe3339cc7e20e61671e2c7a7651eb97b2ccc04->enter($__internal_8970656550e1b97007cf4838c5fe3339cc7e20e61671e2c7a7651eb97b2ccc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3db0f76029736ba3f7699d023ee14485253837f7cc244b7beb7ec991001ba728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db0f76029736ba3f7699d023ee14485253837f7cc244b7beb7ec991001ba728->enter($__internal_3db0f76029736ba3f7699d023ee14485253837f7cc244b7beb7ec991001ba728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 98
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 98, $this->getSourceContext()); })())) > 0)) {
            // line 99
            echo "<ul>";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 100, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 101
                echo "<li class=\"error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "</ul>";
        }
        
        $__internal_3db0f76029736ba3f7699d023ee14485253837f7cc244b7beb7ec991001ba728->leave($__internal_3db0f76029736ba3f7699d023ee14485253837f7cc244b7beb7ec991001ba728_prof);

        
        $__internal_8970656550e1b97007cf4838c5fe3339cc7e20e61671e2c7a7651eb97b2ccc04->leave($__internal_8970656550e1b97007cf4838c5fe3339cc7e20e61671e2c7a7651eb97b2ccc04_prof);

    }

    public function getTemplateName()
    {
        return "BCPlatformBundle:Advert:materialize_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 103,  385 => 101,  381 => 100,  379 => 99,  377 => 98,  368 => 97,  357 => 94,  355 => 93,  346 => 92,  336 => 89,  334 => 88,  332 => 87,  326 => 84,  324 => 83,  322 => 82,  320 => 81,  318 => 80,  306 => 78,  304 => 77,  297 => 76,  294 => 74,  292 => 73,  283 => 72,  273 => 69,  271 => 68,  262 => 67,  249 => 62,  233 => 61,  229 => 58,  226 => 55,  225 => 54,  224 => 53,  222 => 52,  220 => 51,  217 => 49,  215 => 48,  212 => 46,  210 => 45,  208 => 44,  199 => 43,  179 => 39,  170 => 38,  160 => 35,  158 => 34,  156 => 33,  154 => 32,  148 => 31,  139 => 30,  129 => 27,  127 => 26,  118 => 25,  104 => 20,  101 => 19,  99 => 18,  97 => 17,  94 => 15,  91 => 14,  82 => 13,  71 => 9,  69 => 8,  67 => 7,  65 => 6,  58 => 4,  49 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_row -%}
    <div class=\"row {% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block checkbox_widget -%}
    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget %}

{# Checkbox label is raw here #}
{%- block checkbox_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}
        </label>
    {%- endif -%}
{%- endblock -%}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}
    {{ parent() }}
{%- endblock -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li class=\"error\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}", "BCPlatformBundle:Advert:materialize_layout.html.twig", "/var/www/html/NU/src/BC/PlatformBundle/Resources/views/Advert/materialize_layout.html.twig");
    }
}
