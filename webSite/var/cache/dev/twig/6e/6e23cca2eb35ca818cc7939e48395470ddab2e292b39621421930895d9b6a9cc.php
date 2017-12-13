<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5799c9e1db6621426ed8e66d447de1da19d9523aecdddf242807761bd5cbdcea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a62acbe4b02fe18be6b36c2c7102dab1894f5aecf7151a8aefab8f5d5063610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a62acbe4b02fe18be6b36c2c7102dab1894f5aecf7151a8aefab8f5d5063610->enter($__internal_3a62acbe4b02fe18be6b36c2c7102dab1894f5aecf7151a8aefab8f5d5063610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_946f8ec531997c5b571a51263729253fbe5bfdda0afb7c563ce7bcce31f977b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946f8ec531997c5b571a51263729253fbe5bfdda0afb7c563ce7bcce31f977b0->enter($__internal_946f8ec531997c5b571a51263729253fbe5bfdda0afb7c563ce7bcce31f977b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a62acbe4b02fe18be6b36c2c7102dab1894f5aecf7151a8aefab8f5d5063610->leave($__internal_3a62acbe4b02fe18be6b36c2c7102dab1894f5aecf7151a8aefab8f5d5063610_prof);

        
        $__internal_946f8ec531997c5b571a51263729253fbe5bfdda0afb7c563ce7bcce31f977b0->leave($__internal_946f8ec531997c5b571a51263729253fbe5bfdda0afb7c563ce7bcce31f977b0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_099dc69d765c3dd6658a017712637029a51749479f9fc0277941321189b3a6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099dc69d765c3dd6658a017712637029a51749479f9fc0277941321189b3a6f8->enter($__internal_099dc69d765c3dd6658a017712637029a51749479f9fc0277941321189b3a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3524aa0efb90f7b9f27092105801251e22ef5988e1b44c0d961bbc016fd25abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3524aa0efb90f7b9f27092105801251e22ef5988e1b44c0d961bbc016fd25abf->enter($__internal_3524aa0efb90f7b9f27092105801251e22ef5988e1b44c0d961bbc016fd25abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "  
<title>MedicalSoftLayout</title>                
        <div>            
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
        
";
        
        $__internal_3524aa0efb90f7b9f27092105801251e22ef5988e1b44c0d961bbc016fd25abf->leave($__internal_3524aa0efb90f7b9f27092105801251e22ef5988e1b44c0d961bbc016fd25abf_prof);

        
        $__internal_099dc69d765c3dd6658a017712637029a51749479f9fc0277941321189b3a6f8->leave($__internal_099dc69d765c3dd6658a017712637029a51749479f9fc0277941321189b3a6f8_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22f01faa5abf8cdac3113fee1f21a3fac79b1888ff9e289350ebeff57638f58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f01faa5abf8cdac3113fee1f21a3fac79b1888ff9e289350ebeff57638f58e->enter($__internal_22f01faa5abf8cdac3113fee1f21a3fac79b1888ff9e289350ebeff57638f58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a0908efba74c32cfaa8c76aa5722b54cd5fdb5fce9832ad1f4797d2579ebcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0908efba74c32cfaa8c76aa5722b54cd5fdb5fce9832ad1f4797d2579ebcca->enter($__internal_4a0908efba74c32cfaa8c76aa5722b54cd5fdb5fce9832ad1f4797d2579ebcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_4a0908efba74c32cfaa8c76aa5722b54cd5fdb5fce9832ad1f4797d2579ebcca->leave($__internal_4a0908efba74c32cfaa8c76aa5722b54cd5fdb5fce9832ad1f4797d2579ebcca_prof);

        
        $__internal_22f01faa5abf8cdac3113fee1f21a3fac79b1888ff9e289350ebeff57638f58e->leave($__internal_22f01faa5abf8cdac3113fee1f21a3fac79b1888ff9e289350ebeff57638f58e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 27,  126 => 26,  114 => 28,  112 => 26,  108 => 24,  105 => 23,  99 => 22,  90 => 19,  85 => 18,  80 => 17,  75 => 16,  73 => 15,  69 => 13,  61 => 11,  58 => 10,  56 => 6,  54 => 5,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block content %}  
<title>MedicalSoftLayout</title>                
        <div>            
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {#{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>#}
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
        
{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/layout.html.twig");
    }
}
