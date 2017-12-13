<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b00aba3589b70453d58b40c18b999f2b9191dfd342ca24cc0d8f9c408612e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_259eec87686a67d947b14ebfbedddcde5d95ea953b18fe39318fa551f1f96214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259eec87686a67d947b14ebfbedddcde5d95ea953b18fe39318fa551f1f96214->enter($__internal_259eec87686a67d947b14ebfbedddcde5d95ea953b18fe39318fa551f1f96214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1d8973b8eadde071b83cf765202072862245ac3277dc9b35fc43cae4abd3f6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8973b8eadde071b83cf765202072862245ac3277dc9b35fc43cae4abd3f6bd->enter($__internal_1d8973b8eadde071b83cf765202072862245ac3277dc9b35fc43cae4abd3f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259eec87686a67d947b14ebfbedddcde5d95ea953b18fe39318fa551f1f96214->leave($__internal_259eec87686a67d947b14ebfbedddcde5d95ea953b18fe39318fa551f1f96214_prof);

        
        $__internal_1d8973b8eadde071b83cf765202072862245ac3277dc9b35fc43cae4abd3f6bd->leave($__internal_1d8973b8eadde071b83cf765202072862245ac3277dc9b35fc43cae4abd3f6bd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_91a19d9d00ba69f2f0963e50db656de889947423ac3e15932a731ae1999a33c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a19d9d00ba69f2f0963e50db656de889947423ac3e15932a731ae1999a33c9->enter($__internal_91a19d9d00ba69f2f0963e50db656de889947423ac3e15932a731ae1999a33c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5b563edc3c3ea94de1bb471a35a2cb172017ccc55b999cda6d71d082952dc1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b563edc3c3ea94de1bb471a35a2cb172017ccc55b999cda6d71d082952dc1e6->enter($__internal_5b563edc3c3ea94de1bb471a35a2cb172017ccc55b999cda6d71d082952dc1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5b563edc3c3ea94de1bb471a35a2cb172017ccc55b999cda6d71d082952dc1e6->leave($__internal_5b563edc3c3ea94de1bb471a35a2cb172017ccc55b999cda6d71d082952dc1e6_prof);

        
        $__internal_91a19d9d00ba69f2f0963e50db656de889947423ac3e15932a731ae1999a33c9->leave($__internal_91a19d9d00ba69f2f0963e50db656de889947423ac3e15932a731ae1999a33c9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94f796764966aa919d1d0d680ae30e35a6a6c3e41a933aff1927db21e460500b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f796764966aa919d1d0d680ae30e35a6a6c3e41a933aff1927db21e460500b->enter($__internal_94f796764966aa919d1d0d680ae30e35a6a6c3e41a933aff1927db21e460500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a79e98be3c21b550a1cf3e1e0fd8b6799fcb2df6664ed8aed0cc9cf8b795771a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79e98be3c21b550a1cf3e1e0fd8b6799fcb2df6664ed8aed0cc9cf8b795771a->enter($__internal_a79e98be3c21b550a1cf3e1e0fd8b6799fcb2df6664ed8aed0cc9cf8b795771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a79e98be3c21b550a1cf3e1e0fd8b6799fcb2df6664ed8aed0cc9cf8b795771a->leave($__internal_a79e98be3c21b550a1cf3e1e0fd8b6799fcb2df6664ed8aed0cc9cf8b795771a_prof);

        
        $__internal_94f796764966aa919d1d0d680ae30e35a6a6c3e41a933aff1927db21e460500b->leave($__internal_94f796764966aa919d1d0d680ae30e35a6a6c3e41a933aff1927db21e460500b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
