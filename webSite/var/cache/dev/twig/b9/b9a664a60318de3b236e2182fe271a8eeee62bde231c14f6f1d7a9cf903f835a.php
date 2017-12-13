<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecbd9ccd1d137e963500eeadc5ce627c66a29d787212188841159b8197f85a72 extends Twig_Template
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
        $__internal_673d7df4d3755c8c2dc914839e8b5bd23c2bba8facad42a5813955a3451f7675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673d7df4d3755c8c2dc914839e8b5bd23c2bba8facad42a5813955a3451f7675->enter($__internal_673d7df4d3755c8c2dc914839e8b5bd23c2bba8facad42a5813955a3451f7675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ae71ed8bbb46e5309186503de756da717a4ff55e7eccd80908053d36e02fa6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae71ed8bbb46e5309186503de756da717a4ff55e7eccd80908053d36e02fa6f6->enter($__internal_ae71ed8bbb46e5309186503de756da717a4ff55e7eccd80908053d36e02fa6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_673d7df4d3755c8c2dc914839e8b5bd23c2bba8facad42a5813955a3451f7675->leave($__internal_673d7df4d3755c8c2dc914839e8b5bd23c2bba8facad42a5813955a3451f7675_prof);

        
        $__internal_ae71ed8bbb46e5309186503de756da717a4ff55e7eccd80908053d36e02fa6f6->leave($__internal_ae71ed8bbb46e5309186503de756da717a4ff55e7eccd80908053d36e02fa6f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
