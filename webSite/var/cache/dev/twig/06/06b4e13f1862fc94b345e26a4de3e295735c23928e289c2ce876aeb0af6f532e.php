<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_aa305c2fbbae8a363926f43c8fcdd907421b1707c43447f1e24017e6eb616457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_8e901653cfb8bb99a577ac6f752473cbeb082417560533ae5eb77eed6d3ae42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e901653cfb8bb99a577ac6f752473cbeb082417560533ae5eb77eed6d3ae42d->enter($__internal_8e901653cfb8bb99a577ac6f752473cbeb082417560533ae5eb77eed6d3ae42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_c1a2e0d807a9b2e885f154a08bf2c2302711f1845f429328f73ed864975d1316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a2e0d807a9b2e885f154a08bf2c2302711f1845f429328f73ed864975d1316->enter($__internal_c1a2e0d807a9b2e885f154a08bf2c2302711f1845f429328f73ed864975d1316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e901653cfb8bb99a577ac6f752473cbeb082417560533ae5eb77eed6d3ae42d->leave($__internal_8e901653cfb8bb99a577ac6f752473cbeb082417560533ae5eb77eed6d3ae42d_prof);

        
        $__internal_c1a2e0d807a9b2e885f154a08bf2c2302711f1845f429328f73ed864975d1316->leave($__internal_c1a2e0d807a9b2e885f154a08bf2c2302711f1845f429328f73ed864975d1316_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6d022eff47ca490d552fa7dcd4f9f537df78ba24aa7ec9a2876c2b3d21a771f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d022eff47ca490d552fa7dcd4f9f537df78ba24aa7ec9a2876c2b3d21a771f->enter($__internal_d6d022eff47ca490d552fa7dcd4f9f537df78ba24aa7ec9a2876c2b3d21a771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_73a12293b94c666d1d1a13a4dcb40a6e5cc6a03e5f06c24ff7e03e35476cecd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a12293b94c666d1d1a13a4dcb40a6e5cc6a03e5f06c24ff7e03e35476cecd1->enter($__internal_73a12293b94c666d1d1a13a4dcb40a6e5cc6a03e5f06c24ff7e03e35476cecd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_73a12293b94c666d1d1a13a4dcb40a6e5cc6a03e5f06c24ff7e03e35476cecd1->leave($__internal_73a12293b94c666d1d1a13a4dcb40a6e5cc6a03e5f06c24ff7e03e35476cecd1_prof);

        
        $__internal_d6d022eff47ca490d552fa7dcd4f9f537df78ba24aa7ec9a2876c2b3d21a771f->leave($__internal_d6d022eff47ca490d552fa7dcd4f9f537df78ba24aa7ec9a2876c2b3d21a771f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
