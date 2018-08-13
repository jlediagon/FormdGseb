<?php

/* @GSEBPlatform/Demande/listProperties.html.twig */
class __TwigTemplate_96258ed30906163ac791fb0ee5ecbb24468bfce58c7bc863d0ca3be181dc6506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Demande/listProperties.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sebplatform_body' => array($this, 'block_sebplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GSEBPlatform/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Demande/listProperties.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Demande/listProperties.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Selection du type d'objet 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_sebplatform_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sebplatform_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sebplatform_body"));

        // line 10
        echo "  
  <h2>Veuillez remplir le formulaire ci-dessous</h2>
  <form>
    <h4>Renseignement global</h4>
      <div class=\"form-group\">
        <label for=\"subjectRequest\">Sujet de la demande</label>
        <input class=\"form-control\" type=\"text\" placeholder=\"Ex : Installation d'un serveur dans la salle PA3, Baie 104\">
      </div>
    <h4>Renseignement sur l'équipement</h4>
      <div class=\"form-group\">
        <label for=\"nameEquip\">Nom de l'équipement</label>
        <input class=\"form-control\" type=\"text\" placeholder=\"Ex : pour un serveur : SE585875\">
      </div>
      <div class=\"form-group\">
      ";
        // line 25
        echo "        <label for=\"rackPosition\">Position dans le rack (En U)</label>
        <select multiple class=\"form-control\" id=\"rackPosition\">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class=\"form-group\">
      ";
        // line 36
        echo "        <label for=\"atom\">Occuppation dans l'U en profondeur</label>
        <select multiple class=\"form-control\" id=\"atom\">
          <option>Front</option>
          <option>Interior</option>
          <option>Back</option>
        </select>
      </div>
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
        foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
            // line 44
            echo "        <div class=\"form-group\">
          <label for=\"Attribut\"> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "name", array()), "html", null, true);
            echo " </label>
          <input class=\"form-control\" type=\"text\" placeholder=\"Renseigner 
            ";
            // line 47
            if (($this->getAttribute($context["carac"], "type", array()) == "uint")) {
                echo "un entier
            ";
            } elseif (($this->getAttribute(            // line 48
$context["carac"], "type", array()) == "date")) {
                echo "la date, au format YYYY-MM-DD
            ";
            } elseif (($this->getAttribute(            // line 49
$context["carac"], "type", array()) == "float")) {
                echo "un float
            ";
            } else {
                // line 50
                echo "une chaîne de caractère
            ";
            }
            // line 52
            echo "          \">
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    <h4>Contact installateur</h4>
      <div class=\"form-group\">
        <label for=\"name\">Nom</label>
        <input class=\"form-control\" type=\"text\" >
      </div>
      <div class=\"form-group\">
        <label for=\"prenom\">Prenom</label>
        <input class=\"form-control\" type=\"text\" >
      </div>
      <div class=\"form-group\">
        <label for=\"mail\">Email address</label>
        <input type=\"email\" class=\"form-control\" id=\"mail\" placeholder=\"name@example.com\">
      </div>
      <div class=\"form-group\">
        <label for=\"telephone\">Numero de téléphone</label>
        <input type=\"email\" class=\"form-control\" id=\"telephone\" placeholder=\"name@example.com\">
      </div>
      <div class=\"form-group\">
        <label for=\"societe\">Société</label>
        <input type=\"societe\" class=\"form-control\" id=\"societe\" placeholder=\"Groupe Seb\">
      </div>
      <div class=\"form-group\">
        <label for=\"Fonction\">Votre métier / Fonction</label>
        <input type=\"fonction\" class=\"form-control\" id=\"fonction\" placeholder=\"Technicien réseaux...\">
      </div>
      <div class=\"form-group\">
        <label for=\"Commentaire\">Espace Commentaire</label>
        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" placeholder=\"Si vous avez une remarque particulière à remonter quand à l'intégration de cet outil dans notre base de données\"></textarea>
      </div>
  <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_demande_recap");
        echo "\" class=\"btn btn-primary \" role=\"button\" >
        Valider            
      </a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Demande/listProperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 84,  144 => 55,  136 => 52,  132 => 50,  127 => 49,  123 => 48,  119 => 47,  114 => 45,  111 => 44,  107 => 43,  98 => 36,  86 => 25,  70 => 10,  61 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/GSEB/PlatformBundle/Resources/views/Action/modif.html.twig #}

