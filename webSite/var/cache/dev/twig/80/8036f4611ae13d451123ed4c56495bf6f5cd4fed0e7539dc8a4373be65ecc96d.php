<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_984db7529c2d399c9a7a5b2083856f5c9256a94b48e18c5151c1dcd0e04984bc extends Twig_Template
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
        $__internal_13d4806c5ba21cc28bb93fc476e63724e730cb4bfd7498306b1e310afd1749b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d4806c5ba21cc28bb93fc476e63724e730cb4bfd7498306b1e310afd1749b8->enter($__internal_13d4806c5ba21cc28bb93fc476e63724e730cb4bfd7498306b1e310afd1749b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a489f6184ca70b22bf71bd9bd8f112fa38a7e94a02c4e6866069933c313dbc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a489f6184ca70b22bf71bd9bd8f112fa38a7e94a02c4e6866069933c313dbc7c->enter($__internal_a489f6184ca70b22bf71bd9bd8f112fa38a7e94a02c4e6866069933c313dbc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_13d4806c5ba21cc28bb93fc476e63724e730cb4bfd7498306b1e310afd1749b8->leave($__internal_13d4806c5ba21cc28bb93fc476e63724e730cb4bfd7498306b1e310afd1749b8_prof);

        
        $__internal_a489f6184ca70b22bf71bd9bd8f112fa38a7e94a02c4e6866069933c313dbc7c->leave($__internal_a489f6184ca70b22bf71bd9bd8f112fa38a7e94a02c4e6866069933c313dbc7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
