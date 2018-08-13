<?php

/* @GSEBPlatform/Demande/listProperties.twig */
class __TwigTemplate_f0ff417f42e2c306d82b2c070c4e0fb5aca9032ca584f9054729fd7e52c3dbb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Demande/listProperties.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Demande/listProperties.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Demande/listProperties.twig"));

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
  <h2>Choississez le type d'objet installé </h2>
   <p>
    Affichage des objets :
  </p>
  <ul>
  ";
        // line 16
        if ((isset($context["dico"]) || array_key_exists("dico", $context))) {
            echo "    
    
";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
            foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
                // line 19
                echo "        <li class=\"list-group\" >
            Nom : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "name", array()), "html", null, true);
                echo " <br>   
            Id : ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "id", array()), "html", null, true);
                echo "  <br>
            Type : ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "type", array()), "html", null, true);
                echo " <br> 
            
            Chapter_id : 
            ";
                // line 25
                if ($this->getAttribute($context["carac"], "chapter_id", array(), "any", true, true)) {
                    // line 26
                    echo "              Value du dico :
              ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["dico"]) ? $context["dico"] : $this->getContext($context, "dico")));
                    foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
                        // line 28
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attr"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["attri"]) {
                            // line 29
                            echo "                  ";
                            echo twig_escape_filter($this->env, $context["attri"], "html", null, true);
                            echo "<br>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attri'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "  ";
        } else {
            // line 37
            echo "    
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
            foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
                // line 39
                echo "      <li class=\"list-group\" >
          Nom : ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "name", array()), "html", null, true);
                echo " <br>   
          Id : ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "id", array()), "html", null, true);
                echo "  <br>
          Type : ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "type", array()), "html", null, true);
                echo " <br> 
          
          Chapter_id Defined: ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "chapter_id", array()), "html", null, true);
                echo "
        </a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  ";
        }
        // line 49
        echo "  </ul>
  <a href=\"";
        // line 50
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
        return "@GSEBPlatform/Demande/listProperties.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 50,  183 => 49,  180 => 48,  170 => 44,  165 => 42,  161 => 41,  157 => 40,  154 => 39,  150 => 38,  147 => 37,  144 => 36,  136 => 33,  133 => 32,  127 => 31,  118 => 29,  113 => 28,  109 => 27,  106 => 26,  104 => 25,  98 => 22,  94 => 21,  90 => 20,  87 => 19,  83 => 18,  78 => 16,  70 => 10,  61 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

  <h2>Choississez le type d'objet installé </h2>
   <p>
    Affichage des objets :
  </p>
  <ul>
  {% if dico is defined %}    
    
{% for carac in resultat %}
        <li class=\"list-group\" >
            Nom : {{ carac.name }} <br>   
            Id : {{ carac.id }}  <br>
            Type : {{ carac.type }} <br> 
            
            Chapter_id : 
            {% if carac.chapter_id is defined %}
              Value du dico :
              {% for attr in dico %}
                {% for attri in attr %}
                  {{ attri }}<br>
                {% endfor %}
              {% endfor %}
            {% endif %}
          </a>
        </li>
      {% endfor %}
  {% else %}
    
      {% for carac in resultat %}
      <li class=\"list-group\" >
          Nom : {{ carac.name }} <br>   
          Id : {{ carac.id }}  <br>
          Type : {{ carac.type }} <br> 
          
          Chapter_id Defined: {{ carac.chapter_id }}
        </a>
      </li>
    {% endfor %}
  {% endif %}
  </ul>
  <a href=\"{{ path('gseb_platform_demande_recap')  }}\" class=\"btn btn-primary \" role=\"button\" >
        Valider            
      </a>

{% endblock %}", "@GSEBPlatform/Demande/listProperties.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Demande/listProperties.twig");
    }
}
