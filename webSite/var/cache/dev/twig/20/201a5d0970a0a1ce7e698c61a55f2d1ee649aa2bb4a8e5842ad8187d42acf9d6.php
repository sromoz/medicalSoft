<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_79094aac47932681556ed7d220a0a9226004586b70bf4646da03abb556088dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_53ad1929af306dea97476a227be364e5eceb09bb3d994c7a4e9d7904d4bbea6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ad1929af306dea97476a227be364e5eceb09bb3d994c7a4e9d7904d4bbea6b->enter($__internal_53ad1929af306dea97476a227be364e5eceb09bb3d994c7a4e9d7904d4bbea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_52eaf40ff60d6e5e033f9d36ef3bec9bfafb11ac81ffb69412a716362fb675b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52eaf40ff60d6e5e033f9d36ef3bec9bfafb11ac81ffb69412a716362fb675b1->enter($__internal_52eaf40ff60d6e5e033f9d36ef3bec9bfafb11ac81ffb69412a716362fb675b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ad1929af306dea97476a227be364e5eceb09bb3d994c7a4e9d7904d4bbea6b->leave($__internal_53ad1929af306dea97476a227be364e5eceb09bb3d994c7a4e9d7904d4bbea6b_prof);

        
        $__internal_52eaf40ff60d6e5e033f9d36ef3bec9bfafb11ac81ffb69412a716362fb675b1->leave($__internal_52eaf40ff60d6e5e033f9d36ef3bec9bfafb11ac81ffb69412a716362fb675b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d78a1045e65c76001009a753ce554edd194fa4dba0fae2d4c2b9f5544eeb27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d78a1045e65c76001009a753ce554edd194fa4dba0fae2d4c2b9f5544eeb27e->enter($__internal_4d78a1045e65c76001009a753ce554edd194fa4dba0fae2d4c2b9f5544eeb27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9595ad5d24f86725621add6da0e7234bd7adfcd6e4cbbd96f7510ee9e9a697a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9595ad5d24f86725621add6da0e7234bd7adfcd6e4cbbd96f7510ee9e9a697a->enter($__internal_e9595ad5d24f86725621add6da0e7234bd7adfcd6e4cbbd96f7510ee9e9a697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e9595ad5d24f86725621add6da0e7234bd7adfcd6e4cbbd96f7510ee9e9a697a->leave($__internal_e9595ad5d24f86725621add6da0e7234bd7adfcd6e4cbbd96f7510ee9e9a697a_prof);

        
        $__internal_4d78a1045e65c76001009a753ce554edd194fa4dba0fae2d4c2b9f5544eeb27e->leave($__internal_4d78a1045e65c76001009a753ce554edd194fa4dba0fae2d4c2b9f5544eeb27e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
