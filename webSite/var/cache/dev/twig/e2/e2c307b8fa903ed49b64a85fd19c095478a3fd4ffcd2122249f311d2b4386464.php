<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4bb7a418deb75e4d57cbdc911417b03a3a155027b92ffac152ba20e558ae2b8f extends Twig_Template
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
        $__internal_5cf89b8bfbe8c181c932d0001c4c60476e9a4d08016e3603add82a4dcd08f06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf89b8bfbe8c181c932d0001c4c60476e9a4d08016e3603add82a4dcd08f06e->enter($__internal_5cf89b8bfbe8c181c932d0001c4c60476e9a4d08016e3603add82a4dcd08f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bb64ae86af7d792d83c7dc0715262449fea9867c624a7c52d38a1da6eca6d1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb64ae86af7d792d83c7dc0715262449fea9867c624a7c52d38a1da6eca6d1b2->enter($__internal_bb64ae86af7d792d83c7dc0715262449fea9867c624a7c52d38a1da6eca6d1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5cf89b8bfbe8c181c932d0001c4c60476e9a4d08016e3603add82a4dcd08f06e->leave($__internal_5cf89b8bfbe8c181c932d0001c4c60476e9a4d08016e3603add82a4dcd08f06e_prof);

        
        $__internal_bb64ae86af7d792d83c7dc0715262449fea9867c624a7c52d38a1da6eca6d1b2->leave($__internal_bb64ae86af7d792d83c7dc0715262449fea9867c624a7c52d38a1da6eca6d1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
