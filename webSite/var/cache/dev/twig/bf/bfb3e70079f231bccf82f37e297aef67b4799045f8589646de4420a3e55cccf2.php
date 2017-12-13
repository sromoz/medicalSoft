<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_745eac718f206eba2feec922aecd9e76a828d1b0a130db2476c58b8b47ac7f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9d68751a1b550c81cf07227b1bd5dc9d40eeaaa6650c3cec75cb9fd2c2dc1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d68751a1b550c81cf07227b1bd5dc9d40eeaaa6650c3cec75cb9fd2c2dc1db->enter($__internal_e9d68751a1b550c81cf07227b1bd5dc9d40eeaaa6650c3cec75cb9fd2c2dc1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_0553fbe00f0bc15f25e1cc107625735fd216cf66b7d5cab30defb54a05c60e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0553fbe00f0bc15f25e1cc107625735fd216cf66b7d5cab30defb54a05c60e21->enter($__internal_0553fbe00f0bc15f25e1cc107625735fd216cf66b7d5cab30defb54a05c60e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9d68751a1b550c81cf07227b1bd5dc9d40eeaaa6650c3cec75cb9fd2c2dc1db->leave($__internal_e9d68751a1b550c81cf07227b1bd5dc9d40eeaaa6650c3cec75cb9fd2c2dc1db_prof);

        
        $__internal_0553fbe00f0bc15f25e1cc107625735fd216cf66b7d5cab30defb54a05c60e21->leave($__internal_0553fbe00f0bc15f25e1cc107625735fd216cf66b7d5cab30defb54a05c60e21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d030e29076127c34976dcfdb33f7c49d4ad6b9ee06e9fcdc065f0765b3f96c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d030e29076127c34976dcfdb33f7c49d4ad6b9ee06e9fcdc065f0765b3f96c6->enter($__internal_9d030e29076127c34976dcfdb33f7c49d4ad6b9ee06e9fcdc065f0765b3f96c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8eae819e6da826a6dabfcd31b59937bd70cfe0228d6eb20b033618f3b482bbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eae819e6da826a6dabfcd31b59937bd70cfe0228d6eb20b033618f3b482bbbb->enter($__internal_8eae819e6da826a6dabfcd31b59937bd70cfe0228d6eb20b033618f3b482bbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_8eae819e6da826a6dabfcd31b59937bd70cfe0228d6eb20b033618f3b482bbbb->leave($__internal_8eae819e6da826a6dabfcd31b59937bd70cfe0228d6eb20b033618f3b482bbbb_prof);

        
        $__internal_9d030e29076127c34976dcfdb33f7c49d4ad6b9ee06e9fcdc065f0765b3f96c6->leave($__internal_9d030e29076127c34976dcfdb33f7c49d4ad6b9ee06e9fcdc065f0765b3f96c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
