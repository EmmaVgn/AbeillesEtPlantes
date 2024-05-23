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

/* shared/_navbar.html.twig */
class __TwigTemplate_2c2a0f0a10713814341a1d4138abc5b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-light\" data-bs-theme=\"light\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Bee Health</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil
\t\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Boutique en ligne</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Conseils d'utilisations</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"d-flex\">
\t\t\t\t<input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
\t\t\t\t<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 31
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\" class=\"nav-link\">Administration</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<button class=\"dropdown-toggle btn-dropdown-user\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-lg-end py-0\">

\t\t\t\t\t\t\t<li class=\"py-2 px-2\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-user color-btn-logout\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-success\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"btn btn-danger\">M'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 52
        echo "
\t\t\t</div>
\t\t</div>
\t</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_navbar.html.twig";
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
        return array (  123 => 52,  117 => 49,  111 => 46,  108 => 45,  100 => 40,  93 => 35,  87 => 32,  84 => 31,  81 => 30,  79 => 29,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-light\" data-bs-theme=\"light\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Bee Health</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('homepage') }}\">Accueil
\t\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Boutique en ligne</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Conseils d'utilisations</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"d-flex\">
\t\t\t\t<input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
\t\t\t\t<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin') }}\" class=\"nav-link\">Administration</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<button class=\"dropdown-toggle btn-dropdown-user\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-lg-end py-0\">

\t\t\t\t\t\t\t<li class=\"py-2 px-2\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-user color-btn-logout\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn btn-success\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('register') }}\" class=\"btn btn-danger\">M'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t</div>
\t</nav>
", "shared/_navbar.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/shared/_navbar.html.twig");
    }
}
