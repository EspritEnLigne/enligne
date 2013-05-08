<?php

/* EspritUserBundle:TacheRdi:edit.html.twig */
class __TwigTemplate_92e306d0ae7beeb08f81641bf5c549cc extends Twig_Template
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
        echo "
";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "    ";
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Modifier la tache</h1>

    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button  class=\"btn btn-success\" type=\"submit\">Edit</button>
        </p>
    </form>

        <ul class=\"record_actions\">
   
</ul>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        // line 24
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:TacheRdi:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  78 => 24,  76 => 22,  73 => 21,  59 => 11,  52 => 9,  48 => 7,  45 => 6,  37 => 2,  34 => 1,  29 => 21,  27 => 6,  24 => 5,  22 => 1,);
    }
}
