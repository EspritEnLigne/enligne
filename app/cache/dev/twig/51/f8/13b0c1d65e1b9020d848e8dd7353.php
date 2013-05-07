<?php

/* EspritUserBundle:EspEnseignant:index.html.twig */
class __TwigTemplate_51f813b0c1d65e1b9020d848e8dd7353 extends Twig_Template
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
        echo "<div class=\"tabbable\" style=\"margin-top: 100px;margin-left: 20px;\"> <!-- Only required for left/right tabs -->
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Profil</a></li>
        <li><a href=\"#tab2\" data-toggle=\"tab\">Editer profil</a></li>
        <li><a href=\"#tab3\" data-toggle=\"tab\">Encadrement</a></li>
        <li><a href=\"#tab4\" data-toggle=\"tab\">Enseignement</a></li>
        <li><a href=\"#tab5\" data-toggle=\"tab\">RDI</a></li>
        <li><a href=\"#tab6\" data-toggle=\"tab\">Conges</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
            <p>\t";
        // line 19
        $this->env->loadTemplate("EspritUserBundle:EspEnseignant:show.html.twig")->display($context);
        echo "</p>
        </div>
        <div class=\"tab-pane\" id=\"tab2\">
            <p>";
        // line 22
        $this->env->loadTemplate("EspritUserBundle:EspEnseignant:edit.html.twig")->display($context);
        echo "</p>
        </div>
            <div class=\"tab-pane\" id=\"tab3\">
            <p>";
        // line 25
        $this->env->loadTemplate("EspritUserBundle:EspEtudiant:encadrement.html.twig")->display($context);
        echo "</p>
        </div>
            <div class=\"tab-pane\" id=\"tab4\">
            <p>Howdy, I'm in Section 2.</p>
        </div>
            <div class=\"tab-pane\" id=\"tab5\">
            <p>Howdy, I'm in Section 2.</p>
        </div>
            <div class=\"tab-pane\" id=\"tab6\">
          <p>";
        // line 34
        $this->env->loadTemplate("EspritUserBundle:EspConges:conges.html.twig")->display($context);
        echo "</p>
        </div>
            
    </div>
</div>
   ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "    ";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        // line 97
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
 <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
<script src=\"http://code.jquery.com/ui/1.10.2/jquery-ui.js\"></script>
 <script>
\$(function() {
\$( \".date\" ).datepicker({dateFormat: 'dd/mm/yy'});
});
</script>

";
        // line 109
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspEnseignant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 109,  104 => 98,  101 => 97,  99 => 95,  96 => 94,  92 => 111,  90 => 94,  82 => 34,  70 => 25,  64 => 22,  58 => 19,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
