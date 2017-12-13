<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0a1615bded4cabb1e00a10feca8d0f78834832c28666e5f395da923e53934f20 extends Twig_Template
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
        $__internal_63340309eed2db83e54529eb4af14afae61b32e52425278b4cc848cbc380aa30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63340309eed2db83e54529eb4af14afae61b32e52425278b4cc848cbc380aa30->enter($__internal_63340309eed2db83e54529eb4af14afae61b32e52425278b4cc848cbc380aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d8beed3c6ead6563cc7aec2eb4a3257b6f553d5815cbabd7b20bc1866ce2b018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8beed3c6ead6563cc7aec2eb4a3257b6f553d5815cbabd7b20bc1866ce2b018->enter($__internal_d8beed3c6ead6563cc7aec2eb4a3257b6f553d5815cbabd7b20bc1866ce2b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_63340309eed2db83e54529eb4af14afae61b32e52425278b4cc848cbc380aa30->leave($__internal_63340309eed2db83e54529eb4af14afae61b32e52425278b4cc848cbc380aa30_prof);

        
        $__internal_d8beed3c6ead6563cc7aec2eb4a3257b6f553d5815cbabd7b20bc1866ce2b018->leave($__internal_d8beed3c6ead6563cc7aec2eb4a3257b6f553d5815cbabd7b20bc1866ce2b018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
