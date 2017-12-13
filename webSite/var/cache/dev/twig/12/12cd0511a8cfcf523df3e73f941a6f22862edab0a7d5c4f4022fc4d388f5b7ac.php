<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_72715f3f9b43be9551e560ea5e04186fdcc2c36da980752869d46c6c98aa4c7e extends Twig_Template
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
        $__internal_9a32ca0ac6a5da00ee77512398b3687b1fffbf182e1767beed21fa95ceeff2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a32ca0ac6a5da00ee77512398b3687b1fffbf182e1767beed21fa95ceeff2e3->enter($__internal_9a32ca0ac6a5da00ee77512398b3687b1fffbf182e1767beed21fa95ceeff2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_9dd95d2a7a6ff0d97fa2b6a4234816a879713debfa6febdab8b12a3adc15158a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd95d2a7a6ff0d97fa2b6a4234816a879713debfa6febdab8b12a3adc15158a->enter($__internal_9dd95d2a7a6ff0d97fa2b6a4234816a879713debfa6febdab8b12a3adc15158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9a32ca0ac6a5da00ee77512398b3687b1fffbf182e1767beed21fa95ceeff2e3->leave($__internal_9a32ca0ac6a5da00ee77512398b3687b1fffbf182e1767beed21fa95ceeff2e3_prof);

        
        $__internal_9dd95d2a7a6ff0d97fa2b6a4234816a879713debfa6febdab8b12a3adc15158a->leave($__internal_9dd95d2a7a6ff0d97fa2b6a4234816a879713debfa6febdab8b12a3adc15158a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
