<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf043cdc1f86180e4b139ce9ecd758283ee7565b0ba4e5ddd009afa4c62823f7 extends Twig_Template
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
        $__internal_32ebcfc08f62ba0e25a8fd66672368553c238d173bfee4d367b9df4bdcea8d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ebcfc08f62ba0e25a8fd66672368553c238d173bfee4d367b9df4bdcea8d5e->enter($__internal_32ebcfc08f62ba0e25a8fd66672368553c238d173bfee4d367b9df4bdcea8d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_49aff2371929a697fb37f144b7b810f6a9b7a006c703234eba19425e2455f818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49aff2371929a697fb37f144b7b810f6a9b7a006c703234eba19425e2455f818->enter($__internal_49aff2371929a697fb37f144b7b810f6a9b7a006c703234eba19425e2455f818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_32ebcfc08f62ba0e25a8fd66672368553c238d173bfee4d367b9df4bdcea8d5e->leave($__internal_32ebcfc08f62ba0e25a8fd66672368553c238d173bfee4d367b9df4bdcea8d5e_prof);

        
        $__internal_49aff2371929a697fb37f144b7b810f6a9b7a006c703234eba19425e2455f818->leave($__internal_49aff2371929a697fb37f144b7b810f6a9b7a006c703234eba19425e2455f818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
