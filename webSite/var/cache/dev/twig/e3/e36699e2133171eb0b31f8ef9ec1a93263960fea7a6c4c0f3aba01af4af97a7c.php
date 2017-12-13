<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_f544015c7ef7bc0b921879e46c9c8eebf2656fbac4a09d4a8f2c9ef5262aa9ee extends Twig_Template
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
        $__internal_2326148983b858fc5142282c5ce379d1539690a21759b6c58ac25005fb97d176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2326148983b858fc5142282c5ce379d1539690a21759b6c58ac25005fb97d176->enter($__internal_2326148983b858fc5142282c5ce379d1539690a21759b6c58ac25005fb97d176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_da02d31063eaf71be9e2367a6a6d4e3ecd7ef52484a94cef314ba9ec3df837ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da02d31063eaf71be9e2367a6a6d4e3ecd7ef52484a94cef314ba9ec3df837ac->enter($__internal_da02d31063eaf71be9e2367a6a6d4e3ecd7ef52484a94cef314ba9ec3df837ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div class=\"alert alert-danger alert-dismissible content\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Error!</strong> ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
";
        }
        // line 8
        echo " <div>
     <body class=\"login\">
  <a class=\"hiddenanchor\" id=\"signup\"></a> 
  <a class=\"hiddenanchor\" id=\"signin\"></a>   
   <div class=\"login_wrapper\">    
    <div class=\"animate form login_form\">  
        <section class=\"login_content\">   
        <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <h1>Login Form</h1>
                ";
        // line 17
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 18
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 20
        echo "                
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required=\"required\" />
                                
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\" required=\"required\" />

            ";
        // line 27
        echo "
            <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            <a class=\"reset_pass\" href=\"#\">Olvidó su contraseña?</a>
            <div class=\"clearfix\"></div>
            <div class=\"separator\">
                <div class=\"clearfix\"></div>   
             <br />       
             <div> 
                <h1><i class=\"fa fa-medkit\"></i> MedicalSoft!</h1> 
                 <p>©2017 Todos los derechos reservados. MedicalSoft! </p>
             </div>          
            </div>
    </form>
    </section>
    </div>
   </div>
 </body>

</div>";
        
        $__internal_2326148983b858fc5142282c5ce379d1539690a21759b6c58ac25005fb97d176->leave($__internal_2326148983b858fc5142282c5ce379d1539690a21759b6c58ac25005fb97d176_prof);

        
        $__internal_da02d31063eaf71be9e2367a6a6d4e3ecd7ef52484a94cef314ba9ec3df837ac->leave($__internal_da02d31063eaf71be9e2367a6a6d4e3ecd7ef52484a94cef314ba9ec3df837ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  64 => 21,  61 => 20,  55 => 18,  53 => 17,  48 => 15,  39 => 8,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div class=\"alert alert-danger alert-dismissible content\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Error!</strong> {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
{% endif %}
 <div>
     <body class=\"login\">
  <a class=\"hiddenanchor\" id=\"signup\"></a> 
  <a class=\"hiddenanchor\" id=\"signin\"></a>   
   <div class=\"login_wrapper\">    
    <div class=\"animate form login_form\">  
        <section class=\"login_content\">   
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <h1>Login Form</h1>
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Usuario\" required=\"required\" />
                                
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\" required=\"required\" />

            {#<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>#}

            <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
            <a class=\"reset_pass\" href=\"#\">Olvidó su contraseña?</a>
            <div class=\"clearfix\"></div>
            <div class=\"separator\">
                <div class=\"clearfix\"></div>   
             <br />       
             <div> 
                <h1><i class=\"fa fa-medkit\"></i> MedicalSoft!</h1> 
                 <p>©2017 Todos los derechos reservados. MedicalSoft! </p>
             </div>          
            </div>
    </form>
    </section>
    </div>
   </div>
 </body>

</div>", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
