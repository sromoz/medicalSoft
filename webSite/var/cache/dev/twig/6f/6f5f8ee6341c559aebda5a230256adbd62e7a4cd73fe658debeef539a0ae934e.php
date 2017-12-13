<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8f7906d722391cfae9694dde4b965ced2cfa09bc855988020f3b789eac9b6ee3 extends Twig_Template
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
        $__internal_440944db9530d75d3074f03e26228a1df02495b0559829ee67c0daa98e0d3148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440944db9530d75d3074f03e26228a1df02495b0559829ee67c0daa98e0d3148->enter($__internal_440944db9530d75d3074f03e26228a1df02495b0559829ee67c0daa98e0d3148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_60c00e9f987fac29d862323d6e3053fcc039bec2cd9624bed93b1d49e7b739e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c00e9f987fac29d862323d6e3053fcc039bec2cd9624bed93b1d49e7b739e8->enter($__internal_60c00e9f987fac29d862323d6e3053fcc039bec2cd9624bed93b1d49e7b739e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_440944db9530d75d3074f03e26228a1df02495b0559829ee67c0daa98e0d3148->leave($__internal_440944db9530d75d3074f03e26228a1df02495b0559829ee67c0daa98e0d3148_prof);

        
        $__internal_60c00e9f987fac29d862323d6e3053fcc039bec2cd9624bed93b1d49e7b739e8->leave($__internal_60c00e9f987fac29d862323d6e3053fcc039bec2cd9624bed93b1d49e7b739e8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_44a83d0b6900821016601b705598d8076bb2f37864ad888c2caa8a5ca5c86f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a83d0b6900821016601b705598d8076bb2f37864ad888c2caa8a5ca5c86f06->enter($__internal_44a83d0b6900821016601b705598d8076bb2f37864ad888c2caa8a5ca5c86f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7785642e3435cf2d6bd6b41192ec92465e79a28a612360eb049c0bc78d960c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7785642e3435cf2d6bd6b41192ec92465e79a28a612360eb049c0bc78d960c3c->enter($__internal_7785642e3435cf2d6bd6b41192ec92465e79a28a612360eb049c0bc78d960c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7785642e3435cf2d6bd6b41192ec92465e79a28a612360eb049c0bc78d960c3c->leave($__internal_7785642e3435cf2d6bd6b41192ec92465e79a28a612360eb049c0bc78d960c3c_prof);

        
        $__internal_44a83d0b6900821016601b705598d8076bb2f37864ad888c2caa8a5ca5c86f06->leave($__internal_44a83d0b6900821016601b705598d8076bb2f37864ad888c2caa8a5ca5c86f06_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_87e67eadc00f62f5bf581feebda282f941ee31a3b281aaede3fc0f9abfc7d7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e67eadc00f62f5bf581feebda282f941ee31a3b281aaede3fc0f9abfc7d7d1->enter($__internal_87e67eadc00f62f5bf581feebda282f941ee31a3b281aaede3fc0f9abfc7d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_de35e0adbea05626d5e9ad6a76d855cb98351ae9557ec05f589b1fff00b6dc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de35e0adbea05626d5e9ad6a76d855cb98351ae9557ec05f589b1fff00b6dc63->enter($__internal_de35e0adbea05626d5e9ad6a76d855cb98351ae9557ec05f589b1fff00b6dc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_de35e0adbea05626d5e9ad6a76d855cb98351ae9557ec05f589b1fff00b6dc63->leave($__internal_de35e0adbea05626d5e9ad6a76d855cb98351ae9557ec05f589b1fff00b6dc63_prof);

        
        $__internal_87e67eadc00f62f5bf581feebda282f941ee31a3b281aaede3fc0f9abfc7d7d1->leave($__internal_87e67eadc00f62f5bf581feebda282f941ee31a3b281aaede3fc0f9abfc7d7d1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_58533b14850c43ba864310588cb6b99fa816717e904ed13c57516a16d598dc99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58533b14850c43ba864310588cb6b99fa816717e904ed13c57516a16d598dc99->enter($__internal_58533b14850c43ba864310588cb6b99fa816717e904ed13c57516a16d598dc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_17340e2d8d8ebe65d5fa1fcc3f14247e8175a8709d5c814716b84d71d926080a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17340e2d8d8ebe65d5fa1fcc3f14247e8175a8709d5c814716b84d71d926080a->enter($__internal_17340e2d8d8ebe65d5fa1fcc3f14247e8175a8709d5c814716b84d71d926080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_17340e2d8d8ebe65d5fa1fcc3f14247e8175a8709d5c814716b84d71d926080a->leave($__internal_17340e2d8d8ebe65d5fa1fcc3f14247e8175a8709d5c814716b84d71d926080a_prof);

        
        $__internal_58533b14850c43ba864310588cb6b99fa816717e904ed13c57516a16d598dc99->leave($__internal_58533b14850c43ba864310588cb6b99fa816717e904ed13c57516a16d598dc99_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
