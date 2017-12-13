<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28128a28cc1c74a9724385ab25d4263b2823a8749cdff32c1ee885a6a85a81e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28128a28cc1c74a9724385ab25d4263b2823a8749cdff32c1ee885a6a85a81e4->enter($__internal_28128a28cc1c74a9724385ab25d4263b2823a8749cdff32c1ee885a6a85a81e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_54485e9703fe55b15335dd28372415e0fef044754ba9f4cedec2f35ae8abe1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54485e9703fe55b15335dd28372415e0fef044754ba9f4cedec2f35ae8abe1b1->enter($__internal_54485e9703fe55b15335dd28372415e0fef044754ba9f4cedec2f35ae8abe1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28128a28cc1c74a9724385ab25d4263b2823a8749cdff32c1ee885a6a85a81e4->leave($__internal_28128a28cc1c74a9724385ab25d4263b2823a8749cdff32c1ee885a6a85a81e4_prof);

        
        $__internal_54485e9703fe55b15335dd28372415e0fef044754ba9f4cedec2f35ae8abe1b1->leave($__internal_54485e9703fe55b15335dd28372415e0fef044754ba9f4cedec2f35ae8abe1b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5e2db268dd8749a051356cc4d25ef5ee5bf155465dbfc2999ebdbc6537451d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e2db268dd8749a051356cc4d25ef5ee5bf155465dbfc2999ebdbc6537451d1->enter($__internal_c5e2db268dd8749a051356cc4d25ef5ee5bf155465dbfc2999ebdbc6537451d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21a17aee04766d43e842d432ff81051b660248a92d5d2ab24d6391fb810db593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a17aee04766d43e842d432ff81051b660248a92d5d2ab24d6391fb810db593->enter($__internal_21a17aee04766d43e842d432ff81051b660248a92d5d2ab24d6391fb810db593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_21a17aee04766d43e842d432ff81051b660248a92d5d2ab24d6391fb810db593->leave($__internal_21a17aee04766d43e842d432ff81051b660248a92d5d2ab24d6391fb810db593_prof);

        
        $__internal_c5e2db268dd8749a051356cc4d25ef5ee5bf155465dbfc2999ebdbc6537451d1->leave($__internal_c5e2db268dd8749a051356cc4d25ef5ee5bf155465dbfc2999ebdbc6537451d1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0eb0495e67f06c581c97bac0bb72d3b9543450f57e15acc415e4393d50dbb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0eb0495e67f06c581c97bac0bb72d3b9543450f57e15acc415e4393d50dbb79->enter($__internal_f0eb0495e67f06c581c97bac0bb72d3b9543450f57e15acc415e4393d50dbb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_611e9f167f65f63eda79e966615edf1123d025d34d7fbf26b49a97c139f15524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611e9f167f65f63eda79e966615edf1123d025d34d7fbf26b49a97c139f15524->enter($__internal_611e9f167f65f63eda79e966615edf1123d025d34d7fbf26b49a97c139f15524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_611e9f167f65f63eda79e966615edf1123d025d34d7fbf26b49a97c139f15524->leave($__internal_611e9f167f65f63eda79e966615edf1123d025d34d7fbf26b49a97c139f15524_prof);

        
        $__internal_f0eb0495e67f06c581c97bac0bb72d3b9543450f57e15acc415e4393d50dbb79->leave($__internal_f0eb0495e67f06c581c97bac0bb72d3b9543450f57e15acc415e4393d50dbb79_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2014b99fff7f2427ac58f4b7db57a7d403c746914a2f3369339036f2be24c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2014b99fff7f2427ac58f4b7db57a7d403c746914a2f3369339036f2be24c82->enter($__internal_b2014b99fff7f2427ac58f4b7db57a7d403c746914a2f3369339036f2be24c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8493239fdaf9f35fbd94fb87a3bb62956134f11d19879c52bd0a6d9a4dcd8cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8493239fdaf9f35fbd94fb87a3bb62956134f11d19879c52bd0a6d9a4dcd8cb9->enter($__internal_8493239fdaf9f35fbd94fb87a3bb62956134f11d19879c52bd0a6d9a4dcd8cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8493239fdaf9f35fbd94fb87a3bb62956134f11d19879c52bd0a6d9a4dcd8cb9->leave($__internal_8493239fdaf9f35fbd94fb87a3bb62956134f11d19879c52bd0a6d9a4dcd8cb9_prof);

        
        $__internal_b2014b99fff7f2427ac58f4b7db57a7d403c746914a2f3369339036f2be24c82->leave($__internal_b2014b99fff7f2427ac58f4b7db57a7d403c746914a2f3369339036f2be24c82_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
