<?php

/* @GSEBPlatform/Action/accueil.html.twig */
class __TwigTemplate_fd6e8c1d89b6a043a9e855571ca248418b048caffc2fb65a57595bf92edd7977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@GSEBCore/layout.html.twig", "@GSEBPlatform/Action/accueil.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Action/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBPlatform/Action/accueil.html.twig"));

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
        echo "
        <div class=\"jumbotron\">
          <h1>Création d'une demande</h1>
          
            <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_homeaction", array("action" => "add"));
        echo "\" role=\"button\">Ajouter &raquo;</a>
          </p>
        </div>
        <div class=\"jumbotron\">
          <h1>Modification d'une demande</h1>
          
            <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_homeaction", array("action" => "edit"));
        echo "\" role=\"button\">Modifier &raquo;</a>
          </p>
        </div>
        <div class=\"jumbotron\">
          <h1>Suppression d'une demande</h1>
            <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_homeaction", array("action" => "delete"));
        echo "\" role=\"button\">Supprimer &raquo;</a>
          </p>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Action/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  64 => 14,  55 => 8,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/GSEB/PlatformBundle/Resources/views/Action/accueil.html.twig #}
{% extends \"@GSEBCore/layout.html.twig\" %}
    {% block body %}

        <div class=\"jumbotron\">
          <h1>Création d'une demande</h1>
          
            <a class=\"btn btn-lg btn-primary\" href=\"{{ path('gseb_platform_homeaction', {'action': 'add' }) }}\" role=\"button\">Ajouter &raquo;</a>
          </p>
        </div>
        <div class=\"jumbotron\">
          <h1>Modification d'une demande</h1>
          
            <a class=\"btn btn-lg btn-primary\" href=\"{{ path('gseb_platform_homeaction', {'action': 'edit' }) }}\" role=\"button\">Modifier &raquo;</a>
          </p>
        </div>
        <div class=\"jumbotron\">
          <h1>Suppression d'une demande</h1>
            <a class=\"btn btn-lg btn-primary\" href=\"{{ path('gseb_platform_homeaction', {'action': 'delete' }) }}\" role=\"button\">Supprimer &raquo;</a>
          </p>
        </div>

    {% endblock %}", "@GSEBPlatform/Action/accueil.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Action/accueil.html.twig");
    }
}
