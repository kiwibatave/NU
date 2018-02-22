<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ec76bc2342070f6fc25b6b2868afbd91cef1fce17b8cfe31d15b221d95f0a45c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edb1d0babce80601c5f91232be157d312752a464b017dbb995b8bbcee2bc4126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb1d0babce80601c5f91232be157d312752a464b017dbb995b8bbcee2bc4126->enter($__internal_edb1d0babce80601c5f91232be157d312752a464b017dbb995b8bbcee2bc4126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_51b49ec8a59f7980e01a7d4f6d15a23921ca9837877a4b0c26ef206676a5f9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b49ec8a59f7980e01a7d4f6d15a23921ca9837877a4b0c26ef206676a5f9e9->enter($__internal_51b49ec8a59f7980e01a7d4f6d15a23921ca9837877a4b0c26ef206676a5f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_edb1d0babce80601c5f91232be157d312752a464b017dbb995b8bbcee2bc4126->leave($__internal_edb1d0babce80601c5f91232be157d312752a464b017dbb995b8bbcee2bc4126_prof);

        
        $__internal_51b49ec8a59f7980e01a7d4f6d15a23921ca9837877a4b0c26ef206676a5f9e9->leave($__internal_51b49ec8a59f7980e01a7d4f6d15a23921ca9837877a4b0c26ef206676a5f9e9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7ea762a89a326987ad981a5b8259ce81708c839e99de3a61ffd45513efb1c1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea762a89a326987ad981a5b8259ce81708c839e99de3a61ffd45513efb1c1b1->enter($__internal_7ea762a89a326987ad981a5b8259ce81708c839e99de3a61ffd45513efb1c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_10065bdf977822fb4fecaacde16b705485d32da76cf765e7883b6569920d2b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10065bdf977822fb4fecaacde16b705485d32da76cf765e7883b6569920d2b65->enter($__internal_10065bdf977822fb4fecaacde16b705485d32da76cf765e7883b6569920d2b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_10065bdf977822fb4fecaacde16b705485d32da76cf765e7883b6569920d2b65->leave($__internal_10065bdf977822fb4fecaacde16b705485d32da76cf765e7883b6569920d2b65_prof);

        
        $__internal_7ea762a89a326987ad981a5b8259ce81708c839e99de3a61ffd45513efb1c1b1->leave($__internal_7ea762a89a326987ad981a5b8259ce81708c839e99de3a61ffd45513efb1c1b1_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_63c544e0dc57e5c18a943d1ed998f901b98117f86dfae7766e162351505dfa93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c544e0dc57e5c18a943d1ed998f901b98117f86dfae7766e162351505dfa93->enter($__internal_63c544e0dc57e5c18a943d1ed998f901b98117f86dfae7766e162351505dfa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6dbfd3cfc7158ad3bd7d38078b90e7aca40713d925e7678f365709cf960bf3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbfd3cfc7158ad3bd7d38078b90e7aca40713d925e7678f365709cf960bf3af->enter($__internal_6dbfd3cfc7158ad3bd7d38078b90e7aca40713d925e7678f365709cf960bf3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6dbfd3cfc7158ad3bd7d38078b90e7aca40713d925e7678f365709cf960bf3af->leave($__internal_6dbfd3cfc7158ad3bd7d38078b90e7aca40713d925e7678f365709cf960bf3af_prof);

        
        $__internal_63c544e0dc57e5c18a943d1ed998f901b98117f86dfae7766e162351505dfa93->leave($__internal_63c544e0dc57e5c18a943d1ed998f901b98117f86dfae7766e162351505dfa93_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_fd0a6e0c2594c8d13c39df4bf44e74f29e66037c0162a6fa3c562b47f72ae02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0a6e0c2594c8d13c39df4bf44e74f29e66037c0162a6fa3c562b47f72ae02d->enter($__internal_fd0a6e0c2594c8d13c39df4bf44e74f29e66037c0162a6fa3c562b47f72ae02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_5916b94b00d6f251ccd0cb52985e4a81dd1b82dcfafafd3acdfd6d02193f259a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5916b94b00d6f251ccd0cb52985e4a81dd1b82dcfafafd3acdfd6d02193f259a->enter($__internal_5916b94b00d6f251ccd0cb52985e4a81dd1b82dcfafafd3acdfd6d02193f259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_5916b94b00d6f251ccd0cb52985e4a81dd1b82dcfafafd3acdfd6d02193f259a->leave($__internal_5916b94b00d6f251ccd0cb52985e4a81dd1b82dcfafafd3acdfd6d02193f259a_prof);

        
        $__internal_fd0a6e0c2594c8d13c39df4bf44e74f29e66037c0162a6fa3c562b47f72ae02d->leave($__internal_fd0a6e0c2594c8d13c39df4bf44e74f29e66037c0162a6fa3c562b47f72ae02d_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e3d62a4c7c17288d8567d85901c1d4502978e017e0e61a4c51873d3837da4eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d62a4c7c17288d8567d85901c1d4502978e017e0e61a4c51873d3837da4eef->enter($__internal_e3d62a4c7c17288d8567d85901c1d4502978e017e0e61a4c51873d3837da4eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8b98553cd5eae4141964ece15c36df37aa81a91176f986867a36ba1227fe5766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b98553cd5eae4141964ece15c36df37aa81a91176f986867a36ba1227fe5766->enter($__internal_8b98553cd5eae4141964ece15c36df37aa81a91176f986867a36ba1227fe5766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_8b98553cd5eae4141964ece15c36df37aa81a91176f986867a36ba1227fe5766->leave($__internal_8b98553cd5eae4141964ece15c36df37aa81a91176f986867a36ba1227fe5766_prof);

        
        $__internal_e3d62a4c7c17288d8567d85901c1d4502978e017e0e61a4c51873d3837da4eef->leave($__internal_e3d62a4c7c17288d8567d85901c1d4502978e017e0e61a4c51873d3837da4eef_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ee5b3e4255bbe8b20c6073a991ee2cef176a4d6859fb946ef31003dbf3200329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5b3e4255bbe8b20c6073a991ee2cef176a4d6859fb946ef31003dbf3200329->enter($__internal_ee5b3e4255bbe8b20c6073a991ee2cef176a4d6859fb946ef31003dbf3200329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e4d4d770ef04d4afc58b1f061ea17bfa23d46a245382d40acd2937b4853df9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d4d770ef04d4afc58b1f061ea17bfa23d46a245382d40acd2937b4853df9e9->enter($__internal_e4d4d770ef04d4afc58b1f061ea17bfa23d46a245382d40acd2937b4853df9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e4d4d770ef04d4afc58b1f061ea17bfa23d46a245382d40acd2937b4853df9e9->leave($__internal_e4d4d770ef04d4afc58b1f061ea17bfa23d46a245382d40acd2937b4853df9e9_prof);

        
        $__internal_ee5b3e4255bbe8b20c6073a991ee2cef176a4d6859fb946ef31003dbf3200329->leave($__internal_ee5b3e4255bbe8b20c6073a991ee2cef176a4d6859fb946ef31003dbf3200329_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2197f5d7105b5ba4c2d3502c50b8bc22df0e1456f5ac477db2fbc841650d70f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2197f5d7105b5ba4c2d3502c50b8bc22df0e1456f5ac477db2fbc841650d70f1->enter($__internal_2197f5d7105b5ba4c2d3502c50b8bc22df0e1456f5ac477db2fbc841650d70f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0501e1767b480e21747e146658310e6780d70679a6db0584943be46c3d272624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0501e1767b480e21747e146658310e6780d70679a6db0584943be46c3d272624->enter($__internal_0501e1767b480e21747e146658310e6780d70679a6db0584943be46c3d272624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0501e1767b480e21747e146658310e6780d70679a6db0584943be46c3d272624->leave($__internal_0501e1767b480e21747e146658310e6780d70679a6db0584943be46c3d272624_prof);

        
        $__internal_2197f5d7105b5ba4c2d3502c50b8bc22df0e1456f5ac477db2fbc841650d70f1->leave($__internal_2197f5d7105b5ba4c2d3502c50b8bc22df0e1456f5ac477db2fbc841650d70f1_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_55d929dd118c156c6fda27fd2dfe1163826d10433ed644c4e88de5fe22bd3388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d929dd118c156c6fda27fd2dfe1163826d10433ed644c4e88de5fe22bd3388->enter($__internal_55d929dd118c156c6fda27fd2dfe1163826d10433ed644c4e88de5fe22bd3388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6e343b352837dee8db88dfb55136f8886877f3ab06d478c44aa772f0b2571b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e343b352837dee8db88dfb55136f8886877f3ab06d478c44aa772f0b2571b0b->enter($__internal_6e343b352837dee8db88dfb55136f8886877f3ab06d478c44aa772f0b2571b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e343b352837dee8db88dfb55136f8886877f3ab06d478c44aa772f0b2571b0b->leave($__internal_6e343b352837dee8db88dfb55136f8886877f3ab06d478c44aa772f0b2571b0b_prof);

        
        $__internal_55d929dd118c156c6fda27fd2dfe1163826d10433ed644c4e88de5fe22bd3388->leave($__internal_55d929dd118c156c6fda27fd2dfe1163826d10433ed644c4e88de5fe22bd3388_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_36ed145d66939c7d7b3aa16818a9687ff4004a76b45cce74ec1b1f452e0f2a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ed145d66939c7d7b3aa16818a9687ff4004a76b45cce74ec1b1f452e0f2a2f->enter($__internal_36ed145d66939c7d7b3aa16818a9687ff4004a76b45cce74ec1b1f452e0f2a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a64b6e4913b2639efc24877908b7e7ff5f93f68585eb73f3521b9ec138dac2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64b6e4913b2639efc24877908b7e7ff5f93f68585eb73f3521b9ec138dac2f7->enter($__internal_a64b6e4913b2639efc24877908b7e7ff5f93f68585eb73f3521b9ec138dac2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a64b6e4913b2639efc24877908b7e7ff5f93f68585eb73f3521b9ec138dac2f7->leave($__internal_a64b6e4913b2639efc24877908b7e7ff5f93f68585eb73f3521b9ec138dac2f7_prof);

        
        $__internal_36ed145d66939c7d7b3aa16818a9687ff4004a76b45cce74ec1b1f452e0f2a2f->leave($__internal_36ed145d66939c7d7b3aa16818a9687ff4004a76b45cce74ec1b1f452e0f2a2f_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_402c5a5d6f4fa95ab55432361bf7620467d22e0fadbc882376902353468e4053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402c5a5d6f4fa95ab55432361bf7620467d22e0fadbc882376902353468e4053->enter($__internal_402c5a5d6f4fa95ab55432361bf7620467d22e0fadbc882376902353468e4053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ca50fcc9f21289f8361f9757df0b498a62d5699a9d48ace60694aee9e23662f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca50fcc9f21289f8361f9757df0b498a62d5699a9d48ace60694aee9e23662f5->enter($__internal_ca50fcc9f21289f8361f9757df0b498a62d5699a9d48ace60694aee9e23662f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ca50fcc9f21289f8361f9757df0b498a62d5699a9d48ace60694aee9e23662f5->leave($__internal_ca50fcc9f21289f8361f9757df0b498a62d5699a9d48ace60694aee9e23662f5_prof);

        
        $__internal_402c5a5d6f4fa95ab55432361bf7620467d22e0fadbc882376902353468e4053->leave($__internal_402c5a5d6f4fa95ab55432361bf7620467d22e0fadbc882376902353468e4053_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_670f35ab3d679fcf431079fc579b75d51e90a06f3ffcc63970f4902f6198522b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670f35ab3d679fcf431079fc579b75d51e90a06f3ffcc63970f4902f6198522b->enter($__internal_670f35ab3d679fcf431079fc579b75d51e90a06f3ffcc63970f4902f6198522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_4dd6cf80eeeb293aaf9e8270f5cda08837e9c9722ab02226764a51defcba0574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd6cf80eeeb293aaf9e8270f5cda08837e9c9722ab02226764a51defcba0574->enter($__internal_4dd6cf80eeeb293aaf9e8270f5cda08837e9c9722ab02226764a51defcba0574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_4dd6cf80eeeb293aaf9e8270f5cda08837e9c9722ab02226764a51defcba0574->leave($__internal_4dd6cf80eeeb293aaf9e8270f5cda08837e9c9722ab02226764a51defcba0574_prof);

        
        $__internal_670f35ab3d679fcf431079fc579b75d51e90a06f3ffcc63970f4902f6198522b->leave($__internal_670f35ab3d679fcf431079fc579b75d51e90a06f3ffcc63970f4902f6198522b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
