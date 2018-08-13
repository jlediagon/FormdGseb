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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Liste des Demandes</h2>

    <ul class=\"list-group\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listDemandes"]) ? $context["listDemandes"] : $this->getContext($context, "listDemandes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 8
            echo "        ";
            if (($this->getAttribute($context["demande"], "etat", array()) == 1)) {
                // line 9
                echo "            <li class=\"list-group\" >
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_view", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "title", array()), "html", null, true);
                echo "
                </a>
                par ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "technicien", array()), "html", null, true);
                echo ",
                le ";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"popover1\" data-content=\"Demande validée\"  >Etat de la demande</button>
            </li>
            <script>
                \$(document).ready(function(){
                    \$('[data-toggle=\"popover1\"]').popover();
                });
            </script>
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            if (($this->getAttribute($context["demande"], "etat", array()) == 2)) {
                // line 25
                echo "            <li class=\"list-group\" >
                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_view", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "title", array()), "html", null, true);
                echo "
                </a>
                par ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "technicien", array()), "html", null, true);
                echo ",
                le ";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                <span class=\"d-inline-block\" data-toggle=\"popover2\" data-content=\"Demande en cours de validité\">
                    <button class=\"btn btn-warning\" style=\"pointer-events: none;\" type=\"button\" disabled>Etat de la demande</button>
                </span>
            </li>
            <script>
            \$(document).ready(function(){
                \$('[data-toggle=\"popover2\"]').popover();
            });
            </script>
        ";
            }
            // line 41
            echo "        ";
            if (($this->getAttribute($context["demande"], "etat", array()) == 3)) {
                // line 42
                echo "            <li class=\"list-group\" >
                <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_view", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "title", array()), "html", null, true);
                echo "
                </a>
                par ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "technicien", array()), "html", null, true);
                echo ",
                le ";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                <span class=\"d-inline-block\" data-toggle=\"popover3\" data-content=\"Demande refusée\">
                    <button class=\"btn btn-danger\" style=\"pointer-events: none;\" type=\"button\" disabled>Etat de la demande</button>
                </span>
            </li>
        <script>
            \$(document).ready(function(){
                \$('[data-toggle=\"popover3\"]').popover();
            });
        </script>
        ";
            }
            // line 58
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "        <li class=\"list-group\">Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return array (  170 => 61,  163 => 59,  158 => 58,  144 => 47,  140 => 46,  135 => 44,  131 => 43,  128 => 42,  125 => 41,  111 => 30,  107 => 29,  102 => 27,  98 => 26,  95 => 25,  93 => 24,  90 => 23,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  62 => 9,  59 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Liste des Demandes</h2>

    <ul class=\"list-group\">
        {% for demande in listDemandes %}
        {% if demande.etat == 1 %}
            <li class=\"list-group\" >
                <a href=\"{{ path('gseb_historique_view', {'id': demande.id}) }}\">
                {{ demande.title }}
                </a>
                par {{ demande.technicien }},
                le {{ demande.date|date('d/m/Y') }}
                    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"popover1\" data-content=\"Demande validée\"  >Etat de la demande</button>
            </li>
            <script>
                \$(document).ready(function(){
                    \$('[data-toggle=\"popover1\"]').popover();
                });
            </script>
        {% endif %}

        {% if demande.etat == 2 %}
            <li class=\"list-group\" >
                <a href=\"{{ path('gseb_historique_view', {'id': demande.id}) }}\">
                {{ demande.title }}
                </a>
                par {{ demande.technicien }},
                le {{ demande.date|date('d/m/Y') }}
                <span class=\"d-inline-block\" data-toggle=\"popover2\" data-content=\"Demande en cours de validité\">
                    <button class=\"btn btn-warning\" style=\"pointer-events: none;\" type=\"button\" disabled>Etat de la demande</button>
                </span>
            </li>
            <script>
            \$(document).ready(function(){
                \$('[data-toggle=\"popover2\"]').popover();
            });
            </script>
        {% endif %}
        {% if demande.etat == 3 %}
            <li class=\"list-group\" >
                <a href=\"{{ path('gseb_historique_view', {'id': demande.id}) }}\">
                {{ demande.title }}
                </a>
                par {{ demande.technicien }},
                le {{ demande.date|date('d/m/Y') }}
                <span class=\"d-inline-block\" data-toggle=\"popover3\" data-content=\"Demande refusée\">
                    <button class=\"btn btn-danger\" style=\"pointer-events: none;\" type=\"button\" disabled>Etat de la demande</button>
                </span>
            </li>
        <script>
            \$(document).ready(function(){
                \$('[data-toggle=\"popover3\"]').popover();
            });
        </script>
        {% endif %}
        {% else %}
        <li class=\"list-group\">Pas (encore !) d'annonces</li>
        {% endfor %}
  </ul>
{% endblock %}
", "@GSEBHistorique/History/index.html.twig", "/var/www/html/FormdGseb/src/GSEB/HistoriqueBundle/Resources/views/History/index.html.twig");
    }
}
