<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_706943a73a69727d5e5e089c9a20f44ad1296883b63db329c8e7ca7100b2eb50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e45e863139eef0c7c92284f7edcc0b1a90d90ea831158993620e8f3e27a3e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e45e863139eef0c7c92284f7edcc0b1a90d90ea831158993620e8f3e27a3e27->enter($__internal_4e45e863139eef0c7c92284f7edcc0b1a90d90ea831158993620e8f3e27a3e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6af23bae30a07f159a0655eb4de9eeeecbf6b02b4d378a6ef4633ff5b370cca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af23bae30a07f159a0655eb4de9eeeecbf6b02b4d378a6ef4633ff5b370cca8->enter($__internal_6af23bae30a07f159a0655eb4de9eeeecbf6b02b4d378a6ef4633ff5b370cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4e45e863139eef0c7c92284f7edcc0b1a90d90ea831158993620e8f3e27a3e27->leave($__internal_4e45e863139eef0c7c92284f7edcc0b1a90d90ea831158993620e8f3e27a3e27_prof);

        
        $__internal_6af23bae30a07f159a0655eb4de9eeeecbf6b02b4d378a6ef4633ff5b370cca8->leave($__internal_6af23bae30a07f159a0655eb4de9eeeecbf6b02b4d378a6ef4633ff5b370cca8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a45be6f4c2b7aaef21cf2ccd8e9548726abd7aed485572ffb579262575bc885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a45be6f4c2b7aaef21cf2ccd8e9548726abd7aed485572ffb579262575bc885->enter($__internal_7a45be6f4c2b7aaef21cf2ccd8e9548726abd7aed485572ffb579262575bc885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e4ccd7621c1fb80fd16f161f99badfadfc5b727bb0ef1e933b063979fc42c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4ccd7621c1fb80fd16f161f99badfadfc5b727bb0ef1e933b063979fc42c11->enter($__internal_2e4ccd7621c1fb80fd16f161f99badfadfc5b727bb0ef1e933b063979fc42c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2e4ccd7621c1fb80fd16f161f99badfadfc5b727bb0ef1e933b063979fc42c11->leave($__internal_2e4ccd7621c1fb80fd16f161f99badfadfc5b727bb0ef1e933b063979fc42c11_prof);

        
        $__internal_7a45be6f4c2b7aaef21cf2ccd8e9548726abd7aed485572ffb579262575bc885->leave($__internal_7a45be6f4c2b7aaef21cf2ccd8e9548726abd7aed485572ffb579262575bc885_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
