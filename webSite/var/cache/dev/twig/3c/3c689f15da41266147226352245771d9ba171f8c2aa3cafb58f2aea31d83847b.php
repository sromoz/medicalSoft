<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2697a9edc8d90b93ea13a4ada0fb6fd01f0da227eedbcc4c2d06ab47288047a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2697a9edc8d90b93ea13a4ada0fb6fd01f0da227eedbcc4c2d06ab47288047a->enter($__internal_b2697a9edc8d90b93ea13a4ada0fb6fd01f0da227eedbcc4c2d06ab47288047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9f715cb68032ad61625e28dc35d862d1c0c07c88b7eb30bb94c7c6a9e8785341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f715cb68032ad61625e28dc35d862d1c0c07c88b7eb30bb94c7c6a9e8785341->enter($__internal_9f715cb68032ad61625e28dc35d862d1c0c07c88b7eb30bb94c7c6a9e8785341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2697a9edc8d90b93ea13a4ada0fb6fd01f0da227eedbcc4c2d06ab47288047a->leave($__internal_b2697a9edc8d90b93ea13a4ada0fb6fd01f0da227eedbcc4c2d06ab47288047a_prof);

        
        $__internal_9f715cb68032ad61625e28dc35d862d1c0c07c88b7eb30bb94c7c6a9e8785341->leave($__internal_9f715cb68032ad61625e28dc35d862d1c0c07c88b7eb30bb94c7c6a9e8785341_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1ad0cad59bf91cc445133835e1470e354732dc82e48f51e6f33cc09705af88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ad0cad59bf91cc445133835e1470e354732dc82e48f51e6f33cc09705af88d->enter($__internal_c1ad0cad59bf91cc445133835e1470e354732dc82e48f51e6f33cc09705af88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a80d2725079e5e1e02d50d23c94a3f4e7c3ca6ab12097e45942e36b3f08bbcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80d2725079e5e1e02d50d23c94a3f4e7c3ca6ab12097e45942e36b3f08bbcac->enter($__internal_a80d2725079e5e1e02d50d23c94a3f4e7c3ca6ab12097e45942e36b3f08bbcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a80d2725079e5e1e02d50d23c94a3f4e7c3ca6ab12097e45942e36b3f08bbcac->leave($__internal_a80d2725079e5e1e02d50d23c94a3f4e7c3ca6ab12097e45942e36b3f08bbcac_prof);

        
        $__internal_c1ad0cad59bf91cc445133835e1470e354732dc82e48f51e6f33cc09705af88d->leave($__internal_c1ad0cad59bf91cc445133835e1470e354732dc82e48f51e6f33cc09705af88d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_57e93ca09ebe1dd0ed594480d68408b4b734dd2aa1fb125b41a40f6fcfc4256c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e93ca09ebe1dd0ed594480d68408b4b734dd2aa1fb125b41a40f6fcfc4256c->enter($__internal_57e93ca09ebe1dd0ed594480d68408b4b734dd2aa1fb125b41a40f6fcfc4256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00458722cea2c95a5065cadd7f3c5b64eba55d71f2c17288f46cb6121f7e21c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00458722cea2c95a5065cadd7f3c5b64eba55d71f2c17288f46cb6121f7e21c2->enter($__internal_00458722cea2c95a5065cadd7f3c5b64eba55d71f2c17288f46cb6121f7e21c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_00458722cea2c95a5065cadd7f3c5b64eba55d71f2c17288f46cb6121f7e21c2->leave($__internal_00458722cea2c95a5065cadd7f3c5b64eba55d71f2c17288f46cb6121f7e21c2_prof);

        
        $__internal_57e93ca09ebe1dd0ed594480d68408b4b734dd2aa1fb125b41a40f6fcfc4256c->leave($__internal_57e93ca09ebe1dd0ed594480d68408b4b734dd2aa1fb125b41a40f6fcfc4256c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
