<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_828d66fd4403749d6b2314db0fe5013770c9183e83d9752bf2df32c5cf3d0d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_26317fc569f4897c7e110b2ebc2af1fe702817ea74b3d571caae095ab79c5faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26317fc569f4897c7e110b2ebc2af1fe702817ea74b3d571caae095ab79c5faa->enter($__internal_26317fc569f4897c7e110b2ebc2af1fe702817ea74b3d571caae095ab79c5faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_21a1f03ed298ed1183520f5244e10b740610e1f68632591f9729486d85648c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a1f03ed298ed1183520f5244e10b740610e1f68632591f9729486d85648c6d->enter($__internal_21a1f03ed298ed1183520f5244e10b740610e1f68632591f9729486d85648c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26317fc569f4897c7e110b2ebc2af1fe702817ea74b3d571caae095ab79c5faa->leave($__internal_26317fc569f4897c7e110b2ebc2af1fe702817ea74b3d571caae095ab79c5faa_prof);

        
        $__internal_21a1f03ed298ed1183520f5244e10b740610e1f68632591f9729486d85648c6d->leave($__internal_21a1f03ed298ed1183520f5244e10b740610e1f68632591f9729486d85648c6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95cde9a4f494fffb9574974b64f7f0298ac9db439bd17a05b60c0ca6571cd181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cde9a4f494fffb9574974b64f7f0298ac9db439bd17a05b60c0ca6571cd181->enter($__internal_95cde9a4f494fffb9574974b64f7f0298ac9db439bd17a05b60c0ca6571cd181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64aa98a5416fb5c68cde4cda9684347d851be5c1194a97421318af231c82b763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64aa98a5416fb5c68cde4cda9684347d851be5c1194a97421318af231c82b763->enter($__internal_64aa98a5416fb5c68cde4cda9684347d851be5c1194a97421318af231c82b763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_64aa98a5416fb5c68cde4cda9684347d851be5c1194a97421318af231c82b763->leave($__internal_64aa98a5416fb5c68cde4cda9684347d851be5c1194a97421318af231c82b763_prof);

        
        $__internal_95cde9a4f494fffb9574974b64f7f0298ac9db439bd17a05b60c0ca6571cd181->leave($__internal_95cde9a4f494fffb9574974b64f7f0298ac9db439bd17a05b60c0ca6571cd181_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
