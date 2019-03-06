<?php

/* form/index.html.twig */
class __TwigTemplate_3898e9f5cf261f20954aba246926c174f4066f957d02494f4ceb52b2722b6743 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/index.html.twig"));

        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 6, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

<h1 class=\"display-3 text-center\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h1>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-8\">
            <section class=\"billetterie\">


                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 23, $this->source); })()), 'form_start');
        echo "

                <div class=\"calendar\">
                     ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 26, $this->source); })()), "DateCommande", array()), 'row');
        echo "
                </div>

                <div class=\"formule\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 30, $this->source); })()), "Formule", array()), 'row');
        echo "
                </div>

                <ul class=\"billet\"
                    data-prototype=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 34, $this->source); })()), "billets", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                    <li>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 35, $this->source); })()), "NbBillet", array()), 'row');
        echo "</li>
                </ul>

                <div class=\"email\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 39, $this->source); })()), "email", array()), 'row');
        echo "
                </div>


                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
            </section>
            <br><br><br>
        </div>

        <div class=\"col-4\">

        </div>
    </div>
</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 58
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

        <script>
            var \$collectionHolder;

           // var pickr = flatpickr(\".js-datepicker\", {\"disable\": [\"2019-01-01\", \"2019-04-22\", \"2019-05-01\",\"2019-05-08\",\"2019-05-30\",\"2019-06-10\",\"2019-07-14\",\"2019-08-15\",\"2019-11-01\",\"2019-11-11\",\"2019-12-25\",
           //
           //          function(date) {
           //              // return true to disable
           //              return (date.getDay() === 2 || date.getDay() === 0);
           //          }
           //      ],
           //      \"locale\": {
           //          \"firstDayOfWeek\": 1 // start week on Monday
           //      },
           //      dateFormat: \"Y-m-d\",
           //  });

            pickr.onChange(function(selectedDates, dateStr, instance){

            });

            \$(document).ready(function () {

                \$('#commande_DateCommande').flatpickr();

                \$('#commande_DateCommande').on('change', function (e) {

                    console.log(\$(e).val());
                     \$.get(\"/limitCommande/2019-02-20\", function (data, status) {
                         console.log(data, status);
                        if (data.quantity > 3){
                            \$('#commande_valider').prop('disabled', true);
                            alert(\"Déjà plus de 1000 billets vendus pour cette date. Commande impossible.\");
                        }
                        else {
                            \$('#commande_valider').prop('disabled', false);
                        }
                    });
                });

                \$('#commande_NbBillet').on('change', function (e) {
                    e.preventDefault();
                    \$('li.deleteOnChangeForm').remove();
                    // Get the ul that holds the collection of etapes
                    \$collectionHolder = \$('ul.billet');

                    // count the current form inputs we have (e.g. 2), use that as the new
                    // index when inserting a new item (e.g. 2)
                    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                    var NbBillet = \$('#commande_NbBillet').val() - 1;
                    console.log(NbBillet);
                    for (var i = 0; i < NbBillet; i++) {
                        addBilletForm(\$collectionHolder);
                    }
                    // \$addBilletLink.on('click', function(e) {
                    //     // prevent the link from creating a \"#\" on the URL
                    //     e.preventDefault();
                    //
                    //     // add a new tag form (see next code block)
                    //     addBilletForm(\$collectionHolder, \$newLinkLi);
                    //
                    //     addBilletForm(\$('#commande_NbBillet').val() - 1);
                    // });
                });

                function addBilletForm(\$collectionHolder) {
                    var prototype = \$collectionHolder.data('prototype');
                    var index = \$collectionHolder.data('index');
                    var newForm = prototype;
                    newForm = newForm.replace(/__name__/g, index);
                    \$collectionHolder.data('index', index + 1);
                    var \$newFormLi = \$('<li class=\"deleteOnChangeForm\"></li>').append(newForm);
                    \$('ul.billet').append(\$newFormLi);
                };

            });
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  186 => 56,  177 => 55,  156 => 43,  149 => 39,  142 => 35,  138 => 34,  131 => 30,  124 => 26,  118 => 23,  107 => 15,  103 => 13,  94 => 12,  80 => 8,  71 => 7,  50 => 3,  40 => 1,  38 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ title }}
{% endblock %}

