<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f97f0bb28644ff672cb12d38927ee89643e31d7681ef1e1e6e270f43d33b63f extends Twig_Template
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
        $__internal_970be1e30db9a0ed18df04e7baea9e2975370d219bb2c46bb9fe700c0077644f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970be1e30db9a0ed18df04e7baea9e2975370d219bb2c46bb9fe700c0077644f->enter($__internal_970be1e30db9a0ed18df04e7baea9e2975370d219bb2c46bb9fe700c0077644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_64d0318e5ebb84cedce8dd9b0a6c3e9ddbc50b6a1839b9ec3c948149faa914e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d0318e5ebb84cedce8dd9b0a6c3e9ddbc50b6a1839b9ec3c948149faa914e0->enter($__internal_64d0318e5ebb84cedce8dd9b0a6c3e9ddbc50b6a1839b9ec3c948149faa914e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_970be1e30db9a0ed18df04e7baea9e2975370d219bb2c46bb9fe700c0077644f->leave($__internal_970be1e30db9a0ed18df04e7baea9e2975370d219bb2c46bb9fe700c0077644f_prof);

        
        $__internal_64d0318e5ebb84cedce8dd9b0a6c3e9ddbc50b6a1839b9ec3c948149faa914e0->leave($__internal_64d0318e5ebb84cedce8dd9b0a6c3e9ddbc50b6a1839b9ec3c948149faa914e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
