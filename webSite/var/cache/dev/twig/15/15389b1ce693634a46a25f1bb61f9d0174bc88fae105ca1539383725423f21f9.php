<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_4039196a6bec64f3aae7b157104d8879d6e855bcdb63de6fbe439c524db3a2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_04179f05ae60ec12a6c61342fb36edd50e3f63bc43c1a1c46424a3f3862dd40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04179f05ae60ec12a6c61342fb36edd50e3f63bc43c1a1c46424a3f3862dd40a->enter($__internal_04179f05ae60ec12a6c61342fb36edd50e3f63bc43c1a1c46424a3f3862dd40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_8c72502b2f3d44e90fe0cc445c1ca6ce650dc46b7a30ce61d3e7b3779da24b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c72502b2f3d44e90fe0cc445c1ca6ce650dc46b7a30ce61d3e7b3779da24b94->enter($__internal_8c72502b2f3d44e90fe0cc445c1ca6ce650dc46b7a30ce61d3e7b3779da24b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04179f05ae60ec12a6c61342fb36edd50e3f63bc43c1a1c46424a3f3862dd40a->leave($__internal_04179f05ae60ec12a6c61342fb36edd50e3f63bc43c1a1c46424a3f3862dd40a_prof);

        
        $__internal_8c72502b2f3d44e90fe0cc445c1ca6ce650dc46b7a30ce61d3e7b3779da24b94->leave($__internal_8c72502b2f3d44e90fe0cc445c1ca6ce650dc46b7a30ce61d3e7b3779da24b94_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10dc43b83103cf80cd8b169d75052de08737b2830b4eee319118e4171aff6a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dc43b83103cf80cd8b169d75052de08737b2830b4eee319118e4171aff6a12->enter($__internal_10dc43b83103cf80cd8b169d75052de08737b2830b4eee319118e4171aff6a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4bfb255841e579ee58bc312d3513a6d3a774e61403225d9146067a56baee164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfb255841e579ee58bc312d3513a6d3a774e61403225d9146067a56baee164d->enter($__internal_4bfb255841e579ee58bc312d3513a6d3a774e61403225d9146067a56baee164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4bfb255841e579ee58bc312d3513a6d3a774e61403225d9146067a56baee164d->leave($__internal_4bfb255841e579ee58bc312d3513a6d3a774e61403225d9146067a56baee164d_prof);

        
        $__internal_10dc43b83103cf80cd8b169d75052de08737b2830b4eee319118e4171aff6a12->leave($__internal_10dc43b83103cf80cd8b169d75052de08737b2830b4eee319118e4171aff6a12_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
