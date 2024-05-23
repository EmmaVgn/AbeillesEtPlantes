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

/* order/index.html.twig */
class __TwigTemplate_6aa46c4ca22ae52ed8333ea08f464538 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
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

        echo "Création de la commande
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
        echo "\t<div class=\"d-none d-lg-block bg-secondary position-fixed top-0 start-0 h-100\" style=\"width: 52,5%;\"></div>
\t<div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-mb-4 pb-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\"></nav>
\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
\t\t\t<h1 class=\"h2 pb-2\">Création de la commande
\t\t\t</h1>
\t\t\t<h3 class=\"fs-base fw-normal text-body text-uppercase pb-1 pb-sm-1\">1
\t\t\t\t<span class=\"text-decoration-underline ms-1\">Détails Éxpédition de la commande</span>
\t\t\t</h3>
\t\t\t<p>Si vous n'avez pas encore ajouté d'adresse à votre compte,
\t\t\t\t<a href=\"\">ajouter en une!</a>
\t\t\t</p>
\t\t\t<h3 class=\"fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3\">2.
\t\t\t\t<span class=\"text-decoration-underline ms-1\">Choisir votre livraison</span>
\t\t\t</h3>
\t\t\t";
        // line 23
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "addresses", [], "any", false, false, false, 23), 'row'), ["[-br]" => "</br>"]);
        echo "
\t\t\t<h3 class=\"fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3\">3.
\t\t\t\t<span class=\"text-decoration-underline ms-1\">Mode de livraison</span>
\t\t\t</h3>
\t\t\t";
        // line 27
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "transporter", [], "any", false, false, false, 27), 'row'), ["[-br]" => "</br>"]);
        echo "
\t\t</div>
\t\t<div class=\"col-lg-5 offset-lg-1 pt-1\">
\t\t\t<h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
\t\t\t\t<span class=\"fs-base fw-normal text-muted\">(";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 31, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\tproduits)</span>
\t\t\t</h2>
\t\t\t";
        // line 34
        $context["total"] = null;
        // line 35
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "\t\t\t\t";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 36, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36)));
            // line 37
            echo "\t\t\t\t<div class=\"d-sm-flex align-items-center border-top py-4\">
\t\t\t\t\t<a href=\"\" class=\"d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm p-xl-3 mb-2 mb-sm-0\">
\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "attachmentFile"), "html", null, true);
            echo "\" width=\"80\" height=\"80\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "\"></a>
\t\t\t\t\t<div class=\"w-100 pt-1 ps-sm-4\">
\t\t\t\t\t\t<div class=\"d-block\">
\t\t\t\t\t\t\t<div class=\"me-3\" style=\"position: relation; top: 15px;\">
\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-2\">
\t\t\t\t\t\t\t\t\t<a href=\"\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "description", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Quantité:
\t\t\t\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t- Prix du produit:
\t\t\t\t\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) / 100), 2, ",", "."), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"nav justify-content-end mt-n4\">
\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"nav-link fs-xl p-2\" data-bs-toggle=\"tooltip\" title=\"Remove\">
\t\t\t\t\t\t\t\t<i class=\"ai-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t<div class=\"d-flex align-item-center justify-content-between border-top fs-xl pt-4 mb-4\">Total:
\t\t\t\t<span class=\"fs-3 fw-semibolmd text-dark ms-2\">";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 66, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo "
\t\t\t\t\t€</span>
\t\t\t</div>
\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\" style=\"border-radius: 6px; positio,: relative; top: 20px;\">Valider votre commande</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order/index.html.twig";
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
        return array (  207 => 74,  196 => 66,  193 => 65,  180 => 58,  171 => 52,  166 => 50,  159 => 46,  154 => 44,  144 => 39,  140 => 37,  137 => 36,  132 => 35,  130 => 34,  124 => 31,  117 => 27,  110 => 23,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création de la commande
{% endblock %}

{% block body %}
\t<div class=\"d-none d-lg-block bg-secondary position-fixed top-0 start-0 h-100\" style=\"width: 52,5%;\"></div>
\t<div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-mb-4 pb-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\"></nav>
\t\t\t{{ form_start(form) }}
\t\t\t<h1 class=\"h2 pb-2\">Création de la commande
\t\t\t</h1>
\t\t\t<h3 class=\"fs-base fw-normal text-body text-uppercase pb-1 pb-sm-1\">1
\t\t\t\t<span class=\"text-decoration-underline ms-1\">Détails Éxpédition de la commande</span>
\t\t\t</h3>
\t\t\t<p>Si vous n'avez pas encore ajouté d'adresse à votre compte,
\t\t\t\t<a href=\"\">ajouter en une!</a>
\t\t\t</p>
\t\t\t<h3 class=\"fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3\">2.
\t\t\t\t<span class=\"text-decoration-underline ms-1\">Choisir votre livraison</span>
\t\t\t</h3>
\t\t\t{{ form_row(form.addresses)|replace({'[-br]' : '</br>' })|raw }}
\t\t\t<h3 class=\"fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3\">3.
\t\t\t\t<span class=\"text-decoration-underline ms-1\">Mode de livraison</span>
\t\t\t</h3>
\t\t\t{{ form_row(form.transporter)|replace({'[-br]' : '</br>' })|raw }}
\t\t</div>
\t\t<div class=\"col-lg-5 offset-lg-1 pt-1\">
\t\t\t<h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
\t\t\t\t<span class=\"fs-base fw-normal text-muted\">({{ recapCart|length }}
\t\t\t\t\tproduits)</span>
\t\t\t</h2>
\t\t\t{% set total = null %}
\t\t\t{% for product in recapCart %}
\t\t\t\t{% set total = total + (product.product.price * product.quantity) %}
\t\t\t\t<div class=\"d-sm-flex align-items-center border-top py-4\">
\t\t\t\t\t<a href=\"\" class=\"d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm p-xl-3 mb-2 mb-sm-0\">
\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(product.product, 'attachmentFile') }}\" width=\"80\" height=\"80\" alt=\"{{ product.product.name }}\"></a>
\t\t\t\t\t<div class=\"w-100 pt-1 ps-sm-4\">
\t\t\t\t\t\t<div class=\"d-block\">
\t\t\t\t\t\t\t<div class=\"me-3\" style=\"position: relation; top: 15px;\">
\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-2\">
\t\t\t\t\t\t\t\t\t<a href=\"\">{{ product.product.name }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>{{ product.product.description }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Quantité:
\t\t\t\t\t\t\t\t\t{{ product.quantity }}
\t\t\t\t\t\t\t\t\t- Prix du produit:
\t\t\t\t\t\t\t\t\t{{ (product.product.price / 100)| number_format(2, ',', '.') }}
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"nav justify-content-end mt-n4\">
\t\t\t\t\t\t\t<a href=\"{{ path('cart_remove', {id: product.product.id}) }}\" class=\"nav-link fs-xl p-2\" data-bs-toggle=\"tooltip\" title=\"Remove\">
\t\t\t\t\t\t\t\t<i class=\"ai-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"d-flex align-item-center justify-content-between border-top fs-xl pt-4 mb-4\">Total:
\t\t\t\t<span class=\"fs-3 fw-semibolmd text-dark ms-2\">{{ (total / 100)|number_format(2,',','.') }}
\t\t\t\t\t€</span>
\t\t\t</div>
\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\" style=\"border-radius: 6px; positio,: relative; top: 20px;\">Valider votre commande</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t{{ form_end(form)}}
</div>{% endblock %}
", "order/index.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/order/index.html.twig");
    }
}
