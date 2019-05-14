<?php

/* form/recap.html.twig */
class __TwigTemplate_3b21bf9dcc8b604bd4e2d46d5048cc36c345549e7dac8eeac5e7df3771ecd43b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form/recap.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/recap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/recap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <h1 class=\"display-3 text-center\">BILLETTERIE</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">

            <div class=\"card-header\">Récapitulatif des billets</div>
            <div class=\"card-body\">
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pays</th>
                    <th>Prix (en €)</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 24, $this->source); })()), "billets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["billet"]) {
            // line 25
            echo "                    <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "pays", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "prix", array()), "html", null, true);
            echo "</td>
                    </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['billet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </tbody>
            </table>
            <div class=\"card-header\">Récapitulatif de la commande</div>
            <div class=\"card-body\">
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Nombre de billet(s)</th>
                    <th>Adresse email</th>
                    <th>Prix Total(en €)</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 46, $this->source); })()), "NbBillet", array()) - 1), "html", null, true);
        echo "</td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
                    <td id=\"total\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 48, $this->source); })()), "prixTotal", array()), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>

            <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("success", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 53, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <script
                        src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                        data-key=\"pk_test_kkpH5Knrf26xwya6kRvIHAw4\"
                        data-amount=\"";
        // line 57
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 57, $this->source); })()), "prixTotal", array()) * 100), "html", null, true);
        echo "\"
                        data-name=\"Stripe.com\"
                        data-description=\"Example charge\"
                        data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
                        data-locale=\"auto\"
                        data-zip-code=\"true\">
                </script>
            </form>
            <br><br><br>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/recap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 57,  135 => 53,  127 => 48,  123 => 47,  119 => 46,  102 => 31,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  79 => 25,  75 => 24,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


    <h1 class=\"display-3 text-center\">BILLETTERIE</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">

            <div class=\"card-header\">Récapitulatif des billets</div>
            <div class=\"card-body\">
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pays</th>
                    <th>Prix (en €)</th>
                </tr>
                </thead>
                <tbody>
                {% for billet in commande.billets %}
                    <tr>
                    <td>{{ billet.nom }}</td>
                    <td>{{ billet.prenom }}</td>
                    <td>{{ billet.pays }}</td>
                    <td>{{ billet.prix }}</td>
                    </tr>{% endfor %}
                </tbody>
            </table>
            <div class=\"card-header\">Récapitulatif de la commande</div>
            <div class=\"card-body\">
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Nombre de billet(s)</th>
                    <th>Adresse email</th>
                    <th>Prix Total(en €)</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>{{ commande.NbBillet -1}}</td>
                    <td>{{ commande.email }}</td>
                    <td id=\"total\">{{ commande.prixTotal }}</td>
                </tr>
                </tbody>
            </table>

            <form action=\"{{ path('success', { 'id': commande.id }) }}\" method=\"POST\">
                <script
                        src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                        data-key=\"pk_test_kkpH5Knrf26xwya6kRvIHAw4\"
                        data-amount=\"{{ commande.prixTotal *100 }}\"
                        data-name=\"Stripe.com\"
                        data-description=\"Example charge\"
                        data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
                        data-locale=\"auto\"
                        data-zip-code=\"true\">
                </script>
            </form>
            <br><br><br>
        </div>

    </div>
{% endblock %}


", "form/recap.html.twig", "C:\\Users\\Théo\\projet4\\templates\\form\\recap.html.twig");
    }
}
