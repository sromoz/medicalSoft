<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8eaa0e9ce7636424c624d1e3524ae94387599e201f95a098025a82cbca056ec1 extends Twig_Template
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
        $__internal_799d2725f1a036affb4803971002f23bda34ba3edf9f61fbe835a83d532bd84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799d2725f1a036affb4803971002f23bda34ba3edf9f61fbe835a83d532bd84c->enter($__internal_799d2725f1a036affb4803971002f23bda34ba3edf9f61fbe835a83d532bd84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_54374a331d6bd1232b9c61096d48c8ef5dc764db30f09e697e5fbdf11a7c5b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54374a331d6bd1232b9c61096d48c8ef5dc764db30f09e697e5fbdf11a7c5b41->enter($__internal_54374a331d6bd1232b9c61096d48c8ef5dc764db30f09e697e5fbdf11a7c5b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_799d2725f1a036affb4803971002f23bda34ba3edf9f61fbe835a83d532bd84c->leave($__internal_799d2725f1a036affb4803971002f23bda34ba3edf9f61fbe835a83d532bd84c_prof);

        
        $__internal_54374a331d6bd1232b9c61096d48c8ef5dc764db30f09e697e5fbdf11a7c5b41->leave($__internal_54374a331d6bd1232b9c61096d48c8ef5dc764db30f09e697e5fbdf11a7c5b41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
