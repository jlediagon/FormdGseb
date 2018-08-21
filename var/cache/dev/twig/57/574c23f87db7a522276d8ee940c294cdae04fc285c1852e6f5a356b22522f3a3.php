<?php

/* @GSEBPlatform/Demande/rackspace.html.twig */
class __TwigTemplate_3ff5c07560c897eefa92bb9dd29a991e97f254e397ac848388c4d48efb135121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Demande/rackspace.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Demande/rackspace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Demande/rackspace.html.twig"));

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
        echo "Votre demande de création a bien été prise en compte voici un récapitulatif :<br>
<h2>Sujet de la demande :</h2> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "sujet", array()), "html", null, true);
        echo " <br>
<h2>Nom de l'équipement a créer : </h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "object", array()), "name", array()), "html", null, true);
        echo "<br>
<h2>Type de l'objet : </h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "object", array()), "objtypeId", array()), "html", null, true);
        echo " (a suivre pour le nom !)<br>
<h2>Id de la baie</h2>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["id_rack"]) ? $context["id_rack"] : $this->getContext($context, "id_rack")), "html", null, true);
        echo " <br>
";
        // line 15
        $context["unit_front"] = "false";
        echo "      
";
        // line 16
        $context["unit_interior"] = "false";
        echo "      
";
        // line 17
        $context["unit_rear"] = "false";
        echo "      
<form  action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_demande_rackspace", array("id_demande" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" >
<table class=\"table table-bordered\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">U</th>
      <th scope=\"col\">Front</th>
      <th scope=\"col\">Interior</th>
      <th scope=\"col\">Back</th>      
    </tr>
  </thead>
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "    <tr>
        <th scope=\"col\" >";
            // line 30
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>

      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rackspace"]) ? $context["rackspace"] : $this->getContext($context, "rackspace")));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 33
                echo "        ";
                if ((($this->getAttribute($context["unit"], "unit_no", array()) == $context["i"]) && ($this->getAttribute($context["unit"], "atom", array()) == "front"))) {
                    // line 34
                    echo "          <td class=\"table-warning\" scope=\"col\">Occupé</td>
          ";
                    // line 35
                    $context["unit_front"] = "true";
                    echo "      
        ";
                }
                // line 37
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
      ";
            // line 39
            if (((isset($context["unit_front"]) ? $context["unit_front"] : $this->getContext($context, "unit_front")) != "true")) {
                // line 40
                echo "          <td scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\" name=\"front[]\" value=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ></td>        ";
            }
            // line 41
            echo "
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rackspace"]) ? $context["rackspace"] : $this->getContext($context, "rackspace")));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 43
                echo "        ";
                if ((($this->getAttribute($context["unit"], "unit_no", array()) == $context["i"]) && ($this->getAttribute($context["unit"], "atom", array()) == "interior"))) {
                    // line 44
                    echo "          <td class=\"table-warning\" scope=\"col\">Occupé</td>
          ";
                    // line 45
                    $context["unit_interior"] = "true";
                    echo "      
        ";
                }
                // line 47
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "      ";
            if (((isset($context["unit_interior"]) ? $context["unit_interior"] : $this->getContext($context, "unit_interior")) != "true")) {
                // line 49
                echo "          <td scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\" name=\"interior[]\" value=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " ></td>        ";
            }
            // line 50
            echo "
      ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rackspace"]) ? $context["rackspace"] : $this->getContext($context, "rackspace")));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 52
                echo "        ";
                if ((($this->getAttribute($context["unit"], "unit_no", array()) == $context["i"]) && ($this->getAttribute($context["unit"], "atom", array()) == "rear"))) {
                    // line 53
                    echo "          <td class=\"table-warning\" scope=\"col\">Occupé</td>
          ";
                    // line 54
                    $context["unit_rear"] = "true";
                    echo "      
        ";
                }
                // line 56
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      ";
            if (((isset($context["unit_rear"]) ? $context["unit_rear"] : $this->getContext($context, "unit_rear")) != "true")) {
                // line 58
                echo "          <td scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\" name=\"rear[]\" value=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "></td>        ";
            }
            // line 59
            echo "      ";
            $context["unit_front"] = "false";
            echo "      
      ";
            // line 60
            $context["unit_interior"] = "false";
            echo "      
      ";
            // line 61
            $context["unit_rear"] = "false";
            echo "   
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</table>
    ";
        // line 80
        echo "    <input type=\"submit\" value= \"Valider\" class=\"form-control\" >
    </form> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Demande/rackspace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 80,  239 => 64,  230 => 61,  226 => 60,  221 => 59,  216 => 58,  213 => 57,  207 => 56,  202 => 54,  199 => 53,  196 => 52,  192 => 51,  189 => 50,  184 => 49,  181 => 48,  175 => 47,  170 => 45,  167 => 44,  164 => 43,  160 => 42,  157 => 41,  152 => 40,  150 => 39,  147 => 38,  141 => 37,  136 => 35,  133 => 34,  130 => 33,  126 => 32,  121 => 30,  118 => 29,  114 => 28,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  70 => 10,  61 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
