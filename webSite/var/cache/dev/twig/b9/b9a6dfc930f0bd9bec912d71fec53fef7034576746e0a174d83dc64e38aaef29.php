<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c96c430f0072b2fcc37956bb389027312cb9f8b4cdc62770bbb42cb023c0b3d2 extends Twig_Template
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
        $__internal_067ae4d58c0382da1653123378c5552ad2a0afc3637870d9097dfc7a220f791d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067ae4d58c0382da1653123378c5552ad2a0afc3637870d9097dfc7a220f791d->enter($__internal_067ae4d58c0382da1653123378c5552ad2a0afc3637870d9097dfc7a220f791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b654621617098af208f21f72feeb284a6956e48695c78f75570a3c67a4243477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b654621617098af208f21f72feeb284a6956e48695c78f75570a3c67a4243477->enter($__internal_b654621617098af208f21f72feeb284a6956e48695c78f75570a3c67a4243477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_067ae4d58c0382da1653123378c5552ad2a0afc3637870d9097dfc7a220f791d->leave($__internal_067ae4d58c0382da1653123378c5552ad2a0afc3637870d9097dfc7a220f791d_prof);

        
        $__internal_b654621617098af208f21f72feeb284a6956e48695c78f75570a3c67a4243477->leave($__internal_b654621617098af208f21f72feeb284a6956e48695c78f75570a3c67a4243477_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
