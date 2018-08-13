<?php

/* @GSEBHistorique/History/index.html.twig */
class __TwigTemplate_b8b63f781991ce8c616950f7c0cc22463fb371bea3fca4889b67a9810fab6e5e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Liste des Demandes</h2>

    <ul class=\"list-group\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listDemandes"]) ? $context["listDemandes"] : null));
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
        return array (  152 => 61,  145 => 59,  140 => 58,  126 => 47,  122 => 46,  117 => 44,  113 => 43,  110 => 42,  107 => 41,  93 => 30,  89 => 29,  84 => 27,  80 => 26,  77 => 25,  75 => 24,  72 => 23,  60 => 14,  56 => 13,  51 => 11,  47 => 10,  44 => 9,  41 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBHistorique/History/index.html.twig", "/var/www/html/FormdGseb/src/GSEB/HistoriqueBundle/Resources/views/History/index.html.twig");
    }
}
