<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_351d0df8fe3a243a92f199b8d684b98c7902d70f0ad8c0c7b9bd1e3b8bdca3f2 extends Twig_Template
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
        $__internal_cf59c9a3b260c9ff17cc2a17eaf72b91b0d8175a2db78f67afdbf161b390850e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf59c9a3b260c9ff17cc2a17eaf72b91b0d8175a2db78f67afdbf161b390850e->enter($__internal_cf59c9a3b260c9ff17cc2a17eaf72b91b0d8175a2db78f67afdbf161b390850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_9b97583fafde4b6eaa9372bc6d2988a8cb5506e40fcc89020799d26f04bb8256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b97583fafde4b6eaa9372bc6d2988a8cb5506e40fcc89020799d26f04bb8256->enter($__internal_9b97583fafde4b6eaa9372bc6d2988a8cb5506e40fcc89020799d26f04bb8256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_cf59c9a3b260c9ff17cc2a17eaf72b91b0d8175a2db78f67afdbf161b390850e->leave($__internal_cf59c9a3b260c9ff17cc2a17eaf72b91b0d8175a2db78f67afdbf161b390850e_prof);

        
        $__internal_9b97583fafde4b6eaa9372bc6d2988a8cb5506e40fcc89020799d26f04bb8256->leave($__internal_9b97583fafde4b6eaa9372bc6d2988a8cb5506e40fcc89020799d26f04bb8256_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list_content.html.twig");
    }
}
