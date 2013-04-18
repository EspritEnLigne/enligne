<?php

/* ::layout.html.twig */
class __TwigTemplate_0e4d66a5967ddee0c9ff6acccacab1bd extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "  </head>
  <body>
       <div class=\"container\">
      <div class=\"navbar navbar-fixed-top\">
          <div class=\"navbar\">
              <div class=\"navbar-inner\">
                 


                  <a class=\"brand\" href=\"#\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></a>
                     ";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeDemoBundle:Demo:menu", array("max" => 3)));
        echo "

                     ";
        // line 26
        echo "                  </div>

              </div>
          </div>
               
      </div>
      <div id=\"header\" class=\"hero-unit\">
            <div id=\"myCarousel\" class=\"carousel slide\">
                   <ol class=\"carousel-indicators\">
                       <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                       <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                       <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                   </ol>
                   <!-- Carousel items -->
                   <div class=\"carousel-inner\">
                       
                       <div class=\"active item\"><center><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/eesprit.jpg"), "html", null, true);
        echo "\" /></center></div>
                       <div class=\"item\"><center><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/esprit.bmp"), "html", null, true);
        echo "\" /></center></div>
                       <div class=\"item\"><center><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/espritprepa.bmp"), "html", null, true);
        echo "\" /></center></div>
                   </div>
                   <!-- Carousel nav -->
                  
                   <a class=\"carousel-control left\" href=\"myCarousel\" data-slide=\"prev\">&lsaquo;</a>
                   <a class=\"carousel-control right\" href=\"myCarousel\" data-slide=\"next\">&rsaquo;</a>
               </div>
          
      
      </div>
          <div style=\"margin-left: 10%;margin-right: 10%;\">
          ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "      </div>
  ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "  </body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ESPRIT";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
   
    ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "        
      
          ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 64,  139 => 63,  137 => 61,  134 => 60,  128 => 56,  125 => 55,  117 => 7,  114 => 6,  108 => 5,  102 => 66,  100 => 60,  97 => 59,  95 => 55,  81 => 44,  77 => 43,  73 => 42,  55 => 26,  50 => 20,  46 => 19,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
