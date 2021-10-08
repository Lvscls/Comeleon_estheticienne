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
        echo "
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 4, $this->source); })()), "libelle", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <div id=\"form-main\">
  <div id=\"form-div\">
    <form class=\"form\" id=\"form1\">
      
      <p class=\"name\">
        <input name=\"name\" type=\"text\" class=\"validate[required,custom[onlyLetter],length[0,100]] feedback-input\" placeholder=\"Name\" id=\"name\" />
      </p>
      
      <p class=\"email\">
        <input name=\"email\" type=\"text\" class=\"validate[required,custom[email]] feedback-input\" id=\"email\" placeholder=\"Email\" />
      </p>

            <p class=\"phone\">
        <input name=\"phone\" type=\"text\" class=\"validate[required,custom[phone]] feedback-input\" id=\"phone\" placeholder=\"Phone\" />
      </p>
      
      
      <div class=\"submit\">
        <input type=\"submit\" value=\"SEND\" id=\"button-blue\"/>
        <div class=\"ease\"></div>
      </div>
    </form>
  </div>
  ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 28, $this->source); })()), 'form');
        echo "
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReserver"]) || array_key_exists("formReserver", $context) ? $context["formReserver"] : (function () { throw new RuntimeError('Variable "formReserver" does not exist.', 29, $this->source); })()), 'form_end');
        echo "


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
        return array (  93 => 29,  89 => 28,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <h1>{{prestations.libelle}}</h1>
    <div id=\"form-main\">
  <div id=\"form-div\">
    <form class=\"form\" id=\"form1\">
      
      <p class=\"name\">
        <input name=\"name\" type=\"text\" class=\"validate[required,custom[onlyLetter],length[0,100]] feedback-input\" placeholder=\"Name\" id=\"name\" />
      </p>
      
      <p class=\"email\">
        <input name=\"email\" type=\"text\" class=\"validate[required,custom[email]] feedback-input\" id=\"email\" placeholder=\"Email\" />
      </p>

            <p class=\"phone\">
        <input name=\"phone\" type=\"text\" class=\"validate[required,custom[phone]] feedback-input\" id=\"phone\" placeholder=\"Phone\" />
      </p>
      
      
      <div class=\"submit\">
        <input type=\"submit\" value=\"SEND\" id=\"button-blue\"/>
        <div class=\"ease\"></div>
      </div>
    </form>
  </div>
  {{form(formReserver)}}
  {{form_end(formReserver)}}


{% endblock %}", "prestation/reserver.html.twig", "C:\\Users\\vasconcl\\Documents\\workspace\\Comeleon_estheticienne\\templates\\prestation\\reserver.html.twig");
    }
}
