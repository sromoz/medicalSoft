<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_1068454afee879c510c67f8283368bc2247c3ddac8d2eedf860f65bdb10cab3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45d5c81bfa6a2eb7f806ce77e2aad8e1a886302b4f9b693b6c7c7dca3f2fc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45d5c81bfa6a2eb7f806ce77e2aad8e1a886302b4f9b693b6c7c7dca3f2fc8d->enter($__internal_f45d5c81bfa6a2eb7f806ce77e2aad8e1a886302b4f9b693b6c7c7dca3f2fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_641594e4c40290ff902abc9fe3688f749a8a1cf20d548ddc363de6a42ffd4d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641594e4c40290ff902abc9fe3688f749a8a1cf20d548ddc363de6a42ffd4d5a->enter($__internal_641594e4c40290ff902abc9fe3688f749a8a1cf20d548ddc363de6a42ffd4d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45d5c81bfa6a2eb7f806ce77e2aad8e1a886302b4f9b693b6c7c7dca3f2fc8d->leave($__internal_f45d5c81bfa6a2eb7f806ce77e2aad8e1a886302b4f9b693b6c7c7dca3f2fc8d_prof);

        
        $__internal_641594e4c40290ff902abc9fe3688f749a8a1cf20d548ddc363de6a42ffd4d5a->leave($__internal_641594e4c40290ff902abc9fe3688f749a8a1cf20d548ddc363de6a42ffd4d5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d08d1b8d4254e47df3eaecba9be239614881d65de58fc13b9ef1d9be5c014428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08d1b8d4254e47df3eaecba9be239614881d65de58fc13b9ef1d9be5c014428->enter($__internal_d08d1b8d4254e47df3eaecba9be239614881d65de58fc13b9ef1d9be5c014428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_542f2fb92227d3b05da1bf46c31989b7b8b89a06e9ecd1664d56fd472030b819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542f2fb92227d3b05da1bf46c31989b7b8b89a06e9ecd1664d56fd472030b819->enter($__internal_542f2fb92227d3b05da1bf46c31989b7b8b89a06e9ecd1664d56fd472030b819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_542f2fb92227d3b05da1bf46c31989b7b8b89a06e9ecd1664d56fd472030b819->leave($__internal_542f2fb92227d3b05da1bf46c31989b7b8b89a06e9ecd1664d56fd472030b819_prof);

        
        $__internal_d08d1b8d4254e47df3eaecba9be239614881d65de58fc13b9ef1d9be5c014428->leave($__internal_d08d1b8d4254e47df3eaecba9be239614881d65de58fc13b9ef1d9be5c014428_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
