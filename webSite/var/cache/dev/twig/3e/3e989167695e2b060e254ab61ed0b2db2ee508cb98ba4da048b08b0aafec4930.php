<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d02fed95293f1428f21108515b9ff7edb45116979211f46e52c59596e6311369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_4a0873b1dc4de879ba4008e2e2e4fb001a84dc74dc170eac081441bbd2d04226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0873b1dc4de879ba4008e2e2e4fb001a84dc74dc170eac081441bbd2d04226->enter($__internal_4a0873b1dc4de879ba4008e2e2e4fb001a84dc74dc170eac081441bbd2d04226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_6796b9f83d92485652d38d4e949a0d5175a9d1dae5d4b1d86603f36fa27c71f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6796b9f83d92485652d38d4e949a0d5175a9d1dae5d4b1d86603f36fa27c71f1->enter($__internal_6796b9f83d92485652d38d4e949a0d5175a9d1dae5d4b1d86603f36fa27c71f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a0873b1dc4de879ba4008e2e2e4fb001a84dc74dc170eac081441bbd2d04226->leave($__internal_4a0873b1dc4de879ba4008e2e2e4fb001a84dc74dc170eac081441bbd2d04226_prof);

        
        $__internal_6796b9f83d92485652d38d4e949a0d5175a9d1dae5d4b1d86603f36fa27c71f1->leave($__internal_6796b9f83d92485652d38d4e949a0d5175a9d1dae5d4b1d86603f36fa27c71f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b61f529e487d60b1d1db25796fd6524701d69919e3806bc8492093783ebfb24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61f529e487d60b1d1db25796fd6524701d69919e3806bc8492093783ebfb24c->enter($__internal_b61f529e487d60b1d1db25796fd6524701d69919e3806bc8492093783ebfb24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ba636ff41d988cbcb7160462f72edf27693c1fbf96a5e04961827915580575e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba636ff41d988cbcb7160462f72edf27693c1fbf96a5e04961827915580575e->enter($__internal_8ba636ff41d988cbcb7160462f72edf27693c1fbf96a5e04961827915580575e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8ba636ff41d988cbcb7160462f72edf27693c1fbf96a5e04961827915580575e->leave($__internal_8ba636ff41d988cbcb7160462f72edf27693c1fbf96a5e04961827915580575e_prof);

        
        $__internal_b61f529e487d60b1d1db25796fd6524701d69919e3806bc8492093783ebfb24c->leave($__internal_b61f529e487d60b1d1db25796fd6524701d69919e3806bc8492093783ebfb24c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
