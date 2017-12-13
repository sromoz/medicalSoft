<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a91a3b4322fa2e54aa441d59497315d55bbdf3dda35f906aa3ab94fbb1781251 extends Twig_Template
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
        $__internal_3d864e1c9e83893da4e48c34bb76d1e285545de71ec9ce130b1a42be41929eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d864e1c9e83893da4e48c34bb76d1e285545de71ec9ce130b1a42be41929eef->enter($__internal_3d864e1c9e83893da4e48c34bb76d1e285545de71ec9ce130b1a42be41929eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e526402bfbec8087414869582f1dd2a17c248a11b82eb2cad0fb9b5260a3c5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e526402bfbec8087414869582f1dd2a17c248a11b82eb2cad0fb9b5260a3c5ec->enter($__internal_e526402bfbec8087414869582f1dd2a17c248a11b82eb2cad0fb9b5260a3c5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3d864e1c9e83893da4e48c34bb76d1e285545de71ec9ce130b1a42be41929eef->leave($__internal_3d864e1c9e83893da4e48c34bb76d1e285545de71ec9ce130b1a42be41929eef_prof);

        
        $__internal_e526402bfbec8087414869582f1dd2a17c248a11b82eb2cad0fb9b5260a3c5ec->leave($__internal_e526402bfbec8087414869582f1dd2a17c248a11b82eb2cad0fb9b5260a3c5ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
