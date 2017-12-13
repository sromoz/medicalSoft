<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e2beb778ff0a4e744b26f4ff71904ae9158d915a3170b6258e9ac7a84dbe9d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a917714a503fd0b84931aaad31ec2f994a4575c0a36d8d2c3816378fb614369c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a917714a503fd0b84931aaad31ec2f994a4575c0a36d8d2c3816378fb614369c->enter($__internal_a917714a503fd0b84931aaad31ec2f994a4575c0a36d8d2c3816378fb614369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_d651085b079b036ac400d0e081c8039e33622d11248e71980394761393d055b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d651085b079b036ac400d0e081c8039e33622d11248e71980394761393d055b4->enter($__internal_d651085b079b036ac400d0e081c8039e33622d11248e71980394761393d055b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a917714a503fd0b84931aaad31ec2f994a4575c0a36d8d2c3816378fb614369c->leave($__internal_a917714a503fd0b84931aaad31ec2f994a4575c0a36d8d2c3816378fb614369c_prof);

        
        $__internal_d651085b079b036ac400d0e081c8039e33622d11248e71980394761393d055b4->leave($__internal_d651085b079b036ac400d0e081c8039e33622d11248e71980394761393d055b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5074d8df675b28cbb63a9edf6f123ea60d48a8cc8e2600eba668a1813c275b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5074d8df675b28cbb63a9edf6f123ea60d48a8cc8e2600eba668a1813c275b1d->enter($__internal_5074d8df675b28cbb63a9edf6f123ea60d48a8cc8e2600eba668a1813c275b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6492183b5d06c21a0c6f9d156e774b13206a987d66fd50fd3194368b4d8d3739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6492183b5d06c21a0c6f9d156e774b13206a987d66fd50fd3194368b4d8d3739->enter($__internal_6492183b5d06c21a0c6f9d156e774b13206a987d66fd50fd3194368b4d8d3739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6492183b5d06c21a0c6f9d156e774b13206a987d66fd50fd3194368b4d8d3739->leave($__internal_6492183b5d06c21a0c6f9d156e774b13206a987d66fd50fd3194368b4d8d3739_prof);

        
        $__internal_5074d8df675b28cbb63a9edf6f123ea60d48a8cc8e2600eba668a1813c275b1d->leave($__internal_5074d8df675b28cbb63a9edf6f123ea60d48a8cc8e2600eba668a1813c275b1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
