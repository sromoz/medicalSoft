<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fb3a719a8df43bc36ec504dc75df625d94e38a75044c2f8ac923e5e7692b72 extends Twig_Template
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
        $__internal_707ecd7a30e976cef9cb56ec215d7efc94bac39473b32cb76786d65ec8e248f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707ecd7a30e976cef9cb56ec215d7efc94bac39473b32cb76786d65ec8e248f5->enter($__internal_707ecd7a30e976cef9cb56ec215d7efc94bac39473b32cb76786d65ec8e248f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_02c6a0f886922be7202c32ac3291a27a2578ba457bc6b7e21b7d6001086c787c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c6a0f886922be7202c32ac3291a27a2578ba457bc6b7e21b7d6001086c787c->enter($__internal_02c6a0f886922be7202c32ac3291a27a2578ba457bc6b7e21b7d6001086c787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_707ecd7a30e976cef9cb56ec215d7efc94bac39473b32cb76786d65ec8e248f5->leave($__internal_707ecd7a30e976cef9cb56ec215d7efc94bac39473b32cb76786d65ec8e248f5_prof);

        
        $__internal_02c6a0f886922be7202c32ac3291a27a2578ba457bc6b7e21b7d6001086c787c->leave($__internal_02c6a0f886922be7202c32ac3291a27a2578ba457bc6b7e21b7d6001086c787c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
