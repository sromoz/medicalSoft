<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_52aa971117e918cc0582879adef49e1583118244b89c55398c13d2c44f87b015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_819eba84673d2f1b48ec2795f59f1995d0646dc75ebd5b90106029f68f3b295d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819eba84673d2f1b48ec2795f59f1995d0646dc75ebd5b90106029f68f3b295d->enter($__internal_819eba84673d2f1b48ec2795f59f1995d0646dc75ebd5b90106029f68f3b295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_7b1a0fca84178f649856285f8357bbb19701df5bec6814ef4421afa0a11b0e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1a0fca84178f649856285f8357bbb19701df5bec6814ef4421afa0a11b0e7c->enter($__internal_7b1a0fca84178f649856285f8357bbb19701df5bec6814ef4421afa0a11b0e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_819eba84673d2f1b48ec2795f59f1995d0646dc75ebd5b90106029f68f3b295d->leave($__internal_819eba84673d2f1b48ec2795f59f1995d0646dc75ebd5b90106029f68f3b295d_prof);

        
        $__internal_7b1a0fca84178f649856285f8357bbb19701df5bec6814ef4421afa0a11b0e7c->leave($__internal_7b1a0fca84178f649856285f8357bbb19701df5bec6814ef4421afa0a11b0e7c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8f9eb3438ebc3431d6a18fd908065143478f776b3949dcbb00d199be159265a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9eb3438ebc3431d6a18fd908065143478f776b3949dcbb00d199be159265a2->enter($__internal_8f9eb3438ebc3431d6a18fd908065143478f776b3949dcbb00d199be159265a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a7b0a3619eda3dc549bd74bfbab6077b17f0b8af1cb3ded11407485dbfd1ac08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b0a3619eda3dc549bd74bfbab6077b17f0b8af1cb3ded11407485dbfd1ac08->enter($__internal_a7b0a3619eda3dc549bd74bfbab6077b17f0b8af1cb3ded11407485dbfd1ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a7b0a3619eda3dc549bd74bfbab6077b17f0b8af1cb3ded11407485dbfd1ac08->leave($__internal_a7b0a3619eda3dc549bd74bfbab6077b17f0b8af1cb3ded11407485dbfd1ac08_prof);

        
        $__internal_8f9eb3438ebc3431d6a18fd908065143478f776b3949dcbb00d199be159265a2->leave($__internal_8f9eb3438ebc3431d6a18fd908065143478f776b3949dcbb00d199be159265a2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7c651566a71b0bbe8a3c8af796292234913181dd0cf6e9492f498bcb79392165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c651566a71b0bbe8a3c8af796292234913181dd0cf6e9492f498bcb79392165->enter($__internal_7c651566a71b0bbe8a3c8af796292234913181dd0cf6e9492f498bcb79392165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3d2947a7ed5f07a32cc2c56cc203b1489f58966ef5546be4feefd18c39bbf44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2947a7ed5f07a32cc2c56cc203b1489f58966ef5546be4feefd18c39bbf44f->enter($__internal_3d2947a7ed5f07a32cc2c56cc203b1489f58966ef5546be4feefd18c39bbf44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d2947a7ed5f07a32cc2c56cc203b1489f58966ef5546be4feefd18c39bbf44f->leave($__internal_3d2947a7ed5f07a32cc2c56cc203b1489f58966ef5546be4feefd18c39bbf44f_prof);

        
        $__internal_7c651566a71b0bbe8a3c8af796292234913181dd0cf6e9492f498bcb79392165->leave($__internal_7c651566a71b0bbe8a3c8af796292234913181dd0cf6e9492f498bcb79392165_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_936768a3fe67bc4086d14a13393b55ab94a8285961659dbc33dc2c102d32b279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936768a3fe67bc4086d14a13393b55ab94a8285961659dbc33dc2c102d32b279->enter($__internal_936768a3fe67bc4086d14a13393b55ab94a8285961659dbc33dc2c102d32b279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_85fb136c5c15571e6ae6c335fbc5e88573a897f4c7d8071b029e8ba6c99c9e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fb136c5c15571e6ae6c335fbc5e88573a897f4c7d8071b029e8ba6c99c9e6a->enter($__internal_85fb136c5c15571e6ae6c335fbc5e88573a897f4c7d8071b029e8ba6c99c9e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_85fb136c5c15571e6ae6c335fbc5e88573a897f4c7d8071b029e8ba6c99c9e6a->leave($__internal_85fb136c5c15571e6ae6c335fbc5e88573a897f4c7d8071b029e8ba6c99c9e6a_prof);

        
        $__internal_936768a3fe67bc4086d14a13393b55ab94a8285961659dbc33dc2c102d32b279->leave($__internal_936768a3fe67bc4086d14a13393b55ab94a8285961659dbc33dc2c102d32b279_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
