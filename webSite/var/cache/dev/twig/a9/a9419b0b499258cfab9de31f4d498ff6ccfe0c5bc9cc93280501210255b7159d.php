<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_99750605b6a13fb19a1fe3f56bd55f1abae28424d7e76561c07183e3f47db912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_cd20c12cf75e5976a5242fec1b14d1733ce3c4f120891fe72f021b62688facf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd20c12cf75e5976a5242fec1b14d1733ce3c4f120891fe72f021b62688facf0->enter($__internal_cd20c12cf75e5976a5242fec1b14d1733ce3c4f120891fe72f021b62688facf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_9285ef70e589f97666317923b3e8eec9a3e02a7c580363d4e884b4f3a1c88073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9285ef70e589f97666317923b3e8eec9a3e02a7c580363d4e884b4f3a1c88073->enter($__internal_9285ef70e589f97666317923b3e8eec9a3e02a7c580363d4e884b4f3a1c88073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd20c12cf75e5976a5242fec1b14d1733ce3c4f120891fe72f021b62688facf0->leave($__internal_cd20c12cf75e5976a5242fec1b14d1733ce3c4f120891fe72f021b62688facf0_prof);

        
        $__internal_9285ef70e589f97666317923b3e8eec9a3e02a7c580363d4e884b4f3a1c88073->leave($__internal_9285ef70e589f97666317923b3e8eec9a3e02a7c580363d4e884b4f3a1c88073_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_304c9f0a8d1dc0b05d108f1816250458469b1276c830ad019fd0e754812f4c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304c9f0a8d1dc0b05d108f1816250458469b1276c830ad019fd0e754812f4c21->enter($__internal_304c9f0a8d1dc0b05d108f1816250458469b1276c830ad019fd0e754812f4c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_96523d1930df66524a13c7a8443f1521017d7e5fade7956153c8f7e223f59501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96523d1930df66524a13c7a8443f1521017d7e5fade7956153c8f7e223f59501->enter($__internal_96523d1930df66524a13c7a8443f1521017d7e5fade7956153c8f7e223f59501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_96523d1930df66524a13c7a8443f1521017d7e5fade7956153c8f7e223f59501->leave($__internal_96523d1930df66524a13c7a8443f1521017d7e5fade7956153c8f7e223f59501_prof);

        
        $__internal_304c9f0a8d1dc0b05d108f1816250458469b1276c830ad019fd0e754812f4c21->leave($__internal_304c9f0a8d1dc0b05d108f1816250458469b1276c830ad019fd0e754812f4c21_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
