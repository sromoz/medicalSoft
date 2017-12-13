<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2c6051287dec7240518ff24fd973bb0bbe6429f52ab90508fb4aa3532856899 extends Twig_Template
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
        $__internal_a0be2a6acd1c958d6ffd0056f584e98af450f7ac8267bf64b047545c9107de43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0be2a6acd1c958d6ffd0056f584e98af450f7ac8267bf64b047545c9107de43->enter($__internal_a0be2a6acd1c958d6ffd0056f584e98af450f7ac8267bf64b047545c9107de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7c2b65297349c5107352672fe8bc0ee7e33e267476d5808996dc0bb09bb489a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2b65297349c5107352672fe8bc0ee7e33e267476d5808996dc0bb09bb489a9->enter($__internal_7c2b65297349c5107352672fe8bc0ee7e33e267476d5808996dc0bb09bb489a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a0be2a6acd1c958d6ffd0056f584e98af450f7ac8267bf64b047545c9107de43->leave($__internal_a0be2a6acd1c958d6ffd0056f584e98af450f7ac8267bf64b047545c9107de43_prof);

        
        $__internal_7c2b65297349c5107352672fe8bc0ee7e33e267476d5808996dc0bb09bb489a9->leave($__internal_7c2b65297349c5107352672fe8bc0ee7e33e267476d5808996dc0bb09bb489a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
