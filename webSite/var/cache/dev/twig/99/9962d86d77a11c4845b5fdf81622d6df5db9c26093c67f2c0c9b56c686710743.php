<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cea255f8ac967820ec3d0e6610a9ec3448d674780fda4d97fa5bf78ff08ef74 extends Twig_Template
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
        $__internal_9e55c4e82ff8f5b9d1b038997c3520931eae6020e41a7dddf7b7b0eac7756bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e55c4e82ff8f5b9d1b038997c3520931eae6020e41a7dddf7b7b0eac7756bcd->enter($__internal_9e55c4e82ff8f5b9d1b038997c3520931eae6020e41a7dddf7b7b0eac7756bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2b1a251eefc6635a0c8069acb20444ae60d907703cfd135e5bcb7e229eda1216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1a251eefc6635a0c8069acb20444ae60d907703cfd135e5bcb7e229eda1216->enter($__internal_2b1a251eefc6635a0c8069acb20444ae60d907703cfd135e5bcb7e229eda1216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9e55c4e82ff8f5b9d1b038997c3520931eae6020e41a7dddf7b7b0eac7756bcd->leave($__internal_9e55c4e82ff8f5b9d1b038997c3520931eae6020e41a7dddf7b7b0eac7756bcd_prof);

        
        $__internal_2b1a251eefc6635a0c8069acb20444ae60d907703cfd135e5bcb7e229eda1216->leave($__internal_2b1a251eefc6635a0c8069acb20444ae60d907703cfd135e5bcb7e229eda1216_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
