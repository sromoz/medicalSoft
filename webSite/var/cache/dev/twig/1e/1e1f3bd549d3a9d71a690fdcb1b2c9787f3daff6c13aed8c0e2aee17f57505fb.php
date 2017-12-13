<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_3676596db80e7a002055826765b69a3113e55a026ab2110495863a50b95621cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_791098de14ed698b2778bbff1fbe33383fd4990d8ea6e2c5b979fcd76461617e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791098de14ed698b2778bbff1fbe33383fd4990d8ea6e2c5b979fcd76461617e->enter($__internal_791098de14ed698b2778bbff1fbe33383fd4990d8ea6e2c5b979fcd76461617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_6a911d8b4819abd62663de0b4a72a26f1602e3240b238a972a5d43ce5fd764fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a911d8b4819abd62663de0b4a72a26f1602e3240b238a972a5d43ce5fd764fe->enter($__internal_6a911d8b4819abd62663de0b4a72a26f1602e3240b238a972a5d43ce5fd764fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791098de14ed698b2778bbff1fbe33383fd4990d8ea6e2c5b979fcd76461617e->leave($__internal_791098de14ed698b2778bbff1fbe33383fd4990d8ea6e2c5b979fcd76461617e_prof);

        
        $__internal_6a911d8b4819abd62663de0b4a72a26f1602e3240b238a972a5d43ce5fd764fe->leave($__internal_6a911d8b4819abd62663de0b4a72a26f1602e3240b238a972a5d43ce5fd764fe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcdd7ffa84c7099f9ff21ef893788cc8347aab6244a237355ebbb768457c153f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdd7ffa84c7099f9ff21ef893788cc8347aab6244a237355ebbb768457c153f->enter($__internal_fcdd7ffa84c7099f9ff21ef893788cc8347aab6244a237355ebbb768457c153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b8785c0cdde9ce02fa53326071e16c476667d667b3a9896ba0cd47e0b74d9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8785c0cdde9ce02fa53326071e16c476667d667b3a9896ba0cd47e0b74d9a2->enter($__internal_7b8785c0cdde9ce02fa53326071e16c476667d667b3a9896ba0cd47e0b74d9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7b8785c0cdde9ce02fa53326071e16c476667d667b3a9896ba0cd47e0b74d9a2->leave($__internal_7b8785c0cdde9ce02fa53326071e16c476667d667b3a9896ba0cd47e0b74d9a2_prof);

        
        $__internal_fcdd7ffa84c7099f9ff21ef893788cc8347aab6244a237355ebbb768457c153f->leave($__internal_fcdd7ffa84c7099f9ff21ef893788cc8347aab6244a237355ebbb768457c153f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
