<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c4a513bb2af9cb542817223586b1cd846e3b1aa3435665b46295b85228df03eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d64c209e2f23a292c102da17f4b57b824db6ed0b0d3ca16ed133418e211d4165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64c209e2f23a292c102da17f4b57b824db6ed0b0d3ca16ed133418e211d4165->enter($__internal_d64c209e2f23a292c102da17f4b57b824db6ed0b0d3ca16ed133418e211d4165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_e10fcbcc14ff09e319158daf86ccd758feb881469560d30e4ab87546603a8797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10fcbcc14ff09e319158daf86ccd758feb881469560d30e4ab87546603a8797->enter($__internal_e10fcbcc14ff09e319158daf86ccd758feb881469560d30e4ab87546603a8797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64c209e2f23a292c102da17f4b57b824db6ed0b0d3ca16ed133418e211d4165->leave($__internal_d64c209e2f23a292c102da17f4b57b824db6ed0b0d3ca16ed133418e211d4165_prof);

        
        $__internal_e10fcbcc14ff09e319158daf86ccd758feb881469560d30e4ab87546603a8797->leave($__internal_e10fcbcc14ff09e319158daf86ccd758feb881469560d30e4ab87546603a8797_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c53aa90857ff616cf1814067b739bce3bc75a4772dced691c493fb3b68013001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53aa90857ff616cf1814067b739bce3bc75a4772dced691c493fb3b68013001->enter($__internal_c53aa90857ff616cf1814067b739bce3bc75a4772dced691c493fb3b68013001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b13b54edf8d19ba136a0a8852f6c1470827e7ee4da1e47b1eac831d170bbe043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13b54edf8d19ba136a0a8852f6c1470827e7ee4da1e47b1eac831d170bbe043->enter($__internal_b13b54edf8d19ba136a0a8852f6c1470827e7ee4da1e47b1eac831d170bbe043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b13b54edf8d19ba136a0a8852f6c1470827e7ee4da1e47b1eac831d170bbe043->leave($__internal_b13b54edf8d19ba136a0a8852f6c1470827e7ee4da1e47b1eac831d170bbe043_prof);

        
        $__internal_c53aa90857ff616cf1814067b739bce3bc75a4772dced691c493fb3b68013001->leave($__internal_c53aa90857ff616cf1814067b739bce3bc75a4772dced691c493fb3b68013001_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
