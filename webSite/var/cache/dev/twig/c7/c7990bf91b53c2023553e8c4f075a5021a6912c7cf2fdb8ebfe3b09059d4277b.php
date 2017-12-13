<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d618b59fca9a830b8ab3ed0eeb533711d1b9c8f96a2fe56b9fec819474ef979e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_a3f4da2940c23b37305d946ebe64bad81a2a888c3ea3c35abb2cb738fbbddc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f4da2940c23b37305d946ebe64bad81a2a888c3ea3c35abb2cb738fbbddc6f->enter($__internal_a3f4da2940c23b37305d946ebe64bad81a2a888c3ea3c35abb2cb738fbbddc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a70fb902a3376a63a7c7b40a82f6af217726bf6ad9e14684aa04047eaeb95a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70fb902a3376a63a7c7b40a82f6af217726bf6ad9e14684aa04047eaeb95a48->enter($__internal_a70fb902a3376a63a7c7b40a82f6af217726bf6ad9e14684aa04047eaeb95a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f4da2940c23b37305d946ebe64bad81a2a888c3ea3c35abb2cb738fbbddc6f->leave($__internal_a3f4da2940c23b37305d946ebe64bad81a2a888c3ea3c35abb2cb738fbbddc6f_prof);

        
        $__internal_a70fb902a3376a63a7c7b40a82f6af217726bf6ad9e14684aa04047eaeb95a48->leave($__internal_a70fb902a3376a63a7c7b40a82f6af217726bf6ad9e14684aa04047eaeb95a48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d6bbe07fe44a3e756f3ddf365380e54c1bb278b69a9ca1f075c3b46e54038b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6bbe07fe44a3e756f3ddf365380e54c1bb278b69a9ca1f075c3b46e54038b8->enter($__internal_5d6bbe07fe44a3e756f3ddf365380e54c1bb278b69a9ca1f075c3b46e54038b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc720a7e5ea89898db3e4d5ce6266b04ae37992400953b4ad1a31726ca06849e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc720a7e5ea89898db3e4d5ce6266b04ae37992400953b4ad1a31726ca06849e->enter($__internal_dc720a7e5ea89898db3e4d5ce6266b04ae37992400953b4ad1a31726ca06849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_dc720a7e5ea89898db3e4d5ce6266b04ae37992400953b4ad1a31726ca06849e->leave($__internal_dc720a7e5ea89898db3e4d5ce6266b04ae37992400953b4ad1a31726ca06849e_prof);

        
        $__internal_5d6bbe07fe44a3e756f3ddf365380e54c1bb278b69a9ca1f075c3b46e54038b8->leave($__internal_5d6bbe07fe44a3e756f3ddf365380e54c1bb278b69a9ca1f075c3b46e54038b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b2d4289e6ffcb4366eb6e9dce91f58a57030d007fd11a3b54a3d1c1c8ece9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2d4289e6ffcb4366eb6e9dce91f58a57030d007fd11a3b54a3d1c1c8ece9c7->enter($__internal_6b2d4289e6ffcb4366eb6e9dce91f58a57030d007fd11a3b54a3d1c1c8ece9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aff0502808bf0aac239582f51bccde291d242cbe0978f0baacdc334e17cfa0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff0502808bf0aac239582f51bccde291d242cbe0978f0baacdc334e17cfa0ce->enter($__internal_aff0502808bf0aac239582f51bccde291d242cbe0978f0baacdc334e17cfa0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aff0502808bf0aac239582f51bccde291d242cbe0978f0baacdc334e17cfa0ce->leave($__internal_aff0502808bf0aac239582f51bccde291d242cbe0978f0baacdc334e17cfa0ce_prof);

        
        $__internal_6b2d4289e6ffcb4366eb6e9dce91f58a57030d007fd11a3b54a3d1c1c8ece9c7->leave($__internal_6b2d4289e6ffcb4366eb6e9dce91f58a57030d007fd11a3b54a3d1c1c8ece9c7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
