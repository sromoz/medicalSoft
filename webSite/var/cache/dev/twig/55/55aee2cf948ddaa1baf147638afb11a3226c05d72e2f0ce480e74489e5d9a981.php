<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_eb79baf7d138e644d7b5ab3f471f074a818ff65f41efff4bf5e2f6f1ca9f55be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_2c9ca05c02021519d97891ae49c086fe3e321a73a532e7924351a826402a6895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9ca05c02021519d97891ae49c086fe3e321a73a532e7924351a826402a6895->enter($__internal_2c9ca05c02021519d97891ae49c086fe3e321a73a532e7924351a826402a6895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_dee9c393e107b876477485565d47f12f00fe1e2a699b5e0b38479dca96f1d22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee9c393e107b876477485565d47f12f00fe1e2a699b5e0b38479dca96f1d22e->enter($__internal_dee9c393e107b876477485565d47f12f00fe1e2a699b5e0b38479dca96f1d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9ca05c02021519d97891ae49c086fe3e321a73a532e7924351a826402a6895->leave($__internal_2c9ca05c02021519d97891ae49c086fe3e321a73a532e7924351a826402a6895_prof);

        
        $__internal_dee9c393e107b876477485565d47f12f00fe1e2a699b5e0b38479dca96f1d22e->leave($__internal_dee9c393e107b876477485565d47f12f00fe1e2a699b5e0b38479dca96f1d22e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fae58cc7d54a0a64cff87bc2e69806c1b6d3e6f164b89dc903529e823544e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fae58cc7d54a0a64cff87bc2e69806c1b6d3e6f164b89dc903529e823544e7f->enter($__internal_6fae58cc7d54a0a64cff87bc2e69806c1b6d3e6f164b89dc903529e823544e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f1032e7ef21b3df0632b4e4fe29a67c7bef90b00fd5c3629f3ce7d8881b5f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1032e7ef21b3df0632b4e4fe29a67c7bef90b00fd5c3629f3ce7d8881b5f02->enter($__internal_2f1032e7ef21b3df0632b4e4fe29a67c7bef90b00fd5c3629f3ce7d8881b5f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2f1032e7ef21b3df0632b4e4fe29a67c7bef90b00fd5c3629f3ce7d8881b5f02->leave($__internal_2f1032e7ef21b3df0632b4e4fe29a67c7bef90b00fd5c3629f3ce7d8881b5f02_prof);

        
        $__internal_6fae58cc7d54a0a64cff87bc2e69806c1b6d3e6f164b89dc903529e823544e7f->leave($__internal_6fae58cc7d54a0a64cff87bc2e69806c1b6d3e6f164b89dc903529e823544e7f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
