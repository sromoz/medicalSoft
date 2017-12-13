<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51373b15bc3e7900f7dab7645e85aae1479fd914944259cf38caba9064983bc6 extends Twig_Template
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
        $__internal_aa2edc832a06def2d14b9e175b052d496facae8503c06dcc02b4946dfff52f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2edc832a06def2d14b9e175b052d496facae8503c06dcc02b4946dfff52f89->enter($__internal_aa2edc832a06def2d14b9e175b052d496facae8503c06dcc02b4946dfff52f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a8914bf465915db3e735eab72287d8740b5da08eee8a9c97abb44bb54448e44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8914bf465915db3e735eab72287d8740b5da08eee8a9c97abb44bb54448e44a->enter($__internal_a8914bf465915db3e735eab72287d8740b5da08eee8a9c97abb44bb54448e44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_aa2edc832a06def2d14b9e175b052d496facae8503c06dcc02b4946dfff52f89->leave($__internal_aa2edc832a06def2d14b9e175b052d496facae8503c06dcc02b4946dfff52f89_prof);

        
        $__internal_a8914bf465915db3e735eab72287d8740b5da08eee8a9c97abb44bb54448e44a->leave($__internal_a8914bf465915db3e735eab72287d8740b5da08eee8a9c97abb44bb54448e44a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
