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

/* _partials/_pagination.html.twig */
class __TwigTemplate_cfd3b20dd30209eb251441b7b9466f35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_pagination.html.twig"));

        // line 1
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "\t<nav>
\t\t<ul class=\"pagination\">
\t\t\t";
            // line 4
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 4, $this->source); })()) > 1)) {
                // line 5
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 6, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 6, $this->source); })()) - 1)]), "html", null, true);
                echo "\" class=\"page-link\">&lt;</a>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<a class=\"page-link\">&lt;</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 13
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 13, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                echo "\t\t\t\t<li class=\"page-item ";
                echo ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 14, $this->source); })()))) ? ("active") : (""));
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 15, $this->source); })()), ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 15, $this->source); })()), "page" => $context["page"]]), "html", null, true);
                echo "\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 18, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 20, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 20, $this->source); })()) + 1)]), "html", null, true);
                echo "\" class=\"page-link\">&gt;</a>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<a class=\"page-link\">&gt;</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 27
            echo "\t\t</li>
\t</ul>
</nav>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/_pagination.html.twig";
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
        return array (  105 => 27,  99 => 23,  93 => 20,  90 => 19,  87 => 18,  76 => 15,  71 => 14,  66 => 13,  60 => 9,  54 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pages > 1 %}
\t<nav>
\t\t<ul class=\"pagination\">
\t\t\t{% if currentPage > 1 %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a href=\"{{ path(path, {slug: slug, page: currentPage - 1}) }}\" class=\"page-link\">&lt;</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<a class=\"page-link\">&lt;</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{% for page in 1..pages %}
\t\t\t\t<li class=\"page-item {{ (page == currentPage) ? 'active' : '' }}\">
\t\t\t\t\t<a href=\"{{ path(path, {slug: slug, page: page}) }}\" class=\"page-link\">{{ page }}</a>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t\t{% if currentPage < pages %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a href=\"{{ path(path, {slug: slug, page: currentPage + 1}) }}\" class=\"page-link\">&gt;</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<a class=\"page-link\">&gt;</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</li>
\t</ul>
</nav>{% endif %}
", "_partials/_pagination.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/_partials/_pagination.html.twig");
    }
}
