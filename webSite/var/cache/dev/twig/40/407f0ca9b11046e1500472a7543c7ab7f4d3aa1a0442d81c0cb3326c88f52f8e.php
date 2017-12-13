<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_410804887290895a2c379c82fdb4fd9862b73fab83b53cd89456f2524c8585cc extends Twig_Template
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
        $__internal_6a1c4095a6045fa37f803cc600d9ec40d40e48ed0421124b6a3b165379baf92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1c4095a6045fa37f803cc600d9ec40d40e48ed0421124b6a3b165379baf92a->enter($__internal_6a1c4095a6045fa37f803cc600d9ec40d40e48ed0421124b6a3b165379baf92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_2b7797ff5ef8c3fc3fcfe7f0e1fa77997894cc4b6706bc614043f711d3edea43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7797ff5ef8c3fc3fcfe7f0e1fa77997894cc4b6706bc614043f711d3edea43->enter($__internal_2b7797ff5ef8c3fc3fcfe7f0e1fa77997894cc4b6706bc614043f711d3edea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6a1c4095a6045fa37f803cc600d9ec40d40e48ed0421124b6a3b165379baf92a->leave($__internal_6a1c4095a6045fa37f803cc600d9ec40d40e48ed0421124b6a3b165379baf92a_prof);

        
        $__internal_2b7797ff5ef8c3fc3fcfe7f0e1fa77997894cc4b6706bc614043f711d3edea43->leave($__internal_2b7797ff5ef8c3fc3fcfe7f0e1fa77997894cc4b6706bc614043f711d3edea43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
