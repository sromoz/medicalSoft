<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6b5d21bafd407f8a334eb150075375b336f8d3c379ee177afb763c047f8c7022 extends Twig_Template
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
        $__internal_62fdbca93f2a82ab22d7382c3b2f73b6189ce2c51ed6fe8ccb3485d429679a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fdbca93f2a82ab22d7382c3b2f73b6189ce2c51ed6fe8ccb3485d429679a88->enter($__internal_62fdbca93f2a82ab22d7382c3b2f73b6189ce2c51ed6fe8ccb3485d429679a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6252c1e74bce890d538010a9f0ced8b128b1b00e3646e90fdba1d0d46944e37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6252c1e74bce890d538010a9f0ced8b128b1b00e3646e90fdba1d0d46944e37b->enter($__internal_6252c1e74bce890d538010a9f0ced8b128b1b00e3646e90fdba1d0d46944e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_62fdbca93f2a82ab22d7382c3b2f73b6189ce2c51ed6fe8ccb3485d429679a88->leave($__internal_62fdbca93f2a82ab22d7382c3b2f73b6189ce2c51ed6fe8ccb3485d429679a88_prof);

        
        $__internal_6252c1e74bce890d538010a9f0ced8b128b1b00e3646e90fdba1d0d46944e37b->leave($__internal_6252c1e74bce890d538010a9f0ced8b128b1b00e3646e90fdba1d0d46944e37b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
