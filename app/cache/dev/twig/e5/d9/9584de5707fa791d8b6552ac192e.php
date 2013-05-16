<?php

/* EspritUserBundle:EspEtudiant:ficheeleve.html.twig */
class __TwigTemplate_e5d99584de5707fa791d8b6552ac192e extends Twig_Template
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
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Gestion d'absence</a></li>
        <li><a href=\"#tab2\" data-toggle=\"tab\">Absence par module</a></li>
        <li><a href=\"#tab3\" data-toggle=\"tab\">Remarque des enseignants</a></li>
        <li><a href=\"#tab4\" data-toggle=\"tab\">Feuille des notes</a></li>
        <li><a href=\"#tab5\" data-toggle=\"tab\">Informations</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
            <p>";
        // line 18
        $this->env->loadTemplate("EspritEnseignantBundle:Absence:gestionabsence.html.twig")->display($context);
        echo "\t</p>
        </div>
        <div class=\"tab-pane\" id=\"tab2\">
            <p></p>
        </div>
            <div class=\"tab-pane\" id=\"tab3\">
            <p></p>
        </div>
            <div class=\"tab-pane\" id=\"tab4\">
            <p>Howdy, I'm in Section 2.</p>
        </div>
            <div class=\"tab-pane\" id=\"tab5\">
            <p>";
        // line 30
        $this->env->loadTemplate("EspritUserBundle:EspEtudiant:show.html.twig")->display($context);
        // line 31
        echo "            </p>
        </div>
          
            
    </div>
</div>
  

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
\$( \".date\" ).datepicker({dateFormat: 'dd/mm/yy'});
});
</script>

";
        // line 55
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspEtudiant:ficheeleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 55,  94 => 44,  91 => 43,  89 => 41,  86 => 40,  74 => 31,  72 => 30,  57 => 18,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
