<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e26819f51523b377e887d87fc7c0338f1c904b322e65a529d4a86bd51ac0ab6f extends Twig_Template
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
        $__internal_e01ade221995589af2ee08f638e1c56fd192035017419ff9a63014f4258f0cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01ade221995589af2ee08f638e1c56fd192035017419ff9a63014f4258f0cfd->enter($__internal_e01ade221995589af2ee08f638e1c56fd192035017419ff9a63014f4258f0cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cb207678761264883694b941142c45d827e8f51b7c18b65bb90a925e1c7d2d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb207678761264883694b941142c45d827e8f51b7c18b65bb90a925e1c7d2d9d->enter($__internal_cb207678761264883694b941142c45d827e8f51b7c18b65bb90a925e1c7d2d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e01ade221995589af2ee08f638e1c56fd192035017419ff9a63014f4258f0cfd->leave($__internal_e01ade221995589af2ee08f638e1c56fd192035017419ff9a63014f4258f0cfd_prof);

        
        $__internal_cb207678761264883694b941142c45d827e8f51b7c18b65bb90a925e1c7d2d9d->leave($__internal_cb207678761264883694b941142c45d827e8f51b7c18b65bb90a925e1c7d2d9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
