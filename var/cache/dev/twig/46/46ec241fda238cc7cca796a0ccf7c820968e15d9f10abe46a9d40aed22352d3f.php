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
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
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

                    <ul class=\"billet\" data-prototype=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 33, $this->source); })()), "billets", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                            <li>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 34, $this->source); })()), "NbBillet", array()), 'row');
        echo "</li>
                    </ul>

                    <div class=\"email\">
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 38, $this->source); })()), "email", array()), 'row');
        echo "
                    </div>
                    <div class=\"submit\">
                       ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 41, $this->source); })()), "valider", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
                    </div>


                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommande"]) || array_key_exists("formCommande", $context) ? $context["formCommande"] : (function () { throw new Twig_Error_Runtime('Variable "formCommande" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
                </section>
                <br><br><br>
            </div>

            <div class=\"col-4\">
                <section class=\"recap\">
                    <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\">Récapitulatif</div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">BILLET 1:</h4>
                            <ul>
                                <li class=\"card-text\">BERTET</li>
                                <li class=\"card-text\">Théo</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                 </section>
             </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 71
        echo "    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
        var \$collectionHolder;

        \$(document).ready(function(){
            \$('#commande_NbBillet').on('change',function(e){
                e.preventDefault();
                \$('li.deleteOnChangeForm').remove();
                // Get the ul that holds the collection of etapes
                \$collectionHolder = \$('ul.billet');

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                var NbBillet = \$('#commande_NbBillet').val() - 1;
                console.log(NbBillet);
                for(var i = 0;i < NbBillet;i++)
                {
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
            function addBilletForm(\$collectionHolder){
                var prototype = \$collectionHolder.data('prototype');
                var index = \$collectionHolder.data('index');
                var newForm = prototype;
                newForm = newForm.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$newFormLi = \$('<li class=\"deleteOnChangeForm\"></li>').append(newForm);
                \$('ul.billet').append(\$newFormLi);
            };

        });

        \$(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
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
        return array (  207 => 71,  202 => 69,  193 => 68,  161 => 45,  154 => 41,  148 => 38,  141 => 34,  137 => 33,  131 => 30,  124 => 26,  118 => 23,  107 => 15,  103 => 13,  94 => 12,  80 => 8,  71 => 7,  50 => 3,  40 => 1,  38 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ title }}
{% endblock %}

{% form_theme formCommande 'bootstrap_4_layout.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
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

                    <ul class=\"billet\" data-prototype=\"{{ form_widget(formCommande.billets.vars.prototype)|e('html_attr') }}\">
                            <li>{{ form_row(formCommande.NbBillet) }}</li>
                    </ul>

                    <div class=\"email\">
                        {{ form_row(formCommande.email) }}
                    </div>
                    <div class=\"submit\">
                       {{ form_row(formCommande.valider, {'attr':{'class':'btn btn-primary'}}) }}
                    </div>


                    {{ form_end(formCommande) }}
                </section>
                <br><br><br>
            </div>

            <div class=\"col-4\">
                <section class=\"recap\">
                    <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\">Récapitulatif</div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">BILLET 1:</h4>
                            <ul>
                                <li class=\"card-text\">BERTET</li>
                                <li class=\"card-text\">Théo</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                 </section>
             </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {#<script src=\"{{  absolute_url(asset('public/js/sousFormulaire.js')) }}\"></script>#}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
        var \$collectionHolder;

        \$(document).ready(function(){
            \$('#commande_NbBillet').on('change',function(e){
                e.preventDefault();
                \$('li.deleteOnChangeForm').remove();
                // Get the ul that holds the collection of etapes
                \$collectionHolder = \$('ul.billet');

                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

                var NbBillet = \$('#commande_NbBillet').val() - 1;
                console.log(NbBillet);
                for(var i = 0;i < NbBillet;i++)
                {
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
            function addBilletForm(\$collectionHolder){
                var prototype = \$collectionHolder.data('prototype');
                var index = \$collectionHolder.data('index');
                var newForm = prototype;
                newForm = newForm.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$newFormLi = \$('<li class=\"deleteOnChangeForm\"></li>').append(newForm);
                \$('ul.billet').append(\$newFormLi);
            };

        });

        \$(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
{% endblock %}


", "form/index.html.twig", "C:\\Users\\Théo\\projet4\\templates\\form\\index.html.twig");
    }
}
