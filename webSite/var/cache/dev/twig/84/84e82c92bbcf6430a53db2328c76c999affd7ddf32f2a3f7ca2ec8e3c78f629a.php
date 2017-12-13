<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_50b2f5cb3123d7a774907482aaf5174e0ae5616512281d42e34bb951c80647b8 extends Twig_Template
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
        $__internal_da306bc4c0be20481c1c187232732d4a6d45e1c67d2154eaa4b42a9bd4cd0156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da306bc4c0be20481c1c187232732d4a6d45e1c67d2154eaa4b42a9bd4cd0156->enter($__internal_da306bc4c0be20481c1c187232732d4a6d45e1c67d2154eaa4b42a9bd4cd0156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e87b822053f9fc48caecc7b5234e07ad46d6501129247dbede563cb238e36625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87b822053f9fc48caecc7b5234e07ad46d6501129247dbede563cb238e36625->enter($__internal_e87b822053f9fc48caecc7b5234e07ad46d6501129247dbede563cb238e36625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_da306bc4c0be20481c1c187232732d4a6d45e1c67d2154eaa4b42a9bd4cd0156->leave($__internal_da306bc4c0be20481c1c187232732d4a6d45e1c67d2154eaa4b42a9bd4cd0156_prof);

        
        $__internal_e87b822053f9fc48caecc7b5234e07ad46d6501129247dbede563cb238e36625->leave($__internal_e87b822053f9fc48caecc7b5234e07ad46d6501129247dbede563cb238e36625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
