<?php

/* EspritUserBundle:News:edit.html.twig */
class __TwigTemplate_c027b46738dd289a99718049e68b6dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\" />

    ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Modifier un article</h1>

    <form class=\"form-horizontal\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
       <fieldset>
           <div class=\"control-group\">
               <div class=\"controls\"> 
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
        </p></div>
           </div>
       </fieldset>
    </form>

        <ul class=\"record_actions\">
    <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn\" onclick=\"self.location.href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news"), "html", null, true);
        echo "'\">Back to the list</button>
          
    
 
                ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            // line 30
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
        </form>
        </div>
        ";
        }
        // line 37
        echo "</ul>
    
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        // line 43
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
 <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<script src=\"http://code.jquery.com/ui/1.10.2/jquery-ui.js\"></script>
 <script>
\$(function() {
\$( \"#esprit_userbundle_newstype_newsDate\" ).datepicker({dateFormat: 'dd/mm/yy'});
});
</script>
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:News:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  106 => 43,  104 => 41,  101 => 40,  95 => 37,  87 => 32,  81 => 30,  79 => 29,  72 => 25,  59 => 15,  49 => 10,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
