<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d4a7b04b040d36271276b372a964ddee00a78e16743a69c7c7833fdbeff2d902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a21bbf195ac639b39c17b6ee66604f093779dd66bb68b4bc57fcdb5bf02ab88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21bbf195ac639b39c17b6ee66604f093779dd66bb68b4bc57fcdb5bf02ab88f->enter($__internal_a21bbf195ac639b39c17b6ee66604f093779dd66bb68b4bc57fcdb5bf02ab88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_6a3921889e19f7b8df1252e5aebafd256a9af49dad231986f60cdd7765c3fc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3921889e19f7b8df1252e5aebafd256a9af49dad231986f60cdd7765c3fc29->enter($__internal_6a3921889e19f7b8df1252e5aebafd256a9af49dad231986f60cdd7765c3fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21bbf195ac639b39c17b6ee66604f093779dd66bb68b4bc57fcdb5bf02ab88f->leave($__internal_a21bbf195ac639b39c17b6ee66604f093779dd66bb68b4bc57fcdb5bf02ab88f_prof);

        
        $__internal_6a3921889e19f7b8df1252e5aebafd256a9af49dad231986f60cdd7765c3fc29->leave($__internal_6a3921889e19f7b8df1252e5aebafd256a9af49dad231986f60cdd7765c3fc29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a4b2e2506c9d3ca264946133a673bbeca369f7cf623f1c44b47a812cbcfbfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4b2e2506c9d3ca264946133a673bbeca369f7cf623f1c44b47a812cbcfbfad->enter($__internal_6a4b2e2506c9d3ca264946133a673bbeca369f7cf623f1c44b47a812cbcfbfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b874e98adb3df0c9e88d74bf487cff9ac21ea6c430b1b88c38fba4246e97e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b874e98adb3df0c9e88d74bf487cff9ac21ea6c430b1b88c38fba4246e97e5a->enter($__internal_4b874e98adb3df0c9e88d74bf487cff9ac21ea6c430b1b88c38fba4246e97e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4b874e98adb3df0c9e88d74bf487cff9ac21ea6c430b1b88c38fba4246e97e5a->leave($__internal_4b874e98adb3df0c9e88d74bf487cff9ac21ea6c430b1b88c38fba4246e97e5a_prof);

        
        $__internal_6a4b2e2506c9d3ca264946133a673bbeca369f7cf623f1c44b47a812cbcfbfad->leave($__internal_6a4b2e2506c9d3ca264946133a673bbeca369f7cf623f1c44b47a812cbcfbfad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
