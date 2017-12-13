<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5a15d48d97be263337739e6d09b825a7373c3882d0f7d1a5cea386f1973b2b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab51cb286deba9cbbd9cf1008d20fb8f7481dd3736c17c27e3d6fe409ed2fb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab51cb286deba9cbbd9cf1008d20fb8f7481dd3736c17c27e3d6fe409ed2fb37->enter($__internal_ab51cb286deba9cbbd9cf1008d20fb8f7481dd3736c17c27e3d6fe409ed2fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_842c1cbdbcacb079bb6d6f6fe6a2e2e9bfd2aa528a7a66bcdb7dc13d4459c3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842c1cbdbcacb079bb6d6f6fe6a2e2e9bfd2aa528a7a66bcdb7dc13d4459c3d3->enter($__internal_842c1cbdbcacb079bb6d6f6fe6a2e2e9bfd2aa528a7a66bcdb7dc13d4459c3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ab51cb286deba9cbbd9cf1008d20fb8f7481dd3736c17c27e3d6fe409ed2fb37->leave($__internal_ab51cb286deba9cbbd9cf1008d20fb8f7481dd3736c17c27e3d6fe409ed2fb37_prof);

        
        $__internal_842c1cbdbcacb079bb6d6f6fe6a2e2e9bfd2aa528a7a66bcdb7dc13d4459c3d3->leave($__internal_842c1cbdbcacb079bb6d6f6fe6a2e2e9bfd2aa528a7a66bcdb7dc13d4459c3d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
