<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ec4593bfa186f1b70277da279fdda44bdd8cb917c21e7dd4151f9c252561a1a2 extends Twig_Template
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
        $__internal_b747964634bd318e518578b5cd6d76b9b98925c643539655aa66d6dc33b26e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b747964634bd318e518578b5cd6d76b9b98925c643539655aa66d6dc33b26e8e->enter($__internal_b747964634bd318e518578b5cd6d76b9b98925c643539655aa66d6dc33b26e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_452e3d28792aa04f7ea6cb4ec06fa1999992b8fb18930232a6bc5a4cfddcb748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452e3d28792aa04f7ea6cb4ec06fa1999992b8fb18930232a6bc5a4cfddcb748->enter($__internal_452e3d28792aa04f7ea6cb4ec06fa1999992b8fb18930232a6bc5a4cfddcb748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b747964634bd318e518578b5cd6d76b9b98925c643539655aa66d6dc33b26e8e->leave($__internal_b747964634bd318e518578b5cd6d76b9b98925c643539655aa66d6dc33b26e8e_prof);

        
        $__internal_452e3d28792aa04f7ea6cb4ec06fa1999992b8fb18930232a6bc5a4cfddcb748->leave($__internal_452e3d28792aa04f7ea6cb4ec06fa1999992b8fb18930232a6bc5a4cfddcb748_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