{% extends \"@GSEBPlatform/layout.html.twig\" %}

{% block title %}
  Selection du type d'objet 
{% endblock %}

{% block sebplatform_body %}
  
  <h2>Veuillez remplir le formulaire ci-dessous</h2>
  <form>
    <h4>Renseignement global</h4>
      <div class=\"form-group\">
        <label for=\"subjectRequest\">Sujet de la demande</label>
        <input class=\"form-control\" type=\"text\" placeholder=\"Ex : Installation d'un serveur dans la salle PA3, Baie 104\">
      </div>
    <h4>Renseignement sur l'équipement</h4>
      <div class=\"form-group\">
        <label for=\"nameEquip\">Nom de l'équipement</label>
        <input class=\"form-control\" type=\"text\" placeholder=\"Ex : pour un serveur : SE585875\">
      </div>
      <div class=\"form-group\">
      {# Maybe insérer l'image d'une baie avec les U numérotés #}
        <label for=\"rackPosition\">Position dans le rack (En U)</label>
        <select multiple class=\"form-control\" id=\"rackPosition\">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class=\"form-group\">
      {# Maybe insérer l'image d'une baie avec les U numérotés #}
        <label for=\"atom\">Occuppation dans l'U en profondeur</label>
        <select multiple class=\"form-control\" id=\"atom\">
          <option>Front</option>
          <option>Interior</option>
          <option>Back</option>
        </select>
      </div>
      {% for carac in resultat %}
        <div class=\"form-group\">
          <label for=\"Attribut\"> {{ carac.name }} </label>
          <input class=\"form-control\" type=\"text\" placeholder=\"Renseigner 
            {% if carac.type == 'uint' %}un entier
            {% elseif carac.type == 'date' %}la date, au format YYYY-MM-DD
            {% elseif carac.type == 'float' %}un float
            {% else %}une chaîne de caractère
            {% endif %}
          \">
        </div>
      {% endfor %}
    <h4>Contact installateur</h4>
      <div class=\"form-group\">
        <label for=\"name\">Nom</label>
        <input class=\"form-control\" type=\"text\" >
      </div>
      <div class=\"form-group\">
        <label for=\"prenom\">Prenom</label>
        <input class=\"form-control\" type=\"text\" >
      </div>
      <div class=\"form-group\">
        <label for=\"mail\">Email address</label>
        <input type=\"email\" class=\"form-control\" id=\"mail\" placeholder=\"name@example.com\">
      </div>
      <div class=\"form-group\">
        <label for=\"telephone\">Numero de téléphone</label>
        <input type=\"email\" class=\"form-control\" id=\"telephone\" placeholder=\"name@example.com\">
      </div>
      <div class=\"form-group\">
        <label for=\"societe\">Société</label>
        <input type=\"societe\" class=\"form-control\" id=\"societe\" placeholder=\"Groupe Seb\">
      </div>
      <div class=\"form-group\">
        <label for=\"Fonction\">Votre métier / Fonction</label>
        <input type=\"fonction\" class=\"form-control\" id=\"fonction\" placeholder=\"Technicien réseaux...\">
      </div>
      <div class=\"form-group\">
        <label for=\"Commentaire\">Espace Commentaire</label>
        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" placeholder=\"Si vous avez une remarque particulière à remonter quand à l'intégration de cet outil dans notre base de données\"></textarea>
      </div>
  <a href=\"{{ path('gseb_platform_demande_recap')  }}\" class=\"btn btn-primary \" role=\"button\" >
        Valider            
      </a>

{% endblock %}", "@GSEBPlatform/Demande/listProperties.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Demande/listProperties.html.twig");
    }
}
