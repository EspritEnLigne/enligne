<?php

/* EspritUserBundle:News:show.html.twig */
class __TwigTemplate_576436cc1811ff9faf1a0705f5ec45d8 extends Twig_Template
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
        echo "<div style=\"margin-top: 100px;\">
            
               
            
           
            <div style=\"margin-top: 20px;margin-left: 20px;margin-right: 20px;\">
                <h1> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</h1>
                <pre> <h4> <p class=\"text-info\">  ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "article"), "html", null, true);
        echo " </p></h4></pre></div>
          </div>

        <ul class=\"record_actions\">
            
     <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn\" onclick=\"self.location.href='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news"), "html", null, true);
        echo "'\">Back to the list</button>
            ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            // line 23
            echo "            <button type=\"submit\" class=\"btn btn-success\" onclick=\"self.location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "'\">Edit</button>
            ";
        }
        // line 25
        echo "             ";
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            // line 26
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
        </form>
        ";
        }
        // line 32
        echo "    
   </div>
               
</ul>
";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        // line 40
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
 <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<script src=\"http://code.jquery.com/ui/1.10.2/jquery-ui.js\"></script>
 <script>
\$(function() {
\$( \"#esprit_userbundle_newstype_newsDate\" ).datepicker();
});
</script>
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  107 => 40,  105 => 38,  102 => 37,  94 => 32,  87 => 28,  81 => 26,  78 => 25,  72 => 23,  70 => 22,  66 => 21,  57 => 15,  53 => 14,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
