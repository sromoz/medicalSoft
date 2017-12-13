<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_873ccb81d0e22838e8a940a155c93f251aae807473627044bc864dc70c585e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873ccb81d0e22838e8a940a155c93f251aae807473627044bc864dc70c585e91->enter($__internal_873ccb81d0e22838e8a940a155c93f251aae807473627044bc864dc70c585e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5366892bad7452c4b1ad7a6f6c479a175a1f2add0d04beb156fe326a646405f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5366892bad7452c4b1ad7a6f6c479a175a1f2add0d04beb156fe326a646405f1->enter($__internal_5366892bad7452c4b1ad7a6f6c479a175a1f2add0d04beb156fe326a646405f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
         <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
          <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/aero.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>         
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/pnotify.nonblock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>   
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 26
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                setTimeout(function() {
                    \$(\".content\").fadeOut(1500);
                },3000);
            });
        </script>
         <script type=\"text/javascript\">
                \$(function(){
                new PNotify({
                  title: 'titulo',
                  text: 'birn',
                  type:'success',
                  styling:'bootstrap3'
                });
              });
            </script>
    </head>
    ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "started", array())) {
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "usuario"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                echo "                              
           
         
            
            ";
                // line 56
                echo "           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    ";
        }
        echo "    

    ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "   
        
       
         ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
