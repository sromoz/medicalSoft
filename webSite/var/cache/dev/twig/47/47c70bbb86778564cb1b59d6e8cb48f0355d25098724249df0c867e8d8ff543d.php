<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a30f2aba0e86f2e9a213ae7a3327eaa0620e5565a69a9236ddba978599211e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a63666b01a4d613fbe3ef2a3da1ab59ad8d2461e674113f33c3bddd0a75f8e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63666b01a4d613fbe3ef2a3da1ab59ad8d2461e674113f33c3bddd0a75f8e4e->enter($__internal_a63666b01a4d613fbe3ef2a3da1ab59ad8d2461e674113f33c3bddd0a75f8e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e4444f8a02d345ec778751a9fa9d902b9731d429d5d16561b98912af08f2f964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4444f8a02d345ec778751a9fa9d902b9731d429d5d16561b98912af08f2f964->enter($__internal_e4444f8a02d345ec778751a9fa9d902b9731d429d5d16561b98912af08f2f964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63666b01a4d613fbe3ef2a3da1ab59ad8d2461e674113f33c3bddd0a75f8e4e->leave($__internal_a63666b01a4d613fbe3ef2a3da1ab59ad8d2461e674113f33c3bddd0a75f8e4e_prof);

        
        $__internal_e4444f8a02d345ec778751a9fa9d902b9731d429d5d16561b98912af08f2f964->leave($__internal_e4444f8a02d345ec778751a9fa9d902b9731d429d5d16561b98912af08f2f964_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8cbbd23821034697a2235a93a05673dd9b0c06d70250356b13094d410d2f570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cbbd23821034697a2235a93a05673dd9b0c06d70250356b13094d410d2f570->enter($__internal_b8cbbd23821034697a2235a93a05673dd9b0c06d70250356b13094d410d2f570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfd59f6ac6537be7c8fa1423f909d161ead94b4cd112640ced73d750a0ab49fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd59f6ac6537be7c8fa1423f909d161ead94b4cd112640ced73d750a0ab49fb->enter($__internal_bfd59f6ac6537be7c8fa1423f909d161ead94b4cd112640ced73d750a0ab49fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bfd59f6ac6537be7c8fa1423f909d161ead94b4cd112640ced73d750a0ab49fb->leave($__internal_bfd59f6ac6537be7c8fa1423f909d161ead94b4cd112640ced73d750a0ab49fb_prof);

        
        $__internal_b8cbbd23821034697a2235a93a05673dd9b0c06d70250356b13094d410d2f570->leave($__internal_b8cbbd23821034697a2235a93a05673dd9b0c06d70250356b13094d410d2f570_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e83d2481ca1b18278a5e96bcae5d7f2f8b39914087a447725cf6c085ab9f83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e83d2481ca1b18278a5e96bcae5d7f2f8b39914087a447725cf6c085ab9f83d->enter($__internal_5e83d2481ca1b18278a5e96bcae5d7f2f8b39914087a447725cf6c085ab9f83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b21fbec27e1a1f82362b53046f5361f663bd70554cde579ce0d5f4c2d5ea98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b21fbec27e1a1f82362b53046f5361f663bd70554cde579ce0d5f4c2d5ea98e->enter($__internal_7b21fbec27e1a1f82362b53046f5361f663bd70554cde579ce0d5f4c2d5ea98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7b21fbec27e1a1f82362b53046f5361f663bd70554cde579ce0d5f4c2d5ea98e->leave($__internal_7b21fbec27e1a1f82362b53046f5361f663bd70554cde579ce0d5f4c2d5ea98e_prof);

        
        $__internal_5e83d2481ca1b18278a5e96bcae5d7f2f8b39914087a447725cf6c085ab9f83d->leave($__internal_5e83d2481ca1b18278a5e96bcae5d7f2f8b39914087a447725cf6c085ab9f83d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
