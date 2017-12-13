<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_79b52ee1bca8afd597c036390abe13a2a813e3884719713b9b534a93b0ee40db extends Twig_Template
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
        $__internal_63b9b6d14c430541f659d6a0113b45f9576ae1b106a851ab30e31939087b587f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b9b6d14c430541f659d6a0113b45f9576ae1b106a851ab30e31939087b587f->enter($__internal_63b9b6d14c430541f659d6a0113b45f9576ae1b106a851ab30e31939087b587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8b080b868db0bd88b7e192e94c81c33ceb78903e75f10ea546e0ac7ad83c1c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b080b868db0bd88b7e192e94c81c33ceb78903e75f10ea546e0ac7ad83c1c7b->enter($__internal_8b080b868db0bd88b7e192e94c81c33ceb78903e75f10ea546e0ac7ad83c1c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_63b9b6d14c430541f659d6a0113b45f9576ae1b106a851ab30e31939087b587f->leave($__internal_63b9b6d14c430541f659d6a0113b45f9576ae1b106a851ab30e31939087b587f_prof);

        
        $__internal_8b080b868db0bd88b7e192e94c81c33ceb78903e75f10ea546e0ac7ad83c1c7b->leave($__internal_8b080b868db0bd88b7e192e94c81c33ceb78903e75f10ea546e0ac7ad83c1c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
