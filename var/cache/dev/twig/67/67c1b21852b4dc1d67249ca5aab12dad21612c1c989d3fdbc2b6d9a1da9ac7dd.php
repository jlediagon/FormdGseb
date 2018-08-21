<?php

/* @GSEBHistorique/History/index.html.twig */
class __TwigTemplate_da557d206eaff2e0a137615e71d95c30fdaa486ff8a921df2a5d44f799494039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GSEBCore/layout.html.twig", "@GSEBHistorique/History/index.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBHistorique/History/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBHistorique/History/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    
        <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_core_home");
        echo "\">Accueil</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_homepage");
        echo "\">Historique</a></li>
            <li><a href=\"#\">Contact</a></li>
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
    <h2>Liste des Demandes</h2>

    <ul class=\"list-group\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listDemandes"]) ? $context["listDemandes"] : $this->getContext($context, "listDemandes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 30
            echo "            ";
            if (($this->getAttribute($context["demande"], "etat", array()) == 1)) {
                // line 31
                echo "                <li class=\"list-group\" >
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_view", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "sujet", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "prenom", array()), "html", null, true);
                echo ",
                    le ";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                        <button type=\"button\" class=\"btn btn-success\" type=\"button\" >Demande validée</button>
                </li>
            ";
            }
            // line 40
            echo "
            ";
            // line 41
            if (($this->getAttribute($context["demande"], "etat", array()) == 2)) {
                // line 42
                echo "                <li class=\"list-group\" >
                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_view", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "sujet", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "prenom", array()), "html", null, true);
                echo ",
                    le ";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                        <button type=\"button\" class=\"btn btn-warning\" type=\"button\" >En cours de validation</button>

                </li>
            ";
            }
            // line 52
            echo "            ";
            if (($this->getAttribute($context["demande"], "etat", array()) == 3)) {
                // line 53
                echo "                <li class=\"list-group\" >
                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_view", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "sujet", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "prenom", array()), "html", null, true);
                echo ",
                    le ";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                    <button type=\"button\" class=\"btn btn-danger\" type=\"button\" >Demande non validée</button>
                </li>
            ";
            }
            // line 62
            echo "
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <li class=\"list-group\">Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBHistorique/History/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 66,  198 => 64,  192 => 62,  185 => 58,  179 => 57,  174 => 55,  170 => 54,  167 => 53,  164 => 52,  156 => 47,  150 => 46,  145 => 44,  141 => 43,  138 => 42,  136 => 41,  133 => 40,  126 => 36,  120 => 35,  115 => 33,  111 => 32,  108 => 31,  105 => 30,  100 => 29,  94 => 25,  85 => 24,  69 => 17,  62 => 13,  50 => 3,  41 => 2,  11 => 1,);
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
{% block navbar %}

    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    
        <a class=\"navbar-brand\" href=\"{{ path('gseb_core_home') }}\">Accueil</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"{{ path('gseb_historique_homepage') }}\">Historique</a></li>
            <li><a href=\"#\">Contact</a></li>
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
{% endblock %}

{% block body %}

    <h2>Liste des Demandes</h2>

    <ul class=\"list-group\">
        {% for demande in listDemandes %}
            {% if demande.etat == 1 %}
                <li class=\"list-group\" >
                    <a href=\"{{ path('gseb_historique_view', {'id': demande.id}) }}\">
                    {{ demande.sujet }}
                    </a>
                    par {{ demande.contact.nom }} {{ demande.contact.prenom }},
                    le {{ demande.date|date('d/m/Y') }}
                        <button type=\"button\" class=\"btn btn-success\" type=\"button\" >Demande validée</button>
                </li>
            {% endif %}

            {% if demande.etat == 2 %}
                <li class=\"list-group\" >
                    <a href=\"{{ path('gseb_historique_view', {'id': demande.id}) }}\">
                    {{ demande.sujet }}
                    </a>
                    par {{ demande.contact.nom }} {{ demande.contact.prenom }},
                    le {{ demande.date|date('d/m/Y') }}
                        <button type=\"button\" class=\"btn btn-warning\" type=\"button\" >En cours de validation</button>

                </li>
            {% endif %}
            {% if demande.etat == 3 %}
                <li class=\"list-group\" >
                    <a href=\"{{ path('gseb_historique_view', {'id': demande.id}) }}\">
                    {{ demande.sujet }}
                    </a>
                    par {{ demande.contact.nom }} {{ demande.contact.prenom }},
                    le {{ demande.date|date('d/m/Y') }}
                    <button type=\"button\" class=\"btn btn-danger\" type=\"button\" >Demande non validée</button>
                </li>
            {% endif %}

            {% else %}
            <li class=\"list-group\">Pas (encore !) d'annonces</li>
        {% endfor %}
  </ul>
{% endblock %}
", "@GSEBHistorique/History/index.html.twig", "/var/www/html/FormdGseb/src/GSEB/HistoriqueBundle/Resources/views/History/index.html.twig");
    }
}
