<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c93ec1bdfe3d3b89df16da71475e88d200a3e1a8b780231bf3ee05f5ac37cdc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_cccc9cc6110867a2593168ec4c36b8489a1f327a2df45ac6bd027ef021dd3307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccc9cc6110867a2593168ec4c36b8489a1f327a2df45ac6bd027ef021dd3307->enter($__internal_cccc9cc6110867a2593168ec4c36b8489a1f327a2df45ac6bd027ef021dd3307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_f79714ea0bdf5ef31783414b46808a4609242ed257126c156c8a01f718f6df3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79714ea0bdf5ef31783414b46808a4609242ed257126c156c8a01f718f6df3c->enter($__internal_f79714ea0bdf5ef31783414b46808a4609242ed257126c156c8a01f718f6df3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cccc9cc6110867a2593168ec4c36b8489a1f327a2df45ac6bd027ef021dd3307->leave($__internal_cccc9cc6110867a2593168ec4c36b8489a1f327a2df45ac6bd027ef021dd3307_prof);

        
        $__internal_f79714ea0bdf5ef31783414b46808a4609242ed257126c156c8a01f718f6df3c->leave($__internal_f79714ea0bdf5ef31783414b46808a4609242ed257126c156c8a01f718f6df3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d2e026876a7ed34c91e7d15b3c2b451c4b31cc6ebc4bc27634fc74f38cd682e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2e026876a7ed34c91e7d15b3c2b451c4b31cc6ebc4bc27634fc74f38cd682e->enter($__internal_9d2e026876a7ed34c91e7d15b3c2b451c4b31cc6ebc4bc27634fc74f38cd682e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff3fb5fa5381707a883b03b5b4c71039a2e64c4797d277964eb643ed0f2191bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3fb5fa5381707a883b03b5b4c71039a2e64c4797d277964eb643ed0f2191bf->enter($__internal_ff3fb5fa5381707a883b03b5b4c71039a2e64c4797d277964eb643ed0f2191bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ff3fb5fa5381707a883b03b5b4c71039a2e64c4797d277964eb643ed0f2191bf->leave($__internal_ff3fb5fa5381707a883b03b5b4c71039a2e64c4797d277964eb643ed0f2191bf_prof);

        
        $__internal_9d2e026876a7ed34c91e7d15b3c2b451c4b31cc6ebc4bc27634fc74f38cd682e->leave($__internal_9d2e026876a7ed34c91e7d15b3c2b451c4b31cc6ebc4bc27634fc74f38cd682e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
