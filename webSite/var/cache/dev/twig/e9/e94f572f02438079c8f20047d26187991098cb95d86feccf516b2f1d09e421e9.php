<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_24420ae2e758a493be09bb7fd7dfb98b8359eb8fed7c1fd9cbb3690026966dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a4a9b3e9d392aa7230a0c9d02a82c927e1c06053df35b7c0de04f405f9c651f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a9b3e9d392aa7230a0c9d02a82c927e1c06053df35b7c0de04f405f9c651f0->enter($__internal_a4a9b3e9d392aa7230a0c9d02a82c927e1c06053df35b7c0de04f405f9c651f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_cd2fa5a199eb678915c497a5849146b2b82d4effd5f08def5b96fc858b1ff119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2fa5a199eb678915c497a5849146b2b82d4effd5f08def5b96fc858b1ff119->enter($__internal_cd2fa5a199eb678915c497a5849146b2b82d4effd5f08def5b96fc858b1ff119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a9b3e9d392aa7230a0c9d02a82c927e1c06053df35b7c0de04f405f9c651f0->leave($__internal_a4a9b3e9d392aa7230a0c9d02a82c927e1c06053df35b7c0de04f405f9c651f0_prof);

        
        $__internal_cd2fa5a199eb678915c497a5849146b2b82d4effd5f08def5b96fc858b1ff119->leave($__internal_cd2fa5a199eb678915c497a5849146b2b82d4effd5f08def5b96fc858b1ff119_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3adff074dc5cc18803d7f2757bccfcd36325c301f3823c7a592a0a965738e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3adff074dc5cc18803d7f2757bccfcd36325c301f3823c7a592a0a965738e1a->enter($__internal_a3adff074dc5cc18803d7f2757bccfcd36325c301f3823c7a592a0a965738e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7301ab2ecc6326ebf80557128917fe89b1617f7fc3bf37cb54c324e5ba0d4316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7301ab2ecc6326ebf80557128917fe89b1617f7fc3bf37cb54c324e5ba0d4316->enter($__internal_7301ab2ecc6326ebf80557128917fe89b1617f7fc3bf37cb54c324e5ba0d4316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7301ab2ecc6326ebf80557128917fe89b1617f7fc3bf37cb54c324e5ba0d4316->leave($__internal_7301ab2ecc6326ebf80557128917fe89b1617f7fc3bf37cb54c324e5ba0d4316_prof);

        
        $__internal_a3adff074dc5cc18803d7f2757bccfcd36325c301f3823c7a592a0a965738e1a->leave($__internal_a3adff074dc5cc18803d7f2757bccfcd36325c301f3823c7a592a0a965738e1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
