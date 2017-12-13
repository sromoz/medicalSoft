<?php

/* menuBundle:Default:index.html.twig */
class __TwigTemplate_11e4272e63323aa8166e7d2641d97343ecd2de49a8e712bbb4daeb3efdb648e4 extends Twig_Template
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
        $__internal_f367e53bf7643a40ac52a9739bdc53ba3f885ab6f7f87b9d1a9470cf79dc4596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f367e53bf7643a40ac52a9739bdc53ba3f885ab6f7f87b9d1a9470cf79dc4596->enter($__internal_f367e53bf7643a40ac52a9739bdc53ba3f885ab6f7f87b9d1a9470cf79dc4596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuBundle:Default:index.html.twig"));

        $__internal_aae0e24ad01ec4f7ac26b8c96577590bf63a60f6c37a972176a44c3c00c8b91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae0e24ad01ec4f7ac26b8c96577590bf63a60f6c37a972176a44c3c00c8b91d->enter($__internal_aae0e24ad01ec4f7ac26b8c96577590bf63a60f6c37a972176a44c3c00c8b91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f367e53bf7643a40ac52a9739bdc53ba3f885ab6f7f87b9d1a9470cf79dc4596->leave($__internal_f367e53bf7643a40ac52a9739bdc53ba3f885ab6f7f87b9d1a9470cf79dc4596_prof);

        
        $__internal_aae0e24ad01ec4f7ac26b8c96577590bf63a60f6c37a972176a44c3c00c8b91d->leave($__internal_aae0e24ad01ec4f7ac26b8c96577590bf63a60f6c37a972176a44c3c00c8b91d_prof);

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
        return new Twig_Source("{% extends 'inicio.html.twig' %}", "menuBundle:Default:index.html.twig", "C:\\wamp64\\www\\webSite\\src\\menuBundle/Resources/views/Default/index.html.twig");
    }
}
