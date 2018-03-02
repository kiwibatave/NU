<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_9d814c2bcb34a5849f038202cdcfb667c6b33760f182a7b61e373407100a5d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c67ad4428a52e200345cb860f7885a019d27dba16a1f73f1d4f6554fd4dc966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c67ad4428a52e200345cb860f7885a019d27dba16a1f73f1d4f6554fd4dc966->enter($__internal_5c67ad4428a52e200345cb860f7885a019d27dba16a1f73f1d4f6554fd4dc966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_4a920913dd5308cfe1cd334e198c4d8658d67a3d3aa55a6e994298471e48191b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a920913dd5308cfe1cd334e198c4d8658d67a3d3aa55a6e994298471e48191b->enter($__internal_4a920913dd5308cfe1cd334e198c4d8658d67a3d3aa55a6e994298471e48191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5c67ad4428a52e200345cb860f7885a019d27dba16a1f73f1d4f6554fd4dc966->leave($__internal_5c67ad4428a52e200345cb860f7885a019d27dba16a1f73f1d4f6554fd4dc966_prof);

        
        $__internal_4a920913dd5308cfe1cd334e198c4d8658d67a3d3aa55a6e994298471e48191b->leave($__internal_4a920913dd5308cfe1cd334e198c4d8658d67a3d3aa55a6e994298471e48191b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c3db611230a345870fcdc74aab062232746b93fb1b7014125bb8ab0f4c72f1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3db611230a345870fcdc74aab062232746b93fb1b7014125bb8ab0f4c72f1e2->enter($__internal_c3db611230a345870fcdc74aab062232746b93fb1b7014125bb8ab0f4c72f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1bdd028998209fd1619d65474d5d3e72c6cee78f2cf69a564aab3ee78fbe5835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdd028998209fd1619d65474d5d3e72c6cee78f2cf69a564aab3ee78fbe5835->enter($__internal_1bdd028998209fd1619d65474d5d3e72c6cee78f2cf69a564aab3ee78fbe5835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1bdd028998209fd1619d65474d5d3e72c6cee78f2cf69a564aab3ee78fbe5835->leave($__internal_1bdd028998209fd1619d65474d5d3e72c6cee78f2cf69a564aab3ee78fbe5835_prof);

        
        $__internal_c3db611230a345870fcdc74aab062232746b93fb1b7014125bb8ab0f4c72f1e2->leave($__internal_c3db611230a345870fcdc74aab062232746b93fb1b7014125bb8ab0f4c72f1e2_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b5967b138835ce7004e6f783c749c73826aee29acae8f6e55b3570b6a0590dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5967b138835ce7004e6f783c749c73826aee29acae8f6e55b3570b6a0590dc7->enter($__internal_b5967b138835ce7004e6f783c749c73826aee29acae8f6e55b3570b6a0590dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7c91e445dd858344a702954878d6d46abd56e294327deba84827f7690ae800b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c91e445dd858344a702954878d6d46abd56e294327deba84827f7690ae800b4->enter($__internal_7c91e445dd858344a702954878d6d46abd56e294327deba84827f7690ae800b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7c91e445dd858344a702954878d6d46abd56e294327deba84827f7690ae800b4->leave($__internal_7c91e445dd858344a702954878d6d46abd56e294327deba84827f7690ae800b4_prof);

        
        $__internal_b5967b138835ce7004e6f783c749c73826aee29acae8f6e55b3570b6a0590dc7->leave($__internal_b5967b138835ce7004e6f783c749c73826aee29acae8f6e55b3570b6a0590dc7_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_07ea8d3c090a6c635418aea993adfde886bb34001ac8af46774d340ae0b3272d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ea8d3c090a6c635418aea993adfde886bb34001ac8af46774d340ae0b3272d->enter($__internal_07ea8d3c090a6c635418aea993adfde886bb34001ac8af46774d340ae0b3272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_7655e7eb156fc69c22621125ec5cf7579d2a71ba95511be98e8bf5f90beff90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7655e7eb156fc69c22621125ec5cf7579d2a71ba95511be98e8bf5f90beff90f->enter($__internal_7655e7eb156fc69c22621125ec5cf7579d2a71ba95511be98e8bf5f90beff90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 18, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7655e7eb156fc69c22621125ec5cf7579d2a71ba95511be98e8bf5f90beff90f->leave($__internal_7655e7eb156fc69c22621125ec5cf7579d2a71ba95511be98e8bf5f90beff90f_prof);

        
        $__internal_07ea8d3c090a6c635418aea993adfde886bb34001ac8af46774d340ae0b3272d->leave($__internal_07ea8d3c090a6c635418aea993adfde886bb34001ac8af46774d340ae0b3272d_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a7591432e527f26891378d00c2df0886ab127338b0a7de71814d26f700f6c401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7591432e527f26891378d00c2df0886ab127338b0a7de71814d26f700f6c401->enter($__internal_a7591432e527f26891378d00c2df0886ab127338b0a7de71814d26f700f6c401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_26ee266b978eb173b0c1f40c65a9fca263adad0b8b4ce8f1415e90ac40a32917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ee266b978eb173b0c1f40c65a9fca263adad0b8b4ce8f1415e90ac40a32917->enter($__internal_26ee266b978eb173b0c1f40c65a9fca263adad0b8b4ce8f1415e90ac40a32917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_58c399bcf13af71a99268d2b3103d15b7b5f4577fb976fda165da05ad3df4b8b = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 23, $this->getSourceContext()); })())) && is_string($__internal_25e97320d285baf1ebc271e3c259a47bb63c5566827fb197bf7fa57581503820 = "{{") && ('' === $__internal_25e97320d285baf1ebc271e3c259a47bb63c5566827fb197bf7fa57581503820 || 0 === strpos($__internal_58c399bcf13af71a99268d2b3103d15b7b5f4577fb976fda165da05ad3df4b8b, $__internal_25e97320d285baf1ebc271e3c259a47bb63c5566827fb197bf7fa57581503820)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_565bdec6914175fa75c9028705d6bf952fa4a58da75b37fae1d18218f7885362 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })())) && is_string($__internal_706c99a64400bdf6c71bf434e8c3f013d9ba61526d154dc50001dc359ccc7a62 = "}}") && ('' === $__internal_706c99a64400bdf6c71bf434e8c3f013d9ba61526d154dc50001dc359ccc7a62 || $__internal_706c99a64400bdf6c71bf434e8c3f013d9ba61526d154dc50001dc359ccc7a62 === substr($__internal_565bdec6914175fa75c9028705d6bf952fa4a58da75b37fae1d18218f7885362, -strlen($__internal_706c99a64400bdf6c71bf434e8c3f013d9ba61526d154dc50001dc359ccc7a62))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 25, $this->getSourceContext()); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 25, $this->getSourceContext()); })()))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 27, $this->getSourceContext()); })())) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 28, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 31, $this->getSourceContext()); })())) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 32, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_26ee266b978eb173b0c1f40c65a9fca263adad0b8b4ce8f1415e90ac40a32917->leave($__internal_26ee266b978eb173b0c1f40c65a9fca263adad0b8b4ce8f1415e90ac40a32917_prof);

        
        $__internal_a7591432e527f26891378d00c2df0886ab127338b0a7de71814d26f700f6c401->leave($__internal_a7591432e527f26891378d00c2df0886ab127338b0a7de71814d26f700f6c401_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b842852565ed32f61b11bf5eb94d9bba60fe95175f00ee5ea22fc55a8efca3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b842852565ed32f61b11bf5eb94d9bba60fe95175f00ee5ea22fc55a8efca3d7->enter($__internal_b842852565ed32f61b11bf5eb94d9bba60fe95175f00ee5ea22fc55a8efca3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7f043fa0781c16d95460f6cd76ce812c162300b1b16e974c3713ebfba9139382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f043fa0781c16d95460f6cd76ce812c162300b1b16e974c3713ebfba9139382->enter($__internal_7f043fa0781c16d95460f6cd76ce812c162300b1b16e974c3713ebfba9139382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7f043fa0781c16d95460f6cd76ce812c162300b1b16e974c3713ebfba9139382->leave($__internal_7f043fa0781c16d95460f6cd76ce812c162300b1b16e974c3713ebfba9139382_prof);

        
        $__internal_b842852565ed32f61b11bf5eb94d9bba60fe95175f00ee5ea22fc55a8efca3d7->leave($__internal_b842852565ed32f61b11bf5eb94d9bba60fe95175f00ee5ea22fc55a8efca3d7_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_06d26657fbb591b699b4b6d3f6ca0ceb3ee4a82f5af6b341c07c819d137ff3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d26657fbb591b699b4b6d3f6ca0ceb3ee4a82f5af6b341c07c819d137ff3ac->enter($__internal_06d26657fbb591b699b4b6d3f6ca0ceb3ee4a82f5af6b341c07c819d137ff3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1e5eade35f3f661395e3d004ad4fd69fbdc86bcb9d270b9fda893973db90acb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5eade35f3f661395e3d004ad4fd69fbdc86bcb9d270b9fda893973db90acb1->enter($__internal_1e5eade35f3f661395e3d004ad4fd69fbdc86bcb9d270b9fda893973db90acb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 48, $this->getSourceContext()); })()) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 51, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_1e5eade35f3f661395e3d004ad4fd69fbdc86bcb9d270b9fda893973db90acb1->leave($__internal_1e5eade35f3f661395e3d004ad4fd69fbdc86bcb9d270b9fda893973db90acb1_prof);

        
        $__internal_06d26657fbb591b699b4b6d3f6ca0ceb3ee4a82f5af6b341c07c819d137ff3ac->leave($__internal_06d26657fbb591b699b4b6d3f6ca0ceb3ee4a82f5af6b341c07c819d137ff3ac_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8b7ca3c0e1a251ea2f1e1e6959340c60f7fec97e5b730abbf676d40ef380f845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7ca3c0e1a251ea2f1e1e6959340c60f7fec97e5b730abbf676d40ef380f845->enter($__internal_8b7ca3c0e1a251ea2f1e1e6959340c60f7fec97e5b730abbf676d40ef380f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d227a6d5d6149d84e529a0ad601871787cc371e38f025054b3d9601ffa20cb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d227a6d5d6149d84e529a0ad601871787cc371e38f025054b3d9601ffa20cb40->enter($__internal_d227a6d5d6149d84e529a0ad601871787cc371e38f025054b3d9601ffa20cb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 62, $this->getSourceContext()); })()) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 65, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 66, $this->getSourceContext()); })()))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 69, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 74, $this->getSourceContext()); })()))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_d227a6d5d6149d84e529a0ad601871787cc371e38f025054b3d9601ffa20cb40->leave($__internal_d227a6d5d6149d84e529a0ad601871787cc371e38f025054b3d9601ffa20cb40_prof);

        
        $__internal_8b7ca3c0e1a251ea2f1e1e6959340c60f7fec97e5b730abbf676d40ef380f845->leave($__internal_8b7ca3c0e1a251ea2f1e1e6959340c60f7fec97e5b730abbf676d40ef380f845_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f6f9fc51fa8819be31ac845033564bf9de62549e9e3034828f4f63ff1740d791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f9fc51fa8819be31ac845033564bf9de62549e9e3034828f4f63ff1740d791->enter($__internal_f6f9fc51fa8819be31ac845033564bf9de62549e9e3034828f4f63ff1740d791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b9ece062ca7ca8c31183c6d66021e424551bb19bd5112b5dacd959afc31bf44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ece062ca7ca8c31183c6d66021e424551bb19bd5112b5dacd959afc31bf44e->enter($__internal_b9ece062ca7ca8c31183c6d66021e424551bb19bd5112b5dacd959afc31bf44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 81, $this->getSourceContext()); })()) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 84, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 85, $this->getSourceContext()); })())))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 89, $this->getSourceContext()); })())))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_b9ece062ca7ca8c31183c6d66021e424551bb19bd5112b5dacd959afc31bf44e->leave($__internal_b9ece062ca7ca8c31183c6d66021e424551bb19bd5112b5dacd959afc31bf44e_prof);

        
        $__internal_f6f9fc51fa8819be31ac845033564bf9de62549e9e3034828f4f63ff1740d791->leave($__internal_f6f9fc51fa8819be31ac845033564bf9de62549e9e3034828f4f63ff1740d791_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_84f516de96cd0e278ed5be84dbe74d18099b540593682e18a3de09b90494f4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f516de96cd0e278ed5be84dbe74d18099b540593682e18a3de09b90494f4dd->enter($__internal_84f516de96cd0e278ed5be84dbe74d18099b540593682e18a3de09b90494f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_25263be3088c1bf88687bcd2128d809b26b81ec69c8a3541feaf2aa8630d6119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25263be3088c1bf88687bcd2128d809b26b81ec69c8a3541feaf2aa8630d6119->enter($__internal_25263be3088c1bf88687bcd2128d809b26b81ec69c8a3541feaf2aa8630d6119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 99, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 103, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 107, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 108, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 109, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 110, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 111, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 112, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 117, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 118, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 119, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 120, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 121, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 122, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 123, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 128, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_25263be3088c1bf88687bcd2128d809b26b81ec69c8a3541feaf2aa8630d6119->leave($__internal_25263be3088c1bf88687bcd2128d809b26b81ec69c8a3541feaf2aa8630d6119_prof);

        
        $__internal_84f516de96cd0e278ed5be84dbe74d18099b540593682e18a3de09b90494f4dd->leave($__internal_84f516de96cd0e278ed5be84dbe74d18099b540593682e18a3de09b90494f4dd_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b470b8d2e981eaa2fc7422960f30423d74b47f7fa71c3c1a85c12146f5f92c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b470b8d2e981eaa2fc7422960f30423d74b47f7fa71c3c1a85c12146f5f92c55->enter($__internal_b470b8d2e981eaa2fc7422960f30423d74b47f7fa71c3c1a85c12146f5f92c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_43fd1b2039b5c45ca674eefa66a61926781f55f0bc7ae0cbb456bf14b525faab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fd1b2039b5c45ca674eefa66a61926781f55f0bc7ae0cbb456bf14b525faab->enter($__internal_43fd1b2039b5c45ca674eefa66a61926781f55f0bc7ae0cbb456bf14b525faab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 134, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_43fd1b2039b5c45ca674eefa66a61926781f55f0bc7ae0cbb456bf14b525faab->leave($__internal_43fd1b2039b5c45ca674eefa66a61926781f55f0bc7ae0cbb456bf14b525faab_prof);

        
        $__internal_b470b8d2e981eaa2fc7422960f30423d74b47f7fa71c3c1a85c12146f5f92c55->leave($__internal_b470b8d2e981eaa2fc7422960f30423d74b47f7fa71c3c1a85c12146f5f92c55_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4c5ceda4d2d84175a67d627600d69e9aa3ef473ba529b33fc78489412f492ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5ceda4d2d84175a67d627600d69e9aa3ef473ba529b33fc78489412f492ff5->enter($__internal_4c5ceda4d2d84175a67d627600d69e9aa3ef473ba529b33fc78489412f492ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f9becf1d86024064396d49792939fe10aa37367da6d859f7561c77605e589da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9becf1d86024064396d49792939fe10aa37367da6d859f7561c77605e589da9->enter($__internal_f9becf1d86024064396d49792939fe10aa37367da6d859f7561c77605e589da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 143, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 151, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_f9becf1d86024064396d49792939fe10aa37367da6d859f7561c77605e589da9->leave($__internal_f9becf1d86024064396d49792939fe10aa37367da6d859f7561c77605e589da9_prof);

        
        $__internal_4c5ceda4d2d84175a67d627600d69e9aa3ef473ba529b33fc78489412f492ff5->leave($__internal_4c5ceda4d2d84175a67d627600d69e9aa3ef473ba529b33fc78489412f492ff5_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2d328d7e46715de066d4ce7979f52ff762800f3550a3262305d0122feb74f088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d328d7e46715de066d4ce7979f52ff762800f3550a3262305d0122feb74f088->enter($__internal_2d328d7e46715de066d4ce7979f52ff762800f3550a3262305d0122feb74f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b1df0f4046cc87d90995b974f421a1aaf0bc5d01af50341ec944d3939781d4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1df0f4046cc87d90995b974f421a1aaf0bc5d01af50341ec944d3939781d4e7->enter($__internal_b1df0f4046cc87d90995b974f421a1aaf0bc5d01af50341ec944d3939781d4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 159, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 160, $this->getSourceContext()); })()))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 164, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_b1df0f4046cc87d90995b974f421a1aaf0bc5d01af50341ec944d3939781d4e7->leave($__internal_b1df0f4046cc87d90995b974f421a1aaf0bc5d01af50341ec944d3939781d4e7_prof);

        
        $__internal_2d328d7e46715de066d4ce7979f52ff762800f3550a3262305d0122feb74f088->leave($__internal_2d328d7e46715de066d4ce7979f52ff762800f3550a3262305d0122feb74f088_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d8cb067d805cd08665ee1a0faf0e2f92209b95f1029cbd5765b840bf82537873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cb067d805cd08665ee1a0faf0e2f92209b95f1029cbd5765b840bf82537873->enter($__internal_d8cb067d805cd08665ee1a0faf0e2f92209b95f1029cbd5765b840bf82537873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_95e13f4983c1da5ee7238a8cc4cc74bd4f8214b65b99f0838aa1081b60be5d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e13f4983c1da5ee7238a8cc4cc74bd4f8214b65b99f0838aa1081b60be5d8f->enter($__internal_95e13f4983c1da5ee7238a8cc4cc74bd4f8214b65b99f0838aa1081b60be5d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 170, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 171, $this->getSourceContext()); })()))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_95e13f4983c1da5ee7238a8cc4cc74bd4f8214b65b99f0838aa1081b60be5d8f->leave($__internal_95e13f4983c1da5ee7238a8cc4cc74bd4f8214b65b99f0838aa1081b60be5d8f_prof);

        
        $__internal_d8cb067d805cd08665ee1a0faf0e2f92209b95f1029cbd5765b840bf82537873->leave($__internal_d8cb067d805cd08665ee1a0faf0e2f92209b95f1029cbd5765b840bf82537873_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ee864281001394b443987688a1856ac5e2a33ea74a6554f59a10a86d87a88a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee864281001394b443987688a1856ac5e2a33ea74a6554f59a10a86d87a88a3e->enter($__internal_ee864281001394b443987688a1856ac5e2a33ea74a6554f59a10a86d87a88a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_43b6fd4e2dc9c9002bdf55c99d789341fcb2f242bf46e759942b0e03a7f51f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b6fd4e2dc9c9002bdf55c99d789341fcb2f242bf46e759942b0e03a7f51f9c->enter($__internal_43b6fd4e2dc9c9002bdf55c99d789341fcb2f242bf46e759942b0e03a7f51f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 183, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_43b6fd4e2dc9c9002bdf55c99d789341fcb2f242bf46e759942b0e03a7f51f9c->leave($__internal_43b6fd4e2dc9c9002bdf55c99d789341fcb2f242bf46e759942b0e03a7f51f9c_prof);

        
        $__internal_ee864281001394b443987688a1856ac5e2a33ea74a6554f59a10a86d87a88a3e->leave($__internal_ee864281001394b443987688a1856ac5e2a33ea74a6554f59a10a86d87a88a3e_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_05b6894b341640d6d2af372abfb666fd2cdda721f5db012c2e49421bc79e56fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b6894b341640d6d2af372abfb666fd2cdda721f5db012c2e49421bc79e56fb->enter($__internal_05b6894b341640d6d2af372abfb666fd2cdda721f5db012c2e49421bc79e56fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c77a7be869a534143235a9be140ed1d39826d3b3d15a4c9a8719cd32eb014dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77a7be869a534143235a9be140ed1d39826d3b3d15a4c9a8719cd32eb014dff->enter($__internal_c77a7be869a534143235a9be140ed1d39826d3b3d15a4c9a8719cd32eb014dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 189, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c77a7be869a534143235a9be140ed1d39826d3b3d15a4c9a8719cd32eb014dff->leave($__internal_c77a7be869a534143235a9be140ed1d39826d3b3d15a4c9a8719cd32eb014dff_prof);

        
        $__internal_05b6894b341640d6d2af372abfb666fd2cdda721f5db012c2e49421bc79e56fb->leave($__internal_05b6894b341640d6d2af372abfb666fd2cdda721f5db012c2e49421bc79e56fb_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_560b90911aee6005f5cb9890ce30ab4f29b9658ca5911ab26134bc5c7aa3df1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560b90911aee6005f5cb9890ce30ab4f29b9658ca5911ab26134bc5c7aa3df1c->enter($__internal_560b90911aee6005f5cb9890ce30ab4f29b9658ca5911ab26134bc5c7aa3df1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c68b281dc7cd48dc2fc4520084bd8d7efd44f70a2f8408571e1004139e369f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68b281dc7cd48dc2fc4520084bd8d7efd44f70a2f8408571e1004139e369f4a->enter($__internal_c68b281dc7cd48dc2fc4520084bd8d7efd44f70a2f8408571e1004139e369f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 194, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 194, $this->getSourceContext()); })())));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c68b281dc7cd48dc2fc4520084bd8d7efd44f70a2f8408571e1004139e369f4a->leave($__internal_c68b281dc7cd48dc2fc4520084bd8d7efd44f70a2f8408571e1004139e369f4a_prof);

        
        $__internal_560b90911aee6005f5cb9890ce30ab4f29b9658ca5911ab26134bc5c7aa3df1c->leave($__internal_560b90911aee6005f5cb9890ce30ab4f29b9658ca5911ab26134bc5c7aa3df1c_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5a7e1b4f2c52cb24d422cbc875f248563f7c74d7c7b2fe6733b047508bd2b3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7e1b4f2c52cb24d422cbc875f248563f7c74d7c7b2fe6733b047508bd2b3ba->enter($__internal_5a7e1b4f2c52cb24d422cbc875f248563f7c74d7c7b2fe6733b047508bd2b3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_037244e55681c224cc77f1a9fb6d126b87f13245b6051fec6274ffb0be7a8ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037244e55681c224cc77f1a9fb6d126b87f13245b6051fec6274ffb0be7a8ac1->enter($__internal_037244e55681c224cc77f1a9fb6d126b87f13245b6051fec6274ffb0be7a8ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 200, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 200, $this->getSourceContext()); })())));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_037244e55681c224cc77f1a9fb6d126b87f13245b6051fec6274ffb0be7a8ac1->leave($__internal_037244e55681c224cc77f1a9fb6d126b87f13245b6051fec6274ffb0be7a8ac1_prof);

        
        $__internal_5a7e1b4f2c52cb24d422cbc875f248563f7c74d7c7b2fe6733b047508bd2b3ba->leave($__internal_5a7e1b4f2c52cb24d422cbc875f248563f7c74d7c7b2fe6733b047508bd2b3ba_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1725dd98416473811890dab1fa9a51a818491f957d94cfa551b315d2d3ebb1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1725dd98416473811890dab1fa9a51a818491f957d94cfa551b315d2d3ebb1a1->enter($__internal_1725dd98416473811890dab1fa9a51a818491f957d94cfa551b315d2d3ebb1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5447acbdc0b2ff19eb446662dab6f63060375363e3218ef4f972005806088d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5447acbdc0b2ff19eb446662dab6f63060375363e3218ef4f972005806088d41->enter($__internal_5447acbdc0b2ff19eb446662dab6f63060375363e3218ef4f972005806088d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 208, $this->getSourceContext()); })())) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 209, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 212, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 212, $this->getSourceContext()); })())))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 214, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 214, $this->getSourceContext()); })())))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 215, $this->getSourceContext()); })()))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 216, $this->getSourceContext()); })()), array("%name%" =>                     // line 217
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 217, $this->getSourceContext()); })()), "%id%" =>                     // line 218
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 218, $this->getSourceContext()); })())));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 221, $this->getSourceContext()); })()));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 224, $this->getSourceContext()); })()));
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
            echo ">";
            // line 225
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 225, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_5447acbdc0b2ff19eb446662dab6f63060375363e3218ef4f972005806088d41->leave($__internal_5447acbdc0b2ff19eb446662dab6f63060375363e3218ef4f972005806088d41_prof);

        
        $__internal_1725dd98416473811890dab1fa9a51a818491f957d94cfa551b315d2d3ebb1a1->leave($__internal_1725dd98416473811890dab1fa9a51a818491f957d94cfa551b315d2d3ebb1a1_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4995e655f89ae26fe8bea0a73193ce42c50f124b39d124fb9feb38fed95d2641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4995e655f89ae26fe8bea0a73193ce42c50f124b39d124fb9feb38fed95d2641->enter($__internal_4995e655f89ae26fe8bea0a73193ce42c50f124b39d124fb9feb38fed95d2641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bbb3bc9b8b66a1fd781a29aece73ee01dd882f09903a29ba186a2681ce557f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb3bc9b8b66a1fd781a29aece73ee01dd882f09903a29ba186a2681ce557f50->enter($__internal_bbb3bc9b8b66a1fd781a29aece73ee01dd882f09903a29ba186a2681ce557f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 233, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 233, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 233, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->getSourceContext()); })()), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->getSourceContext()); })()), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_bbb3bc9b8b66a1fd781a29aece73ee01dd882f09903a29ba186a2681ce557f50->leave($__internal_bbb3bc9b8b66a1fd781a29aece73ee01dd882f09903a29ba186a2681ce557f50_prof);

        
        $__internal_4995e655f89ae26fe8bea0a73193ce42c50f124b39d124fb9feb38fed95d2641->leave($__internal_4995e655f89ae26fe8bea0a73193ce42c50f124b39d124fb9feb38fed95d2641_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_06f7550a185b0c87d122d096c0812051d119b1819264989f71a299f871148f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f7550a185b0c87d122d096c0812051d119b1819264989f71a299f871148f08->enter($__internal_06f7550a185b0c87d122d096c0812051d119b1819264989f71a299f871148f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ef155a746fa9c4343ed2a2eac14cc45d9e9bbc6b9f9bf5d0956138af11864b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef155a746fa9c4343ed2a2eac14cc45d9e9bbc6b9f9bf5d0956138af11864b7->enter($__internal_0ef155a746fa9c4343ed2a2eac14cc45d9e9bbc6b9f9bf5d0956138af11864b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->getSourceContext()); })()), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_0ef155a746fa9c4343ed2a2eac14cc45d9e9bbc6b9f9bf5d0956138af11864b7->leave($__internal_0ef155a746fa9c4343ed2a2eac14cc45d9e9bbc6b9f9bf5d0956138af11864b7_prof);

        
        $__internal_06f7550a185b0c87d122d096c0812051d119b1819264989f71a299f871148f08->leave($__internal_06f7550a185b0c87d122d096c0812051d119b1819264989f71a299f871148f08_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6a0dbb062227b195782c836910e5a5c2b9a9c10e3509ad95270401dc0bba1f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0dbb062227b195782c836910e5a5c2b9a9c10e3509ad95270401dc0bba1f04->enter($__internal_6a0dbb062227b195782c836910e5a5c2b9a9c10e3509ad95270401dc0bba1f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_20f578b1eff20d854fad795387af8ee4aadb841f7c71f7e945f7ac69796f6356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f578b1eff20d854fad795387af8ee4aadb841f7c71f7e945f7ac69796f6356->enter($__internal_20f578b1eff20d854fad795387af8ee4aadb841f7c71f7e945f7ac69796f6356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20f578b1eff20d854fad795387af8ee4aadb841f7c71f7e945f7ac69796f6356->leave($__internal_20f578b1eff20d854fad795387af8ee4aadb841f7c71f7e945f7ac69796f6356_prof);

        
        $__internal_6a0dbb062227b195782c836910e5a5c2b9a9c10e3509ad95270401dc0bba1f04->leave($__internal_6a0dbb062227b195782c836910e5a5c2b9a9c10e3509ad95270401dc0bba1f04_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a32c9a1041bbdade1bb13f0da47600421aac3a25531e73acf587d29489d972c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32c9a1041bbdade1bb13f0da47600421aac3a25531e73acf587d29489d972c6->enter($__internal_a32c9a1041bbdade1bb13f0da47600421aac3a25531e73acf587d29489d972c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7856aa252df4e07e6d49dffc1d9610af882ace30ec4d6a0eb90e1456e9c693e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7856aa252df4e07e6d49dffc1d9610af882ace30ec4d6a0eb90e1456e9c693e0->enter($__internal_7856aa252df4e07e6d49dffc1d9610af882ace30ec4d6a0eb90e1456e9c693e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7856aa252df4e07e6d49dffc1d9610af882ace30ec4d6a0eb90e1456e9c693e0->leave($__internal_7856aa252df4e07e6d49dffc1d9610af882ace30ec4d6a0eb90e1456e9c693e0_prof);

        
        $__internal_a32c9a1041bbdade1bb13f0da47600421aac3a25531e73acf587d29489d972c6->leave($__internal_a32c9a1041bbdade1bb13f0da47600421aac3a25531e73acf587d29489d972c6_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b03efbe319c527cb6b4c7e760a06c6bbd592f5b42b896a2d1a2a4fb590ae3356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03efbe319c527cb6b4c7e760a06c6bbd592f5b42b896a2d1a2a4fb590ae3356->enter($__internal_b03efbe319c527cb6b4c7e760a06c6bbd592f5b42b896a2d1a2a4fb590ae3356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_38fb6db97d252636ef59d15f29aec1967150bff9315df9d4dabb3338cde85693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fb6db97d252636ef59d15f29aec1967150bff9315df9d4dabb3338cde85693->enter($__internal_38fb6db97d252636ef59d15f29aec1967150bff9315df9d4dabb3338cde85693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_38fb6db97d252636ef59d15f29aec1967150bff9315df9d4dabb3338cde85693->leave($__internal_38fb6db97d252636ef59d15f29aec1967150bff9315df9d4dabb3338cde85693_prof);

        
        $__internal_b03efbe319c527cb6b4c7e760a06c6bbd592f5b42b896a2d1a2a4fb590ae3356->leave($__internal_b03efbe319c527cb6b4c7e760a06c6bbd592f5b42b896a2d1a2a4fb590ae3356_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6699393055da8eb9b2e01055acf02d494a3aef0ccfc4bcaac0be78cc48f2e4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6699393055da8eb9b2e01055acf02d494a3aef0ccfc4bcaac0be78cc48f2e4ef->enter($__internal_6699393055da8eb9b2e01055acf02d494a3aef0ccfc4bcaac0be78cc48f2e4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ca104931eb5488c8a322c644904091869a10c4463e7ffe2f2180e4b884259a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca104931eb5488c8a322c644904091869a10c4463e7ffe2f2180e4b884259a5e->enter($__internal_ca104931eb5488c8a322c644904091869a10c4463e7ffe2f2180e4b884259a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ca104931eb5488c8a322c644904091869a10c4463e7ffe2f2180e4b884259a5e->leave($__internal_ca104931eb5488c8a322c644904091869a10c4463e7ffe2f2180e4b884259a5e_prof);

        
        $__internal_6699393055da8eb9b2e01055acf02d494a3aef0ccfc4bcaac0be78cc48f2e4ef->leave($__internal_6699393055da8eb9b2e01055acf02d494a3aef0ccfc4bcaac0be78cc48f2e4ef_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_404daba1d1a679acf15cbc9830940e843bd75778e9229013bc88ef17fa49608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404daba1d1a679acf15cbc9830940e843bd75778e9229013bc88ef17fa49608b->enter($__internal_404daba1d1a679acf15cbc9830940e843bd75778e9229013bc88ef17fa49608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_daa32c36a344afc91eb8d35383e6b128d58febbaa64c54da810d8c7ecfd6cfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa32c36a344afc91eb8d35383e6b128d58febbaa64c54da810d8c7ecfd6cfe3->enter($__internal_daa32c36a344afc91eb8d35383e6b128d58febbaa64c54da810d8c7ecfd6cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 267, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 268, $this->getSourceContext()); })()), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 269, $this->getSourceContext()); })()), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_daa32c36a344afc91eb8d35383e6b128d58febbaa64c54da810d8c7ecfd6cfe3->leave($__internal_daa32c36a344afc91eb8d35383e6b128d58febbaa64c54da810d8c7ecfd6cfe3_prof);

        
        $__internal_404daba1d1a679acf15cbc9830940e843bd75778e9229013bc88ef17fa49608b->leave($__internal_404daba1d1a679acf15cbc9830940e843bd75778e9229013bc88ef17fa49608b_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_08238f20f31471d2a8b91911083772fda080c9f04570a3aa04c55c3b9ad5e52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08238f20f31471d2a8b91911083772fda080c9f04570a3aa04c55c3b9ad5e52f->enter($__internal_08238f20f31471d2a8b91911083772fda080c9f04570a3aa04c55c3b9ad5e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_271e84c9b3ab6d30a5aa5c081d8d626a3a5629947aab48395d27f1e4a875c001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271e84c9b3ab6d30a5aa5c081d8d626a3a5629947aab48395d27f1e4a875c001->enter($__internal_271e84c9b3ab6d30a5aa5c081d8d626a3a5629947aab48395d27f1e4a875c001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 274, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 275, $this->getSourceContext()); })()), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 276, $this->getSourceContext()); })()), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_271e84c9b3ab6d30a5aa5c081d8d626a3a5629947aab48395d27f1e4a875c001->leave($__internal_271e84c9b3ab6d30a5aa5c081d8d626a3a5629947aab48395d27f1e4a875c001_prof);

        
        $__internal_08238f20f31471d2a8b91911083772fda080c9f04570a3aa04c55c3b9ad5e52f->leave($__internal_08238f20f31471d2a8b91911083772fda080c9f04570a3aa04c55c3b9ad5e52f_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c0a0d840397192ced06cd27a1293d1ae75699193fe0d1b7d7e40088c011c7a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a0d840397192ced06cd27a1293d1ae75699193fe0d1b7d7e40088c011c7a46->enter($__internal_c0a0d840397192ced06cd27a1293d1ae75699193fe0d1b7d7e40088c011c7a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6be95d942b92f26282224d88d7831cec0fdd8b1e57a1ccdff94e40205638d1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be95d942b92f26282224d88d7831cec0fdd8b1e57a1ccdff94e40205638d1a5->enter($__internal_6be95d942b92f26282224d88d7831cec0fdd8b1e57a1ccdff94e40205638d1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 283, $this->getSourceContext()); })())) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 284, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 286, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6be95d942b92f26282224d88d7831cec0fdd8b1e57a1ccdff94e40205638d1a5->leave($__internal_6be95d942b92f26282224d88d7831cec0fdd8b1e57a1ccdff94e40205638d1a5_prof);

        
        $__internal_c0a0d840397192ced06cd27a1293d1ae75699193fe0d1b7d7e40088c011c7a46->leave($__internal_c0a0d840397192ced06cd27a1293d1ae75699193fe0d1b7d7e40088c011c7a46_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/NU/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
