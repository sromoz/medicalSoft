<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_aeb1ada288ab7b6c6ca369f21a420ba5f2a3d71ff3fac68246d296bd208e772b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a2e8a3350fef360584163e6131c06fdf7e818685ad26707aec8e0be80e544a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a2e8a3350fef360584163e6131c06fdf7e818685ad26707aec8e0be80e544a->enter($__internal_22a2e8a3350fef360584163e6131c06fdf7e818685ad26707aec8e0be80e544a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e323026b778d2b29f513ecb228c5d0303ad0129e7c77f7a9614f20f9dd603e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e323026b778d2b29f513ecb228c5d0303ad0129e7c77f7a9614f20f9dd603e1d->enter($__internal_e323026b778d2b29f513ecb228c5d0303ad0129e7c77f7a9614f20f9dd603e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_22a2e8a3350fef360584163e6131c06fdf7e818685ad26707aec8e0be80e544a->leave($__internal_22a2e8a3350fef360584163e6131c06fdf7e818685ad26707aec8e0be80e544a_prof);

        
        $__internal_e323026b778d2b29f513ecb228c5d0303ad0129e7c77f7a9614f20f9dd603e1d->leave($__internal_e323026b778d2b29f513ecb228c5d0303ad0129e7c77f7a9614f20f9dd603e1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
