<?php

/* @GSEBHistorique/History/view.html.twig */
class __TwigTemplate_0105789551c8623adaa7afc8408122926f309dafb55c20c8875ea113d0f26f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GSEBCore/layout.html.twig", "@GSEBHistorique/History/view.html.twig", 1);
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
        // line 5
        echo "
  <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "technicien", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_homepage");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>

";
    }

    public function getTemplateName()
    {
        return "@GSEBHistorique/History/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 10,  38 => 7,  34 => 6,  31 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBHistorique/History/view.html.twig", "/var/www/html/FormdGseb/src/GSEB/HistoriqueBundle/Resources/views/History/view.html.twig");
    }
}
