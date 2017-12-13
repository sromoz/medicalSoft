<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9fb4ba5cf8647b4985631d770b4d7b78bcebfd0d668622a3902f1e5263298be extends Twig_Template
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
        $__internal_977a63ed83c0f3ca2e0f030b070c0706bfd1980222d33a13c68297ebcb811103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977a63ed83c0f3ca2e0f030b070c0706bfd1980222d33a13c68297ebcb811103->enter($__internal_977a63ed83c0f3ca2e0f030b070c0706bfd1980222d33a13c68297ebcb811103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fef89dbb2fb4ab3de62047c4a3961cc34c53e6299870401f04dd7f3dc35a1aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef89dbb2fb4ab3de62047c4a3961cc34c53e6299870401f04dd7f3dc35a1aec->enter($__internal_fef89dbb2fb4ab3de62047c4a3961cc34c53e6299870401f04dd7f3dc35a1aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_977a63ed83c0f3ca2e0f030b070c0706bfd1980222d33a13c68297ebcb811103->leave($__internal_977a63ed83c0f3ca2e0f030b070c0706bfd1980222d33a13c68297ebcb811103_prof);

        
        $__internal_fef89dbb2fb4ab3de62047c4a3961cc34c53e6299870401f04dd7f3dc35a1aec->leave($__internal_fef89dbb2fb4ab3de62047c4a3961cc34c53e6299870401f04dd7f3dc35a1aec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
