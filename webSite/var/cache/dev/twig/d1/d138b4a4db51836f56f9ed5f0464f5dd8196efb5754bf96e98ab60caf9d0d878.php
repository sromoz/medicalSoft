<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b094c28242c8a6aa22c240152eb1e54c1585c524dc3ec0bac29435664712c317 extends Twig_Template
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
        $__internal_992148d44852f23b0d2fd59f4df7e062fa15d62709732d33108a7dd70fe99105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992148d44852f23b0d2fd59f4df7e062fa15d62709732d33108a7dd70fe99105->enter($__internal_992148d44852f23b0d2fd59f4df7e062fa15d62709732d33108a7dd70fe99105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a5182346c7434a912c767d1aedb63b300dc67f76625cc985e1e54bbfb5b18aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5182346c7434a912c767d1aedb63b300dc67f76625cc985e1e54bbfb5b18aa8->enter($__internal_a5182346c7434a912c767d1aedb63b300dc67f76625cc985e1e54bbfb5b18aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_992148d44852f23b0d2fd59f4df7e062fa15d62709732d33108a7dd70fe99105->leave($__internal_992148d44852f23b0d2fd59f4df7e062fa15d62709732d33108a7dd70fe99105_prof);

        
        $__internal_a5182346c7434a912c767d1aedb63b300dc67f76625cc985e1e54bbfb5b18aa8->leave($__internal_a5182346c7434a912c767d1aedb63b300dc67f76625cc985e1e54bbfb5b18aa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
