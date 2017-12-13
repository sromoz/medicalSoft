<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e614feb06ada635a918b070dea38eee41089e75d2d39d79ae92a744cdb8505b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_46360b9ec7bcf660c19aa3c85269f32017a38b91a325b608b61fab231acbb3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46360b9ec7bcf660c19aa3c85269f32017a38b91a325b608b61fab231acbb3bd->enter($__internal_46360b9ec7bcf660c19aa3c85269f32017a38b91a325b608b61fab231acbb3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_9442ebee35bbecfe09cf5fd625528e8411b8598bd491c8e5dedeaff1583f01c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9442ebee35bbecfe09cf5fd625528e8411b8598bd491c8e5dedeaff1583f01c6->enter($__internal_9442ebee35bbecfe09cf5fd625528e8411b8598bd491c8e5dedeaff1583f01c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46360b9ec7bcf660c19aa3c85269f32017a38b91a325b608b61fab231acbb3bd->leave($__internal_46360b9ec7bcf660c19aa3c85269f32017a38b91a325b608b61fab231acbb3bd_prof);

        
        $__internal_9442ebee35bbecfe09cf5fd625528e8411b8598bd491c8e5dedeaff1583f01c6->leave($__internal_9442ebee35bbecfe09cf5fd625528e8411b8598bd491c8e5dedeaff1583f01c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca4a464df2c26db296b030a1ca4766dc961a64e297ccc934b093e82e31b15879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4a464df2c26db296b030a1ca4766dc961a64e297ccc934b093e82e31b15879->enter($__internal_ca4a464df2c26db296b030a1ca4766dc961a64e297ccc934b093e82e31b15879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c4bd8aa659a9600b3c7a97f18cd3e04c9ef9c2fca777259f52d49c240d954cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4bd8aa659a9600b3c7a97f18cd3e04c9ef9c2fca777259f52d49c240d954cf->enter($__internal_7c4bd8aa659a9600b3c7a97f18cd3e04c9ef9c2fca777259f52d49c240d954cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7c4bd8aa659a9600b3c7a97f18cd3e04c9ef9c2fca777259f52d49c240d954cf->leave($__internal_7c4bd8aa659a9600b3c7a97f18cd3e04c9ef9c2fca777259f52d49c240d954cf_prof);

        
        $__internal_ca4a464df2c26db296b030a1ca4766dc961a64e297ccc934b093e82e31b15879->leave($__internal_ca4a464df2c26db296b030a1ca4766dc961a64e297ccc934b093e82e31b15879_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
