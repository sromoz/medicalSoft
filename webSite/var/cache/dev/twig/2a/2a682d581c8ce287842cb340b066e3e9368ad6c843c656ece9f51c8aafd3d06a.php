<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e7488f8e5ad8748da39517da1d93228d2075cce026642d6351d14800d8aa271d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a908deaa67d88495ed52ef575e2c08444d198474ff61d72a700e79b9a69e45de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a908deaa67d88495ed52ef575e2c08444d198474ff61d72a700e79b9a69e45de->enter($__internal_a908deaa67d88495ed52ef575e2c08444d198474ff61d72a700e79b9a69e45de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_049d7ab280cd14f9bcbd6423eb1e1f89cdc205b93e2a172fcfb87b64c011c14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049d7ab280cd14f9bcbd6423eb1e1f89cdc205b93e2a172fcfb87b64c011c14e->enter($__internal_049d7ab280cd14f9bcbd6423eb1e1f89cdc205b93e2a172fcfb87b64c011c14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a908deaa67d88495ed52ef575e2c08444d198474ff61d72a700e79b9a69e45de->leave($__internal_a908deaa67d88495ed52ef575e2c08444d198474ff61d72a700e79b9a69e45de_prof);

        
        $__internal_049d7ab280cd14f9bcbd6423eb1e1f89cdc205b93e2a172fcfb87b64c011c14e->leave($__internal_049d7ab280cd14f9bcbd6423eb1e1f89cdc205b93e2a172fcfb87b64c011c14e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_782aff2506740f255f8f08a705b0e943f1b75a1260bb29cd5da047f885705633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782aff2506740f255f8f08a705b0e943f1b75a1260bb29cd5da047f885705633->enter($__internal_782aff2506740f255f8f08a705b0e943f1b75a1260bb29cd5da047f885705633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e44be17fda8eb2a7a38892b1b8bd140b73f3ecabc9c1856c5fab477ceb35def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e44be17fda8eb2a7a38892b1b8bd140b73f3ecabc9c1856c5fab477ceb35def->enter($__internal_4e44be17fda8eb2a7a38892b1b8bd140b73f3ecabc9c1856c5fab477ceb35def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4e44be17fda8eb2a7a38892b1b8bd140b73f3ecabc9c1856c5fab477ceb35def->leave($__internal_4e44be17fda8eb2a7a38892b1b8bd140b73f3ecabc9c1856c5fab477ceb35def_prof);

        
        $__internal_782aff2506740f255f8f08a705b0e943f1b75a1260bb29cd5da047f885705633->leave($__internal_782aff2506740f255f8f08a705b0e943f1b75a1260bb29cd5da047f885705633_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