</html>
";
        
        $__internal_873ccb81d0e22838e8a940a155c93f251aae807473627044bc864dc70c585e91->leave($__internal_873ccb81d0e22838e8a940a155c93f251aae807473627044bc864dc70c585e91_prof);

        
        $__internal_5366892bad7452c4b1ad7a6f6c479a175a1f2add0d04beb156fe326a646405f1->leave($__internal_5366892bad7452c4b1ad7a6f6c479a175a1f2add0d04beb156fe326a646405f1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ac9005db4085d9dec4869a2eed8337b3788e3cd69aa1049a3bd7a24ae034aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac9005db4085d9dec4869a2eed8337b3788e3cd69aa1049a3bd7a24ae034aa4->enter($__internal_9ac9005db4085d9dec4869a2eed8337b3788e3cd69aa1049a3bd7a24ae034aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_510f0721bf5629432298f5e487638d9bd275a1fa3a25611e0cd232eabb27a3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510f0721bf5629432298f5e487638d9bd275a1fa3a25611e0cd232eabb27a3c6->enter($__internal_510f0721bf5629432298f5e487638d9bd275a1fa3a25611e0cd232eabb27a3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MedicalSoft";
        
        $__internal_510f0721bf5629432298f5e487638d9bd275a1fa3a25611e0cd232eabb27a3c6->leave($__internal_510f0721bf5629432298f5e487638d9bd275a1fa3a25611e0cd232eabb27a3c6_prof);

        
        $__internal_9ac9005db4085d9dec4869a2eed8337b3788e3cd69aa1049a3bd7a24ae034aa4->leave($__internal_9ac9005db4085d9dec4869a2eed8337b3788e3cd69aa1049a3bd7a24ae034aa4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_829269160293830631c06fd01eac8299dd852c16cdecfbd3fdd064e03e09d3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829269160293830631c06fd01eac8299dd852c16cdecfbd3fdd064e03e09d3b2->enter($__internal_829269160293830631c06fd01eac8299dd852c16cdecfbd3fdd064e03e09d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbbfe78e27f50ee285e04f55d097decfe75a1481fa509f2c6a8dd90cafe33dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbfe78e27f50ee285e04f55d097decfe75a1481fa509f2c6a8dd90cafe33dc1->enter($__internal_cbbfe78e27f50ee285e04f55d097decfe75a1481fa509f2c6a8dd90cafe33dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbbfe78e27f50ee285e04f55d097decfe75a1481fa509f2c6a8dd90cafe33dc1->leave($__internal_cbbfe78e27f50ee285e04f55d097decfe75a1481fa509f2c6a8dd90cafe33dc1_prof);

        
        $__internal_829269160293830631c06fd01eac8299dd852c16cdecfbd3fdd064e03e09d3b2->leave($__internal_829269160293830631c06fd01eac8299dd852c16cdecfbd3fdd064e03e09d3b2_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_8dcb075a51d31700e68420aba457d09ce17d77ea1ac40baf7332322c51af0fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcb075a51d31700e68420aba457d09ce17d77ea1ac40baf7332322c51af0fa8->enter($__internal_8dcb075a51d31700e68420aba457d09ce17d77ea1ac40baf7332322c51af0fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4b13d8b66da6a7ad280bea5b7fac44658f52c45232f1949027e31cd880c91fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b13d8b66da6a7ad280bea5b7fac44658f52c45232f1949027e31cd880c91fd1->enter($__internal_4b13d8b66da6a7ad280bea5b7fac44658f52c45232f1949027e31cd880c91fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "         
        ";
        
        $__internal_4b13d8b66da6a7ad280bea5b7fac44658f52c45232f1949027e31cd880c91fd1->leave($__internal_4b13d8b66da6a7ad280bea5b7fac44658f52c45232f1949027e31cd880c91fd1_prof);

        
        $__internal_8dcb075a51d31700e68420aba457d09ce17d77ea1ac40baf7332322c51af0fa8->leave($__internal_8dcb075a51d31700e68420aba457d09ce17d77ea1ac40baf7332322c51af0fa8_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_201a9424bada68bdbc0b6663f848d39a3d864b1d0011dab40eecd0a178632a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201a9424bada68bdbc0b6663f848d39a3d864b1d0011dab40eecd0a178632a69->enter($__internal_201a9424bada68bdbc0b6663f848d39a3d864b1d0011dab40eecd0a178632a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad3f82d3fda5a07e719f4a609e7b1e68c442ff47e4284c902d364edee0050278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3f82d3fda5a07e719f4a609e7b1e68c442ff47e4284c902d364edee0050278->enter($__internal_ad3f82d3fda5a07e719f4a609e7b1e68c442ff47e4284c902d364edee0050278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "         
         ";
        
        $__internal_ad3f82d3fda5a07e719f4a609e7b1e68c442ff47e4284c902d364edee0050278->leave($__internal_ad3f82d3fda5a07e719f4a609e7b1e68c442ff47e4284c902d364edee0050278_prof);

        
        $__internal_201a9424bada68bdbc0b6663f848d39a3d864b1d0011dab40eecd0a178632a69->leave($__internal_201a9424bada68bdbc0b6663f848d39a3d864b1d0011dab40eecd0a178632a69_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 65,  216 => 64,  205 => 60,  196 => 59,  179 => 11,  161 => 10,  149 => 67,  147 => 64,  142 => 61,  140 => 59,  134 => 57,  128 => 56,  118 => 45,  116 => 44,  96 => 26,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  51 => 13,  46 => 12,  44 => 11,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
         <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}MedicalSoft{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{asset('public/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
          <link href=\"{{asset('public/css/nprogress.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{asset('public/css/animate.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{asset('public/css/custom.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{asset('public/css/aero.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{asset('public/css/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>         
        <link href=\"{{asset('public/css/daterangepicker.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"{{asset('public/css/pnotify.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"{{asset('public/css/pnotify.buttons.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"{{asset('public/css/pnotify.nonblock.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>   
        <script src=\"{{asset('public/js/jquery.js')}}\"></script>
        {#<script type=\"text/javascript\" src=\"../jquery.js\"></script>#}
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                setTimeout(function() {
                    \$(\".content\").fadeOut(1500);
                },3000);
            });
        </script>
         <script type=\"text/javascript\">
                \$(function(){
                new PNotify({
                  title: 'titulo',
                  text: 'birn',
                  type:'success',
                  styling:'bootstrap3'
                });
              });
            </script>
    </head>
    {% if app.session.started %}
        {% for flashMessage in app.session.flashbag.get('usuario') %}                              
           
         
            
            {#<div class=\"alert alert-{{ flashMessage.alerta }} alert-dismissible\" role=\"alert\">
                <h4 class=\"alert-heading\">Registro de Usuario!</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
                </button>
                    </span><strong>{{ flashMessage.titulo }}</strong> {{ flashMessage.mensaje}}
            </div>#}
           {% endfor %}
    {% endif %}    

    {% block content %}
         
        {% endblock %}   
        
       
         {% block javascripts %}
         
         {% endblock %}

</html>
", "::base.html.twig", "C:\\wamp64\\www\\webSite\\app/Resources\\views/base.html.twig");
    }
}
