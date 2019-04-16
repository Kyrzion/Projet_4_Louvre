<?php

/* form/home.html.twig */
class __TwigTemplate_142f322f1e6d1985b1aea82d4c527e6c7a08366b2476a72b3ca24731273b4700 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\">

  <center><h1 class=\"display-3\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</h1>
  <p class=\"lead\">Achetez vos billets en ligne</p>
  <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
        echo "\"><button type=\"button\" class=\"btn btn-outline-primary\">Billetterie</button></a></center>
  <hr class=\"my-4\">
 <center> <p>Exposition du moment: Un rêve d'Italie</p>
  <img src=\"https://www.italieaparis.net/actualite/public/art/image16551.jpg\"></center>
</div>

    <footer class=\"dark bg-primary pt-4\">

        <!-- Footer Links -->
        <div class=\"container-fluid text-center text-md-left\">

            <!-- Grid row -->
            <div class=\"row\">

                <!-- Grid column -->
                <div class=\"col-md-6 mt-md-0 mt-3\">

                    <!-- Content -->
                    <h5 class=\"text-uppercase text-secondary\">Musée du Louvre - Billetterie</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>

                </div>
                <!-- Grid column -->

                <hr class=\"clearfix w-100 d-md-none pb-3\">

                <!-- Grid column -->
                <div class=\"col-md-3 mb-md-0 mb-3\">

                    <!-- Links -->
                    <h5 class=\"text-uppercase text-secondary\">Liens</h5>

                    <ul class=\"text-secondary list-unstyled \">
                        <li>
                            <a href=\"#!\" class=\"text-secondary\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-secondary\">Billetterie</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-secondary\">Site Officiel</a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class=\"footer-copyright text-center py-3 text-secondary\">© 2019 Copyright - BERTET Théo
        </div>
        <!-- Copyright -->

    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  57 => 5,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"jumbotron\">

  <center><h1 class=\"display-3\">{{ title }}</h1>
  <p class=\"lead\">Achetez vos billets en ligne</p>
  <a href=\"{{path('form')}}\"><button type=\"button\" class=\"btn btn-outline-primary\">Billetterie</button></a></center>
  <hr class=\"my-4\">
 <center> <p>Exposition du moment: Un rêve d'Italie</p>
  <img src=\"https://www.italieaparis.net/actualite/public/art/image16551.jpg\"></center>
</div>

    <footer class=\"dark bg-primary pt-4\">

        <!-- Footer Links -->
        <div class=\"container-fluid text-center text-md-left\">

            <!-- Grid row -->
            <div class=\"row\">

                <!-- Grid column -->
                <div class=\"col-md-6 mt-md-0 mt-3\">

                    <!-- Content -->
                    <h5 class=\"text-uppercase text-secondary\">Musée du Louvre - Billetterie</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>

                </div>
                <!-- Grid column -->

                <hr class=\"clearfix w-100 d-md-none pb-3\">

                <!-- Grid column -->
                <div class=\"col-md-3 mb-md-0 mb-3\">

                    <!-- Links -->
                    <h5 class=\"text-uppercase text-secondary\">Liens</h5>

                    <ul class=\"text-secondary list-unstyled \">
                        <li>
                            <a href=\"#!\" class=\"text-secondary\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-secondary\">Billetterie</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-secondary\">Site Officiel</a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class=\"footer-copyright text-center py-3 text-secondary\">© 2019 Copyright - BERTET Théo
        </div>
        <!-- Copyright -->

    </footer>
{% endblock %}
", "form/home.html.twig", "C:\\Users\\Théo\\projet4\\templates\\form\\home.html.twig");
    }
}
