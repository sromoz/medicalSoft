<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bc7e7a784d133918f6e03109f05e39011e458d777d67588a14a7457d3057c06 extends Twig_Template
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
        $__internal_7814ce73fbe5a6f666a9fcc852eabeee31e58be90b07f74c515ded44e6232fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7814ce73fbe5a6f666a9fcc852eabeee31e58be90b07f74c515ded44e6232fc5->enter($__internal_7814ce73fbe5a6f666a9fcc852eabeee31e58be90b07f74c515ded44e6232fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_96410640c570586be3a97d913fc9d150385a454a537a401f15d459c209e8e6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96410640c570586be3a97d913fc9d150385a454a537a401f15d459c209e8e6b0->enter($__internal_96410640c570586be3a97d913fc9d150385a454a537a401f15d459c209e8e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7814ce73fbe5a6f666a9fcc852eabeee31e58be90b07f74c515ded44e6232fc5->leave($__internal_7814ce73fbe5a6f666a9fcc852eabeee31e58be90b07f74c515ded44e6232fc5_prof);

        
        $__internal_96410640c570586be3a97d913fc9d150385a454a537a401f15d459c209e8e6b0->leave($__internal_96410640c570586be3a97d913fc9d150385a454a537a401f15d459c209e8e6b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
