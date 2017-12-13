<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_510123d94fcc9b6a1df7f5ee827b305f9813a3d8f2a6a7fc852d89010d94619a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("inicio.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 2);
        $this->blocks = array(
            'content1' => array($this, 'block_content1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3290a3887f70c36455037322d4863a0db0da83213bd97fc031eb4dc68905d691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3290a3887f70c36455037322d4863a0db0da83213bd97fc031eb4dc68905d691->enter($__internal_3290a3887f70c36455037322d4863a0db0da83213bd97fc031eb4dc68905d691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_ae9ab4f9380ee68de5f5b76e183c67981676844e2e5bdd0411e4f05bec43b71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9ab4f9380ee68de5f5b76e183c67981676844e2e5bdd0411e4f05bec43b71e->enter($__internal_ae9ab4f9380ee68de5f5b76e183c67981676844e2e5bdd0411e4f05bec43b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3290a3887f70c36455037322d4863a0db0da83213bd97fc031eb4dc68905d691->leave($__internal_3290a3887f70c36455037322d4863a0db0da83213bd97fc031eb4dc68905d691_prof);

        
        $__internal_ae9ab4f9380ee68de5f5b76e183c67981676844e2e5bdd0411e4f05bec43b71e->leave($__internal_ae9ab4f9380ee68de5f5b76e183c67981676844e2e5bdd0411e4f05bec43b71e_prof);

    }

    // line 3
    public function block_content1($context, array $blocks = array())
    {
        $__internal_fde714f92ac7b32478f71c84f37c614418f859cc95d5e9edb78337ce6ae15149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde714f92ac7b32478f71c84f37c614418f859cc95d5e9edb78337ce6ae15149->enter($__internal_fde714f92ac7b32478f71c84f37c614418f859cc95d5e9edb78337ce6ae15149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        $__internal_8d4f72bb13f0f62f3ef9e4371dfaf14116e9a85f9b8218d7712fe6103ff493ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4f72bb13f0f62f3ef9e4371dfaf14116e9a85f9b8218d7712fe6103ff493ee->enter($__internal_8d4f72bb13f0f62f3ef9e4371dfaf14116e9a85f9b8218d7712fe6103ff493ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 4
        echo "          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Registro de Usuarios</h3>
              </div>              
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <ul class=\"nav navbar-right panel_toolbox\">

                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal form-label-left")));
        echo "
                       ";
        // line 29
        echo "                       ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                       <div class=\"form-group";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                           ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12"), "label" => "Nombres"));
        echo "
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                                
                                ";
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 35
            echo "                                <span class=\"help-block\">
                                    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 39
        echo "                           </div>                       
                       </div>   
                       
                       <div class=\"form-group";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                           ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12"), "label" => "Apellidos"));
        echo "
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                                
                                ";
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 47
            echo "                                <span class=\"help-block\">
                                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 51
        echo "                           </div>                       
                       </div> 
                       
                       
                       <div class=\"form-group";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                           ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12")));
        echo "
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                                
                                ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 60
            echo "                                <span class=\"help-block\">
                                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 64
        echo "                           </div>                       
                       </div>   
                           
                       <div class=\"form-group";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                           ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12")));
        echo "
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                ";
        // line 71
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 72
            echo "                                <span class=\"help-block\">
                                    ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 76
        echo "                           </div>                       
                       </div>
                           
                           <div class=\"form-group";
        // line 79
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array(), "any", false, true), "first", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12 required")));
        echo "
                               <div class=\"col-md-6 col-sm-6 col-xs-12\">                                 
                                 ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                 ";
        // line 83
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array(), "any", false, true), "first", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 84
            echo "                                <span class=\"help-block\">
                                    ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 88
        echo "                            </div>                       
                       </div>
                           <div class=\"form-group";
        // line 90
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array(), "any", false, true), "second", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                             ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12")));
        echo "
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                ";
        // line 94
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array(), "any", false, true), "second", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 95
            echo "                                    <span class=\"help-block\">
                                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                    </span>
                                ";
        }
        // line 99
        echo "                           </div>                       
                       </div>
                           
                       <div class=\"form-group";
        // line 102
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "roles", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
                           ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label', array("label_attr" => array("class" => "control-label col-md-3 col-sm-3 col-xs-12"), "label" => "Tipo Usuario"));
        echo "
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                                
                                ";
        // line 106
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "roles", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 107
            echo "                                <span class=\"help-block\">
                                    ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 111
        echo "                           </div>                       
                       </div>
                           
                    <div class=\"ln_solid\"></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>       
                    ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                  </div>
                </div>


              </div>
            </div>

            
            </div>

            
       ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          
