<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6e4570fad85f6f3092700e80b4da0b39d79996b97c2a68ef92cae4c383c27b16 extends Twig_Template
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
        $__internal_84c7d9de4436de3a409034510e9d462a6e009930f3ae1745207182ee2d9d29d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c7d9de4436de3a409034510e9d462a6e009930f3ae1745207182ee2d9d29d0->enter($__internal_84c7d9de4436de3a409034510e9d462a6e009930f3ae1745207182ee2d9d29d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_171f8a0f73f4f6eda0091d1d097e31db61a9b4ea009456147c831d938fc0326f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171f8a0f73f4f6eda0091d1d097e31db61a9b4ea009456147c831d938fc0326f->enter($__internal_171f8a0f73f4f6eda0091d1d097e31db61a9b4ea009456147c831d938fc0326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_84c7d9de4436de3a409034510e9d462a6e009930f3ae1745207182ee2d9d29d0->leave($__internal_84c7d9de4436de3a409034510e9d462a6e009930f3ae1745207182ee2d9d29d0_prof);

        
        $__internal_171f8a0f73f4f6eda0091d1d097e31db61a9b4ea009456147c831d938fc0326f->leave($__internal_171f8a0f73f4f6eda0091d1d097e31db61a9b4ea009456147c831d938fc0326f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
