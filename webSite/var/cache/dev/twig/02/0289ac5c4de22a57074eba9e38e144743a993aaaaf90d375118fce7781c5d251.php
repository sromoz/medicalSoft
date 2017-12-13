<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da3d9b132af2a40e907a65e172b4f955099b807077400b069492c335ce2f3d3d extends Twig_Template
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
        $__internal_0448bc83098e445bf89c02a6679d6f869da814d622cfb395ad4eafba0a0f13e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0448bc83098e445bf89c02a6679d6f869da814d622cfb395ad4eafba0a0f13e7->enter($__internal_0448bc83098e445bf89c02a6679d6f869da814d622cfb395ad4eafba0a0f13e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_77797e3e227e3126c1bde875de038a2c1f0eb0aeb5d7c927315b8fa464342721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77797e3e227e3126c1bde875de038a2c1f0eb0aeb5d7c927315b8fa464342721->enter($__internal_77797e3e227e3126c1bde875de038a2c1f0eb0aeb5d7c927315b8fa464342721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0448bc83098e445bf89c02a6679d6f869da814d622cfb395ad4eafba0a0f13e7->leave($__internal_0448bc83098e445bf89c02a6679d6f869da814d622cfb395ad4eafba0a0f13e7_prof);

        
        $__internal_77797e3e227e3126c1bde875de038a2c1f0eb0aeb5d7c927315b8fa464342721->leave($__internal_77797e3e227e3126c1bde875de038a2c1f0eb0aeb5d7c927315b8fa464342721_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
