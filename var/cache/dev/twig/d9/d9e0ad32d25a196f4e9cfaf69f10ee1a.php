<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_62888a05f0abac812a4e3fe3c9cf5e97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"keywords\" content=\"miel, apicultrice, lot et garonne, huiles essentielles\"/>
\t\t<meta name=\"author\" content=\"Emma VIGNERON\">
\t\t<meta name=\"description\" content=\"Abeilles et plantes\">
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>
\t\t<!--FONT AWESOME-->
\t\t<script src=\"https://kit.fontawesome.com/50d220494b.js\" crossorigin=\"anonymous\"></script>
\t\t<link href=\"Assets/fontawesome-free-6.4.2-desktop\">

\t\t<link rel=\"icon\" type=\"favicon\" href=\"public/images/favicon.ico\"/>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" defer></script>
\t\t";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\" defer></script>
\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t</head>
\t<body>
\t\t";
        // line 36
        $this->loadTemplate("shared/_navbar.html.twig", "base.html.twig", 36)->display($context);
        // line 37
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "isVerified", [], "any", false, false, false, 37) == false))) {
            // line 38
            echo "\t\t\t<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t<div class=\"alert-message\">
\t\t\t\t\t<strong>Votre compte n'est pas activé</strong>,
\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resend_verif");
            echo "\">renvoyer le lien d'activation</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 46
        echo "\t\t";
        $this->loadTemplate("shared/_flash.html.twig", "base.html.twig", 46)->display($context);
        // line 47
        echo "\t\t<div class=\"container pt-5\"> ";
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "\t\t\t</div>
\t\t</body>
\t</html>
</div>
";
        // line 52
        $this->loadTemplate("shared/_footer.html.twig", "base.html.twig", 52)->display($context);
        echo "</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur le site d'Abeilles et Plantes
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/5/sandstone/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">
\t\t\t<!-- Option 1: Include in HTML -->
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  204 => 47,  186 => 31,  171 => 24,  163 => 20,  153 => 19,  133 => 10,  121 => 52,  115 => 48,  112 => 47,  109 => 46,  102 => 42,  96 => 38,  93 => 37,  91 => 36,  85 => 33,  80 => 32,  78 => 31,  74 => 30,  71 => 29,  69 => 19,  60 => 12,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"keywords\" content=\"miel, apicultrice, lot et garonne, huiles essentielles\"/>
\t\t<meta name=\"author\" content=\"Emma VIGNERON\">
\t\t<meta name=\"description\" content=\"Abeilles et plantes\">
\t\t<title>
\t\t\t{% block title %}Bienvenue sur le site d'Abeilles et Plantes
\t\t\t{% endblock %}
\t\t</title>
\t\t<!--FONT AWESOME-->
\t\t<script src=\"https://kit.fontawesome.com/50d220494b.js\" crossorigin=\"anonymous\"></script>
\t\t<link href=\"Assets/fontawesome-free-6.4.2-desktop\">

\t\t<link rel=\"icon\" type=\"favicon\" href=\"public/images/favicon.ico\"/>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/5/sandstone/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
\t\t\t<!-- Option 1: Include in HTML -->
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">

\t\t{% endblock %}

\t\t<script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\" defer></script>
\t\t{% block javascripts %}{% endblock %}
\t\t<script src=\"{{ asset('assets/js/scripts.js') }}\" defer></script>
\t\t{{ encore_entry_script_tags('app') }}
\t</head>
\t<body>
\t\t{% include \"shared/_navbar.html.twig\" %}
\t\t{% if app.user and app.user.isVerified == false %}
\t\t\t<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t<div class=\"alert-message\">
\t\t\t\t\t<strong>Votre compte n'est pas activé</strong>,
\t\t\t\t\t<a href=\"{{ path('resend_verif') }}\">renvoyer le lien d'activation</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% include \"shared/_flash.html.twig\" %}
\t\t<div class=\"container pt-5\"> {% block body %}{% endblock %}
\t\t\t</div>
\t\t</body>
\t</html>
</div>
{% include \"shared/_footer.html.twig\" %}</body></html>
", "base.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/base.html.twig");
    }
}
