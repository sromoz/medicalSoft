<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_069e45bd53ee84f30fe95f11847bf72c4845c28f4f30e7a5188a00b0ee6750c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_563f5fbd3f965f72df9221cc7d5b7e826a3019d8669e6ae7f8a129d6f16a3db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563f5fbd3f965f72df9221cc7d5b7e826a3019d8669e6ae7f8a129d6f16a3db2->enter($__internal_563f5fbd3f965f72df9221cc7d5b7e826a3019d8669e6ae7f8a129d6f16a3db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_56ab4f64b4e83d31fff8bf5310072ef84c85c5eca0790df737ba3c6eea663fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ab4f64b4e83d31fff8bf5310072ef84c85c5eca0790df737ba3c6eea663fae->enter($__internal_56ab4f64b4e83d31fff8bf5310072ef84c85c5eca0790df737ba3c6eea663fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563f5fbd3f965f72df9221cc7d5b7e826a3019d8669e6ae7f8a129d6f16a3db2->leave($__internal_563f5fbd3f965f72df9221cc7d5b7e826a3019d8669e6ae7f8a129d6f16a3db2_prof);

        
        $__internal_56ab4f64b4e83d31fff8bf5310072ef84c85c5eca0790df737ba3c6eea663fae->leave($__internal_56ab4f64b4e83d31fff8bf5310072ef84c85c5eca0790df737ba3c6eea663fae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f011cf09cd00442d82e6b9424dc86e75c41cfa141c7e54bd1817d5102f720cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f011cf09cd00442d82e6b9424dc86e75c41cfa141c7e54bd1817d5102f720cec->enter($__internal_f011cf09cd00442d82e6b9424dc86e75c41cfa141c7e54bd1817d5102f720cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b70e5ada42c54288127fcdfa489de15644f9d6df06984e0032c5e9a97fa343d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b70e5ada42c54288127fcdfa489de15644f9d6df06984e0032c5e9a97fa343d->enter($__internal_2b70e5ada42c54288127fcdfa489de15644f9d6df06984e0032c5e9a97fa343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2b70e5ada42c54288127fcdfa489de15644f9d6df06984e0032c5e9a97fa343d->leave($__internal_2b70e5ada42c54288127fcdfa489de15644f9d6df06984e0032c5e9a97fa343d_prof);

        
        $__internal_f011cf09cd00442d82e6b9424dc86e75c41cfa141c7e54bd1817d5102f720cec->leave($__internal_f011cf09cd00442d82e6b9424dc86e75c41cfa141c7e54bd1817d5102f720cec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
