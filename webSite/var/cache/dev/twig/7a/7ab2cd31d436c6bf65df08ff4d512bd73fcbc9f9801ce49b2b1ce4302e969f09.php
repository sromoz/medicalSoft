<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_8f244923d6df3852099a72d0e4c6b7e4c3b2dbf600054f18f9267ac5d0a59624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f244923d6df3852099a72d0e4c6b7e4c3b2dbf600054f18f9267ac5d0a59624->enter($__internal_8f244923d6df3852099a72d0e4c6b7e4c3b2dbf600054f18f9267ac5d0a59624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c21a2432d17609afa3f0b36663bd92dae0a114a1a02321df52e27eb69025fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c21a2432d17609afa3f0b36663bd92dae0a114a1a02321df52e27eb69025fc1->enter($__internal_1c21a2432d17609afa3f0b36663bd92dae0a114a1a02321df52e27eb69025fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f244923d6df3852099a72d0e4c6b7e4c3b2dbf600054f18f9267ac5d0a59624->leave($__internal_8f244923d6df3852099a72d0e4c6b7e4c3b2dbf600054f18f9267ac5d0a59624_prof);

        
        $__internal_1c21a2432d17609afa3f0b36663bd92dae0a114a1a02321df52e27eb69025fc1->leave($__internal_1c21a2432d17609afa3f0b36663bd92dae0a114a1a02321df52e27eb69025fc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8499ca6879c907c84ae65419037097c6beb83c739378736bc9e0bf0c8e2ac79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8499ca6879c907c84ae65419037097c6beb83c739378736bc9e0bf0c8e2ac79a->enter($__internal_8499ca6879c907c84ae65419037097c6beb83c739378736bc9e0bf0c8e2ac79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d804f5d790d6c3f62d20b50826c3bd98b21e07e304f831538855556d400311e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d804f5d790d6c3f62d20b50826c3bd98b21e07e304f831538855556d400311e->enter($__internal_3d804f5d790d6c3f62d20b50826c3bd98b21e07e304f831538855556d400311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d804f5d790d6c3f62d20b50826c3bd98b21e07e304f831538855556d400311e->leave($__internal_3d804f5d790d6c3f62d20b50826c3bd98b21e07e304f831538855556d400311e_prof);

        
        $__internal_8499ca6879c907c84ae65419037097c6beb83c739378736bc9e0bf0c8e2ac79a->leave($__internal_8499ca6879c907c84ae65419037097c6beb83c739378736bc9e0bf0c8e2ac79a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30db8f80cf34fe16dc28d9a9ff2a0406b85e1889d3b6d44a7c1c3d55fe93ec95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30db8f80cf34fe16dc28d9a9ff2a0406b85e1889d3b6d44a7c1c3d55fe93ec95->enter($__internal_30db8f80cf34fe16dc28d9a9ff2a0406b85e1889d3b6d44a7c1c3d55fe93ec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3585e66ff5212160f32bd6f85511d885495ac87f63cb61bd52989bdae09e5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3585e66ff5212160f32bd6f85511d885495ac87f63cb61bd52989bdae09e5d8->enter($__internal_b3585e66ff5212160f32bd6f85511d885495ac87f63cb61bd52989bdae09e5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b3585e66ff5212160f32bd6f85511d885495ac87f63cb61bd52989bdae09e5d8->leave($__internal_b3585e66ff5212160f32bd6f85511d885495ac87f63cb61bd52989bdae09e5d8_prof);

        
        $__internal_30db8f80cf34fe16dc28d9a9ff2a0406b85e1889d3b6d44a7c1c3d55fe93ec95->leave($__internal_30db8f80cf34fe16dc28d9a9ff2a0406b85e1889d3b6d44a7c1c3d55fe93ec95_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36bf160b581292ed7d333868f9b426b1f7db186dfa1c01d45cc99eacb0945f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36bf160b581292ed7d333868f9b426b1f7db186dfa1c01d45cc99eacb0945f90->enter($__internal_36bf160b581292ed7d333868f9b426b1f7db186dfa1c01d45cc99eacb0945f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14a517228f7df7a9e50a2416b4eec166db65d3482d4cf48e162779d434b77be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a517228f7df7a9e50a2416b4eec166db65d3482d4cf48e162779d434b77be4->enter($__internal_14a517228f7df7a9e50a2416b4eec166db65d3482d4cf48e162779d434b77be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_14a517228f7df7a9e50a2416b4eec166db65d3482d4cf48e162779d434b77be4->leave($__internal_14a517228f7df7a9e50a2416b4eec166db65d3482d4cf48e162779d434b77be4_prof);

        
        $__internal_36bf160b581292ed7d333868f9b426b1f7db186dfa1c01d45cc99eacb0945f90->leave($__internal_36bf160b581292ed7d333868f9b426b1f7db186dfa1c01d45cc99eacb0945f90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
