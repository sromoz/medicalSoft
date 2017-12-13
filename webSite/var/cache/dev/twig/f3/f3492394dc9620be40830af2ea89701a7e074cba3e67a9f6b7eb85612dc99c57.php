<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9315749591aa794155b0f9fe33972797a4c914346f2d327997b3a10837efc19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9cdb8246d1d7f48ab2447f3a5265f262536622af45dcedd49ad85e359fcb8670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdb8246d1d7f48ab2447f3a5265f262536622af45dcedd49ad85e359fcb8670->enter($__internal_9cdb8246d1d7f48ab2447f3a5265f262536622af45dcedd49ad85e359fcb8670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0acb75bb6cc7fe954671d87182e8b835d184c75964dc2c3192fb06cddd11f937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acb75bb6cc7fe954671d87182e8b835d184c75964dc2c3192fb06cddd11f937->enter($__internal_0acb75bb6cc7fe954671d87182e8b835d184c75964dc2c3192fb06cddd11f937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cdb8246d1d7f48ab2447f3a5265f262536622af45dcedd49ad85e359fcb8670->leave($__internal_9cdb8246d1d7f48ab2447f3a5265f262536622af45dcedd49ad85e359fcb8670_prof);

        
        $__internal_0acb75bb6cc7fe954671d87182e8b835d184c75964dc2c3192fb06cddd11f937->leave($__internal_0acb75bb6cc7fe954671d87182e8b835d184c75964dc2c3192fb06cddd11f937_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92b35aecbec573e5731ec3cc3df873f5f51ad72df33bed0039d7eeff939ef395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b35aecbec573e5731ec3cc3df873f5f51ad72df33bed0039d7eeff939ef395->enter($__internal_92b35aecbec573e5731ec3cc3df873f5f51ad72df33bed0039d7eeff939ef395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5715b152d6b86fe65e841983c46d56acdc050bbca2be53d9b5821a1a0926dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5715b152d6b86fe65e841983c46d56acdc050bbca2be53d9b5821a1a0926dcf->enter($__internal_f5715b152d6b86fe65e841983c46d56acdc050bbca2be53d9b5821a1a0926dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f5715b152d6b86fe65e841983c46d56acdc050bbca2be53d9b5821a1a0926dcf->leave($__internal_f5715b152d6b86fe65e841983c46d56acdc050bbca2be53d9b5821a1a0926dcf_prof);

        
        $__internal_92b35aecbec573e5731ec3cc3df873f5f51ad72df33bed0039d7eeff939ef395->leave($__internal_92b35aecbec573e5731ec3cc3df873f5f51ad72df33bed0039d7eeff939ef395_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d7481c84ebc17c7e9cb8887ef125ecd3006f6c363f0b47ccea1005abba04739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7481c84ebc17c7e9cb8887ef125ecd3006f6c363f0b47ccea1005abba04739->enter($__internal_6d7481c84ebc17c7e9cb8887ef125ecd3006f6c363f0b47ccea1005abba04739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f18ee1cc5f43e24fea8e1f1065ac007f4e864c8992aa4fd1ab4faa528479801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f18ee1cc5f43e24fea8e1f1065ac007f4e864c8992aa4fd1ab4faa528479801->enter($__internal_7f18ee1cc5f43e24fea8e1f1065ac007f4e864c8992aa4fd1ab4faa528479801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7f18ee1cc5f43e24fea8e1f1065ac007f4e864c8992aa4fd1ab4faa528479801->leave($__internal_7f18ee1cc5f43e24fea8e1f1065ac007f4e864c8992aa4fd1ab4faa528479801_prof);

        
        $__internal_6d7481c84ebc17c7e9cb8887ef125ecd3006f6c363f0b47ccea1005abba04739->leave($__internal_6d7481c84ebc17c7e9cb8887ef125ecd3006f6c363f0b47ccea1005abba04739_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
