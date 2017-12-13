<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5d421ed229244799e83f672db746c873f25b4232f9db4eb52e555092245238d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_569e4d71cb04854212290862f7eea4c6f0b4a97953b85a698c3fee1418c36ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569e4d71cb04854212290862f7eea4c6f0b4a97953b85a698c3fee1418c36ad3->enter($__internal_569e4d71cb04854212290862f7eea4c6f0b4a97953b85a698c3fee1418c36ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_04453623d818b74627f40a24f87cb51bc4d99851d7f32963b991080b1746634c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04453623d818b74627f40a24f87cb51bc4d99851d7f32963b991080b1746634c->enter($__internal_04453623d818b74627f40a24f87cb51bc4d99851d7f32963b991080b1746634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569e4d71cb04854212290862f7eea4c6f0b4a97953b85a698c3fee1418c36ad3->leave($__internal_569e4d71cb04854212290862f7eea4c6f0b4a97953b85a698c3fee1418c36ad3_prof);

        
        $__internal_04453623d818b74627f40a24f87cb51bc4d99851d7f32963b991080b1746634c->leave($__internal_04453623d818b74627f40a24f87cb51bc4d99851d7f32963b991080b1746634c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a09d4022a5ad1cae088d9a1c3046d6ed927ef5dfd68e4826164750a2e8b7dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a09d4022a5ad1cae088d9a1c3046d6ed927ef5dfd68e4826164750a2e8b7dda->enter($__internal_4a09d4022a5ad1cae088d9a1c3046d6ed927ef5dfd68e4826164750a2e8b7dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9f9bd888555db15e1b15debcf3812e7588cffa85a5303ca73a95dca1f18341f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f9bd888555db15e1b15debcf3812e7588cffa85a5303ca73a95dca1f18341f->enter($__internal_d9f9bd888555db15e1b15debcf3812e7588cffa85a5303ca73a95dca1f18341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d9f9bd888555db15e1b15debcf3812e7588cffa85a5303ca73a95dca1f18341f->leave($__internal_d9f9bd888555db15e1b15debcf3812e7588cffa85a5303ca73a95dca1f18341f_prof);

        
        $__internal_4a09d4022a5ad1cae088d9a1c3046d6ed927ef5dfd68e4826164750a2e8b7dda->leave($__internal_4a09d4022a5ad1cae088d9a1c3046d6ed927ef5dfd68e4826164750a2e8b7dda_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
