<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_142f93300b44b2bb5417285d6d3d9b53f212f9e4de9cfe0c22831f79065b0f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_777fa79e7b48dbcd5080dc8c564489f33eb0e51367b88d65b7cac94b64f0d4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777fa79e7b48dbcd5080dc8c564489f33eb0e51367b88d65b7cac94b64f0d4b3->enter($__internal_777fa79e7b48dbcd5080dc8c564489f33eb0e51367b88d65b7cac94b64f0d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_80ff5bbef06e200315b99e0c4e43da7787ff33ebb07df8ce7519c71cb073f86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ff5bbef06e200315b99e0c4e43da7787ff33ebb07df8ce7519c71cb073f86a->enter($__internal_80ff5bbef06e200315b99e0c4e43da7787ff33ebb07df8ce7519c71cb073f86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777fa79e7b48dbcd5080dc8c564489f33eb0e51367b88d65b7cac94b64f0d4b3->leave($__internal_777fa79e7b48dbcd5080dc8c564489f33eb0e51367b88d65b7cac94b64f0d4b3_prof);

        
        $__internal_80ff5bbef06e200315b99e0c4e43da7787ff33ebb07df8ce7519c71cb073f86a->leave($__internal_80ff5bbef06e200315b99e0c4e43da7787ff33ebb07df8ce7519c71cb073f86a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d060f24821d931c6632a10b6c6d43791acea572ce44451e507a28fc10b275bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d060f24821d931c6632a10b6c6d43791acea572ce44451e507a28fc10b275bcb->enter($__internal_d060f24821d931c6632a10b6c6d43791acea572ce44451e507a28fc10b275bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ac1c1625c4bbec4469fd3ae1a5554c03c2fbe0d45812ac2ff7cdeba81655035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac1c1625c4bbec4469fd3ae1a5554c03c2fbe0d45812ac2ff7cdeba81655035->enter($__internal_2ac1c1625c4bbec4469fd3ae1a5554c03c2fbe0d45812ac2ff7cdeba81655035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2ac1c1625c4bbec4469fd3ae1a5554c03c2fbe0d45812ac2ff7cdeba81655035->leave($__internal_2ac1c1625c4bbec4469fd3ae1a5554c03c2fbe0d45812ac2ff7cdeba81655035_prof);

        
        $__internal_d060f24821d931c6632a10b6c6d43791acea572ce44451e507a28fc10b275bcb->leave($__internal_d060f24821d931c6632a10b6c6d43791acea572ce44451e507a28fc10b275bcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
