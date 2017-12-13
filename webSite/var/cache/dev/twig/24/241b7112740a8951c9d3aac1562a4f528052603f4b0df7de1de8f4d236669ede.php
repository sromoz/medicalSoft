<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7a43a667fda3e13719ba23b18feaf3bfd85312dfd8b24f777ac909b0b0fe00d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b5e1386c1baad92d56ee424bcf58766b4f361eb82474a1258cd153601af23493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e1386c1baad92d56ee424bcf58766b4f361eb82474a1258cd153601af23493->enter($__internal_b5e1386c1baad92d56ee424bcf58766b4f361eb82474a1258cd153601af23493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_73728278b4238f0149cb008c6a3a91e11b5c646b5caf4f64154e924eab002bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73728278b4238f0149cb008c6a3a91e11b5c646b5caf4f64154e924eab002bd3->enter($__internal_73728278b4238f0149cb008c6a3a91e11b5c646b5caf4f64154e924eab002bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e1386c1baad92d56ee424bcf58766b4f361eb82474a1258cd153601af23493->leave($__internal_b5e1386c1baad92d56ee424bcf58766b4f361eb82474a1258cd153601af23493_prof);

        
        $__internal_73728278b4238f0149cb008c6a3a91e11b5c646b5caf4f64154e924eab002bd3->leave($__internal_73728278b4238f0149cb008c6a3a91e11b5c646b5caf4f64154e924eab002bd3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dee1b5590c49bc849aac45211e598bb711c210678c2996d48fba37a0e8af5450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee1b5590c49bc849aac45211e598bb711c210678c2996d48fba37a0e8af5450->enter($__internal_dee1b5590c49bc849aac45211e598bb711c210678c2996d48fba37a0e8af5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df8ea0a223e27cd1ec14a4148fe44caede800d1ae755b8c77618430e16615cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8ea0a223e27cd1ec14a4148fe44caede800d1ae755b8c77618430e16615cca->enter($__internal_df8ea0a223e27cd1ec14a4148fe44caede800d1ae755b8c77618430e16615cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_df8ea0a223e27cd1ec14a4148fe44caede800d1ae755b8c77618430e16615cca->leave($__internal_df8ea0a223e27cd1ec14a4148fe44caede800d1ae755b8c77618430e16615cca_prof);

        
        $__internal_dee1b5590c49bc849aac45211e598bb711c210678c2996d48fba37a0e8af5450->leave($__internal_dee1b5590c49bc849aac45211e598bb711c210678c2996d48fba37a0e8af5450_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
