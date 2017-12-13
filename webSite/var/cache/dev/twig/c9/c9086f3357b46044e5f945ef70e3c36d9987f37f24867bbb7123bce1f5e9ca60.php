<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fa10caccd14d783da51d499414c86b1c3d818eb4b968e27d33d8564a79fb74ee extends Twig_Template
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
        $__internal_a193e78c324b3fe900ad3272f79f64efc58b91e4ed7d6590257a457c1ea96096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a193e78c324b3fe900ad3272f79f64efc58b91e4ed7d6590257a457c1ea96096->enter($__internal_a193e78c324b3fe900ad3272f79f64efc58b91e4ed7d6590257a457c1ea96096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f5fc4f62843c2a801fec178b7de42a6cb8bfad144eaa4dbae94005cfb3960962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fc4f62843c2a801fec178b7de42a6cb8bfad144eaa4dbae94005cfb3960962->enter($__internal_f5fc4f62843c2a801fec178b7de42a6cb8bfad144eaa4dbae94005cfb3960962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a193e78c324b3fe900ad3272f79f64efc58b91e4ed7d6590257a457c1ea96096->leave($__internal_a193e78c324b3fe900ad3272f79f64efc58b91e4ed7d6590257a457c1ea96096_prof);

        
        $__internal_f5fc4f62843c2a801fec178b7de42a6cb8bfad144eaa4dbae94005cfb3960962->leave($__internal_f5fc4f62843c2a801fec178b7de42a6cb8bfad144eaa4dbae94005cfb3960962_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