{% form_theme formCommande 'bootstrap_4_layout.html.twig' %}
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


                {{ form_start(formCommande) }}

                <div class=\"calendar\">
                     {{ form_row(formCommande.DateCommande) }}
                </div>

                <div class=\"formule\">
                    {{ form_row(formCommande.Formule) }}
                </div>

                <ul class=\"billet\"
                    data-prototype=\"{{ form_widget(formCommande.billets.vars.prototype)|e('html_attr') }}\">
                    <li>{{ form_row(formCommande.NbBillet) }}</li>
                </ul>

                <div class=\"email\">
                    {{ form_row(formCommande.email) }}
                </div>


                {{ form_end(formCommande) }}
            </section>
            <br><br><br>
        </div>

        <div class=\"col-4\">

        </div>
    </div>
</div>
    {% endblock %}

    {% block javascripts %}
        {{ parent() }}
        {#<script src=\"{{  absolute_url(asset('public/js/sousFormulaire.js')) }}\"></script>#}
        <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

        <script>
            var \$collectionHolder;

           // var pickr = flatpickr(\".js-datepicker\", {\"disable\": [\"2019-01-01\", \"2019-04-22\", \"2019-05-01\",\"2019-05-08\",\"2019-05-30\",\"2019-06-10\",\"2019-07-14\",\"2019-08-15\",\"2019-11-01\",\"2019-11-11\",\"2019-12-25\",
           //
           //          function(date) {
           //              // return true to disable
           //              return (date.getDay() === 2 || date.getDay() === 0);
           //          }
           //      ],
           //      \"locale\": {
           //          \"firstDayOfWeek\": 1 // start week on Monday
           //      },
           //      dateFormat: \"Y-m-d\",
           //  });

            pickr.onChange(function(selectedDates, dateStr, instance){

            });

            \$(document).ready(function () {

                \$('#commande_DateCommande').flatpickr();

                \$('#commande_DateCommande').on('change', function (e) {

                    console.log(\$(e).val());
                     \$.get(\"/limitCommande/2019-02-20\", function (data, status) {
                         console.log(data, status);
                        if (data.quantity > 3){
                            \$('#commande_valider').prop('disabled', true);
                            alert(\"Déjà plus de 1000 billets vendus pour cette date. Commande impossible.\");
                        }
                        else {
                            \$('#commande_valider').prop('disabled', false);
                        }
                    });
                });

                \$('#commande_NbBillet').on('change', function (e) {
                    e.preventDefault();
                    \$('li.deleteOnChangeForm').remove();
                    // Get the ul that holds the collection of etapes
                    \$collectionHolder = \$('ul.billet');

                    // count the current form inputs we have (e.g. 2), use that as the new
                    // index when inserting a new item (e.g. 2)
                    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                    var NbBillet = \$('#commande_NbBillet').val() - 1;
                    console.log(NbBillet);
                    for (var i = 0; i < NbBillet; i++) {
                        addBilletForm(\$collectionHolder);
                    }
                    // \$addBilletLink.on('click', function(e) {
                    //     // prevent the link from creating a \"#\" on the URL
                    //     e.preventDefault();
                    //
                    //     // add a new tag form (see next code block)
                    //     addBilletForm(\$collectionHolder, \$newLinkLi);
                    //
                    //     addBilletForm(\$('#commande_NbBillet').val() - 1);
                    // });
                });

                function addBilletForm(\$collectionHolder) {
                    var prototype = \$collectionHolder.data('prototype');
                    var index = \$collectionHolder.data('index');
                    var newForm = prototype;
                    newForm = newForm.replace(/__name__/g, index);
                    \$collectionHolder.data('index', index + 1);
                    var \$newFormLi = \$('<li class=\"deleteOnChangeForm\"></li>').append(newForm);
                    \$('ul.billet').append(\$newFormLi);
                };

            });
        </script>
    {% endblock %}


", "form/index.html.twig", "C:\\Users\\Théo\\projet4\\templates\\form\\index.html.twig");
    }
}
