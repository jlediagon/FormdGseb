<?php

/* @GSEBPlatform/Action/delete.html.twig */
class __TwigTemplate_6d81a97e31fbe22b89ced964f8aa439a037d6c36e5f39eb51b3a2d530c291b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Action/delete.html.twig", 3);
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
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_sebplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Voici la page de suppression, c'est trop cool 
  </p>

";
    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Action/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBPlatform/Action/delete.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Action/delete.html.twig");
    }
}
