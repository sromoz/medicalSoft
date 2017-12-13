<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_111d59b413361a5c199b84ce7a2a9ccc55d09953faae1d87c5d37facc7f0537e extends Twig_Template
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
        $__internal_f54c4c5d72bce37b21b7e726c34e74326f6c29529766eeda7e896d651dd94e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54c4c5d72bce37b21b7e726c34e74326f6c29529766eeda7e896d651dd94e4d->enter($__internal_f54c4c5d72bce37b21b7e726c34e74326f6c29529766eeda7e896d651dd94e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_89c2e967aed039bf2cc931c8c2e62efed504b19a358ff180d4c09e35e8660a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c2e967aed039bf2cc931c8c2e62efed504b19a358ff180d4c09e35e8660a86->enter($__internal_89c2e967aed039bf2cc931c8c2e62efed504b19a358ff180d4c09e35e8660a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f54c4c5d72bce37b21b7e726c34e74326f6c29529766eeda7e896d651dd94e4d->leave($__internal_f54c4c5d72bce37b21b7e726c34e74326f6c29529766eeda7e896d651dd94e4d_prof);

        
        $__internal_89c2e967aed039bf2cc931c8c2e62efed504b19a358ff180d4c09e35e8660a86->leave($__internal_89c2e967aed039bf2cc931c8c2e62efed504b19a358ff180d4c09e35e8660a86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
