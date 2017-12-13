<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4bd0b9aa65688a53c23b37aed6b9e4f4ceb88b2ac35bc14e6a9447cfd4257854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736cafe2bb6ca24511f524fb1894b0b12e3bbfdf99d92bc63e1dfb637f135ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736cafe2bb6ca24511f524fb1894b0b12e3bbfdf99d92bc63e1dfb637f135ab6->enter($__internal_736cafe2bb6ca24511f524fb1894b0b12e3bbfdf99d92bc63e1dfb637f135ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b0fea8b52f80afcd2363f1096087f1da63d4b2186d79aa5880841d7a3e7100df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fea8b52f80afcd2363f1096087f1da63d4b2186d79aa5880841d7a3e7100df->enter($__internal_b0fea8b52f80afcd2363f1096087f1da63d4b2186d79aa5880841d7a3e7100df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_736cafe2bb6ca24511f524fb1894b0b12e3bbfdf99d92bc63e1dfb637f135ab6->leave($__internal_736cafe2bb6ca24511f524fb1894b0b12e3bbfdf99d92bc63e1dfb637f135ab6_prof);

        
        $__internal_b0fea8b52f80afcd2363f1096087f1da63d4b2186d79aa5880841d7a3e7100df->leave($__internal_b0fea8b52f80afcd2363f1096087f1da63d4b2186d79aa5880841d7a3e7100df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