";
        
        $__internal_8d4f72bb13f0f62f3ef9e4371dfaf14116e9a85f9b8218d7712fe6103ff493ee->leave($__internal_8d4f72bb13f0f62f3ef9e4371dfaf14116e9a85f9b8218d7712fe6103ff493ee_prof);

        
        $__internal_fde714f92ac7b32478f71c84f37c614418f859cc95d5e9edb78337ce6ae15149->leave($__internal_fde714f92ac7b32478f71c84f37c614418f859cc95d5e9edb78337ce6ae15149_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 130,  307 => 118,  302 => 116,  295 => 111,  289 => 108,  286 => 107,  284 => 106,  280 => 105,  275 => 103,  269 => 102,  264 => 99,  258 => 96,  255 => 95,  253 => 94,  249 => 93,  244 => 91,  238 => 90,  234 => 88,  228 => 85,  225 => 84,  223 => 83,  219 => 82,  214 => 80,  208 => 79,  203 => 76,  197 => 73,  194 => 72,  192 => 71,  188 => 70,  183 => 68,  177 => 67,  172 => 64,  166 => 61,  163 => 60,  161 => 59,  157 => 58,  152 => 56,  146 => 55,  140 => 51,  134 => 48,  131 => 47,  129 => 46,  125 => 45,  120 => 43,  114 => 42,  109 => 39,  103 => 36,  100 => 35,  98 => 34,  94 => 33,  89 => 31,  83 => 30,  78 => 29,  74 => 27,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends \"inicio.html.twig\" %}
{% block content1 %}
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Registro de Usuarios</h3>
              </div>              
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <ul class=\"nav navbar-right panel_toolbox\">

                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <br />
                    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal form-label-left'}}) }}
                       {# {{ form_widget(form) }}#}
                       {{ form_errors(form) }}
                       <div class=\"form-group{% if form.first_name.vars.errors[0].message is defined %} has-error{% endif %}\">
                           {{ form_label(form.first_name , \"Nombres\", {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12'}}) }}
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                {{form_widget(form.first_name,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}                                
                                {% if form.first_name.vars.errors[0].message is defined %}
                                <span class=\"help-block\">
                                    {{ form.first_name.vars.errors[0].message }}
                                </span>
                                {% endif %}
                           </div>                       
                       </div>   
                       
                       <div class=\"form-group{% if form.last_name.vars.errors[0].message is defined %} has-error{% endif %}\">
                           {{ form_label(form.last_name , \"Apellidos\", {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12'}}) }}
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                {{form_widget(form.last_name,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}                                
                                {% if form.last_name.vars.errors[0].message is defined %}
                                <span class=\"help-block\">
                                    {{ form.last_name.vars.errors[0].message }}
                                </span>
                                {% endif %}
                           </div>                       
                       </div> 
                       
                       
                       <div class=\"form-group{% if form.email.vars.errors[0].message is defined %} has-error{% endif %}\">
                           {{ form_label(form.email, null, {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12'}}) }}
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                {{form_widget(form.email,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}                                
                                {% if form.email.vars.errors[0].message is defined %}
                                <span class=\"help-block\">
                                    {{ form.email.vars.errors[0].message }}
                                </span>
                                {% endif %}
                           </div>                       
                       </div>   
                           
                       <div class=\"form-group{% if form.username.vars.errors[0].message is defined %} has-error{% endif %}\">
                           {{ form_label(form.username, null, {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12'}}) }}
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                {{form_widget(form.username,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}
                                {% if form.username.vars.errors[0].message is defined %}
                                <span class=\"help-block\">
                                    {{ form.username.vars.errors[0].message }}
                                </span>
                                {% endif %}
                           </div>                       
                       </div>
                           
                           <div class=\"form-group{% if form.plainPassword.first.vars.errors[0].message is defined %} has-error{% endif %}\">
                                {{ form_label(form.plainPassword.first, null, {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12 required'}}) }}
                               <div class=\"col-md-6 col-sm-6 col-xs-12\">                                 
                                 {{form_widget(form.plainPassword.first,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}
                                 {% if form.plainPassword.first.vars.errors[0].message is defined %}
                                <span class=\"help-block\">
                                    {{ form.plainPassword.first.vars.errors[0].message }}
                                </span>
                                {% endif %}
                            </div>                       
                       </div>
                           <div class=\"form-group{% if form.plainPassword.second.vars.errors[0].message is defined %} has-error{% endif %}\">
                             {{ form_label(form.plainPassword.second, null, {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12'}}) }}
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                {{form_widget(form.plainPassword.second,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}
                                {% if form.plainPassword.second.vars.errors[0].message is defined %}
                                    <span class=\"help-block\">
                                        {{ form.plainPassword.second.vars.errors[0].message }}
                                    </span>
                                {% endif %}
                           </div>                       
                       </div>
                           
                       <div class=\"form-group{% if form.roles.vars.errors[0].message is defined %} has-error{% endif %}\">
                           {{ form_label(form.roles, \"Tipo Usuario\", {'label_attr': {'class': 'control-label col-md-3 col-sm-3 col-xs-12'}}) }}
                           <div class=\"col-md-6 col-sm-6 col-xs-12\">                                
                                {{form_widget(form.roles,{'attr':{'class':'form-control col-md-7 col-xs-12'}})}}                                
                                {% if form.roles.vars.errors[0].message is defined %}
                                <span class=\"help-block\">
                                    {{ form.roles.vars.errors[0].message }}
                                </span>
                                {% endif %}
                           </div>                       
                       </div>
                           
                    <div class=\"ln_solid\"></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                        <input class=\"btn btn-success\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                    </div>       
                    {{ form_end(form) }}
                  </div>
                </div>


              </div>
            </div>

            
            </div>

            
       {{ form_end(form) }}
          
{% endblock %}       

            
            

            
            







    

", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
