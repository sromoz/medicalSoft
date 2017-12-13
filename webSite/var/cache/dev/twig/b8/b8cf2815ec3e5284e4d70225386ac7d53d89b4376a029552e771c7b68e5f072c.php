<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b60c8463566e2be5e09097f3595b0f9e7e853d2c2ecd5693383cf26df9e43075 extends Twig_Template
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
        $__internal_6e8fa30264b2af27dbe0be57143da7e01041e47a9e5fb25ca6dc3d73cef75e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8fa30264b2af27dbe0be57143da7e01041e47a9e5fb25ca6dc3d73cef75e58->enter($__internal_6e8fa30264b2af27dbe0be57143da7e01041e47a9e5fb25ca6dc3d73cef75e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_be109b828ada22143247b81f67df1c9f06169f5919df3377cae0a75e06978406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be109b828ada22143247b81f67df1c9f06169f5919df3377cae0a75e06978406->enter($__internal_be109b828ada22143247b81f67df1c9f06169f5919df3377cae0a75e06978406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6e8fa30264b2af27dbe0be57143da7e01041e47a9e5fb25ca6dc3d73cef75e58->leave($__internal_6e8fa30264b2af27dbe0be57143da7e01041e47a9e5fb25ca6dc3d73cef75e58_prof);

        
        $__internal_be109b828ada22143247b81f67df1c9f06169f5919df3377cae0a75e06978406->leave($__internal_be109b828ada22143247b81f67df1c9f06169f5919df3377cae0a75e06978406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
