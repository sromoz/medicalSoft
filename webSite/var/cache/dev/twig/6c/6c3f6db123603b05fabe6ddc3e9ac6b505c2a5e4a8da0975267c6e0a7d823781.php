<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_673fe3ba4983d51b7cae290d66088054512e0b920257a64bcbcaf7564562a928 extends Twig_Template
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
        $__internal_82f9c9691cf57351676e52548b2ccf23f22abfc5c8907869107136f3ede55317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f9c9691cf57351676e52548b2ccf23f22abfc5c8907869107136f3ede55317->enter($__internal_82f9c9691cf57351676e52548b2ccf23f22abfc5c8907869107136f3ede55317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_393d402c1f73454b053a81a936e5945d98435fa6ea65366ae773d71dff291214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393d402c1f73454b053a81a936e5945d98435fa6ea65366ae773d71dff291214->enter($__internal_393d402c1f73454b053a81a936e5945d98435fa6ea65366ae773d71dff291214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_82f9c9691cf57351676e52548b2ccf23f22abfc5c8907869107136f3ede55317->leave($__internal_82f9c9691cf57351676e52548b2ccf23f22abfc5c8907869107136f3ede55317_prof);

        
        $__internal_393d402c1f73454b053a81a936e5945d98435fa6ea65366ae773d71dff291214->leave($__internal_393d402c1f73454b053a81a936e5945d98435fa6ea65366ae773d71dff291214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
