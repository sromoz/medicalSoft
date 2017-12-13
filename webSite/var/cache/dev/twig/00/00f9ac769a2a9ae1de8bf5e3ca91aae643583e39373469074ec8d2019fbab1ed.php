<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56a8f8b6ad231a40e4c563e654c9950352226550c86cfdf34c2fdbfff6f8c711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a8f8b6ad231a40e4c563e654c9950352226550c86cfdf34c2fdbfff6f8c711->enter($__internal_56a8f8b6ad231a40e4c563e654c9950352226550c86cfdf34c2fdbfff6f8c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_561df39a5ed48cce460581df4397236d4e2a5fa7d0f526c4464a953d750071f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561df39a5ed48cce460581df4397236d4e2a5fa7d0f526c4464a953d750071f4->enter($__internal_561df39a5ed48cce460581df4397236d4e2a5fa7d0f526c4464a953d750071f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_56a8f8b6ad231a40e4c563e654c9950352226550c86cfdf34c2fdbfff6f8c711->leave($__internal_56a8f8b6ad231a40e4c563e654c9950352226550c86cfdf34c2fdbfff6f8c711_prof);

        
        $__internal_561df39a5ed48cce460581df4397236d4e2a5fa7d0f526c4464a953d750071f4->leave($__internal_561df39a5ed48cce460581df4397236d4e2a5fa7d0f526c4464a953d750071f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22df0a36dbb52aa5464e71705df68e96671bb7bcb42c1d8d0f26a16b1c65dcfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22df0a36dbb52aa5464e71705df68e96671bb7bcb42c1d8d0f26a16b1c65dcfb->enter($__internal_22df0a36dbb52aa5464e71705df68e96671bb7bcb42c1d8d0f26a16b1c65dcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d20c21681b3226d71360089a25bf3241ae290060a5fe95e29e079dd928e467a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20c21681b3226d71360089a25bf3241ae290060a5fe95e29e079dd928e467a5->enter($__internal_d20c21681b3226d71360089a25bf3241ae290060a5fe95e29e079dd928e467a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d20c21681b3226d71360089a25bf3241ae290060a5fe95e29e079dd928e467a5->leave($__internal_d20c21681b3226d71360089a25bf3241ae290060a5fe95e29e079dd928e467a5_prof);

        
        $__internal_22df0a36dbb52aa5464e71705df68e96671bb7bcb42c1d8d0f26a16b1c65dcfb->leave($__internal_22df0a36dbb52aa5464e71705df68e96671bb7bcb42c1d8d0f26a16b1c65dcfb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f93d9befd75d3d5b459746d8f5ed68f285a4042e2a8219650df7697e9481bdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93d9befd75d3d5b459746d8f5ed68f285a4042e2a8219650df7697e9481bdaf->enter($__internal_f93d9befd75d3d5b459746d8f5ed68f285a4042e2a8219650df7697e9481bdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b63d64f65ffca2afd9ee34989e7bdccdcad17a1a2ee00180efd1485f6e896cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b63d64f65ffca2afd9ee34989e7bdccdcad17a1a2ee00180efd1485f6e896cb->enter($__internal_1b63d64f65ffca2afd9ee34989e7bdccdcad17a1a2ee00180efd1485f6e896cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1b63d64f65ffca2afd9ee34989e7bdccdcad17a1a2ee00180efd1485f6e896cb->leave($__internal_1b63d64f65ffca2afd9ee34989e7bdccdcad17a1a2ee00180efd1485f6e896cb_prof);

        
        $__internal_f93d9befd75d3d5b459746d8f5ed68f285a4042e2a8219650df7697e9481bdaf->leave($__internal_f93d9befd75d3d5b459746d8f5ed68f285a4042e2a8219650df7697e9481bdaf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0225752e12af4fcd9fbd210c866a52d90a671dd7dc8a11f8e12b33f1e112d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0225752e12af4fcd9fbd210c866a52d90a671dd7dc8a11f8e12b33f1e112d55->enter($__internal_f0225752e12af4fcd9fbd210c866a52d90a671dd7dc8a11f8e12b33f1e112d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7af702a8e8c93585eb410dca934694d247e27308766d7a7b21c4f8ece8fb85a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af702a8e8c93585eb410dca934694d247e27308766d7a7b21c4f8ece8fb85a1->enter($__internal_7af702a8e8c93585eb410dca934694d247e27308766d7a7b21c4f8ece8fb85a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7af702a8e8c93585eb410dca934694d247e27308766d7a7b21c4f8ece8fb85a1->leave($__internal_7af702a8e8c93585eb410dca934694d247e27308766d7a7b21c4f8ece8fb85a1_prof);

        
        $__internal_f0225752e12af4fcd9fbd210c866a52d90a671dd7dc8a11f8e12b33f1e112d55->leave($__internal_f0225752e12af4fcd9fbd210c866a52d90a671dd7dc8a11f8e12b33f1e112d55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
