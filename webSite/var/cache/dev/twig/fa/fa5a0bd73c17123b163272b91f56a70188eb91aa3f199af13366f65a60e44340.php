<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6911b48d6c57f30fc918801bc6d2c9159b4b7d081783f2265a4983f68b0bb452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_04d9919b16904e2867e665f2da655cdaf3ac52e12a62899f9dde83d3dc5c08b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d9919b16904e2867e665f2da655cdaf3ac52e12a62899f9dde83d3dc5c08b6->enter($__internal_04d9919b16904e2867e665f2da655cdaf3ac52e12a62899f9dde83d3dc5c08b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_84a1a7c58d2e120855e1baa28790fdfb304e6b0330c49ca58314b51760d9510a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a1a7c58d2e120855e1baa28790fdfb304e6b0330c49ca58314b51760d9510a->enter($__internal_84a1a7c58d2e120855e1baa28790fdfb304e6b0330c49ca58314b51760d9510a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d9919b16904e2867e665f2da655cdaf3ac52e12a62899f9dde83d3dc5c08b6->leave($__internal_04d9919b16904e2867e665f2da655cdaf3ac52e12a62899f9dde83d3dc5c08b6_prof);

        
        $__internal_84a1a7c58d2e120855e1baa28790fdfb304e6b0330c49ca58314b51760d9510a->leave($__internal_84a1a7c58d2e120855e1baa28790fdfb304e6b0330c49ca58314b51760d9510a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_696aba5e21274ac5ea729f41fe6b344bf1fdde6c1ac05542abc0f7787fda0221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696aba5e21274ac5ea729f41fe6b344bf1fdde6c1ac05542abc0f7787fda0221->enter($__internal_696aba5e21274ac5ea729f41fe6b344bf1fdde6c1ac05542abc0f7787fda0221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_647f8a560b7cbeb1fc06be7980286f9fe5d62c790c30e6ff9281137553455981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647f8a560b7cbeb1fc06be7980286f9fe5d62c790c30e6ff9281137553455981->enter($__internal_647f8a560b7cbeb1fc06be7980286f9fe5d62c790c30e6ff9281137553455981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_647f8a560b7cbeb1fc06be7980286f9fe5d62c790c30e6ff9281137553455981->leave($__internal_647f8a560b7cbeb1fc06be7980286f9fe5d62c790c30e6ff9281137553455981_prof);

        
        $__internal_696aba5e21274ac5ea729f41fe6b344bf1fdde6c1ac05542abc0f7787fda0221->leave($__internal_696aba5e21274ac5ea729f41fe6b344bf1fdde6c1ac05542abc0f7787fda0221_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
