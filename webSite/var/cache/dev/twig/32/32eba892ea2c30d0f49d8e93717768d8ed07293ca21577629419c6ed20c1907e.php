<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9ecd932e5d724ac01bd34c6c7859d2c76df6788246a7764cb84aec5455501f11 extends Twig_Template
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
        $__internal_6f5116f4340215d8865598aff3af5f13d4c7a4153b9dafec533d0bc76c7c49e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5116f4340215d8865598aff3af5f13d4c7a4153b9dafec533d0bc76c7c49e4->enter($__internal_6f5116f4340215d8865598aff3af5f13d4c7a4153b9dafec533d0bc76c7c49e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_762a4c4f73fe64c9a15ff8cbe0a9f3bf6581838594c9d8a287cc557c8fe1a2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762a4c4f73fe64c9a15ff8cbe0a9f3bf6581838594c9d8a287cc557c8fe1a2d7->enter($__internal_762a4c4f73fe64c9a15ff8cbe0a9f3bf6581838594c9d8a287cc557c8fe1a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6f5116f4340215d8865598aff3af5f13d4c7a4153b9dafec533d0bc76c7c49e4->leave($__internal_6f5116f4340215d8865598aff3af5f13d4c7a4153b9dafec533d0bc76c7c49e4_prof);

        
        $__internal_762a4c4f73fe64c9a15ff8cbe0a9f3bf6581838594c9d8a287cc557c8fe1a2d7->leave($__internal_762a4c4f73fe64c9a15ff8cbe0a9f3bf6581838594c9d8a287cc557c8fe1a2d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
