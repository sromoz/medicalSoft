<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_80ddf62ff8cc628531d3ddca2de175b5b3d29ee6648e08290337d4d064fcc8f9 extends Twig_Template
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
        $__internal_8ba776090e5dea3eebce8f88a73e4fcd9bc21280e8d1fb1acd7c96e004246fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba776090e5dea3eebce8f88a73e4fcd9bc21280e8d1fb1acd7c96e004246fe1->enter($__internal_8ba776090e5dea3eebce8f88a73e4fcd9bc21280e8d1fb1acd7c96e004246fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1e695c8f3c50eaa7de36d05aa90bb8f87dd894dd1351d30d27bd6d20015f3be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e695c8f3c50eaa7de36d05aa90bb8f87dd894dd1351d30d27bd6d20015f3be7->enter($__internal_1e695c8f3c50eaa7de36d05aa90bb8f87dd894dd1351d30d27bd6d20015f3be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8ba776090e5dea3eebce8f88a73e4fcd9bc21280e8d1fb1acd7c96e004246fe1->leave($__internal_8ba776090e5dea3eebce8f88a73e4fcd9bc21280e8d1fb1acd7c96e004246fe1_prof);

        
        $__internal_1e695c8f3c50eaa7de36d05aa90bb8f87dd894dd1351d30d27bd6d20015f3be7->leave($__internal_1e695c8f3c50eaa7de36d05aa90bb8f87dd894dd1351d30d27bd6d20015f3be7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
