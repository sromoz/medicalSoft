<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_80499c4329fa415b0f1a304e63eb2ff41a4d5f37d02d0ff33cab0fb6cf7628ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c0f196cf9b2cbd93615a92e49c55a00b24169fca79eb15a2405ca88126fb4d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f196cf9b2cbd93615a92e49c55a00b24169fca79eb15a2405ca88126fb4d4e->enter($__internal_c0f196cf9b2cbd93615a92e49c55a00b24169fca79eb15a2405ca88126fb4d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_e815e928e89c9364d62c5e8ffd21da6f39a61518bdd04cc0c9226e75f6d66db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e815e928e89c9364d62c5e8ffd21da6f39a61518bdd04cc0c9226e75f6d66db6->enter($__internal_e815e928e89c9364d62c5e8ffd21da6f39a61518bdd04cc0c9226e75f6d66db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f196cf9b2cbd93615a92e49c55a00b24169fca79eb15a2405ca88126fb4d4e->leave($__internal_c0f196cf9b2cbd93615a92e49c55a00b24169fca79eb15a2405ca88126fb4d4e_prof);

        
        $__internal_e815e928e89c9364d62c5e8ffd21da6f39a61518bdd04cc0c9226e75f6d66db6->leave($__internal_e815e928e89c9364d62c5e8ffd21da6f39a61518bdd04cc0c9226e75f6d66db6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa70564d0758dd27af2bce364e7512f1cf5f27a047791cbbca8b91ed63a8bee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa70564d0758dd27af2bce364e7512f1cf5f27a047791cbbca8b91ed63a8bee9->enter($__internal_aa70564d0758dd27af2bce364e7512f1cf5f27a047791cbbca8b91ed63a8bee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98a15acc2b19862c7ec423404736392f1d646565c43954dbc75c7621a3aeb1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a15acc2b19862c7ec423404736392f1d646565c43954dbc75c7621a3aeb1fa->enter($__internal_98a15acc2b19862c7ec423404736392f1d646565c43954dbc75c7621a3aeb1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_98a15acc2b19862c7ec423404736392f1d646565c43954dbc75c7621a3aeb1fa->leave($__internal_98a15acc2b19862c7ec423404736392f1d646565c43954dbc75c7621a3aeb1fa_prof);

        
        $__internal_aa70564d0758dd27af2bce364e7512f1cf5f27a047791cbbca8b91ed63a8bee9->leave($__internal_aa70564d0758dd27af2bce364e7512f1cf5f27a047791cbbca8b91ed63a8bee9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
