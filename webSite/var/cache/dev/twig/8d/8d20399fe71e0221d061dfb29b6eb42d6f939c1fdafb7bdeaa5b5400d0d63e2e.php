<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0fbc5a291a4cb1e3ee8667d1f75271be9a56d5b79fb7309dae16a0098e8aebba extends Twig_Template
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
        $__internal_62380475f7b2a425e014655d2c015ef8bdb484c5c93d224485d515a26b132c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62380475f7b2a425e014655d2c015ef8bdb484c5c93d224485d515a26b132c1c->enter($__internal_62380475f7b2a425e014655d2c015ef8bdb484c5c93d224485d515a26b132c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_87c9c54bcfe97f45e4a55a265e6b0c297954bf538c4f83e5801e1d6f27b43e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c9c54bcfe97f45e4a55a265e6b0c297954bf538c4f83e5801e1d6f27b43e2a->enter($__internal_87c9c54bcfe97f45e4a55a265e6b0c297954bf538c4f83e5801e1d6f27b43e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_62380475f7b2a425e014655d2c015ef8bdb484c5c93d224485d515a26b132c1c->leave($__internal_62380475f7b2a425e014655d2c015ef8bdb484c5c93d224485d515a26b132c1c_prof);

        
        $__internal_87c9c54bcfe97f45e4a55a265e6b0c297954bf538c4f83e5801e1d6f27b43e2a->leave($__internal_87c9c54bcfe97f45e4a55a265e6b0c297954bf538c4f83e5801e1d6f27b43e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
