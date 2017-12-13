<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_fbd5f304c34a2bc5e43838fa9ffa64dbe37720765ebb31ec11585b23763e1e9c extends Twig_Template
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
        $__internal_3ffe9e9e9b966e4e504aecefa277e0839e953cc8035ea1b3021ca43b29ef9474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffe9e9e9b966e4e504aecefa277e0839e953cc8035ea1b3021ca43b29ef9474->enter($__internal_3ffe9e9e9b966e4e504aecefa277e0839e953cc8035ea1b3021ca43b29ef9474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_4a3e1a11909e47886cd49fae88d250273ac2f88d7f18364aced15b912ece8a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3e1a11909e47886cd49fae88d250273ac2f88d7f18364aced15b912ece8a9a->enter($__internal_4a3e1a11909e47886cd49fae88d250273ac2f88d7f18364aced15b912ece8a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_3ffe9e9e9b966e4e504aecefa277e0839e953cc8035ea1b3021ca43b29ef9474->leave($__internal_3ffe9e9e9b966e4e504aecefa277e0839e953cc8035ea1b3021ca43b29ef9474_prof);

        
        $__internal_4a3e1a11909e47886cd49fae88d250273ac2f88d7f18364aced15b912ece8a9a->leave($__internal_4a3e1a11909e47886cd49fae88d250273ac2f88d7f18364aced15b912ece8a9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
