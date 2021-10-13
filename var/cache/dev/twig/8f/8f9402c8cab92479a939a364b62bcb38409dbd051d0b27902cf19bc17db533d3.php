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

/* beautybae/accueil.html.twig */
class __TwigTemplate_de8e60b98e480bc0024c045dad47ee0efcc4c45cff1b1ee7a8719f2099df08d3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "beautybae/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "beautybae/accueil.html.twig", 1);
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
   <section id=\"header\" class=\"jumbotron text-center\">
     <h1 class=\"display-3\">Beautybae</h1>
     <p class=\"lead\">Institut de beauté</p>
</section>
  
<section id=\"gallery\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-lg-4 mb-4\">
    <div class=\"card\">
      <img src=\"assets/Image/laser.jpg\" alt=\"\" class=\"card-img-top\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Présentation</h5>
        <p class=\"card-text\">Esthéticienne à Vernon Beautybae, vous propose des soins à domicile et au salon près de Saint-Marcel. Riche de 20 années d’expérience, votre esthéticienne de Beautybae vous propose des soins de beauté et des épilations dans l'institut ou à domicile à Vernon dans l'Eure (27).</p>
       <a href=\"\" class=\"btn btn-outline-success btn-sm\">En savoir plus</a>
      </div>
     </div>
    </div>
  <div class=\"col-lg-4 mb-4\">
  <div class=\"card\">
      <img src=\"assets/Image/maillot.jpg\" alt=\"\" class=\"card-img-top\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Prestations</h5>
        <p class=\"card-text\">Nous proposons des prestation pour femme et homme. De l'épilation aux soins du corps ou du visage. Notre large choix de prestation vous assure de trouver ce qu'il faut.</p>
       <a href=\"\" class=\"btn btn-outline-success btn-sm\">Voir les prestations</a>
      </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
    <div class=\"card\">
      <img src=\"assets/Image/calvasse.jpg\" alt=\"\" class=\"card-img-top\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Votre avis compte</h5>
        <p class=\"card-text\">Afin de vous proposer le meilleur service possible. Nous prenons en compte vos avis et vos commentaires.</p>
       <a href=\"\" class=\"btn btn-outline-success btn-sm\">Laisser un avis</a>
      </div>
     </div>
    </div>
  </div>
</div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "beautybae/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

   <section id=\"header\" class=\"jumbotron text-center\">
     <h1 class=\"display-3\">Beautybae</h1>
     <p class=\"lead\">Institut de beauté</p>
</section>
  
<section id=\"gallery\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-lg-4 mb-4\">
    <div class=\"card\">
      <img src=\"assets/Image/laser.jpg\" alt=\"\" class=\"card-img-top\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Présentation</h5>
        <p class=\"card-text\">Esthéticienne à Vernon Beautybae, vous propose des soins à domicile et au salon près de Saint-Marcel. Riche de 20 années d’expérience, votre esthéticienne de Beautybae vous propose des soins de beauté et des épilations dans l'institut ou à domicile à Vernon dans l'Eure (27).</p>
       <a href=\"\" class=\"btn btn-outline-success btn-sm\">En savoir plus</a>
      </div>
     </div>
    </div>
  <div class=\"col-lg-4 mb-4\">
  <div class=\"card\">
      <img src=\"assets/Image/maillot.jpg\" alt=\"\" class=\"card-img-top\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Prestations</h5>
        <p class=\"card-text\">Nous proposons des prestation pour femme et homme. De l'épilation aux soins du corps ou du visage. Notre large choix de prestation vous assure de trouver ce qu'il faut.</p>
       <a href=\"\" class=\"btn btn-outline-success btn-sm\">Voir les prestations</a>
      </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
    <div class=\"card\">
      <img src=\"assets/Image/calvasse.jpg\" alt=\"\" class=\"card-img-top\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Votre avis compte</h5>
        <p class=\"card-text\">Afin de vous proposer le meilleur service possible. Nous prenons en compte vos avis et vos commentaires.</p>
       <a href=\"\" class=\"btn btn-outline-success btn-sm\">Laisser un avis</a>
      </div>
     </div>
    </div>
  </div>
</div>
</section>

{% endblock %}", "beautybae/accueil.html.twig", "C:\\Users\\vasconcl\\Documents\\workspace\\Comeleon_estheticienne\\templates\\beautybae\\accueil.html.twig");
    }
}
