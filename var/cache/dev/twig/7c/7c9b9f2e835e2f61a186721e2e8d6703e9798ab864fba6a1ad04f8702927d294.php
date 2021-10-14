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
class __TwigTemplate_52a0b7a3b10a80c10b155b14e5864aa3076ee2c2de72605424ec9ade2d1a913a extends Template
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
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"../assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/accueil.css\" />
                <link rel=\"stylesheet\" href=\"assets/css/prestation.css\" />
                 <link rel=\"stylesheet\" href=\"../assets/css/prestation.css\" />
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
          <a class=\"nav-link\" href=\"#\">Avis</a>
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
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  101 => 49,  93 => 51,  91 => 49,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title></title>
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"../assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/accueil.css\" />
                <link rel=\"stylesheet\" href=\"assets/css/prestation.css\" />
                 <link rel=\"stylesheet\" href=\"../assets/css/prestation.css\" />
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
          <a class=\"nav-link\" href=\"#\">Avis</a>
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
