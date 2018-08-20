<?php

/* @GSEBHistorique/History/view.html.twig */
class __TwigTemplate_e6efe7448ea639bbee7bb0d29752c9fd2f119dd0e122019a5133588979c8845b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GSEBCore/layout.html.twig", "@GSEBHistorique/History/view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GSEBCore/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBHistorique/History/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBHistorique/History/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "sujet", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "prenom", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    Action :  ";
        // line 10
        if (($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "action", array()) == 1)) {
            echo " Ajout d'un équipement <br> ";
        }
        // line 11
        echo "              ";
        if (($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "action", array()) == 2)) {
            echo " Modification d'un équipement <br> ";
        }
        // line 12
        echo "              ";
        if (($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "action", array()) == 3)) {
            echo " Suppression d'un équipement <br> ";
        }
        // line 13
        echo "    Nom de l'équipement : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "object", array()), "name", array()), "html", null, true);
        echo " <br>
    Contact : 
    <ul>
      <li>  Identité : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "prenom", array()), "html", null, true);
        echo " </li>
      <li>  Adresse mail : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "mail", array()), "html", null, true);
        echo " </li>
      <li>  Telephone : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "telephone", array()), "html", null, true);
        echo " </li>      
      <li>  Societe : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "societe", array()), "html", null, true);
        echo " </li>
      <li>  Poste : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "contact", array()), "fonction", array()), "html", null, true);
        echo " </li>  
    </ul>

  </div>

  <p>
    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_homepage");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
  </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBHistorique/History/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  87 => 16,  80 => 13,  75 => 12,  70 => 11,  66 => 10,  56 => 7,  52 => 6,  49 => 5,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@GSEBCore/layout.html.twig\" %}

{% block body %}
{# src/SEB/PlatformBundle/Resources/view/Advert/view.html.twig #}

  <h2>{{ demande.sujet }}</h2>
  <i>Par {{ demande.contact.nom }} {{ demande.contact.prenom }}, le {{ demande.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    Action :  {% if demande.action == 1 %} Ajout d'un équipement <br> {% endif %}
              {% if demande.action == 2 %} Modification d'un équipement <br> {% endif %}
              {% if demande.action == 3 %} Suppression d'un équipement <br> {% endif %}
    Nom de l'équipement : {{ demande.object.name }} <br>
    Contact : 
    <ul>
      <li>  Identité : {{ demande.contact.nom }} {{ demande.contact.prenom }} </li>
      <li>  Adresse mail : {{ demande.contact.mail }} </li>
      <li>  Telephone : {{ demande.contact.telephone }} </li>      
      <li>  Societe : {{ demande.contact.societe }} </li>
      <li>  Poste : {{ demande.contact.fonction }} </li>  
    </ul>

  </div>

  <p>
    <a href=\"{{ path('gseb_historique_homepage') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
  </p>
{% endblock %}
", "@GSEBHistorique/History/view.html.twig", "/var/www/html/FormdGseb/src/GSEB/HistoriqueBundle/Resources/views/History/view.html.twig");
    }
}
