<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d44f4360e3e9feaa1cb73971eb6fabaa095559369b7e994fd34bbc4f47465d7 extends Twig_Template
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
        $__internal_55214f77a8714b58695e87ce5dc6a2f924c1d5b824057e4559bd8e7e00d01494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55214f77a8714b58695e87ce5dc6a2f924c1d5b824057e4559bd8e7e00d01494->enter($__internal_55214f77a8714b58695e87ce5dc6a2f924c1d5b824057e4559bd8e7e00d01494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3febd6957842ffd8a35eb005cd6e26274109f256f9545f257f54e848efb2c1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3febd6957842ffd8a35eb005cd6e26274109f256f9545f257f54e848efb2c1e7->enter($__internal_3febd6957842ffd8a35eb005cd6e26274109f256f9545f257f54e848efb2c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_55214f77a8714b58695e87ce5dc6a2f924c1d5b824057e4559bd8e7e00d01494->leave($__internal_55214f77a8714b58695e87ce5dc6a2f924c1d5b824057e4559bd8e7e00d01494_prof);

        
        $__internal_3febd6957842ffd8a35eb005cd6e26274109f256f9545f257f54e848efb2c1e7->leave($__internal_3febd6957842ffd8a35eb005cd6e26274109f256f9545f257f54e848efb2c1e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
