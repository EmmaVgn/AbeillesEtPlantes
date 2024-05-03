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

/* products/details.html.twig */
class __TwigTemplate_fa20e682fe9fa30ccf90a416c9838c89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/details.html.twig", 1);
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

        echo "Détails de
\t";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "images", [], "any", false, false, false, 16))));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["iteration"]) {
            // line 17
            echo "\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
            echo twig_escape_filter($this->env, ($context["iteration"] - 1), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) ? ("class=\"active\" aria-current=\"true\"") : (""));
            echo " aria-label=\"Slide ";
            echo twig_escape_filter($this->env, $context["iteration"], "html", null, true);
            echo "\"></button>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iteration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "images", [], "any", false, false, false, 21));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) ? ("active") : (""));
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/") . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 23)), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
\t\t\t\t<p>Catégorie :
\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "categories", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
\t\t\t\t<p>Prix :
\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42) / 100), "html", null, true);
        echo "
\t\t\t\t\t€</p>
\t\t\t\t";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "stock", [], "any", false, false, false, 44) > 0)) {
            // line 45
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Ajouter au panier</a>
\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t";
        }
        // line 49
        echo "\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "products/details.html.twig";
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
        return array (  230 => 49,  226 => 47,  220 => 45,  218 => 44,  213 => 42,  208 => 40,  203 => 38,  189 => 26,  170 => 23,  165 => 22,  148 => 21,  144 => 19,  123 => 17,  106 => 16,  98 => 11,  93 => 8,  83 => 7,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Détails de
\t{{ product.name }}
{% endblock %}

{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>{{ product.name }}</h1>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t{% for iteration in 1..product.images|length %}
\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"{{ iteration - 1 }}\" {{ (loop.first ) ?'class=\"active\" aria-current=\"true\"' : '' }} aria-label=\"Slide {{ iteration }}\"></button>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t{% for image in product.images %}
\t\t\t\t\t\t\t<div class=\"carousel-item {{ (loop.first ) ? 'active' : '' }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/uploads/') ~ image.name }}\" class=\"d-block w-100\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<p>{{ product.description }}</p>
\t\t\t\t<p>Catégorie :
\t\t\t\t\t{{ product.categories.name }}</p>
\t\t\t\t<p>Prix :
\t\t\t\t\t{{ product.price / 100 }}
\t\t\t\t\t€</p>
\t\t\t\t{% if product.stock > 0 %}
\t\t\t\t\t<a href=\"{{ path('cart_add', {id: product.id}) }}\" class=\"btn btn-success\">Ajouter au panier</a>
\t\t\t\t{% else %}
\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}
", "products/details.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/products/details.html.twig");
    }
}
