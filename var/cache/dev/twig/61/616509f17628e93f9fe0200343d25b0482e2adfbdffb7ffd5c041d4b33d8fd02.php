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

/* avis/avis.html.twig */
class __TwigTemplate_fa59b46c46a76f5a60111786548868a99e9b082ca71051b7fd6328ea23e52acc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/avis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/avis.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"articles\">
    <img src=\"img1.jpg\" width=\"60\" />
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["avis"]);
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 8
            echo "        <article>
        <br>
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"card-header\">
               ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"></h5>
                <p class=\"card-text\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["avis"], "text", [], "any", false, false, false, 17);
            echo "</p>
            </div>
            <div class=\"card-footer text-muted\">
                <div class=\"metadata\"> Ecrit le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "createdAt", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "createdAt", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            echo " </div>
                <div class=\"content\"> Par ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "prenom", [], "any", false, false, false, 21), "html", null, true);
            echo " </div>
            </div>
            </div>

            </div>
            </div>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
<center> <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_create");
        echo "\"> Déposer un avis</a> </center>


        


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  109 => 29,  94 => 21,  88 => 20,  82 => 17,  75 => 13,  68 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<section class=\"articles\">
    <img src=\"img1.jpg\" width=\"60\" />
    {% for avis in avis %}
        <article>
        <br>
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"card-header\">
               {{ avis.title }}
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"></h5>
                <p class=\"card-text\">{{ avis.text | raw}}</p>
            </div>
            <div class=\"card-footer text-muted\">
                <div class=\"metadata\"> Ecrit le {{ avis.createdAt | date('d/m/Y') }} à {{ avis.createdAt | date('H:i') }} </div>
                <div class=\"content\"> Par {{ avis.nom}}{{ avis.prenom}} </div>
            </div>
            </div>

            </div>
            </div>
        </article>
    {% endfor %}

<center> <a href=\"{{path('avis_create' )}}\"> Déposer un avis</a> </center>


        


{% endblock %}
", "avis/avis.html.twig", "C:\\Users\\zabilin\\Desktop\\workspace\\Comeleon_estheticienne\\templates\\avis\\avis.html.twig");
    }
}
