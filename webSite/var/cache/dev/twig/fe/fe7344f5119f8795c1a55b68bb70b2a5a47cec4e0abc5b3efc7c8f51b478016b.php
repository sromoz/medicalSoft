<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e180f9812d9abd59e8d051fff5bf906fb5a7a2e7a1089a63df52725eeff688ea extends Twig_Template
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
        $__internal_fe286b38cd545009bbe3277981953fecae9dc7b6dbedb4e6b109cb30937f5ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe286b38cd545009bbe3277981953fecae9dc7b6dbedb4e6b109cb30937f5ed5->enter($__internal_fe286b38cd545009bbe3277981953fecae9dc7b6dbedb4e6b109cb30937f5ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_335421dcbdb1c89bc9d4a1e49b3a2de33eaadb90e5474314e126849ee2de7c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335421dcbdb1c89bc9d4a1e49b3a2de33eaadb90e5474314e126849ee2de7c16->enter($__internal_335421dcbdb1c89bc9d4a1e49b3a2de33eaadb90e5474314e126849ee2de7c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fe286b38cd545009bbe3277981953fecae9dc7b6dbedb4e6b109cb30937f5ed5->leave($__internal_fe286b38cd545009bbe3277981953fecae9dc7b6dbedb4e6b109cb30937f5ed5_prof);

        
        $__internal_335421dcbdb1c89bc9d4a1e49b3a2de33eaadb90e5474314e126849ee2de7c16->leave($__internal_335421dcbdb1c89bc9d4a1e49b3a2de33eaadb90e5474314e126849ee2de7c16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
