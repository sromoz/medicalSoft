<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_992cf42486638ab58da0083167ec3d46c3d3a34a319d57af5d058ff8fb5091fa extends Twig_Template
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
        $__internal_50fe5a34051bbc229345bbe299f9ecc3bf018b958e632a81cb570b0d3a154299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fe5a34051bbc229345bbe299f9ecc3bf018b958e632a81cb570b0d3a154299->enter($__internal_50fe5a34051bbc229345bbe299f9ecc3bf018b958e632a81cb570b0d3a154299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_94adfa688b2ba1fba3e56528822fd726394e7b97a5ea9a1d7bebfa5d3ea801e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94adfa688b2ba1fba3e56528822fd726394e7b97a5ea9a1d7bebfa5d3ea801e5->enter($__internal_94adfa688b2ba1fba3e56528822fd726394e7b97a5ea9a1d7bebfa5d3ea801e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_50fe5a34051bbc229345bbe299f9ecc3bf018b958e632a81cb570b0d3a154299->leave($__internal_50fe5a34051bbc229345bbe299f9ecc3bf018b958e632a81cb570b0d3a154299_prof);

        
        $__internal_94adfa688b2ba1fba3e56528822fd726394e7b97a5ea9a1d7bebfa5d3ea801e5->leave($__internal_94adfa688b2ba1fba3e56528822fd726394e7b97a5ea9a1d7bebfa5d3ea801e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
