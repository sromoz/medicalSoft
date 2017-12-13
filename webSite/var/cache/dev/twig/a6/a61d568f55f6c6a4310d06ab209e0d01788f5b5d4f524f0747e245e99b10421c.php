<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fb2104fa7e1229b433c113d994690d41bc7694aa76337c640acd788d9ba1beac extends Twig_Template
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
        $__internal_7c1e0b8671080e050dee03d7931c5ccfcf5bf554a5e64df23e2db0048ce3ca15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1e0b8671080e050dee03d7931c5ccfcf5bf554a5e64df23e2db0048ce3ca15->enter($__internal_7c1e0b8671080e050dee03d7931c5ccfcf5bf554a5e64df23e2db0048ce3ca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_afdf47dc1d9f2fc474c53cc2c5d5040bab4c73861ae11bf6c1a4145fdfa9d008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdf47dc1d9f2fc474c53cc2c5d5040bab4c73861ae11bf6c1a4145fdfa9d008->enter($__internal_afdf47dc1d9f2fc474c53cc2c5d5040bab4c73861ae11bf6c1a4145fdfa9d008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7c1e0b8671080e050dee03d7931c5ccfcf5bf554a5e64df23e2db0048ce3ca15->leave($__internal_7c1e0b8671080e050dee03d7931c5ccfcf5bf554a5e64df23e2db0048ce3ca15_prof);

        
        $__internal_afdf47dc1d9f2fc474c53cc2c5d5040bab4c73861ae11bf6c1a4145fdfa9d008->leave($__internal_afdf47dc1d9f2fc474c53cc2c5d5040bab4c73861ae11bf6c1a4145fdfa9d008_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
