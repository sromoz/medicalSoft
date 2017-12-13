<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f823cfc0da8cfb6112c7132a23ddeea41e9cc9c2d0dbe26ed549f1c19c71e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd2575218ee3fddf25c08a1e279afa716848e4ac6a3f336f3da1248d178fa653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2575218ee3fddf25c08a1e279afa716848e4ac6a3f336f3da1248d178fa653->enter($__internal_fd2575218ee3fddf25c08a1e279afa716848e4ac6a3f336f3da1248d178fa653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4c92132baf42d9271a676afd4785a2782959b6c116257b174e1f28ececd4fcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c92132baf42d9271a676afd4785a2782959b6c116257b174e1f28ececd4fcbb->enter($__internal_4c92132baf42d9271a676afd4785a2782959b6c116257b174e1f28ececd4fcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2575218ee3fddf25c08a1e279afa716848e4ac6a3f336f3da1248d178fa653->leave($__internal_fd2575218ee3fddf25c08a1e279afa716848e4ac6a3f336f3da1248d178fa653_prof);

        
        $__internal_4c92132baf42d9271a676afd4785a2782959b6c116257b174e1f28ececd4fcbb->leave($__internal_4c92132baf42d9271a676afd4785a2782959b6c116257b174e1f28ececd4fcbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc28367f10aab53c1ceefccbf5bc070889529473f152e1861a36ff28e3e77951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc28367f10aab53c1ceefccbf5bc070889529473f152e1861a36ff28e3e77951->enter($__internal_cc28367f10aab53c1ceefccbf5bc070889529473f152e1861a36ff28e3e77951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b58b87ada252fae740643067707b9a528fffb2de4fd295e9af66df6b9798db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b58b87ada252fae740643067707b9a528fffb2de4fd295e9af66df6b9798db0->enter($__internal_5b58b87ada252fae740643067707b9a528fffb2de4fd295e9af66df6b9798db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b58b87ada252fae740643067707b9a528fffb2de4fd295e9af66df6b9798db0->leave($__internal_5b58b87ada252fae740643067707b9a528fffb2de4fd295e9af66df6b9798db0_prof);

        
        $__internal_cc28367f10aab53c1ceefccbf5bc070889529473f152e1861a36ff28e3e77951->leave($__internal_cc28367f10aab53c1ceefccbf5bc070889529473f152e1861a36ff28e3e77951_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e3c5a1277c0cc68e33bb12b0495fb99c08d3a07b1eecbc88bf36269b359125a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3c5a1277c0cc68e33bb12b0495fb99c08d3a07b1eecbc88bf36269b359125a->enter($__internal_3e3c5a1277c0cc68e33bb12b0495fb99c08d3a07b1eecbc88bf36269b359125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04ac0dfc0a832ff2ba5649da26f2cf3b93d1b9a8b068ecb454e8dfb27d7b2a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ac0dfc0a832ff2ba5649da26f2cf3b93d1b9a8b068ecb454e8dfb27d7b2a89->enter($__internal_04ac0dfc0a832ff2ba5649da26f2cf3b93d1b9a8b068ecb454e8dfb27d7b2a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04ac0dfc0a832ff2ba5649da26f2cf3b93d1b9a8b068ecb454e8dfb27d7b2a89->leave($__internal_04ac0dfc0a832ff2ba5649da26f2cf3b93d1b9a8b068ecb454e8dfb27d7b2a89_prof);

        
        $__internal_3e3c5a1277c0cc68e33bb12b0495fb99c08d3a07b1eecbc88bf36269b359125a->leave($__internal_3e3c5a1277c0cc68e33bb12b0495fb99c08d3a07b1eecbc88bf36269b359125a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8031ab1500d9aa268e31274b4723521594e5c4e53787e8c549efd016ee423fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8031ab1500d9aa268e31274b4723521594e5c4e53787e8c549efd016ee423fb->enter($__internal_f8031ab1500d9aa268e31274b4723521594e5c4e53787e8c549efd016ee423fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cea9bf644e89d44a7e5460938a2830a8398fd835e9ec93b08fe8aa95899d08c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea9bf644e89d44a7e5460938a2830a8398fd835e9ec93b08fe8aa95899d08c6->enter($__internal_cea9bf644e89d44a7e5460938a2830a8398fd835e9ec93b08fe8aa95899d08c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cea9bf644e89d44a7e5460938a2830a8398fd835e9ec93b08fe8aa95899d08c6->leave($__internal_cea9bf644e89d44a7e5460938a2830a8398fd835e9ec93b08fe8aa95899d08c6_prof);

        
        $__internal_f8031ab1500d9aa268e31274b4723521594e5c4e53787e8c549efd016ee423fb->leave($__internal_f8031ab1500d9aa268e31274b4723521594e5c4e53787e8c549efd016ee423fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
