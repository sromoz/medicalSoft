<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_062d2765a011620b6d73c82eabfd9e25721e0be85d8317f339764a5606a61e85 extends Twig_Template
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
        $__internal_7f98b416236db2af9f32c800f60da6beb0f61d84c289ed83fa37507e20ead1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f98b416236db2af9f32c800f60da6beb0f61d84c289ed83fa37507e20ead1c6->enter($__internal_7f98b416236db2af9f32c800f60da6beb0f61d84c289ed83fa37507e20ead1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0687edbe8cef9725c80c0a809ba38999680a683ce7bffb8d6796010ecc9cac3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0687edbe8cef9725c80c0a809ba38999680a683ce7bffb8d6796010ecc9cac3f->enter($__internal_0687edbe8cef9725c80c0a809ba38999680a683ce7bffb8d6796010ecc9cac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7f98b416236db2af9f32c800f60da6beb0f61d84c289ed83fa37507e20ead1c6->leave($__internal_7f98b416236db2af9f32c800f60da6beb0f61d84c289ed83fa37507e20ead1c6_prof);

        
        $__internal_0687edbe8cef9725c80c0a809ba38999680a683ce7bffb8d6796010ecc9cac3f->leave($__internal_0687edbe8cef9725c80c0a809ba38999680a683ce7bffb8d6796010ecc9cac3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
