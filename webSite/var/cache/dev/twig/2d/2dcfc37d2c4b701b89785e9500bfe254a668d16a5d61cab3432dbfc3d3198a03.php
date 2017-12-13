<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1af2b205ad2e5885b1177b583b5d115d22c23006caf0278e200c07be47ad0b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_9a853edd4699cea8bbe97dd2f28335ee1feec0d2a3c04d46033b18dcf8ef4c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a853edd4699cea8bbe97dd2f28335ee1feec0d2a3c04d46033b18dcf8ef4c77->enter($__internal_9a853edd4699cea8bbe97dd2f28335ee1feec0d2a3c04d46033b18dcf8ef4c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_91751c1ecc84e8825d1094cf23eda1f7e546b6a9157e2a082bac1148d442e849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91751c1ecc84e8825d1094cf23eda1f7e546b6a9157e2a082bac1148d442e849->enter($__internal_91751c1ecc84e8825d1094cf23eda1f7e546b6a9157e2a082bac1148d442e849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a853edd4699cea8bbe97dd2f28335ee1feec0d2a3c04d46033b18dcf8ef4c77->leave($__internal_9a853edd4699cea8bbe97dd2f28335ee1feec0d2a3c04d46033b18dcf8ef4c77_prof);

        
        $__internal_91751c1ecc84e8825d1094cf23eda1f7e546b6a9157e2a082bac1148d442e849->leave($__internal_91751c1ecc84e8825d1094cf23eda1f7e546b6a9157e2a082bac1148d442e849_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f2bac6e73e3fbef9508dd15ea8f043d821ef5f62338a6436833ca8c1cfb1492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2bac6e73e3fbef9508dd15ea8f043d821ef5f62338a6436833ca8c1cfb1492->enter($__internal_6f2bac6e73e3fbef9508dd15ea8f043d821ef5f62338a6436833ca8c1cfb1492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_70e5fb446635a65f11523baffc92e9224d87f954bff9bf667a94a241b1a6b650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e5fb446635a65f11523baffc92e9224d87f954bff9bf667a94a241b1a6b650->enter($__internal_70e5fb446635a65f11523baffc92e9224d87f954bff9bf667a94a241b1a6b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_70e5fb446635a65f11523baffc92e9224d87f954bff9bf667a94a241b1a6b650->leave($__internal_70e5fb446635a65f11523baffc92e9224d87f954bff9bf667a94a241b1a6b650_prof);

        
        $__internal_6f2bac6e73e3fbef9508dd15ea8f043d821ef5f62338a6436833ca8c1cfb1492->leave($__internal_6f2bac6e73e3fbef9508dd15ea8f043d821ef5f62338a6436833ca8c1cfb1492_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d565d127d5d2a5ee0f0404f002c36f483606811be5f0859d787af8570c41432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d565d127d5d2a5ee0f0404f002c36f483606811be5f0859d787af8570c41432->enter($__internal_9d565d127d5d2a5ee0f0404f002c36f483606811be5f0859d787af8570c41432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_237cbb78f35070ad71f0297f3db3788e4277d6596dbb09f1282c6df8286d8c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237cbb78f35070ad71f0297f3db3788e4277d6596dbb09f1282c6df8286d8c15->enter($__internal_237cbb78f35070ad71f0297f3db3788e4277d6596dbb09f1282c6df8286d8c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_237cbb78f35070ad71f0297f3db3788e4277d6596dbb09f1282c6df8286d8c15->leave($__internal_237cbb78f35070ad71f0297f3db3788e4277d6596dbb09f1282c6df8286d8c15_prof);

        
        $__internal_9d565d127d5d2a5ee0f0404f002c36f483606811be5f0859d787af8570c41432->leave($__internal_9d565d127d5d2a5ee0f0404f002c36f483606811be5f0859d787af8570c41432_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
