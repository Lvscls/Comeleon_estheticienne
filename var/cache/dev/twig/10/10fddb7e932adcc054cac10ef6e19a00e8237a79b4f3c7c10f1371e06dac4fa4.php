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

/* beautybae/avis.html.twig */
class __TwigTemplate_5cc25a97e02785739249f698c87477fbe0b30dd0c255754e5a42a2766501b39c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beautybae/avis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "beautybae/avis.html.twig", 1);
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
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Avis"]) || array_key_exists("Avis", $context) ? $context["Avis"] : (function () { throw new RuntimeError('Variable "Avis" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unAvis"]) {
            // line 7
            echo "        <article>
            <h2>Titre de l'avis</h2>
            <div class=\"metadata\"> Ecrit le 01/01/2021 à 12:00 </div>
            <div class=\"content\">
                <p> test</p>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unAvis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "beautybae/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  67 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<section class=\"articles\">
    {% for unAvis in Avis %}
        <article>
            <h2>Titre de l'avis</h2>
            <div class=\"metadata\"> Ecrit le 01/01/2021 à 12:00 </div>
            <div class=\"content\">
                <p> test</p>
            </div>
    {% endfor %}
        


{% endblock %}
", "beautybae/avis.html.twig", "C:\\Users\\zabilin\\Desktop\\workspace\\Comeleon_estheticienne\\templates\\beautybae\\avis.html.twig");
    }
}
