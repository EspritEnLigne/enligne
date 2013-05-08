<?php

/* EspritUserBundle:TacheRdi:resultat.html.twig */
class __TwigTemplate_3da2afa3d9c914634cfd936e83a08efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
   
    ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"alert alert-success\">
    Opération OK
    </div>
   
  
    
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        // line 16
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:TacheRdi:resultat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  60 => 16,  58 => 14,  55 => 13,  45 => 6,  42 => 5,  34 => 2,  31 => 1,  26 => 13,  24 => 5,  22 => 1,);
    }
}
