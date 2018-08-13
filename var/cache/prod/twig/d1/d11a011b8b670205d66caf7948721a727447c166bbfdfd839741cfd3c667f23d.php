<?php

/* @GSEBPlatform/Form/baie.html.twig */
class __TwigTemplate_99fc34fe7cd5816649d2bc2183b8e579993041642118b77aced2871f96858af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBPlatform/layout.html.twig", "@GSEBPlatform/Form/baie.html.twig", 3);
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
        echo "  Selection de la baie 
";
    }

    // line 9
    public function block_sebplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Choississez la baie correspondante </h2>
   <p>
    Affichage des baies disponibles :
  </p>
  <ul>
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["baie"]) {
            // line 17
            echo "              <li class=\"list-group\" >
              <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_aff");
            echo "\" class=\"btn btn-primary \" role=\"button\" >
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["baie"], "name", array()), "html", null, true);
            echo "              
              </a>
              </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['baie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>
 

";
    }

    public function getTemplateName()
    {
        return "@GSEBPlatform/Form/baie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  59 => 19,  55 => 18,  52 => 17,  48 => 16,  40 => 10,  37 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBPlatform/Form/baie.html.twig", "/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Resources/views/Form/baie.html.twig");
    }
}
