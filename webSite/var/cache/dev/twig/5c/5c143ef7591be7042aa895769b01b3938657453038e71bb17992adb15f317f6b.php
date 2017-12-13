<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6392ec6c6d0e78de90289c2b25237f97f5fd0663965dd050575879c675a07bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cab63bdbf34c1fae16ce1756315e6c2347a7743f6e9003c6095fb380818f7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cab63bdbf34c1fae16ce1756315e6c2347a7743f6e9003c6095fb380818f7a3->enter($__internal_5cab63bdbf34c1fae16ce1756315e6c2347a7743f6e9003c6095fb380818f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_a3b5c1565c8eb68cc291b73975f9e72b713bf2ce0f921cd8a9bf9004e01d2d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b5c1565c8eb68cc291b73975f9e72b713bf2ce0f921cd8a9bf9004e01d2d9a->enter($__internal_a3b5c1565c8eb68cc291b73975f9e72b713bf2ce0f921cd8a9bf9004e01d2d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cab63bdbf34c1fae16ce1756315e6c2347a7743f6e9003c6095fb380818f7a3->leave($__internal_5cab63bdbf34c1fae16ce1756315e6c2347a7743f6e9003c6095fb380818f7a3_prof);

        
        $__internal_a3b5c1565c8eb68cc291b73975f9e72b713bf2ce0f921cd8a9bf9004e01d2d9a->leave($__internal_a3b5c1565c8eb68cc291b73975f9e72b713bf2ce0f921cd8a9bf9004e01d2d9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c019cad504fa1fcff245bb4dfb92790982e264e7c17317b74405aee08a8ab15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c019cad504fa1fcff245bb4dfb92790982e264e7c17317b74405aee08a8ab15->enter($__internal_2c019cad504fa1fcff245bb4dfb92790982e264e7c17317b74405aee08a8ab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ee70a927524f2b9900b48bed805c4dcef9e55244099ac155cc5cc750d0b416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee70a927524f2b9900b48bed805c4dcef9e55244099ac155cc5cc750d0b416f->enter($__internal_0ee70a927524f2b9900b48bed805c4dcef9e55244099ac155cc5cc750d0b416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0ee70a927524f2b9900b48bed805c4dcef9e55244099ac155cc5cc750d0b416f->leave($__internal_0ee70a927524f2b9900b48bed805c4dcef9e55244099ac155cc5cc750d0b416f_prof);

        
        $__internal_2c019cad504fa1fcff245bb4dfb92790982e264e7c17317b74405aee08a8ab15->leave($__internal_2c019cad504fa1fcff245bb4dfb92790982e264e7c17317b74405aee08a8ab15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
