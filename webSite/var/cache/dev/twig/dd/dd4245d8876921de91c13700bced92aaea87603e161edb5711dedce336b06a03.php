<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c764c57a45ad75ca4d2b716ef3a362f80ca06ac1a06ee60b5023ff1e5be8790e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_cd23b52ba704b46f16be82efdc352fb72d7ebab944bc3d6af6b3eba66cd83246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd23b52ba704b46f16be82efdc352fb72d7ebab944bc3d6af6b3eba66cd83246->enter($__internal_cd23b52ba704b46f16be82efdc352fb72d7ebab944bc3d6af6b3eba66cd83246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_5c5c35cfd13659c11896df85d4c91331f8b346542b5a93ea49079bbdd12bbdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5c35cfd13659c11896df85d4c91331f8b346542b5a93ea49079bbdd12bbdac->enter($__internal_5c5c35cfd13659c11896df85d4c91331f8b346542b5a93ea49079bbdd12bbdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd23b52ba704b46f16be82efdc352fb72d7ebab944bc3d6af6b3eba66cd83246->leave($__internal_cd23b52ba704b46f16be82efdc352fb72d7ebab944bc3d6af6b3eba66cd83246_prof);

        
        $__internal_5c5c35cfd13659c11896df85d4c91331f8b346542b5a93ea49079bbdd12bbdac->leave($__internal_5c5c35cfd13659c11896df85d4c91331f8b346542b5a93ea49079bbdd12bbdac_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c48532e3d503ea64cdf3c006bfb6fe2c101521f0cc7e63faa93de7efc1ebe959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48532e3d503ea64cdf3c006bfb6fe2c101521f0cc7e63faa93de7efc1ebe959->enter($__internal_c48532e3d503ea64cdf3c006bfb6fe2c101521f0cc7e63faa93de7efc1ebe959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6e93f1563e1d61b2fc4231645e0c9cca414b76ca622bc3c0fc6d62c67fc6901c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e93f1563e1d61b2fc4231645e0c9cca414b76ca622bc3c0fc6d62c67fc6901c->enter($__internal_6e93f1563e1d61b2fc4231645e0c9cca414b76ca622bc3c0fc6d62c67fc6901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6e93f1563e1d61b2fc4231645e0c9cca414b76ca622bc3c0fc6d62c67fc6901c->leave($__internal_6e93f1563e1d61b2fc4231645e0c9cca414b76ca622bc3c0fc6d62c67fc6901c_prof);

        
        $__internal_c48532e3d503ea64cdf3c006bfb6fe2c101521f0cc7e63faa93de7efc1ebe959->leave($__internal_c48532e3d503ea64cdf3c006bfb6fe2c101521f0cc7e63faa93de7efc1ebe959_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5edbd7cfd0b00825c0e6fe95ea0727fd6ba84c4d96864a3b3ebc6a839949adbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edbd7cfd0b00825c0e6fe95ea0727fd6ba84c4d96864a3b3ebc6a839949adbe->enter($__internal_5edbd7cfd0b00825c0e6fe95ea0727fd6ba84c4d96864a3b3ebc6a839949adbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c8b28cd0ccb4810e7b849cae3539a4c2a213a33a7ea8935bf5d9c261501d75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8b28cd0ccb4810e7b849cae3539a4c2a213a33a7ea8935bf5d9c261501d75c->enter($__internal_0c8b28cd0ccb4810e7b849cae3539a4c2a213a33a7ea8935bf5d9c261501d75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_0c8b28cd0ccb4810e7b849cae3539a4c2a213a33a7ea8935bf5d9c261501d75c->leave($__internal_0c8b28cd0ccb4810e7b849cae3539a4c2a213a33a7ea8935bf5d9c261501d75c_prof);

        
        $__internal_5edbd7cfd0b00825c0e6fe95ea0727fd6ba84c4d96864a3b3ebc6a839949adbe->leave($__internal_5edbd7cfd0b00825c0e6fe95ea0727fd6ba84c4d96864a3b3ebc6a839949adbe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
