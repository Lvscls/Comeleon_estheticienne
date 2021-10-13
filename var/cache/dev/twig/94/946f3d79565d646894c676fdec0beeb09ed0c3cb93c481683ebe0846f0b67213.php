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

/* base.html.twig */
class __TwigTemplate_0f327d49688b58f1e33853614bd84c7c885ba9d710285b3da6b0905aec040610 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title></title>
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/accueil.css\" />
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    </head>
    <body>
    <header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"\">Beautybae</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"accueil\">Accueil
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Présentation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"prestation\">Prestations</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"avis\">Avis</a>
        </li>
                <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"contact\">Contact</a>
        </li>
      </ul>
      <form class=\"d-flex\">
        <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Rechercher\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
    </header>
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 48,  99 => 47,  91 => 49,  89 => 47,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title></title>
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/accueil.css\" />
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    </head>
    <body>
    <header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"\">Beautybae</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"accueil\">Accueil
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Présentation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"prestation\">Prestations</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"avis\">Avis</a>
        </li>
                <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"contact\">Contact</a>
        </li>
      </ul>
      <form class=\"d-flex\">
        <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Rechercher\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
    </header>
    {% block body%}
    {% endblock %}

", "base.html.twig", "C:\\Users\\zabilin\\Desktop\\workspace\\Comeleon_estheticienne\\templates\\base.html.twig");
    }
}
