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

/* cart/index.html.twig */
class __TwigTemplate_fe933f3585eeb613b4cd4c0cc6dd2bfe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<main class=\"page wrapper\">
\t\t";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "\t\t\t<div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2\">
\t\t\t\t<form action=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_index");
            echo "\" class=\"\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12 offset-lg-1 pt-1\">
\t\t\t\t\t\t\t<h2 class=\"pt-md-2 my-4 mt-lg-5\">
\t\t\t\t\t\t\t\tMon panier</h2>
\t\t\t\t\t\t\t<p>Ajouter d'autres d'articles disponibles sur le site
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tVoir les articles
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_removeall");
            echo "\">Vider le panier</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            // line 22
            $context["total"] = null;
            // line 23
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 24, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "price", [], "any", false, false, false, 24) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 24)));
                // line 25
                echo "
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center border-top py-4\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0 href=\" #\"\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 28), "attachmentFile"), "html", null, true);
                echo "\" alt=\"Product\" width=\"110\"></a>
\t\t\t\t\t\t\t\t\t<div class=\"w-100 pt-1 ps-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
                echo "</a>

\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "description", [], "any", false, false, false, 38), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"text-end ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-5 mb-2\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 44, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t€</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"count-input ms-n3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrease", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-icon fs-xl\" data-decrement>-</a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 52), "html", null, true);
                echo "\" readonly>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-icon fs-xl\" data-increment>+</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"nav justify-content-end mt-n5 mt-sm-n3\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link fs-xl p-2\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" data-bs-toggle=\" tooltip\" title=\" remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash bi-lg\"></i>

\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled py-3 mb-0\">
\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-bteween mb-2\">Nombre de produits:
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold ms-2\">";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 67, $this->source); })())), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"d-flex align-item-center justify-content-between border-top fs-xl pt-4\">
\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t\t<span class=\"fs-3 fw-semibold text-dark ms-2\">";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary w-100 w-sm-auto mt-4\" type=\"submit\">Valider mon panier</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 83
            echo "\t\t<div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
\t\t\t<div class=\"text-center pt-4 mt-lg-2\">
\t\t\t\t<h1 class=\"display-5\">Votre panier est vide</h1>
\t\t\t\t<p class=\"fs-lg pb-2 pb-md-0 mb-4 mb-mb-5\">
\t\t\t\t\tCommencez votre shopping dès maintenant à travers nos articles</p>
\t\t\t\t<a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_index");
            echo "\" class=\"btn btn-lg btn-primary\">Voir les produits</a>
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 93
        echo "</main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  237 => 93,  229 => 88,  222 => 83,  208 => 72,  200 => 67,  196 => 65,  182 => 57,  179 => 56,  174 => 53,  170 => 52,  166 => 51,  163 => 50,  154 => 44,  146 => 38,  139 => 34,  130 => 28,  125 => 25,  122 => 24,  117 => 23,  115 => 22,  110 => 20,  97 => 10,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier
{% endblock %}

{% block body %}
\t<main class=\"page wrapper\">
\t\t{% if cart|length > 0 %}
\t\t\t<div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2\">
\t\t\t\t<form action=\"{{ path('order_index') }}\" class=\"\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12 offset-lg-1 pt-1\">
\t\t\t\t\t\t\t<h2 class=\"pt-md-2 my-4 mt-lg-5\">
\t\t\t\t\t\t\t\tMon panier</h2>
\t\t\t\t\t\t\t<p>Ajouter d'autres d'articles disponibles sur le site
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tVoir les articles
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_removeall') }}\">Vider le panier</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% set total = null %}
\t\t\t\t\t\t\t{% for item in cart %}
\t\t\t\t\t\t\t\t{% set total = total + (item.product.price * item.quantity) %}

\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center border-top py-4\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0 href=\" #\"\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(item.product, 'attachmentFile') }}\" alt=\"Product\" width=\"110\"></a>
\t\t\t\t\t\t\t\t\t<div class=\"w-100 pt-1 ps-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ item.product.name}}</a>

\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ item.product.description }}
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"text-end ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t{# J'affiche le prix#}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-5 mb-2\">{{ (total / 100)|number_format(2,',','.') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t€</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{# J'affiche les produits et les quantités#}
\t\t\t\t\t\t\t\t\t\t<div class=\"count-input ms-n3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_decrease', {id: item.product.id}) }}\" class=\"btn btn-icon fs-xl\" data-decrement>-</a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" value=\"{{ item.quantity }}\" readonly>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_add', {id: item.product.id}) }}\" class=\"btn btn-icon fs-xl\" data-increment>+</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{# Je supprimer le produit du panier #}
\t\t\t\t\t\t\t\t\t\t<div class=\"nav justify-content-end mt-n5 mt-sm-n3\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link fs-xl p-2\" href=\"{{ path('cart_remove', {id: item.product.id}) }}\" data-bs-toggle=\" tooltip\" title=\" remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash bi-lg\"></i>

\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<ul class=\"list-unstyled py-3 mb-0\">
\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-bteween mb-2\">Nombre de produits:
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold ms-2\">{{ cart|length }}</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"d-flex align-item-center justify-content-between border-top fs-xl pt-4\">
\t\t\t\t\t\t\t\tTotal:
\t\t\t\t\t\t\t\t<span class=\"fs-3 fw-semibold text-dark ms-2\">{{ (total / 100)|number_format(2,',','.') }}
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary w-100 w-sm-auto mt-4\" type=\"submit\">Valider mon panier</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t{% else %}
\t\t<div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
\t\t\t<div class=\"text-center pt-4 mt-lg-2\">
\t\t\t\t<h1 class=\"display-5\">Votre panier est vide</h1>
\t\t\t\t<p class=\"fs-lg pb-2 pb-md-0 mb-4 mb-mb-5\">
\t\t\t\t\tCommencez votre shopping dès maintenant à travers nos articles</p>
\t\t\t\t<a href=\"{{ path('products_index') }}\" class=\"btn btn-lg btn-primary\">Voir les produits</a>
\t\t\t</div>
\t\t</div>

\t{% endif %}
</main>{% endblock %}
", "cart/index.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/cart/index.html.twig");
    }
}
