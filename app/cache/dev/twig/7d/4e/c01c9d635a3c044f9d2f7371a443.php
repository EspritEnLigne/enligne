<?php

/* ::base.html.twig */
class __TwigTemplate_7d4ec01c9d635a3c044f9d2f7371a443 extends Twig_Template
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
        echo "</head>
<body>
    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar\">
            <div class=\"navbar-inner\">



                <a class=\"brand\" href=\"#\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></a>
                     ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeDemoBundle:Demo:menu", array("max" => 3)));
        echo "

                     ";
        // line 25
        echo "                </div>

            </div>
        </div>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"
              type=\"text/css\" />
    ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script src=\"http://code.jquery.com/ui/1.10.2/jquery-ui.js\"></script>
        <script>
       \$(function() {
       \$( \".date\" ).datepicker({dateFormat: 'dd/mm/yy'});
       });
            </script>
    ";
        // line 40
        echo "            <script
            src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 43
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  109 => 42,  105 => 40,  96 => 31,  93 => 30,  88 => 29,  80 => 7,  77 => 6,  71 => 5,  65 => 45,  62 => 30,  60 => 29,  54 => 25,  49 => 19,  45 => 18,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
