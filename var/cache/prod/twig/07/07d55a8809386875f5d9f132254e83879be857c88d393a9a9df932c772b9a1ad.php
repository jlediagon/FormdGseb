<?php

/* @GSEBPlatform/Form/affichage.html.twig */
class __TwigTemplate_c58fd98223a3b96d8d5671564f73ee9f8010e888f8f749dcc22351181811a489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Form/affichage.html.twig", 3);
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
        echo "  Affichage du formulaire
";
    }

    // line 9
    public function block_sebplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Voici les données du form </h2>
   <p>
    Affichage des baies disponibles :
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : null), "salle", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : null), "baie", array()), "html", null, true);
        echo "
  </p>
  
";
    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Form/affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  40 => 10,  37 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBPlatform/Form/affichage.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Form/affichage.html.twig");
    }
}
