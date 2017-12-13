<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c321b27f600d2c707885c1fb6c3429dd09131cc27cf20f889d1ce73a1291c74f extends Twig_Template
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
        $__internal_7c7fb1b4dd4022fab4552b0e402699f70f4181dbdbb16159dba957ef26deb9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7fb1b4dd4022fab4552b0e402699f70f4181dbdbb16159dba957ef26deb9b3->enter($__internal_7c7fb1b4dd4022fab4552b0e402699f70f4181dbdbb16159dba957ef26deb9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cb3f62c7ef81b93e0603da92a90671b7a3acc5c3749a0b3532eed62682141544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3f62c7ef81b93e0603da92a90671b7a3acc5c3749a0b3532eed62682141544->enter($__internal_cb3f62c7ef81b93e0603da92a90671b7a3acc5c3749a0b3532eed62682141544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7c7fb1b4dd4022fab4552b0e402699f70f4181dbdbb16159dba957ef26deb9b3->leave($__internal_7c7fb1b4dd4022fab4552b0e402699f70f4181dbdbb16159dba957ef26deb9b3_prof);

        
        $__internal_cb3f62c7ef81b93e0603da92a90671b7a3acc5c3749a0b3532eed62682141544->leave($__internal_cb3f62c7ef81b93e0603da92a90671b7a3acc5c3749a0b3532eed62682141544_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
