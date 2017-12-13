<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b1ae45e6c525af639d29c6ee237b9149c3c15a6d09b3bcb07fc13f114b2cf538 extends Twig_Template
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
        $__internal_1ca66ae910d63e86f49017a95e6174902d20606ca5509dba53cbc6cc8c9cb4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca66ae910d63e86f49017a95e6174902d20606ca5509dba53cbc6cc8c9cb4e9->enter($__internal_1ca66ae910d63e86f49017a95e6174902d20606ca5509dba53cbc6cc8c9cb4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f76839343c0f561d773c89b04d06aefa48d9aee06a7a2d6613a2a77934cb74bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76839343c0f561d773c89b04d06aefa48d9aee06a7a2d6613a2a77934cb74bb->enter($__internal_f76839343c0f561d773c89b04d06aefa48d9aee06a7a2d6613a2a77934cb74bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1ca66ae910d63e86f49017a95e6174902d20606ca5509dba53cbc6cc8c9cb4e9->leave($__internal_1ca66ae910d63e86f49017a95e6174902d20606ca5509dba53cbc6cc8c9cb4e9_prof);

        
        $__internal_f76839343c0f561d773c89b04d06aefa48d9aee06a7a2d6613a2a77934cb74bb->leave($__internal_f76839343c0f561d773c89b04d06aefa48d9aee06a7a2d6613a2a77934cb74bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c90ea35e980017b0b3ebb0e4836e0dd099ac72eea45bebec43fe4bf72793297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c90ea35e980017b0b3ebb0e4836e0dd099ac72eea45bebec43fe4bf72793297->enter($__internal_5c90ea35e980017b0b3ebb0e4836e0dd099ac72eea45bebec43fe4bf72793297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8863304999021d0aca35509ab87c4ee98c189ba738c5a9d5ed20d2c97116527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8863304999021d0aca35509ab87c4ee98c189ba738c5a9d5ed20d2c97116527->enter($__internal_b8863304999021d0aca35509ab87c4ee98c189ba738c5a9d5ed20d2c97116527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b8863304999021d0aca35509ab87c4ee98c189ba738c5a9d5ed20d2c97116527->leave($__internal_b8863304999021d0aca35509ab87c4ee98c189ba738c5a9d5ed20d2c97116527_prof);

        
        $__internal_5c90ea35e980017b0b3ebb0e4836e0dd099ac72eea45bebec43fe4bf72793297->leave($__internal_5c90ea35e980017b0b3ebb0e4836e0dd099ac72eea45bebec43fe4bf72793297_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
