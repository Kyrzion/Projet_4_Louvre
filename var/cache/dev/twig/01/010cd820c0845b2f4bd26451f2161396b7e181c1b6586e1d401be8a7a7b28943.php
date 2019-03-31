<?php

/* form/FormBillets.html.twig */
class __TwigTemplate_effb18dbf629cdbc1834e8a590dca95d05382d61df033e3b2bc9c8ade6d40289 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form/FormBillets.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/FormBillets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/FormBillets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    <h1 class=\"display-3 text-center\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <section class=\"billetterie\">


                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

                    <div class=\"name\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 23, $this->source); })()), "nom", array()), 'row');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 24, $this->source); })()), "prenom", array()), 'row');
        echo "
                    </div>

                    <div class=\"calendar\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 28, $this->source); })()), "dateNaissance", array()), 'row');
        echo "
                        <i>Format: YYYY-MM-JJ</i>
                    </div>

                    <div class=\"reduced_price\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 33, $this->source); })()), "reduction", array()), 'row');
        echo "
                        <i>Pour toutes réductions, il faudra présenter une pièce justificative à l'entrée du musée.</i>
                    </div>


                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                </section>
                <br><br><br>
            </div>

        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

    <script>

            flatpickr(\".js-datepicker\", {});

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/FormBillets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 48,  145 => 47,  126 => 38,  118 => 33,  110 => 28,  103 => 24,  99 => 23,  93 => 20,  82 => 12,  78 => 10,  69 => 9,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
{% endblock %}

{% block body %}


    <h1 class=\"display-3 text-center\">{{ title }}</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <section class=\"billetterie\">


                    {{ form_start(formBillet) }}

                    <div class=\"name\">
                        {{ form_row(formBillet.nom) }}
                        {{ form_row(formBillet.prenom) }}
                    </div>

                    <div class=\"calendar\">
                        {{ form_row(formBillet.dateNaissance) }}
                        <i>Format: YYYY-MM-JJ</i>
                    </div>

                    <div class=\"reduced_price\">
                        {{ form_row(formBillet.reduction) }}
                        <i>Pour toutes réductions, il faudra présenter une pièce justificative à l'entrée du musée.</i>
                    </div>


                    {{ form_end(formBillet) }}
                </section>
                <br><br><br>
            </div>

        </div>
    </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

    <script>

            flatpickr(\".js-datepicker\", {});

    </script>
{% endblock %}
", "form/FormBillets.html.twig", "C:\\Users\\Théo\\projet4\\templates\\form\\FormBillets.html.twig");
    }
}
