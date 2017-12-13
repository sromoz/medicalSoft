<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_ab7862f636781e1d896801b2d9693df288c1e390d13acc0511155f4ad5d90ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7862f636781e1d896801b2d9693df288c1e390d13acc0511155f4ad5d90ce5->enter($__internal_ab7862f636781e1d896801b2d9693df288c1e390d13acc0511155f4ad5d90ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e14727b8e67a4da89b0263d47950487da15827c51a1e933ddf1a07f4aa05f539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14727b8e67a4da89b0263d47950487da15827c51a1e933ddf1a07f4aa05f539->enter($__internal_e14727b8e67a4da89b0263d47950487da15827c51a1e933ddf1a07f4aa05f539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
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
        ";
        // line 15
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/aero.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>         
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>   
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/pnotify.nonblock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                setTimeout(function() {
                    \$(\".content\").fadeOut(1500);
                },3000);
            });
        </script>
         
    </head>
    ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "started", array())) {
            // line 37
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "usuario"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                echo "                              
           
         <script type=\"text/javascript\">
            \$(document).ready(function(){
            new PNotify({
            type: 'success',            
            title: '";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["flashMessage"], "titulo", array()), "html", null, true);
                echo "',
            text: '";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["flashMessage"], "mensaje", array()), "html", null, true);
                echo "',
            styling:'bootstrap3'            
    });
});
</script>
            
           
            ";
                // line 58
                echo "           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "   
        
       
         ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
</html>
";
        
        $__internal_ab7862f636781e1d896801b2d9693df288c1e390d13acc0511155f4ad5d90ce5->leave($__internal_ab7862f636781e1d896801b2d9693df288c1e390d13acc0511155f4ad5d90ce5_prof);

        
        $__internal_e14727b8e67a4da89b0263d47950487da15827c51a1e933ddf1a07f4aa05f539->leave($__internal_e14727b8e67a4da89b0263d47950487da15827c51a1e933ddf1a07f4aa05f539_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_915e688ad339fd18223753362af02d119c43a4b2a96770f5670812348891a409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915e688ad339fd18223753362af02d119c43a4b2a96770f5670812348891a409->enter($__internal_915e688ad339fd18223753362af02d119c43a4b2a96770f5670812348891a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d85b2690be02144161e99fe121792747d305b93066285cf411b4d48a4d58eb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85b2690be02144161e99fe121792747d305b93066285cf411b4d48a4d58eb3b->enter($__internal_d85b2690be02144161e99fe121792747d305b93066285cf411b4d48a4d58eb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MedicalSoft";
        
        $__internal_d85b2690be02144161e99fe121792747d305b93066285cf411b4d48a4d58eb3b->leave($__internal_d85b2690be02144161e99fe121792747d305b93066285cf411b4d48a4d58eb3b_prof);

        
        $__internal_915e688ad339fd18223753362af02d119c43a4b2a96770f5670812348891a409->leave($__internal_915e688ad339fd18223753362af02d119c43a4b2a96770f5670812348891a409_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc8daf74b420dd0d4b5a4473457113888a32ae0ed76b2179e99c5c304078f04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8daf74b420dd0d4b5a4473457113888a32ae0ed76b2179e99c5c304078f04f->enter($__internal_cc8daf74b420dd0d4b5a4473457113888a32ae0ed76b2179e99c5c304078f04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_debbfd054bca3404145f8d583ad88fa05fff932944eaed8c1f57eff2c428743e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debbfd054bca3404145f8d583ad88fa05fff932944eaed8c1f57eff2c428743e->enter($__internal_debbfd054bca3404145f8d583ad88fa05fff932944eaed8c1f57eff2c428743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_debbfd054bca3404145f8d583ad88fa05fff932944eaed8c1f57eff2c428743e->leave($__internal_debbfd054bca3404145f8d583ad88fa05fff932944eaed8c1f57eff2c428743e_prof);

        
        $__internal_cc8daf74b420dd0d4b5a4473457113888a32ae0ed76b2179e99c5c304078f04f->leave($__internal_cc8daf74b420dd0d4b5a4473457113888a32ae0ed76b2179e99c5c304078f04f_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_74c71040d00cfd6a7c61d70e7837512a0b28c15666617d153d13c1dc8cf24dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c71040d00cfd6a7c61d70e7837512a0b28c15666617d153d13c1dc8cf24dea->enter($__internal_74c71040d00cfd6a7c61d70e7837512a0b28c15666617d153d13c1dc8cf24dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f0c1abac00740d2362662596fc29320cfbbb7cac638ccdd0f3679d65029757b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c1abac00740d2362662596fc29320cfbbb7cac638ccdd0f3679d65029757b6->enter($__internal_f0c1abac00740d2362662596fc29320cfbbb7cac638ccdd0f3679d65029757b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "         
        ";
        
        $__internal_f0c1abac00740d2362662596fc29320cfbbb7cac638ccdd0f3679d65029757b6->leave($__internal_f0c1abac00740d2362662596fc29320cfbbb7cac638ccdd0f3679d65029757b6_prof);

        
        $__internal_74c71040d00cfd6a7c61d70e7837512a0b28c15666617d153d13c1dc8cf24dea->leave($__internal_74c71040d00cfd6a7c61d70e7837512a0b28c15666617d153d13c1dc8cf24dea_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a14e56ab18fc6420b16f12cf405558fa35c3c98a6d3017e0768cae5b255703a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a14e56ab18fc6420b16f12cf405558fa35c3c98a6d3017e0768cae5b255703a->enter($__internal_1a14e56ab18fc6420b16f12cf405558fa35c3c98a6d3017e0768cae5b255703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c04e69f3b56e2b6d57fdb1f64f2b833848d0289ecd37284d08d750aa2ce6a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c04e69f3b56e2b6d57fdb1f64f2b833848d0289ecd37284d08d750aa2ce6a01->enter($__internal_8c04e69f3b56e2b6d57fdb1f64f2b833848d0289ecd37284d08d750aa2ce6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "         
         ";
        
        $__internal_8c04e69f3b56e2b6d57fdb1f64f2b833848d0289ecd37284d08d750aa2ce6a01->leave($__internal_8c04e69f3b56e2b6d57fdb1f64f2b833848d0289ecd37284d08d750aa2ce6a01_prof);

        
        $__internal_1a14e56ab18fc6420b16f12cf405558fa35c3c98a6d3017e0768cae5b255703a->leave($__internal_1a14e56ab18fc6420b16f12cf405558fa35c3c98a6d3017e0768cae5b255703a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 67,  226 => 66,  215 => 62,  206 => 61,  189 => 11,  171 => 10,  159 => 69,  157 => 66,  152 => 63,  150 => 61,  147 => 60,  144 => 59,  138 => 58,  128 => 44,  124 => 43,  112 => 37,  110 => 36,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  51 => 13,  46 => 12,  44 => 11,  40 => 10,  29 => 1,);
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
<html lang=\"en\">
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
        {#<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>#}
        <link href=\"{{asset('public/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
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
        
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                setTimeout(function() {
                    \$(\".content\").fadeOut(1500);
                },3000);
            });
        </script>
         
    </head>
    {% if app.session.started %}
        {% for flashMessage in app.session.flashbag.get('usuario') %}                              
           
         <script type=\"text/javascript\">
            \$(document).ready(function(){
            new PNotify({
            type: 'success',            
            title: '{{flashMessage.titulo}}',
            text: '{{ flashMessage.mensaje}}',
            styling:'bootstrap3'            
    });
});
</script>
            
           
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
", "base.html.twig", "C:\\wamp64\\www\\webSite\\app\\Resources\\views\\base.html.twig");
    }
}
