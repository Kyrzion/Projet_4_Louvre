<?php

/* Mails/commandeLouvre.html.twig */
class __TwigTemplate_8289bd2b51c2390d1153401f01e978293e8211960d0d0cb157eea0dd55404f03 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Mails/commandeLouvre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Mails/commandeLouvre.html.twig"));

        // line 1
        echo "<page>
    <style type=\"text/css\">
        .underline{
            text-decoration: underline;
        }
    </style>

    <div id=\"visiteur\" class=\"content-box\">
        <h1>Musée du louvre</h1>
        <span class=\"underline\">Visiteur :</span><br/><br/>
        <span>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new Twig_Error_Runtime('Variable "billet" does not exist.', 11, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new Twig_Error_Runtime('Variable "billet" does not exist.', 11, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</span><br/><br/>
        <span class=\"underline\">Type de billet :</span><br/><br/>
        <span>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 13, $this->source); })()), "formule", array()), "html", null, true);
        echo "></span><br/><br/>
        <span class=\"underline\">Date de la visite :</span><br/><br/>
        <span>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 15, $this->source); })()), "commandeDate", array()), "d/m/Y"), "html", null, true);
        echo "</span><br/><br/>
        <span class=\"underline\">Tarif :</span><br/><br/>
        <span>";
        // line 17
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new Twig_Error_Runtime('Variable "billet" does not exist.', 17, $this->source); })()), "prix", array()) / 100), "html", null, true);
        echo "€</span><br/><br/>
        <span class=\"underline\">Tarif réduit :</span><br/><br/>
        <span>";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["billet"]) || array_key_exists("billet", $context) ? $context["billet"] : (function () { throw new Twig_Error_Runtime('Variable "billet" does not exist.', 19, $this->source); })()), "redution", array())) {
            echo "<strong style=\"color:red;\">Justificatif nécessaire</strong>
              ";
        } else {
            // line 20
            echo "Non appliquable";
        }
        echo "</span><br/><br/>
        <span class=\"underline\">Commande :</span><br/><br/>
        <span>>n°";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 22, $this->source); })()), "id", array()), "html", null, true);
        echo "</span>
    </div>
    <page_footer>
        <hr/>
        <small>Copyright 2019 - Louvre Billetterie</small><br/>
    </page_footer>
</page>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mails/commandeLouvre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  68 => 20,  63 => 19,  58 => 17,  53 => 15,  48 => 13,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<page>
    <style type=\"text/css\">
        .underline{
            text-decoration: underline;
        }
    </style>

    <div id=\"visiteur\" class=\"content-box\">
        <h1>Musée du louvre</h1>
        <span class=\"underline\">Visiteur :</span><br/><br/>
        <span>{{ billet.nom }} {{ billet.prenom }}</span><br/><br/>
        <span class=\"underline\">Type de billet :</span><br/><br/>
        <span>{{ commande.formule }}></span><br/><br/>
        <span class=\"underline\">Date de la visite :</span><br/><br/>
        <span>{{ commande.commandeDate|date(\"d/m/Y\") }}</span><br/><br/>
        <span class=\"underline\">Tarif :</span><br/><br/>
        <span>{{ billet.prix / 100 }}€</span><br/><br/>
        <span class=\"underline\">Tarif réduit :</span><br/><br/>
        <span>{% if billet.redution %}<strong style=\"color:red;\">Justificatif nécessaire</strong>
              {% else %}Non appliquable{% endif %}</span><br/><br/>
        <span class=\"underline\">Commande :</span><br/><br/>
        <span>>n°{{ commande.id }}</span>
    </div>
    <page_footer>
        <hr/>
        <small>Copyright 2019 - Louvre Billetterie</small><br/>
    </page_footer>
</page>
", "Mails/commandeLouvre.html.twig", "C:\\Users\\Théo\\projet4\\templates\\Mails\\commandeLouvre.html.twig");
    }
}
