<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a3d078fe6a6569732fb9059afe6eaf01595648b526a957ceea6782d30427a05 extends Twig_Template
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
        $__internal_827b3ee445001f911d941c081c8f7856c49943c7aaa3a49de5d48ba95ef8c914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827b3ee445001f911d941c081c8f7856c49943c7aaa3a49de5d48ba95ef8c914->enter($__internal_827b3ee445001f911d941c081c8f7856c49943c7aaa3a49de5d48ba95ef8c914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b6d354975700dd7a3f15db1280a6ad0fa4713ed5271e830b79e606fa2ccbf244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d354975700dd7a3f15db1280a6ad0fa4713ed5271e830b79e606fa2ccbf244->enter($__internal_b6d354975700dd7a3f15db1280a6ad0fa4713ed5271e830b79e606fa2ccbf244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_827b3ee445001f911d941c081c8f7856c49943c7aaa3a49de5d48ba95ef8c914->leave($__internal_827b3ee445001f911d941c081c8f7856c49943c7aaa3a49de5d48ba95ef8c914_prof);

        
        $__internal_b6d354975700dd7a3f15db1280a6ad0fa4713ed5271e830b79e606fa2ccbf244->leave($__internal_b6d354975700dd7a3f15db1280a6ad0fa4713ed5271e830b79e606fa2ccbf244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
