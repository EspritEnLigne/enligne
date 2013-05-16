<?php

/* EspritEnseignantBundle:Absence:fichePresence.html.twig */
class __TwigTemplate_2c9d45d32af2be7eec8b1dbedde3b1c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form id=\"fichePresence\">
    <table>
        <tr>

            <th>Classe:</th>
            <td>
                <select id=\"classeFiche\">
                    <option value=\"\"></option>
                    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 10
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "libelle"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "                </select>
            </td>               
            <th>Matiere:</th>
            <td>    
                <select id=\"list_matiereFiche\" url=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_fiche"), "html", null, true);
        echo "\">

                </select>
            </td>
        </tr>
    </table>
        <div id=\"listEtudiantPresence\">
        </div>
</form>

<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<script>
    \$('#classeFiche').change(function(){
//        var url = \$(this).attr(\"url\");
        var classe = \$(this).val();
if(classe==\"\"){alert('selectionner une classe');}
else{
        \$.post(\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_matierefiche"), "html", null, true);
        echo "\",{
           classe: classe
    },function(data){
                        
                \$('#list_matiereFiche').empty();
                \$('#list_matiereFiche').append(data.list);
                //\$('#matiere').show();

    },\"json\");
    }
});
\$('#list_matiereFiche').change(function(){
    var matiere=\$(this).val();
    var classe=\$('#classeFiche').val();
    var url=\$(this).attr('url');
    \$.post(url,
    {
        classe:classe,
        matiere:matiere
    },function(data){
        \$('#listEtudiantPresence').empty();
        \$('#listEtudiantPresence').append(data.fiche);
    },\"json\");
});
</script>";
    }

    public function getTemplateName()
    {
        return "EspritEnseignantBundle:Absence:fichePresence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  63 => 26,  50 => 16,  44 => 12,  33 => 10,  29 => 9,  141 => 97,  119 => 78,  40 => 9,  125 => 90,  91 => 59,  87 => 58,  83 => 57,  36 => 13,  30 => 9,  26 => 6,  19 => 1,  105 => 60,  101 => 62,  97 => 60,  93 => 59,  67 => 27,  60 => 27,  53 => 23,  31 => 4,  28 => 3,);
    }
}
