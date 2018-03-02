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
        $__internal_4be15effda6b3c7e754e85edc65773df887a53cfec87714225d25aa3b68158b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be15effda6b3c7e754e85edc65773df887a53cfec87714225d25aa3b68158b8->enter($__internal_4be15effda6b3c7e754e85edc65773df887a53cfec87714225d25aa3b68158b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_dda60ddeb9d2e315d5167017fd0d42383c7e777b88818b8d9f7299378f7f35c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda60ddeb9d2e315d5167017fd0d42383c7e777b88818b8d9f7299378f7f35c7->enter($__internal_dda60ddeb9d2e315d5167017fd0d42383c7e777b88818b8d9f7299378f7f35c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_4be15effda6b3c7e754e85edc65773df887a53cfec87714225d25aa3b68158b8->leave($__internal_4be15effda6b3c7e754e85edc65773df887a53cfec87714225d25aa3b68158b8_prof);

        
        $__internal_dda60ddeb9d2e315d5167017fd0d42383c7e777b88818b8d9f7299378f7f35c7->leave($__internal_dda60ddeb9d2e315d5167017fd0d42383c7e777b88818b8d9f7299378f7f35c7_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a812575b029c18983f0a83024596a607b759b849b3c96ab835b7d5367495fe42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a812575b029c18983f0a83024596a607b759b849b3c96ab835b7d5367495fe42->enter($__internal_a812575b029c18983f0a83024596a607b759b849b3c96ab835b7d5367495fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b47c066e014df5310b12f7b67f52157dd811a1a914e2b74d442fa52aefbc6908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47c066e014df5310b12f7b67f52157dd811a1a914e2b74d442fa52aefbc6908->enter($__internal_b47c066e014df5310b12f7b67f52157dd811a1a914e2b74d442fa52aefbc6908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b47c066e014df5310b12f7b67f52157dd811a1a914e2b74d442fa52aefbc6908->leave($__internal_b47c066e014df5310b12f7b67f52157dd811a1a914e2b74d442fa52aefbc6908_prof);

        
        $__internal_a812575b029c18983f0a83024596a607b759b849b3c96ab835b7d5367495fe42->leave($__internal_a812575b029c18983f0a83024596a607b759b849b3c96ab835b7d5367495fe42_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1096980f346d44462659602ea7619f4eea4878d24eac83dea6a93b1b23570b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1096980f346d44462659602ea7619f4eea4878d24eac83dea6a93b1b23570b26->enter($__internal_1096980f346d44462659602ea7619f4eea4878d24eac83dea6a93b1b23570b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2765031ccadf782f73ff4dbe153d1ece74948c61d80936602d8a1c4ad5dc9054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2765031ccadf782f73ff4dbe153d1ece74948c61d80936602d8a1c4ad5dc9054->enter($__internal_2765031ccadf782f73ff4dbe153d1ece74948c61d80936602d8a1c4ad5dc9054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2765031ccadf782f73ff4dbe153d1ece74948c61d80936602d8a1c4ad5dc9054->leave($__internal_2765031ccadf782f73ff4dbe153d1ece74948c61d80936602d8a1c4ad5dc9054_prof);

        
        $__internal_1096980f346d44462659602ea7619f4eea4878d24eac83dea6a93b1b23570b26->leave($__internal_1096980f346d44462659602ea7619f4eea4878d24eac83dea6a93b1b23570b26_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c8d04d120a97cd74b745eb7a5f51f7f70dfe92e3d1b9ec56cbde051a8d83471f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d04d120a97cd74b745eb7a5f51f7f70dfe92e3d1b9ec56cbde051a8d83471f->enter($__internal_c8d04d120a97cd74b745eb7a5f51f7f70dfe92e3d1b9ec56cbde051a8d83471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d55f9c4b8b6ccefa4b46a99669fd9434fb5fcaf13e1b32f9fc8ad4edf996ae92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55f9c4b8b6ccefa4b46a99669fd9434fb5fcaf13e1b32f9fc8ad4edf996ae92->enter($__internal_d55f9c4b8b6ccefa4b46a99669fd9434fb5fcaf13e1b32f9fc8ad4edf996ae92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d55f9c4b8b6ccefa4b46a99669fd9434fb5fcaf13e1b32f9fc8ad4edf996ae92->leave($__internal_d55f9c4b8b6ccefa4b46a99669fd9434fb5fcaf13e1b32f9fc8ad4edf996ae92_prof);

        
        $__internal_c8d04d120a97cd74b745eb7a5f51f7f70dfe92e3d1b9ec56cbde051a8d83471f->leave($__internal_c8d04d120a97cd74b745eb7a5f51f7f70dfe92e3d1b9ec56cbde051a8d83471f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_42656ec2939272b8f963211deab3bb16a6450309f6fbbe0213a5378abf43ff40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42656ec2939272b8f963211deab3bb16a6450309f6fbbe0213a5378abf43ff40->enter($__internal_42656ec2939272b8f963211deab3bb16a6450309f6fbbe0213a5378abf43ff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e974617f7a1c7a525ad755dad4e50b171af3713374030dec25e3ec48132b40cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e974617f7a1c7a525ad755dad4e50b171af3713374030dec25e3ec48132b40cc->enter($__internal_e974617f7a1c7a525ad755dad4e50b171af3713374030dec25e3ec48132b40cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e974617f7a1c7a525ad755dad4e50b171af3713374030dec25e3ec48132b40cc->leave($__internal_e974617f7a1c7a525ad755dad4e50b171af3713374030dec25e3ec48132b40cc_prof);

        
        $__internal_42656ec2939272b8f963211deab3bb16a6450309f6fbbe0213a5378abf43ff40->leave($__internal_42656ec2939272b8f963211deab3bb16a6450309f6fbbe0213a5378abf43ff40_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_20714ea7f13dd6efdc5dba12ca927e7e14eb2b519fcebfe85f16532bda496743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20714ea7f13dd6efdc5dba12ca927e7e14eb2b519fcebfe85f16532bda496743->enter($__internal_20714ea7f13dd6efdc5dba12ca927e7e14eb2b519fcebfe85f16532bda496743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c730723d973136cbdbea491f22579f572d488edeae6bd7b8cb6157edcf9be977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c730723d973136cbdbea491f22579f572d488edeae6bd7b8cb6157edcf9be977->enter($__internal_c730723d973136cbdbea491f22579f572d488edeae6bd7b8cb6157edcf9be977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c730723d973136cbdbea491f22579f572d488edeae6bd7b8cb6157edcf9be977->leave($__internal_c730723d973136cbdbea491f22579f572d488edeae6bd7b8cb6157edcf9be977_prof);

        
        $__internal_20714ea7f13dd6efdc5dba12ca927e7e14eb2b519fcebfe85f16532bda496743->leave($__internal_20714ea7f13dd6efdc5dba12ca927e7e14eb2b519fcebfe85f16532bda496743_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dba02e2184751902aae546755f947523d2837b3e72bc8bd2f68b283354562a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba02e2184751902aae546755f947523d2837b3e72bc8bd2f68b283354562a60->enter($__internal_dba02e2184751902aae546755f947523d2837b3e72bc8bd2f68b283354562a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d616b3bdb0f187a476dca021adb5fcbbd652bccdd213ec317ef6b52e17553f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d616b3bdb0f187a476dca021adb5fcbbd652bccdd213ec317ef6b52e17553f07->enter($__internal_d616b3bdb0f187a476dca021adb5fcbbd652bccdd213ec317ef6b52e17553f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d616b3bdb0f187a476dca021adb5fcbbd652bccdd213ec317ef6b52e17553f07->leave($__internal_d616b3bdb0f187a476dca021adb5fcbbd652bccdd213ec317ef6b52e17553f07_prof);

        
        $__internal_dba02e2184751902aae546755f947523d2837b3e72bc8bd2f68b283354562a60->leave($__internal_dba02e2184751902aae546755f947523d2837b3e72bc8bd2f68b283354562a60_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_9f37ef79b89d09761bcc3856565727287ef87d2d7f4ff122b3a914834ec2145a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f37ef79b89d09761bcc3856565727287ef87d2d7f4ff122b3a914834ec2145a->enter($__internal_9f37ef79b89d09761bcc3856565727287ef87d2d7f4ff122b3a914834ec2145a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_1ea63ff128d1948ef855896feec7fc3d846986ec598feaa04e8bdc5141abdabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea63ff128d1948ef855896feec7fc3d846986ec598feaa04e8bdc5141abdabd->enter($__internal_1ea63ff128d1948ef855896feec7fc3d846986ec598feaa04e8bdc5141abdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_1ea63ff128d1948ef855896feec7fc3d846986ec598feaa04e8bdc5141abdabd->leave($__internal_1ea63ff128d1948ef855896feec7fc3d846986ec598feaa04e8bdc5141abdabd_prof);

        
        $__internal_9f37ef79b89d09761bcc3856565727287ef87d2d7f4ff122b3a914834ec2145a->leave($__internal_9f37ef79b89d09761bcc3856565727287ef87d2d7f4ff122b3a914834ec2145a_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_8f9ed2c87581748cfceb4d1c119f699f5bbe2c4111ef201fdc465703ab3f4e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9ed2c87581748cfceb4d1c119f699f5bbe2c4111ef201fdc465703ab3f4e84->enter($__internal_8f9ed2c87581748cfceb4d1c119f699f5bbe2c4111ef201fdc465703ab3f4e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_62e9f459534cc7f8371ca152c2ec7f64a0021ebde428b5fc6f1f083abb8487bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e9f459534cc7f8371ca152c2ec7f64a0021ebde428b5fc6f1f083abb8487bd->enter($__internal_62e9f459534cc7f8371ca152c2ec7f64a0021ebde428b5fc6f1f083abb8487bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_62e9f459534cc7f8371ca152c2ec7f64a0021ebde428b5fc6f1f083abb8487bd->leave($__internal_62e9f459534cc7f8371ca152c2ec7f64a0021ebde428b5fc6f1f083abb8487bd_prof);

        
        $__internal_8f9ed2c87581748cfceb4d1c119f699f5bbe2c4111ef201fdc465703ab3f4e84->leave($__internal_8f9ed2c87581748cfceb4d1c119f699f5bbe2c4111ef201fdc465703ab3f4e84_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d3e0f906f752446726445c20024ba454c0e9152112e98c8147eea1c4f088657c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e0f906f752446726445c20024ba454c0e9152112e98c8147eea1c4f088657c->enter($__internal_d3e0f906f752446726445c20024ba454c0e9152112e98c8147eea1c4f088657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4fc1a503254bab623125b3ef76d514421af4fc578ddbb7a73d72579500f26f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc1a503254bab623125b3ef76d514421af4fc578ddbb7a73d72579500f26f1a->enter($__internal_4fc1a503254bab623125b3ef76d514421af4fc578ddbb7a73d72579500f26f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_4fc1a503254bab623125b3ef76d514421af4fc578ddbb7a73d72579500f26f1a->leave($__internal_4fc1a503254bab623125b3ef76d514421af4fc578ddbb7a73d72579500f26f1a_prof);

        
        $__internal_d3e0f906f752446726445c20024ba454c0e9152112e98c8147eea1c4f088657c->leave($__internal_d3e0f906f752446726445c20024ba454c0e9152112e98c8147eea1c4f088657c_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b3f5fc1209b682ffda8b5d0dfe4014df67d156e942622777831c5eacd1fd02e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f5fc1209b682ffda8b5d0dfe4014df67d156e942622777831c5eacd1fd02e8->enter($__internal_b3f5fc1209b682ffda8b5d0dfe4014df67d156e942622777831c5eacd1fd02e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_16be68aa5d0f543108059d6ac83e2f0342f695247282302b1de8686d293b420c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16be68aa5d0f543108059d6ac83e2f0342f695247282302b1de8686d293b420c->enter($__internal_16be68aa5d0f543108059d6ac83e2f0342f695247282302b1de8686d293b420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_16be68aa5d0f543108059d6ac83e2f0342f695247282302b1de8686d293b420c->leave($__internal_16be68aa5d0f543108059d6ac83e2f0342f695247282302b1de8686d293b420c_prof);

        
        $__internal_b3f5fc1209b682ffda8b5d0dfe4014df67d156e942622777831c5eacd1fd02e8->leave($__internal_b3f5fc1209b682ffda8b5d0dfe4014df67d156e942622777831c5eacd1fd02e8_prof);

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
