<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4b88733ddd9d78aa9202cc3cf20d5026c5eb01998dec3cb378fc92ad578a8d4a extends Twig_Template
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
        $__internal_d99530f188a84b33703d4c5ceffcea2ed531b59839a6c84fe559836d1de52274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99530f188a84b33703d4c5ceffcea2ed531b59839a6c84fe559836d1de52274->enter($__internal_d99530f188a84b33703d4c5ceffcea2ed531b59839a6c84fe559836d1de52274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_efb8780f86f3c1db3f1c4e87434bf7c3d9aa92b1e1c5deb9e41b4a136cba13b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb8780f86f3c1db3f1c4e87434bf7c3d9aa92b1e1c5deb9e41b4a136cba13b1->enter($__internal_efb8780f86f3c1db3f1c4e87434bf7c3d9aa92b1e1c5deb9e41b4a136cba13b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d99530f188a84b33703d4c5ceffcea2ed531b59839a6c84fe559836d1de52274->leave($__internal_d99530f188a84b33703d4c5ceffcea2ed531b59839a6c84fe559836d1de52274_prof);

        
        $__internal_efb8780f86f3c1db3f1c4e87434bf7c3d9aa92b1e1c5deb9e41b4a136cba13b1->leave($__internal_efb8780f86f3c1db3f1c4e87434bf7c3d9aa92b1e1c5deb9e41b4a136cba13b1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_09480881e952d7f33a6671c0928f1b1920045322a8f496648f9497bf1fbf04bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09480881e952d7f33a6671c0928f1b1920045322a8f496648f9497bf1fbf04bd->enter($__internal_09480881e952d7f33a6671c0928f1b1920045322a8f496648f9497bf1fbf04bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8e577cbaf43566b7e53b2772bfd9a19ba612c87598a5288a085c5073d93f2e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e577cbaf43566b7e53b2772bfd9a19ba612c87598a5288a085c5073d93f2e32->enter($__internal_8e577cbaf43566b7e53b2772bfd9a19ba612c87598a5288a085c5073d93f2e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8e577cbaf43566b7e53b2772bfd9a19ba612c87598a5288a085c5073d93f2e32->leave($__internal_8e577cbaf43566b7e53b2772bfd9a19ba612c87598a5288a085c5073d93f2e32_prof);

        
        $__internal_09480881e952d7f33a6671c0928f1b1920045322a8f496648f9497bf1fbf04bd->leave($__internal_09480881e952d7f33a6671c0928f1b1920045322a8f496648f9497bf1fbf04bd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_42858bc6202c7bf7a50d287688b5f8a9aa7fe69616efc6b29e270a9b4218d542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42858bc6202c7bf7a50d287688b5f8a9aa7fe69616efc6b29e270a9b4218d542->enter($__internal_42858bc6202c7bf7a50d287688b5f8a9aa7fe69616efc6b29e270a9b4218d542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a315d0cff54be9dbcaadbc42a751790eb8dfe71672360ea00b89572f23a3af97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a315d0cff54be9dbcaadbc42a751790eb8dfe71672360ea00b89572f23a3af97->enter($__internal_a315d0cff54be9dbcaadbc42a751790eb8dfe71672360ea00b89572f23a3af97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a315d0cff54be9dbcaadbc42a751790eb8dfe71672360ea00b89572f23a3af97->leave($__internal_a315d0cff54be9dbcaadbc42a751790eb8dfe71672360ea00b89572f23a3af97_prof);

        
        $__internal_42858bc6202c7bf7a50d287688b5f8a9aa7fe69616efc6b29e270a9b4218d542->leave($__internal_42858bc6202c7bf7a50d287688b5f8a9aa7fe69616efc6b29e270a9b4218d542_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1cf05e85ca2fa269b1a2ce65c9b75153369d796a080423627589c4220bed8c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf05e85ca2fa269b1a2ce65c9b75153369d796a080423627589c4220bed8c57->enter($__internal_1cf05e85ca2fa269b1a2ce65c9b75153369d796a080423627589c4220bed8c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b936153b13c243861225a1cd78ca8b7a56028c80f7058a087653aff3d065d3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b936153b13c243861225a1cd78ca8b7a56028c80f7058a087653aff3d065d3b1->enter($__internal_b936153b13c243861225a1cd78ca8b7a56028c80f7058a087653aff3d065d3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b936153b13c243861225a1cd78ca8b7a56028c80f7058a087653aff3d065d3b1->leave($__internal_b936153b13c243861225a1cd78ca8b7a56028c80f7058a087653aff3d065d3b1_prof);

        
        $__internal_1cf05e85ca2fa269b1a2ce65c9b75153369d796a080423627589c4220bed8c57->leave($__internal_1cf05e85ca2fa269b1a2ce65c9b75153369d796a080423627589c4220bed8c57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
