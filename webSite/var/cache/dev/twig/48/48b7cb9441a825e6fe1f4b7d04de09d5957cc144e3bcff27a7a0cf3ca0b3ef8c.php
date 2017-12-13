<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cd9327979e2be4e9a474e6a7a0fa3385e78803adb74c7887b45bf7376981c484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_950dad226c791cf1e7b6373a27d86a81eabbdc2223ee8323f1f716a4ee15963e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950dad226c791cf1e7b6373a27d86a81eabbdc2223ee8323f1f716a4ee15963e->enter($__internal_950dad226c791cf1e7b6373a27d86a81eabbdc2223ee8323f1f716a4ee15963e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_20e96a1e888c9f97f8a86f8bcdae8b18d9dd086a2adfd00e3554e8599d9836a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e96a1e888c9f97f8a86f8bcdae8b18d9dd086a2adfd00e3554e8599d9836a5->enter($__internal_20e96a1e888c9f97f8a86f8bcdae8b18d9dd086a2adfd00e3554e8599d9836a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_950dad226c791cf1e7b6373a27d86a81eabbdc2223ee8323f1f716a4ee15963e->leave($__internal_950dad226c791cf1e7b6373a27d86a81eabbdc2223ee8323f1f716a4ee15963e_prof);

        
        $__internal_20e96a1e888c9f97f8a86f8bcdae8b18d9dd086a2adfd00e3554e8599d9836a5->leave($__internal_20e96a1e888c9f97f8a86f8bcdae8b18d9dd086a2adfd00e3554e8599d9836a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09a4952131845deefc04033f1f119dde70f17f247aaac27e0435f9eb525c51a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a4952131845deefc04033f1f119dde70f17f247aaac27e0435f9eb525c51a0->enter($__internal_09a4952131845deefc04033f1f119dde70f17f247aaac27e0435f9eb525c51a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1fc709af690253775332032d2ae27fdbcb88ec2a53f688bd15878a2c9d6f7800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc709af690253775332032d2ae27fdbcb88ec2a53f688bd15878a2c9d6f7800->enter($__internal_1fc709af690253775332032d2ae27fdbcb88ec2a53f688bd15878a2c9d6f7800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1fc709af690253775332032d2ae27fdbcb88ec2a53f688bd15878a2c9d6f7800->leave($__internal_1fc709af690253775332032d2ae27fdbcb88ec2a53f688bd15878a2c9d6f7800_prof);

        
        $__internal_09a4952131845deefc04033f1f119dde70f17f247aaac27e0435f9eb525c51a0->leave($__internal_09a4952131845deefc04033f1f119dde70f17f247aaac27e0435f9eb525c51a0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
