<?php

/* EspritEnseignantBundle:Absence:show.html.twig */
class __TwigTemplate_8832c9f4fa843393b68ae0f1b4c78513 extends Twig_Template
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
        // line 18
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo " 
";
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
        echo "<div class=\"alert alert-error\">
    Supprimer l'absence
    </div>

     <ul class=\"record_actions\">
        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button  class=\"btn btn-danger\" type=\"submit\">Delete</button>
        </form>
         </ul>
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        // line 21
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "EspritEnseignantBundle:Absence:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  74 => 21,  72 => 19,  69 => 18,  60 => 13,  55 => 11,  48 => 6,  45 => 5,  37 => 2,  34 => 1,  29 => 23,  26 => 18,  24 => 5,  22 => 1,);
    }
}
