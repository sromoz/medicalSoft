<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9618fb385f27548aaf717ce25d8363a3037fd38d77cd4a84866ea38449ca69c6 extends Twig_Template
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
        $__internal_fbeb3ab602c03aa43e5a41f520d2d898ee1f29e0f996407a60540c3a25cce48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbeb3ab602c03aa43e5a41f520d2d898ee1f29e0f996407a60540c3a25cce48f->enter($__internal_fbeb3ab602c03aa43e5a41f520d2d898ee1f29e0f996407a60540c3a25cce48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3c309f5469584167b6f1fe643aa9bcf9eb06a530a3aa5a3d3dd7d86135270338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c309f5469584167b6f1fe643aa9bcf9eb06a530a3aa5a3d3dd7d86135270338->enter($__internal_3c309f5469584167b6f1fe643aa9bcf9eb06a530a3aa5a3d3dd7d86135270338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fbeb3ab602c03aa43e5a41f520d2d898ee1f29e0f996407a60540c3a25cce48f->leave($__internal_fbeb3ab602c03aa43e5a41f520d2d898ee1f29e0f996407a60540c3a25cce48f_prof);

        
        $__internal_3c309f5469584167b6f1fe643aa9bcf9eb06a530a3aa5a3d3dd7d86135270338->leave($__internal_3c309f5469584167b6f1fe643aa9bcf9eb06a530a3aa5a3d3dd7d86135270338_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
