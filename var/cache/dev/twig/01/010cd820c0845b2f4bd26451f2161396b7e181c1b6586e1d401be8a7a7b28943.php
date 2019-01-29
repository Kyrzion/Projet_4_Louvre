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
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/FormBillets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/FormBillets.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 5, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

<h1 class=\"display-3 text-center\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>
<link rel=\"stylesheet\" href=\"calendar.css\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-8\">
      <section class=\"billetterie\">


    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 18, $this->source); })()), 'form_start');
        echo "

      <div class=\"name\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 21, $this->source); })()), "nom", array()), 'row');
        echo "
              ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 22, $this->source); })()), "prenom", array()), 'row');
        echo "
      </div>

      <div class=\"birthdate\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 26, $this->source); })()), "dateNaissance", array()), 'row');
        echo "
      </div>

      <div class=\"reduced_price\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 30, $this->source); })()), "reduction", array()), 'row');
        echo "
      </div>

      <button type=\"submit\" class=\"btn btn-primary\">Suivant</button><br><br><br>
      <h6> Etape 2/3:</h6>
      <div class=\"progress\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%\"></div>
      </div>

      ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBillet"]) || array_key_exists("formBillet", $context) ? $context["formBillet"] : (function () { throw new Twig_Error_Runtime('Variable "formBillet" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
    </section><br><br><br>
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
</div>
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
        return array (  127 => 39,  115 => 30,  108 => 26,  101 => 22,  97 => 21,  91 => 18,  80 => 10,  76 => 8,  67 => 7,  48 => 3,  38 => 1,  36 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ title }}{% endblock %}

{% form_theme formBillet 'bootstrap_4_layout.html.twig' %}

{% block body %}


<h1 class=\"display-3 text-center\">{{ title }}</h1>
<link rel=\"stylesheet\" href=\"calendar.css\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-8\">
      <section class=\"billetterie\">


    {{ form_start(formBillet) }}

      <div class=\"name\">
            {{ form_row(formBillet.nom) }}
              {{ form_row(formBillet.prenom) }}
      </div>

      <div class=\"birthdate\">
            {{ form_row(formBillet.dateNaissance) }}
      </div>

      <div class=\"reduced_price\">
            {{ form_row(formBillet.reduction) }}
      </div>

      <button type=\"submit\" class=\"btn btn-primary\">Suivant</button><br><br><br>
      <h6> Etape 2/3:</h6>
      <div class=\"progress\">
        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%\"></div>
      </div>

      {{ form_end(formBillet) }}
    </section><br><br><br>
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
</div>
{% endblock %}
", "form/FormBillets.html.twig", "C:\\Users\\Théo\\projet4\\templates\\form\\FormBillets.html.twig");
    }
}