Votre demande de création a bien été prise en compte voici un récapitulatif :<br>
<h2>Sujet de la demande :</h2> {{demande.sujet}} <br>
<h2>Nom de l'équipement a créer : </h2>{{demande.object.name}}<br>
<h2>Type de l'objet : </h2>{{ demande.object.objtypeId}} (a suivre pour le nom !)<br>
<h2>Id de la baie</h2>{{ id_rack }} <br>
{% set unit_front = \"false\" %}      
{% set unit_interior = \"false\" %}      
{% set unit_rear = \"false\" %}      
<form  action=\"{{ path('gseb_platform_demande_rackspace', {'id_demande': demande.id}) }}\" method=\"post\" >
<table class=\"table table-bordered\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">U</th>
      <th scope=\"col\">Front</th>
      <th scope=\"col\">Interior</th>
      <th scope=\"col\">Back</th>      
    </tr>
  </thead>
  {% for i in height..1 %}
    <tr>
        <th scope=\"col\" >{{ i }}</th>

      {% for unit in rackspace %}
        {% if unit.unit_no == i and unit.atom==\"front\" %}
          <td class=\"table-warning\" scope=\"col\">Occupé</td>
          {% set unit_front = \"true\" %}      
        {% endif %}
      {% endfor %}

      {% if unit_front != \"true\" %}
          <td scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\" name=\"front[]\" value={{ i }} ></td>        {% endif %}

      {% for unit in rackspace %}
        {% if unit.unit_no == i and unit.atom==\"interior\" %}
          <td class=\"table-warning\" scope=\"col\">Occupé</td>
          {% set unit_interior = \"true\" %}      
        {% endif %}
      {% endfor %}
      {% if unit_interior != \"true\" %}
          <td scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\" name=\"interior[]\" value={{ i }} ></td>        {% endif %}

      {% for unit in rackspace %}
        {% if unit.unit_no == i and unit.atom==\"rear\" %}
          <td class=\"table-warning\" scope=\"col\">Occupé</td>
          {% set unit_rear = \"true\" %}      
        {% endif %}
      {% endfor %}
      {% if unit_rear != \"true\" %}
          <td scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\" name=\"rear[]\" value={{ i }}></td>        {% endif %}
      {% set unit_front = \"false\" %}      
      {% set unit_interior = \"false\" %}      
      {% set unit_rear = \"false\" %}   
    </tr>
  {% endfor %}
</table>
    {# <form  action=\"{{ path('gseb_platform_demande_attributs', {'id_demande': demande.id}) }}\" method=\"post\" >
    {% for carac in resultat %}
        <div class=\"form-group\">
          <label for=\"Attribut\"> {{ carac.name }} </label>
          {% if carac.type == \"uint\" %}
            <input type=\"number\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner un entier\">
          {% elseif carac.type == 'date' %}
            <input type=\"date\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner la date, au format YYYY-MM-DD\">
          {% elseif carac.type == 'float' %}
            <input type=\"number\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner un nombre décimal (au format 0.00)\">
          {% else %}
            <input type=\"text\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner une chaîne de caractère\">
          {% endif %}
        </div>
    {% endfor %}#}
    <input type=\"submit\" value= \"Valider\" class=\"form-control\" >
    </form> 
{% endblock %}", "@GSEBPlatform/Demande/rackspace.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Demande/rackspace.html.twig");
    }
}
