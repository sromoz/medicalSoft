<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4f4a32f7b310cc5afc82594fef7b2b0764f9d4f28a83c54922512696ce008e12 extends Twig_Template
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
        $__internal_7d185004aa7c5b7871015af0c97aed884cf2da2ca6a019731e010b5fe359f044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d185004aa7c5b7871015af0c97aed884cf2da2ca6a019731e010b5fe359f044->enter($__internal_7d185004aa7c5b7871015af0c97aed884cf2da2ca6a019731e010b5fe359f044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a99ea20e6743d11248cd91d553b19a4d71659528c78f4b8698d64436d22ddd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99ea20e6743d11248cd91d553b19a4d71659528c78f4b8698d64436d22ddd97->enter($__internal_a99ea20e6743d11248cd91d553b19a4d71659528c78f4b8698d64436d22ddd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7d185004aa7c5b7871015af0c97aed884cf2da2ca6a019731e010b5fe359f044->leave($__internal_7d185004aa7c5b7871015af0c97aed884cf2da2ca6a019731e010b5fe359f044_prof);

        
        $__internal_a99ea20e6743d11248cd91d553b19a4d71659528c78f4b8698d64436d22ddd97->leave($__internal_a99ea20e6743d11248cd91d553b19a4d71659528c78f4b8698d64436d22ddd97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
