<?php

/* EspritEnseignantBundle::layout.html.twig */
class __TwigTemplate_8d7443fdd41c83351bca06148ee7adb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"tabbable\"> <!-- Only required for left/right tabs -->
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Gestion d'Absences</a></li>
        <li><a href=\"#tab2\" data-toggle=\"tab\">Absence par module</a></li>
        <li><a href=\"#tab3\" data-toggle=\"tab\">Remarques d'enseignant</a></li>
        <li><a href=\"#tab4\" data-toggle=\"tab\">Feuille des notes</a></li>
        <li><a href=\"#tab5\" data-toggle=\"tab\">Informations</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
            <p>Gestion d'Absences</p>
            <div class=\"tabbable tabs-left\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab1-1\" data-toggle=\"tab\">Ajouter Absences</a></li>
                    <li><a href=\"#tab1-2\" data-toggle=\"tab\">Modifier Absence</a></li>
                    <li><a href=\"#tab1-3\" data-toggle=\"tab\">Fiche de Presence</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab1-1\">
                        <p>Ajouter Absences</p>
            ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EspritEnseignantBundle:AbsenceProf:ajouterAbsence", array("max" => 3)));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tab1-2\">
                        <p>Modifier Absence</p>
            ";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EspritEnseignantBundle:AbsenceProf:modifierAbsence", array("max" => 3)));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tab1-3\">
                        <p>Fiche de presence</p>
            ";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EspritEnseignantBundle:AbsenceProf:fichePresence", array("max" => 3)));
        echo "
                    </div>

                </div>
            </div>

        </div>
        <div class=\"tab-pane\" id=\"tab2\">
            <p>Absence par module</p>
        </div>
        <div class=\"tab-pane\" id=\"tab3\">
            <p>Remarques d'enseignant</p>
        </div>
        <div class=\"tab-pane\" id=\"tab4\">
            <p>Feuille des notes</p>
        </div>
        <div class=\"tab-pane\" id=\"tab5\">
            <p>Informations</p>
        </div>
    </div>
</div>


<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/shadowbox.js"), "html", null, true);
        echo "\"></script>
 ";
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "EspritEnseignantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  101 => 56,  97 => 55,  93 => 54,  67 => 31,  60 => 27,  53 => 23,  31 => 3,  28 => 2,);
    }
}
