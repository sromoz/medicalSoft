<?php

/* menuBundle:Default:index.html.twig */
class __TwigTemplate_2ef7c5dae7a9874176b2692ccd8efd1005da051deea1845a6c3517bf913fd500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", "menuBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ea00579361566aee052cc2aef1f520aee304db676a8e46faafe06cb226cd980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea00579361566aee052cc2aef1f520aee304db676a8e46faafe06cb226cd980->enter($__internal_4ea00579361566aee052cc2aef1f520aee304db676a8e46faafe06cb226cd980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuBundle:Default:index.html.twig"));

        $__internal_a72dcce00eea276335ba995a98ba631230e3708d0cee97e9b453ad23cc0c947d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72dcce00eea276335ba995a98ba631230e3708d0cee97e9b453ad23cc0c947d->enter($__internal_a72dcce00eea276335ba995a98ba631230e3708d0cee97e9b453ad23cc0c947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ea00579361566aee052cc2aef1f520aee304db676a8e46faafe06cb226cd980->leave($__internal_4ea00579361566aee052cc2aef1f520aee304db676a8e46faafe06cb226cd980_prof);

        
        $__internal_a72dcce00eea276335ba995a98ba631230e3708d0cee97e9b453ad23cc0c947d->leave($__internal_a72dcce00eea276335ba995a98ba631230e3708d0cee97e9b453ad23cc0c947d_prof);

    }

    public function getTemplateName()
    {
        return "menuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}", "menuBundle:Default:index.html.twig", "C:\\wamp64\\www\\webSite\\src\\menuBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
