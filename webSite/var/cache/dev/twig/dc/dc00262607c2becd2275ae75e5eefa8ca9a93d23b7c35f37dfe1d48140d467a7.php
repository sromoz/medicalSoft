<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_25455b9eead11e0e7c0c558e45ae64af98164646a011bdb1c530de1e917ddcb0 extends Twig_Template
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
        $__internal_72fe6fc771c9ccec4a659af2d3c8ce32a032f23976c87eafc9c60c76e37c7432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fe6fc771c9ccec4a659af2d3c8ce32a032f23976c87eafc9c60c76e37c7432->enter($__internal_72fe6fc771c9ccec4a659af2d3c8ce32a032f23976c87eafc9c60c76e37c7432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        $__internal_18827e15400d01c340accf80c3253e4e8971d5f914e4b366a9e1d9c0ad679fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18827e15400d01c340accf80c3253e4e8971d5f914e4b366a9e1d9c0ad679fd9->enter($__internal_18827e15400d01c340accf80c3253e4e8971d5f914e4b366a9e1d9c0ad679fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_72fe6fc771c9ccec4a659af2d3c8ce32a032f23976c87eafc9c60c76e37c7432->leave($__internal_72fe6fc771c9ccec4a659af2d3c8ce32a032f23976c87eafc9c60c76e37c7432_prof);

        
        $__internal_18827e15400d01c340accf80c3253e4e8971d5f914e4b366a9e1d9c0ad679fd9->leave($__internal_18827e15400d01c340accf80c3253e4e8971d5f914e4b366a9e1d9c0ad679fd9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/edit_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit_content.html.twig");
    }
}
