<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c82f6eaa191576a7bb29a546afc0e4ad61ccaa1cad6d6c148634e1bc5255bfa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5f7e0765fa95e23498688fd2f362076685061d8217909a5ff145d6797c1100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5f7e0765fa95e23498688fd2f362076685061d8217909a5ff145d6797c1100->enter($__internal_8d5f7e0765fa95e23498688fd2f362076685061d8217909a5ff145d6797c1100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_7a38d467cfb172194ec1dc906f7eacc503a6ee9f64b5e0be0879eebd112ca63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a38d467cfb172194ec1dc906f7eacc503a6ee9f64b5e0be0879eebd112ca63d->enter($__internal_7a38d467cfb172194ec1dc906f7eacc503a6ee9f64b5e0be0879eebd112ca63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5f7e0765fa95e23498688fd2f362076685061d8217909a5ff145d6797c1100->leave($__internal_8d5f7e0765fa95e23498688fd2f362076685061d8217909a5ff145d6797c1100_prof);

        
        $__internal_7a38d467cfb172194ec1dc906f7eacc503a6ee9f64b5e0be0879eebd112ca63d->leave($__internal_7a38d467cfb172194ec1dc906f7eacc503a6ee9f64b5e0be0879eebd112ca63d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ba3f178c78221c35b17cea6b6d6c96a60c19ca93962c7cd8e0f42ff8295ab5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba3f178c78221c35b17cea6b6d6c96a60c19ca93962c7cd8e0f42ff8295ab5f->enter($__internal_7ba3f178c78221c35b17cea6b6d6c96a60c19ca93962c7cd8e0f42ff8295ab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b9c35d22610fb4493e6afdd68eb08dc4d57919cb3017de43342ed27b98a7c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9c35d22610fb4493e6afdd68eb08dc4d57919cb3017de43342ed27b98a7c5a->enter($__internal_9b9c35d22610fb4493e6afdd68eb08dc4d57919cb3017de43342ed27b98a7c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9b9c35d22610fb4493e6afdd68eb08dc4d57919cb3017de43342ed27b98a7c5a->leave($__internal_9b9c35d22610fb4493e6afdd68eb08dc4d57919cb3017de43342ed27b98a7c5a_prof);

        
        $__internal_7ba3f178c78221c35b17cea6b6d6c96a60c19ca93962c7cd8e0f42ff8295ab5f->leave($__internal_7ba3f178c78221c35b17cea6b6d6c96a60c19ca93962c7cd8e0f42ff8295ab5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
