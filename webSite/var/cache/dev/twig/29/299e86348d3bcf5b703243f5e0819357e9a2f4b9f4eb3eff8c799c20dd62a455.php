<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6a749129187158c6f4ec256c7f3be34327e35cf0522ccd52f7cc1840e5496d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d873553cefb590866c789d89934089df3b139ce9bc5239578c10e75699bcb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d873553cefb590866c789d89934089df3b139ce9bc5239578c10e75699bcb1e->enter($__internal_9d873553cefb590866c789d89934089df3b139ce9bc5239578c10e75699bcb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_bedf0242b592f67ddd063b92f54543e4cb5c2ea86afca40c86d0d7c4760446df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedf0242b592f67ddd063b92f54543e4cb5c2ea86afca40c86d0d7c4760446df->enter($__internal_bedf0242b592f67ddd063b92f54543e4cb5c2ea86afca40c86d0d7c4760446df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d873553cefb590866c789d89934089df3b139ce9bc5239578c10e75699bcb1e->leave($__internal_9d873553cefb590866c789d89934089df3b139ce9bc5239578c10e75699bcb1e_prof);

        
        $__internal_bedf0242b592f67ddd063b92f54543e4cb5c2ea86afca40c86d0d7c4760446df->leave($__internal_bedf0242b592f67ddd063b92f54543e4cb5c2ea86afca40c86d0d7c4760446df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97bc8c56daefc9becf917eeb86ee00b45aa4e965ce3d04aaeca903eff05f81b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bc8c56daefc9becf917eeb86ee00b45aa4e965ce3d04aaeca903eff05f81b7->enter($__internal_97bc8c56daefc9becf917eeb86ee00b45aa4e965ce3d04aaeca903eff05f81b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a89657273ebcf9e124456cc8692336227758cbe98ac4190577d2ac934973caa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89657273ebcf9e124456cc8692336227758cbe98ac4190577d2ac934973caa9->enter($__internal_a89657273ebcf9e124456cc8692336227758cbe98ac4190577d2ac934973caa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a89657273ebcf9e124456cc8692336227758cbe98ac4190577d2ac934973caa9->leave($__internal_a89657273ebcf9e124456cc8692336227758cbe98ac4190577d2ac934973caa9_prof);

        
        $__internal_97bc8c56daefc9becf917eeb86ee00b45aa4e965ce3d04aaeca903eff05f81b7->leave($__internal_97bc8c56daefc9becf917eeb86ee00b45aa4e965ce3d04aaeca903eff05f81b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2910048e7ee2422f2cdcc3d370815df1030e1607cecefc548e3d942a8342b01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2910048e7ee2422f2cdcc3d370815df1030e1607cecefc548e3d942a8342b01c->enter($__internal_2910048e7ee2422f2cdcc3d370815df1030e1607cecefc548e3d942a8342b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_913848d2ca36e769501d2196250cd525b5cb450749b70f6fd4d6753f93786d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913848d2ca36e769501d2196250cd525b5cb450749b70f6fd4d6753f93786d30->enter($__internal_913848d2ca36e769501d2196250cd525b5cb450749b70f6fd4d6753f93786d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_913848d2ca36e769501d2196250cd525b5cb450749b70f6fd4d6753f93786d30->leave($__internal_913848d2ca36e769501d2196250cd525b5cb450749b70f6fd4d6753f93786d30_prof);

        
        $__internal_2910048e7ee2422f2cdcc3d370815df1030e1607cecefc548e3d942a8342b01c->leave($__internal_2910048e7ee2422f2cdcc3d370815df1030e1607cecefc548e3d942a8342b01c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fac8bef6afe464b196f2ce6e7d73bf3c8b22a9442251d5a2a1150857ee6484a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac8bef6afe464b196f2ce6e7d73bf3c8b22a9442251d5a2a1150857ee6484a3->enter($__internal_fac8bef6afe464b196f2ce6e7d73bf3c8b22a9442251d5a2a1150857ee6484a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d4342b3dc4159212d01e7d5b467e32f80bccf43168e6ce5fee9326debf50523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4342b3dc4159212d01e7d5b467e32f80bccf43168e6ce5fee9326debf50523->enter($__internal_6d4342b3dc4159212d01e7d5b467e32f80bccf43168e6ce5fee9326debf50523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6d4342b3dc4159212d01e7d5b467e32f80bccf43168e6ce5fee9326debf50523->leave($__internal_6d4342b3dc4159212d01e7d5b467e32f80bccf43168e6ce5fee9326debf50523_prof);

        
        $__internal_fac8bef6afe464b196f2ce6e7d73bf3c8b22a9442251d5a2a1150857ee6484a3->leave($__internal_fac8bef6afe464b196f2ce6e7d73bf3c8b22a9442251d5a2a1150857ee6484a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
