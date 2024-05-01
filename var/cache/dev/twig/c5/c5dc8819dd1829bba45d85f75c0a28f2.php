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

/* shared/_footer.html.twig */
class __TwigTemplate_ccc7ea49d74f4feb8d7e87617b0aa724 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        // line 1
        echo "<!-- Remove the container if you want to extend the Footer to full width. -->


<footer
\tclass=\"bg-light text-center text-lg-start text-dark\">
\t<!-- Grid container -->
\t<div
\t\tclass=\"container p-4\">
\t\t<!--Grid row-->
\t\t<div
\t\t\tclass=\"row my-4\">
\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

\t\t\t\t<div class=\"rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto\" style=\"width: 150px; height: 150px;\">
\t\t\t\t\t<img src=\"/assets/images/Grey & Cream Illustrated Honeybee Farm Logo.png\" height=\"250\" alt=\"\" loading=\"lazy\"/>
\t\t\t\t</div>

\t\t\t\t<p class=\"text-center\">Apicultrice et productrice de plantes médicales pour huiles essentielles
\t\t\t\t</p>

\t\t\t\t<ul class=\"list-unstyled d-flex flex-row justify-content-center\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"text-dark px-2\" href=\"#!\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"text-dark px-2\" href=\"#!\">
\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"text-dark ps-2\" href=\"#!\">
\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t\t<!--Grid column-->

\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t<h5 class=\"text-uppercase mb-4\">Liens utils</h5>

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>
\t\t\t\t\t\t\tBoutique en ligne</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>
\t\t\t\t\t\t\tConseils d'utilisation</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Mon histoire</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Mentions légales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Grid column-->

\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t<h5 class=\"text-uppercase mb-4\">Où trouver mes produits ?</h5>

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Liste des points de ventes</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Devenir distributeur</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Grid column-->

\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t<h5 class=\"text-uppercase mb-4\">Contact</h5>

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt pe-2\"></i>Faouret, 47330 Bias</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-phone pe-2\"></i>+ xx xx xx xx xx</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-envelope pe-2 mb-0\"></i>contact@example.com</p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Grid column-->
\t\t</div>
\t\t<!--Grid row-->
\t</div>
\t<!-- Grid container -->

\t<!-- Copyright -->
\t<div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
\t\t© 2024 Copyright: VIGNERON

\t</div>
\t<!-- Copyright -->
</footer>


<!-- End of .container -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Remove the container if you want to extend the Footer to full width. -->


<footer
\tclass=\"bg-light text-center text-lg-start text-dark\">
\t<!-- Grid container -->
\t<div
\t\tclass=\"container p-4\">
\t\t<!--Grid row-->
\t\t<div
\t\t\tclass=\"row my-4\">
\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

\t\t\t\t<div class=\"rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto\" style=\"width: 150px; height: 150px;\">
\t\t\t\t\t<img src=\"/assets/images/Grey & Cream Illustrated Honeybee Farm Logo.png\" height=\"250\" alt=\"\" loading=\"lazy\"/>
\t\t\t\t</div>

\t\t\t\t<p class=\"text-center\">Apicultrice et productrice de plantes médicales pour huiles essentielles
\t\t\t\t</p>

\t\t\t\t<ul class=\"list-unstyled d-flex flex-row justify-content-center\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"text-dark px-2\" href=\"#!\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"text-dark px-2\" href=\"#!\">
\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"text-dark ps-2\" href=\"#!\">
\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t\t<!--Grid column-->

\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t<h5 class=\"text-uppercase mb-4\">Liens utils</h5>

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>
\t\t\t\t\t\t\tBoutique en ligne</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>
\t\t\t\t\t\t\tConseils d'utilisation</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Mon histoire</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Mentions légales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Grid column-->

\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t<h5 class=\"text-uppercase mb-4\">Où trouver mes produits ?</h5>

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Liste des points de ventes</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#!\" class=\"text-dark\">
\t\t\t\t\t\t\t<i class=\"fa-brands fa-forumbee pe-2\"></i>Devenir distributeur</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Grid column-->

\t\t\t<!--Grid column-->
\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
\t\t\t\t<h5 class=\"text-uppercase mb-4\">Contact</h5>

\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt pe-2\"></i>Faouret, 47330 Bias</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-phone pe-2\"></i>+ xx xx xx xx xx</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-envelope pe-2 mb-0\"></i>contact@example.com</p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Grid column-->
\t\t</div>
\t\t<!--Grid row-->
\t</div>
\t<!-- Grid container -->

\t<!-- Copyright -->
\t<div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
\t\t© 2024 Copyright: VIGNERON

\t</div>
\t<!-- Copyright -->
</footer>


<!-- End of .container -->
", "shared/_footer.html.twig", "/Users/emma/Code/En cours/abeilles_et_plantes/templates/shared/_footer.html.twig");
    }
}
