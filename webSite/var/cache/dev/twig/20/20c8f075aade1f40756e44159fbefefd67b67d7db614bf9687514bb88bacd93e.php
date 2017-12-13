<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bcdeae8fa636599009bddd7af6edb04859ec703047e3a244e50bb64d7e068c9c extends Twig_Template
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
        $__internal_55bb8b8ab765cb5b5dad8f68608e0fc470e7b8ba42b95c5ce2df7cd6dde64a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bb8b8ab765cb5b5dad8f68608e0fc470e7b8ba42b95c5ce2df7cd6dde64a2a->enter($__internal_55bb8b8ab765cb5b5dad8f68608e0fc470e7b8ba42b95c5ce2df7cd6dde64a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_48d648c80a7a017a9d440edde028d9bb64b2194c84382e112006acf3cc42121b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d648c80a7a017a9d440edde028d9bb64b2194c84382e112006acf3cc42121b->enter($__internal_48d648c80a7a017a9d440edde028d9bb64b2194c84382e112006acf3cc42121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_55bb8b8ab765cb5b5dad8f68608e0fc470e7b8ba42b95c5ce2df7cd6dde64a2a->leave($__internal_55bb8b8ab765cb5b5dad8f68608e0fc470e7b8ba42b95c5ce2df7cd6dde64a2a_prof);

        
        $__internal_48d648c80a7a017a9d440edde028d9bb64b2194c84382e112006acf3cc42121b->leave($__internal_48d648c80a7a017a9d440edde028d9bb64b2194c84382e112006acf3cc42121b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c6849dbedda17684707625a51831694841d8aa1543549b730442d9e7694ef516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6849dbedda17684707625a51831694841d8aa1543549b730442d9e7694ef516->enter($__internal_c6849dbedda17684707625a51831694841d8aa1543549b730442d9e7694ef516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_49ad35fdb01c57fa17495990db9051b044470b7696bebc5fbc4f36cc2fdb46dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ad35fdb01c57fa17495990db9051b044470b7696bebc5fbc4f36cc2fdb46dc->enter($__internal_49ad35fdb01c57fa17495990db9051b044470b7696bebc5fbc4f36cc2fdb46dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_49ad35fdb01c57fa17495990db9051b044470b7696bebc5fbc4f36cc2fdb46dc->leave($__internal_49ad35fdb01c57fa17495990db9051b044470b7696bebc5fbc4f36cc2fdb46dc_prof);

        
        $__internal_c6849dbedda17684707625a51831694841d8aa1543549b730442d9e7694ef516->leave($__internal_c6849dbedda17684707625a51831694841d8aa1543549b730442d9e7694ef516_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b88856494c176f13383df759975036fe0a26ae503232d584bd0983aa46733ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88856494c176f13383df759975036fe0a26ae503232d584bd0983aa46733ab2->enter($__internal_b88856494c176f13383df759975036fe0a26ae503232d584bd0983aa46733ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4f969fe141ce1fcc2caa98639bee40d061c47a1ea0fda7d4fbc14baa34771824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f969fe141ce1fcc2caa98639bee40d061c47a1ea0fda7d4fbc14baa34771824->enter($__internal_4f969fe141ce1fcc2caa98639bee40d061c47a1ea0fda7d4fbc14baa34771824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f969fe141ce1fcc2caa98639bee40d061c47a1ea0fda7d4fbc14baa34771824->leave($__internal_4f969fe141ce1fcc2caa98639bee40d061c47a1ea0fda7d4fbc14baa34771824_prof);

        
        $__internal_b88856494c176f13383df759975036fe0a26ae503232d584bd0983aa46733ab2->leave($__internal_b88856494c176f13383df759975036fe0a26ae503232d584bd0983aa46733ab2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_91599bdad9c1f5e49d1f3a73fc52042adb08d40f280859f987b41378cc5275f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91599bdad9c1f5e49d1f3a73fc52042adb08d40f280859f987b41378cc5275f6->enter($__internal_91599bdad9c1f5e49d1f3a73fc52042adb08d40f280859f987b41378cc5275f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_517bfd1b9e7afe5975711d18edfc5b527dea732daa54f306a062df915ef41980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517bfd1b9e7afe5975711d18edfc5b527dea732daa54f306a062df915ef41980->enter($__internal_517bfd1b9e7afe5975711d18edfc5b527dea732daa54f306a062df915ef41980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_517bfd1b9e7afe5975711d18edfc5b527dea732daa54f306a062df915ef41980->leave($__internal_517bfd1b9e7afe5975711d18edfc5b527dea732daa54f306a062df915ef41980_prof);

        
        $__internal_91599bdad9c1f5e49d1f3a73fc52042adb08d40f280859f987b41378cc5275f6->leave($__internal_91599bdad9c1f5e49d1f3a73fc52042adb08d40f280859f987b41378cc5275f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
