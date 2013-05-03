<?php

/* EspritUserBundle:EspEnseignant:index.html.twig */
class __TwigTemplate_e2ad1e5848600f396b334778f1c40294 extends Twig_Template
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
            <p>Howdy, I'm in Section 2.</p>
        </div>
            <div class=\"tab-pane\" id=\"tab4\">
            <p>Howdy, I'm in Section 2.</p>
        </div>
            <div class=\"tab-pane\" id=\"tab5\">
            <p>Howdy, I'm in Section 2.</p>
        </div>
            <div class=\"tab-pane\" id=\"tab6\">
            <p>Howdy, I'm in Section 2.</p>
        </div>
            
    </div>
</div>
   ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
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
\$( \"#esprit_userbundle_espenseignanttype_datenaissance\" ).datepicker({dateFormat: 'dd/mm/yy'});
});
\$(function() {
\$( \"#esprit_userbundle_espenseignanttype_datentree\" ).datepicker({dateFormat: 'dd/mm/yy'});
});
\$(function() {
\$( \"#esprit_userbundle_espenseignanttype_datesortie\" ).datepicker({dateFormat: 'dd/mm/yy'});
});
</script>

";
        // line 115
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
        return array (  116 => 115,  98 => 98,  95 => 97,  93 => 95,  90 => 94,  86 => 117,  84 => 94,  64 => 22,  58 => 19,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
