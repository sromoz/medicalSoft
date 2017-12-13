<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f8854cd010339daaa43e28044d34c6c45501535d47a9b6200e41bb423057965 extends Twig_Template
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
        $__internal_dcbd072c43e238aa6cf396856a9c9f54ba416a02f2f60a16aa601292d1090f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbd072c43e238aa6cf396856a9c9f54ba416a02f2f60a16aa601292d1090f5c->enter($__internal_dcbd072c43e238aa6cf396856a9c9f54ba416a02f2f60a16aa601292d1090f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cd442265e7ceb8dfcfaa9a83d53eb0d98e73a39c5e44d15f3784c36d211ce1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd442265e7ceb8dfcfaa9a83d53eb0d98e73a39c5e44d15f3784c36d211ce1eb->enter($__internal_cd442265e7ceb8dfcfaa9a83d53eb0d98e73a39c5e44d15f3784c36d211ce1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_dcbd072c43e238aa6cf396856a9c9f54ba416a02f2f60a16aa601292d1090f5c->leave($__internal_dcbd072c43e238aa6cf396856a9c9f54ba416a02f2f60a16aa601292d1090f5c_prof);

        
        $__internal_cd442265e7ceb8dfcfaa9a83d53eb0d98e73a39c5e44d15f3784c36d211ce1eb->leave($__internal_cd442265e7ceb8dfcfaa9a83d53eb0d98e73a39c5e44d15f3784c36d211ce1eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
