<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ddd2c3a4b3bf3d186cca78e0224e50aae461843bd9b2ef99ef1d87641dda5e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fb79c7c401f2874ca9a6de5c2c44d10846d01772f8ef746db0d7d6bc36791bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb79c7c401f2874ca9a6de5c2c44d10846d01772f8ef746db0d7d6bc36791bb6->enter($__internal_fb79c7c401f2874ca9a6de5c2c44d10846d01772f8ef746db0d7d6bc36791bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_3a3a7696e7bc479364befc70859a2bfbfdbdb27ae068414038d31f810f9f1b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3a7696e7bc479364befc70859a2bfbfdbdb27ae068414038d31f810f9f1b3d->enter($__internal_3a3a7696e7bc479364befc70859a2bfbfdbdb27ae068414038d31f810f9f1b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb79c7c401f2874ca9a6de5c2c44d10846d01772f8ef746db0d7d6bc36791bb6->leave($__internal_fb79c7c401f2874ca9a6de5c2c44d10846d01772f8ef746db0d7d6bc36791bb6_prof);

        
        $__internal_3a3a7696e7bc479364befc70859a2bfbfdbdb27ae068414038d31f810f9f1b3d->leave($__internal_3a3a7696e7bc479364befc70859a2bfbfdbdb27ae068414038d31f810f9f1b3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abfbd97114048032f9dd0dfdc31d7de6f36c0ae42e1e5eaeadae86ab160b8887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfbd97114048032f9dd0dfdc31d7de6f36c0ae42e1e5eaeadae86ab160b8887->enter($__internal_abfbd97114048032f9dd0dfdc31d7de6f36c0ae42e1e5eaeadae86ab160b8887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a342b5e27c9ebfcf139f142ffdb49493e5b25e7572b30437f6b50bff73e7ede6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a342b5e27c9ebfcf139f142ffdb49493e5b25e7572b30437f6b50bff73e7ede6->enter($__internal_a342b5e27c9ebfcf139f142ffdb49493e5b25e7572b30437f6b50bff73e7ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a342b5e27c9ebfcf139f142ffdb49493e5b25e7572b30437f6b50bff73e7ede6->leave($__internal_a342b5e27c9ebfcf139f142ffdb49493e5b25e7572b30437f6b50bff73e7ede6_prof);

        
        $__internal_abfbd97114048032f9dd0dfdc31d7de6f36c0ae42e1e5eaeadae86ab160b8887->leave($__internal_abfbd97114048032f9dd0dfdc31d7de6f36c0ae42e1e5eaeadae86ab160b8887_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
