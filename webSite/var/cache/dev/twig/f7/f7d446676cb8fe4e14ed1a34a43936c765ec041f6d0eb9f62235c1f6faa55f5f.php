<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d7b1e6ef581fd0ee824b8498abd04e1e9385533e206a0eac6719a0fabf8cdaff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f42fa832a386df6945f294cf650a816d229f2fdf0d897a21a755249a655635a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42fa832a386df6945f294cf650a816d229f2fdf0d897a21a755249a655635a2->enter($__internal_f42fa832a386df6945f294cf650a816d229f2fdf0d897a21a755249a655635a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_59bbaea9566de8ce2049decf41ff626da461017c94d54c5e0184aae407d615d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bbaea9566de8ce2049decf41ff626da461017c94d54c5e0184aae407d615d1->enter($__internal_59bbaea9566de8ce2049decf41ff626da461017c94d54c5e0184aae407d615d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f42fa832a386df6945f294cf650a816d229f2fdf0d897a21a755249a655635a2->leave($__internal_f42fa832a386df6945f294cf650a816d229f2fdf0d897a21a755249a655635a2_prof);

        
        $__internal_59bbaea9566de8ce2049decf41ff626da461017c94d54c5e0184aae407d615d1->leave($__internal_59bbaea9566de8ce2049decf41ff626da461017c94d54c5e0184aae407d615d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f48902b9f97382031f693d8347ec4a9e6f1592048a8db60915a21ac1edb35cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48902b9f97382031f693d8347ec4a9e6f1592048a8db60915a21ac1edb35cee->enter($__internal_f48902b9f97382031f693d8347ec4a9e6f1592048a8db60915a21ac1edb35cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ff786108361808978562be4a3bb741297af42cb6a07d610be8f349d2c001300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff786108361808978562be4a3bb741297af42cb6a07d610be8f349d2c001300->enter($__internal_0ff786108361808978562be4a3bb741297af42cb6a07d610be8f349d2c001300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0ff786108361808978562be4a3bb741297af42cb6a07d610be8f349d2c001300->leave($__internal_0ff786108361808978562be4a3bb741297af42cb6a07d610be8f349d2c001300_prof);

        
        $__internal_f48902b9f97382031f693d8347ec4a9e6f1592048a8db60915a21ac1edb35cee->leave($__internal_f48902b9f97382031f693d8347ec4a9e6f1592048a8db60915a21ac1edb35cee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
