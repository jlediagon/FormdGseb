<?php

/* @GSEBPlatform/Action/add.html.twig */
class __TwigTemplate_b9d6b237f2feaa41ab4a114c3a092a71e1d23c3d2c6483d80d230dbbcd9b1f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Action/add.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajouter un equipement 
";
    }

    // line 9
    public function block_sebplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Ajouter un nouvel équipement</h2>
  <hr>
  <p class=\"lead\">
    Vous êtes présent sur la page afin d'ajouter un nouvel équipement dans la base de données RackTables. 
    <br>
    Pour cela, veuillez avoir les informations suivantes à disposition :
    <ul>
      <li class=\"list-group-item\">Son emplacement dans la baie (U)</li>
      <li class=\"list-group-item\">Sa disposition (Front, Interior, Back) et son occupation (en U)</li>
      <li class=\"list-group-item\">La documentation technique de l'outil</li>
    </ul>
    Veuillez cliquez sur le bouton suivant pour poursuivre l'enregistrement :
  </p>
  <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_add_form", array("id_demande" => 45));
        echo "\" class=\"btn btn-primary \" role=\"button\" >Poursuivre</a>

";
    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Action/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  40 => 10,  37 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBPlatform/Action/add.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Action/add.html.twig");
    }
}
