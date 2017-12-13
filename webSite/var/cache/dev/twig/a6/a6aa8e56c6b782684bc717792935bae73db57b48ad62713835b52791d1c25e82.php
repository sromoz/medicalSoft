<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3be36c52daff360d86d735f203002d64e284e97f1fc6846c5b0383fe4ecbe6ee extends Twig_Template
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
        $__internal_24d656815790c608fcb006011c68e95e306b25b4958885175cb8dfe9a099b5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d656815790c608fcb006011c68e95e306b25b4958885175cb8dfe9a099b5fb->enter($__internal_24d656815790c608fcb006011c68e95e306b25b4958885175cb8dfe9a099b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a03843b8229e78d4fe2e082cd94622191e923c66612acdc7be3e22cd08161e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03843b8229e78d4fe2e082cd94622191e923c66612acdc7be3e22cd08161e76->enter($__internal_a03843b8229e78d4fe2e082cd94622191e923c66612acdc7be3e22cd08161e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_24d656815790c608fcb006011c68e95e306b25b4958885175cb8dfe9a099b5fb->leave($__internal_24d656815790c608fcb006011c68e95e306b25b4958885175cb8dfe9a099b5fb_prof);

        
        $__internal_a03843b8229e78d4fe2e082cd94622191e923c66612acdc7be3e22cd08161e76->leave($__internal_a03843b8229e78d4fe2e082cd94622191e923c66612acdc7be3e22cd08161e76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
