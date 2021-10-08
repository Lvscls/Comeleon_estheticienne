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

/* prestation/prestation.html.twig */
class __TwigTemplate_5a9078e5b208c893dedf1afe0d01e9456bcc0bf35f42a39d42308ee23f740a11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/prestation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestation/prestation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 4
            echo "<div id=\"container\">\t
\t
<!-- Start\tProduct details -->
\t<div class=\"product-details\">
\t\t
\t\t<!-- \tProduct Name -->
\t<h1>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "libelle", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
<!-- \t\t<span class=\"hint new\">New</span> -->
<!-- \t\t<span class=\"hint free-shipping\">Free Shipping</span> -->
<!-- \t\tthe Product rating -->
\t<span class=\"hint-star star\">
\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
\t</span>
\t\t
\t
<!-- The most important information about the product -->
\t\t<p class=\"information\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>

\t\t
\t\t
<!-- \t\tControl -->
<div class=\"control\">
\t
<!-- Start Button buying -->
\t<button class=\"btn\">
<!-- \t\tthe Price -->
\t <span class=\"price\">  ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 34), "html", null, true);
            echo " €</span>
<!-- \t\tshopping cart icon-->
   <span class=\"shopping-cart\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></span>
<!-- \t\tBuy Now / ADD to Cart-->
 </button>
\t<!-- End Button buying -->
\t
</div>
\t\t\t
</div>
\t
<!-- \tEnd\tProduct details   -->
\t
\t
\t
<!-- \tStart product image & Information -->
\t
<div class=\"product-image\">
\t
\t<img src=\"assets/Image/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "libelle", [], "any", false, false, false, 53), "html", null, true);
            echo ".jpg\" alt=\"Omar Dsoky\">
\t
</div>
<!--  End product image  -->


</div>



  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/prestation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  123 => 53,  101 => 34,  88 => 24,  71 => 10,  63 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% for prestation in prestations %}
<div id=\"container\">\t
\t
<!-- Start\tProduct details -->
\t<div class=\"product-details\">
\t\t
\t\t<!-- \tProduct Name -->
\t<h1>{{ prestation.libelle}}</h1>
<!-- \t\t<span class=\"hint new\">New</span> -->
<!-- \t\t<span class=\"hint free-shipping\">Free Shipping</span> -->
<!-- \t\tthe Product rating -->
\t<span class=\"hint-star star\">
\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
\t</span>
\t\t
\t
<!-- The most important information about the product -->
\t\t<p class=\"information\">{{ prestation.description}}</p>

\t\t
\t\t
<!-- \t\tControl -->
<div class=\"control\">
\t
<!-- Start Button buying -->
\t<button class=\"btn\">
<!-- \t\tthe Price -->
\t <span class=\"price\">  {{ prestation.prix}} €</span>
<!-- \t\tshopping cart icon-->
   <span class=\"shopping-cart\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></span>
<!-- \t\tBuy Now / ADD to Cart-->
 </button>
\t<!-- End Button buying -->
\t
</div>
\t\t\t
</div>
\t
<!-- \tEnd\tProduct details   -->
\t
\t
\t
<!-- \tStart product image & Information -->
\t
<div class=\"product-image\">
\t
\t<img src=\"assets/Image/{{ prestation.libelle}}.jpg\" alt=\"Omar Dsoky\">
\t
</div>
<!--  End product image  -->


</div>



  {% endfor %}

{% endblock %}", "prestation/prestation.html.twig", "C:\\Users\\vasconcl\\Documents\\workspace\\Comeleon_estheticienne\\templates\\prestation\\prestation.html.twig");
    }
}
