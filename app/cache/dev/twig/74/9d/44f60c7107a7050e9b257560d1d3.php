<?php

/* EspritUserBundle:News:new.html.twig */
class __TwigTemplate_749d44f60c7107a7050e9b257560d1d3 extends Twig_Template
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
        echo "<h1>Nouveau Article</h1>

    <form class=\"form-horizontal\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <fieldset>
           <div class=\"control-group\">
               <div class=\"controls\">        
                 ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
             <button type=\"submit\" class=\"btn btn-primary\">Create</button>
        
        </div>
           </div>
        
        
          </fieldset>
    </form>

        <ul class=\"record_actions\">
    <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn\" onclick=\"self.location.href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news"), "html", null, true);
        echo "'\">Back to the list</button>
        
    
   </div>
               
</ul>
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        // line 36
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
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
        // line 48
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:News:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  92 => 37,  89 => 36,  87 => 34,  84 => 33,  73 => 26,  58 => 14,  49 => 10,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
