<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ebae816fd1156f5046be1c76889a36b567d9959762a8dd75a3ba623a17fd264f extends Twig_Template
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
        $__internal_13a798cee465d7e64f03d7e7eea1b173371f8b231546f51bab365e92fc891f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a798cee465d7e64f03d7e7eea1b173371f8b231546f51bab365e92fc891f7b->enter($__internal_13a798cee465d7e64f03d7e7eea1b173371f8b231546f51bab365e92fc891f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_ab140fa8c4f73de70b0f1d2c62c9448b28bcf0c61da123d67b1c539faabd79ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab140fa8c4f73de70b0f1d2c62c9448b28bcf0c61da123d67b1c539faabd79ae->enter($__internal_ab140fa8c4f73de70b0f1d2c62c9448b28bcf0c61da123d67b1c539faabd79ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_13a798cee465d7e64f03d7e7eea1b173371f8b231546f51bab365e92fc891f7b->leave($__internal_13a798cee465d7e64f03d7e7eea1b173371f8b231546f51bab365e92fc891f7b_prof);

        
        $__internal_ab140fa8c4f73de70b0f1d2c62c9448b28bcf0c61da123d67b1c539faabd79ae->leave($__internal_ab140fa8c4f73de70b0f1d2c62c9448b28bcf0c61da123d67b1c539faabd79ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e766bcca37a6175ee6c3747856a2b872eb9a68d8e9d1f1890234318278be2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e766bcca37a6175ee6c3747856a2b872eb9a68d8e9d1f1890234318278be2c4->enter($__internal_9e766bcca37a6175ee6c3747856a2b872eb9a68d8e9d1f1890234318278be2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97f8608722d39e15617c3e396c7d332d7f14bc68052ef5d800e6b6b64a1292a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f8608722d39e15617c3e396c7d332d7f14bc68052ef5d800e6b6b64a1292a4->enter($__internal_97f8608722d39e15617c3e396c7d332d7f14bc68052ef5d800e6b6b64a1292a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_97f8608722d39e15617c3e396c7d332d7f14bc68052ef5d800e6b6b64a1292a4->leave($__internal_97f8608722d39e15617c3e396c7d332d7f14bc68052ef5d800e6b6b64a1292a4_prof);

        
        $__internal_9e766bcca37a6175ee6c3747856a2b872eb9a68d8e9d1f1890234318278be2c4->leave($__internal_9e766bcca37a6175ee6c3747856a2b872eb9a68d8e9d1f1890234318278be2c4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_026ada9ed9dd479f057f55ddfb346ac311dd1eca73ecc8cc8e0e104e407d460f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026ada9ed9dd479f057f55ddfb346ac311dd1eca73ecc8cc8e0e104e407d460f->enter($__internal_026ada9ed9dd479f057f55ddfb346ac311dd1eca73ecc8cc8e0e104e407d460f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4832a34fb2526827373936e20d26a5718090fe3482f1c62c1a084df07eb40c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4832a34fb2526827373936e20d26a5718090fe3482f1c62c1a084df07eb40c7->enter($__internal_f4832a34fb2526827373936e20d26a5718090fe3482f1c62c1a084df07eb40c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f4832a34fb2526827373936e20d26a5718090fe3482f1c62c1a084df07eb40c7->leave($__internal_f4832a34fb2526827373936e20d26a5718090fe3482f1c62c1a084df07eb40c7_prof);

        
        $__internal_026ada9ed9dd479f057f55ddfb346ac311dd1eca73ecc8cc8e0e104e407d460f->leave($__internal_026ada9ed9dd479f057f55ddfb346ac311dd1eca73ecc8cc8e0e104e407d460f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_70f906133754bb3febf4f39620fd1eab81c041acd7d9b699b67b8366075b3964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f906133754bb3febf4f39620fd1eab81c041acd7d9b699b67b8366075b3964->enter($__internal_70f906133754bb3febf4f39620fd1eab81c041acd7d9b699b67b8366075b3964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ad79fbd61e1b17d67ef3b22340f89cf643ef2ba6b61d39748ea404491759e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad79fbd61e1b17d67ef3b22340f89cf643ef2ba6b61d39748ea404491759e3d->enter($__internal_3ad79fbd61e1b17d67ef3b22340f89cf643ef2ba6b61d39748ea404491759e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ad79fbd61e1b17d67ef3b22340f89cf643ef2ba6b61d39748ea404491759e3d->leave($__internal_3ad79fbd61e1b17d67ef3b22340f89cf643ef2ba6b61d39748ea404491759e3d_prof);

        
        $__internal_70f906133754bb3febf4f39620fd1eab81c041acd7d9b699b67b8366075b3964->leave($__internal_70f906133754bb3febf4f39620fd1eab81c041acd7d9b699b67b8366075b3964_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\webSite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
