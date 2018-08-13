<?php

/* @GSEBPlatform/layout.html.twig */
class __TwigTemplate_ecac9ac12e669e6611de8308c77e598b80f396fad29b89f837f7077d5ecef7ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBCore/layout.html.twig", "@GSEBPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sebplatform_body' => array($this, 'block_sebplatform_body'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Plateforme - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Plateforme global</h1>

  <hr>
  ";
        // line 16
        echo "  ";
        $this->displayBlock('sebplatform_body', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 16
    public function block_sebplatform_body($context, array $blocks = array())
    {
        // line 17
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  59 => 16,  54 => 19,  51 => 16,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBPlatform/layout.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/layout.html.twig");
    }
}
