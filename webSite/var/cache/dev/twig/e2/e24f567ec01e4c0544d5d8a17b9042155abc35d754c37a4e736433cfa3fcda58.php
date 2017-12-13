<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a462657aecdede393a1e6baa69616d105e3e0b5fa919996107a3c8fe67c784c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4d973c695e5a06284f3c1c22560cdfecef6f5109fba0a7d42340d82e82973e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d973c695e5a06284f3c1c22560cdfecef6f5109fba0a7d42340d82e82973e15->enter($__internal_4d973c695e5a06284f3c1c22560cdfecef6f5109fba0a7d42340d82e82973e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a949a9e8d58eae90d11911cac04c6394c10a20266f89138c2ed550ebdafb483f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a949a9e8d58eae90d11911cac04c6394c10a20266f89138c2ed550ebdafb483f->enter($__internal_a949a9e8d58eae90d11911cac04c6394c10a20266f89138c2ed550ebdafb483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d973c695e5a06284f3c1c22560cdfecef6f5109fba0a7d42340d82e82973e15->leave($__internal_4d973c695e5a06284f3c1c22560cdfecef6f5109fba0a7d42340d82e82973e15_prof);

        
        $__internal_a949a9e8d58eae90d11911cac04c6394c10a20266f89138c2ed550ebdafb483f->leave($__internal_a949a9e8d58eae90d11911cac04c6394c10a20266f89138c2ed550ebdafb483f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f9ce324ddc3055557d90fe0e250a49494a285fdd23bb3588721a4ceff0a36a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9ce324ddc3055557d90fe0e250a49494a285fdd23bb3588721a4ceff0a36a4->enter($__internal_7f9ce324ddc3055557d90fe0e250a49494a285fdd23bb3588721a4ceff0a36a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27d11d85f43029b69aba7142835df2f3836c6e635d44556b9dc0ec449f011fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d11d85f43029b69aba7142835df2f3836c6e635d44556b9dc0ec449f011fb1->enter($__internal_27d11d85f43029b69aba7142835df2f3836c6e635d44556b9dc0ec449f011fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_27d11d85f43029b69aba7142835df2f3836c6e635d44556b9dc0ec449f011fb1->leave($__internal_27d11d85f43029b69aba7142835df2f3836c6e635d44556b9dc0ec449f011fb1_prof);

        
        $__internal_7f9ce324ddc3055557d90fe0e250a49494a285fdd23bb3588721a4ceff0a36a4->leave($__internal_7f9ce324ddc3055557d90fe0e250a49494a285fdd23bb3588721a4ceff0a36a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
