<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1222ecca95dbcf41f5de8709c5991ec49b3fc2c2e08c2ba19449c97e4f98ce3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1222ecca95dbcf41f5de8709c5991ec49b3fc2c2e08c2ba19449c97e4f98ce3d->enter($__internal_1222ecca95dbcf41f5de8709c5991ec49b3fc2c2e08c2ba19449c97e4f98ce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a19e2d92bb65b21b875a6efc6b765543c0cbb660cd04ccc80ecaca4d09db0dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19e2d92bb65b21b875a6efc6b765543c0cbb660cd04ccc80ecaca4d09db0dd6->enter($__internal_a19e2d92bb65b21b875a6efc6b765543c0cbb660cd04ccc80ecaca4d09db0dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1222ecca95dbcf41f5de8709c5991ec49b3fc2c2e08c2ba19449c97e4f98ce3d->leave($__internal_1222ecca95dbcf41f5de8709c5991ec49b3fc2c2e08c2ba19449c97e4f98ce3d_prof);

        
        $__internal_a19e2d92bb65b21b875a6efc6b765543c0cbb660cd04ccc80ecaca4d09db0dd6->leave($__internal_a19e2d92bb65b21b875a6efc6b765543c0cbb660cd04ccc80ecaca4d09db0dd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8aa11f833cc605e76d18d169c2c3c0828facee0c3832cab45886a769ee3d9082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa11f833cc605e76d18d169c2c3c0828facee0c3832cab45886a769ee3d9082->enter($__internal_8aa11f833cc605e76d18d169c2c3c0828facee0c3832cab45886a769ee3d9082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70a953d2088c2b85da2cc3c9bdd3095f04de9f2a41f25c1d39381b1e5a6ae55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a953d2088c2b85da2cc3c9bdd3095f04de9f2a41f25c1d39381b1e5a6ae55d->enter($__internal_70a953d2088c2b85da2cc3c9bdd3095f04de9f2a41f25c1d39381b1e5a6ae55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70a953d2088c2b85da2cc3c9bdd3095f04de9f2a41f25c1d39381b1e5a6ae55d->leave($__internal_70a953d2088c2b85da2cc3c9bdd3095f04de9f2a41f25c1d39381b1e5a6ae55d_prof);

        
        $__internal_8aa11f833cc605e76d18d169c2c3c0828facee0c3832cab45886a769ee3d9082->leave($__internal_8aa11f833cc605e76d18d169c2c3c0828facee0c3832cab45886a769ee3d9082_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfc492912413673d3793da3568e8de391c578106c555b5efd4426134220a7a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc492912413673d3793da3568e8de391c578106c555b5efd4426134220a7a8c->enter($__internal_bfc492912413673d3793da3568e8de391c578106c555b5efd4426134220a7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba2f9c894405dd0084cf698279cfa29ebedf701f2304216c28e124ff978f8565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2f9c894405dd0084cf698279cfa29ebedf701f2304216c28e124ff978f8565->enter($__internal_ba2f9c894405dd0084cf698279cfa29ebedf701f2304216c28e124ff978f8565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba2f9c894405dd0084cf698279cfa29ebedf701f2304216c28e124ff978f8565->leave($__internal_ba2f9c894405dd0084cf698279cfa29ebedf701f2304216c28e124ff978f8565_prof);

        
        $__internal_bfc492912413673d3793da3568e8de391c578106c555b5efd4426134220a7a8c->leave($__internal_bfc492912413673d3793da3568e8de391c578106c555b5efd4426134220a7a8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_daf58fc360786eb02824f0a9c98245c07aa042a0d587e5291d8f356f04cafd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf58fc360786eb02824f0a9c98245c07aa042a0d587e5291d8f356f04cafd1a->enter($__internal_daf58fc360786eb02824f0a9c98245c07aa042a0d587e5291d8f356f04cafd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79581b4b95382e507867cad738d6e65b2dfe33b660a3c3a89948a50588a05419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79581b4b95382e507867cad738d6e65b2dfe33b660a3c3a89948a50588a05419->enter($__internal_79581b4b95382e507867cad738d6e65b2dfe33b660a3c3a89948a50588a05419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79581b4b95382e507867cad738d6e65b2dfe33b660a3c3a89948a50588a05419->leave($__internal_79581b4b95382e507867cad738d6e65b2dfe33b660a3c3a89948a50588a05419_prof);

        
        $__internal_daf58fc360786eb02824f0a9c98245c07aa042a0d587e5291d8f356f04cafd1a->leave($__internal_daf58fc360786eb02824f0a9c98245c07aa042a0d587e5291d8f356f04cafd1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
