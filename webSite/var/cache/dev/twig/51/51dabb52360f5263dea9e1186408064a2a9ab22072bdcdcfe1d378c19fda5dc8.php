<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_84cc671909b7a8d151fc2e6bad4f9ffebb4cab4735e927a310fde078842cd166 extends Twig_Template
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
        $__internal_d440a6c11834df06a64a9ab0d81c3a8cfd91a2e9ac8bb274876cc8c1754c678b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d440a6c11834df06a64a9ab0d81c3a8cfd91a2e9ac8bb274876cc8c1754c678b->enter($__internal_d440a6c11834df06a64a9ab0d81c3a8cfd91a2e9ac8bb274876cc8c1754c678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7cad443cada14ab21e6cf2bf746a82208f7779f61f10aecd18638ebee5b8c284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cad443cada14ab21e6cf2bf746a82208f7779f61f10aecd18638ebee5b8c284->enter($__internal_7cad443cada14ab21e6cf2bf746a82208f7779f61f10aecd18638ebee5b8c284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d440a6c11834df06a64a9ab0d81c3a8cfd91a2e9ac8bb274876cc8c1754c678b->leave($__internal_d440a6c11834df06a64a9ab0d81c3a8cfd91a2e9ac8bb274876cc8c1754c678b_prof);

        
        $__internal_7cad443cada14ab21e6cf2bf746a82208f7779f61f10aecd18638ebee5b8c284->leave($__internal_7cad443cada14ab21e6cf2bf746a82208f7779f61f10aecd18638ebee5b8c284_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
