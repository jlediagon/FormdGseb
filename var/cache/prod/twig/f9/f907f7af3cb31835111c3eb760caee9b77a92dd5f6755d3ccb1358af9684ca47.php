<?php

/* @GSEBCore/layout.html.twig */
class __TwigTemplate_172394a8c427ff914f2281323ddd5e63ddf68817aa195f3b372fc0301c3eb1d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  </head>

  <body>
    <div class=\"container\">

        <!-- Static navbar -->
        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
          
              <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_core_home");
        echo "\">Accueil</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_historique_homepage");
        echo "\">Historique</a></li>
                <li><a href=\"#\">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

";
        // line 67
        echo "        

        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    
     
    </div> <!-- /container -->
    <!-- Footer -->
    <footer class=\"page-footer font-small blue\">

      <!-- Copyright -->
      <div class=\"footer-copyright text-center py-3\">Ce site web est développé dans le cadre du projet RackTables © ";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright</div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
      

    ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
  </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "FormD";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        // line 22
        echo "    ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "        ";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "      ";
        // line 87
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "@GSEBCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 87,  135 => 86,  132 => 85,  128 => 70,  125 => 69,  121 => 22,  118 => 13,  116 => 12,  113 => 11,  107 => 9,  101 => 90,  99 => 85,  89 => 78,  80 => 71,  78 => 69,  74 => 67,  64 => 43,  57 => 39,  39 => 23,  37 => 11,  32 => 9,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GSEBCore/layout.html.twig", "/var/www/html/FormdGseb/src/GSEB/CoreBundle/Resources/views/layout.html.twig");
    }
}
