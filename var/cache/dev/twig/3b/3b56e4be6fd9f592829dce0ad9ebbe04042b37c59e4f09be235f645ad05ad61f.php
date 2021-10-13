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

/* beautybae/create.html.twig */
class __TwigTemplate_cbe68b489c6ee959f8ec2051c69e186c2226d9a4802d73bd42aea5fc1a4fc766 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beautybae/create.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "beautybae/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <center> <h1>Déposer un Avis</h1> </center>
    <br>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 9, $this->source); })()), 'widget');
        echo "
<br>
    <button type=\"submit\" class=\"btn btn-success\"> Ajouter l'avis</button>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 13, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "beautybae/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  71 => 9,  66 => 7,  62 => 5,  55 => 4,  47 => 1,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme formAvis \"bootstrap_4_layout.html.twig\"%}

{% block body %}
    <center> <h1>Déposer un Avis</h1> </center>
    <br>
    {{ form_start(formAvis) }}

    {{ form_widget(formAvis) }}
<br>
    <button type=\"submit\" class=\"btn btn-success\"> Ajouter l'avis</button>

    {{ form_end(formAvis) }}


{% endblock %}", "beautybae/create.html.twig", "C:\\Users\\zabilin\\Desktop\\workspace\\Comeleon_estheticienne\\templates\\beautybae\\create.html.twig");
    }
}
