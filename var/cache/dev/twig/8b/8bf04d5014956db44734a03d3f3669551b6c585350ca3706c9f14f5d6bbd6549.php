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

/* prestation/reserver.html.twig */
class __TwigTemplate_3c1eef1417a37aec622841cfe6f9eb2c9e2b7dd8b10a27380fd96b586c5a5645 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/reserver.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestation/reserver.html.twig", 1);
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 4
        echo "<div class=\"container\">
    <h1>Reserver votre ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 5, $this->source); })()), "libelle", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>

  ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

    <center>
    <div class=\"form-group\", style=\"width:60%; text-align:left;\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), 'row');
        echo "

        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Votre Nom"]]);
        echo "



        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 17, $this->source); })()), "phone", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Votre numéro de téléphone"]]);
        echo "



        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 21, $this->source); })()), "mail", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Votre adresse email"]]);
        echo "

    </div>
    </center>



    <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>

   
  ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  95 => 21,  88 => 17,  81 => 13,  76 => 11,  69 => 7,  64 => 5,  61 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% form_theme formReserver 'bootstrap_4_layout.html.twig' %}
<div class=\"container\">
    <h1>Reserver votre {{prestations.libelle}}</h1>

  {{form_start(formReserver)}}

    <center>
    <div class=\"form-group\", style=\"width:60%; text-align:left;\">
        {{ form_row(formReserver.date)}}

        {{ form_row(formReserver.name, { 'attr' : { placeholder : \"Votre Nom\" }}) }}



        {{ form_row(formReserver.phone, { 'attr' : { placeholder : \"Votre numéro de téléphone\" }}) }}



        {{ form_row(formReserver.mail, { 'attr' : { placeholder : \"Votre adresse email\" }}) }}

    </div>
    </center>



    <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>

   
  {{form_end(formReserver)}}
</div>

{% endblock %}", "prestation/reserver.html.twig", "C:\\Users\\vasconcl\\Documents\\workspace\\Comeleon_estheticienne\\templates\\prestation\\reserver.html.twig");
    }
}
