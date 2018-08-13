<?php

/* @GSEBCore/Core/index.html.twig */
class __TwigTemplate_224406fe67241a06f5937369a506692bea3804d639d876369a4c6a2dd78a7489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GSEBCore/layout.html.twig", "@GSEBCore/Core/index.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
        <div class=\"jumbotron\">
          <h1>Ajouter un equipement</h1>
          
            <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_home", array("action" => "add"));
        echo "\" role=\"button\">Ajouter &raquo;</a>
          </p>
        </div>
        <div class=\"jumbotron\">
          <h1>Modifier un équipement</h1>
          
            <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_home", array("action" => "edit"));
        echo "\" role=\"button\">Modifier &raquo;</a>
          </p>
        </div>
        <div class=\"jumbotron\">
          <h1>Supprimer un équipement</h1>
            <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_platform_home", array("action" => "delete"));
        echo "\" role=\"button\">Supprimer &raquo;</a>
          </p>
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "@GSEBCore/Core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  46 => 13,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBCore/Core/index.html.twig", "/var/www/html/FormdGseb/src/GSEB/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
