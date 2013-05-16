<?php

/* EspritEnseignantBundle:Absence:modifierAbsence.html.twig */
class __TwigTemplate_327e518a25994eab32f0cf3dbf05ab79 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<form id=\"formmodif\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valider_modifabsence"), "html", null, true);
        echo "\" method=\"post\" >
    <table id=\"recherche_list\">
        <tr>
            <td>Classe:

                <select id=\"classemodif\" url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_classe"), "html", null, true);
        echo "\">

                </select>
            </td>

            <td id=\"matieremodif\" style=\"display: none;\">
                Matiere:
                <select id=\"list_matieremodif\" >

                </select>
            </td>
            <td>
                Horaire:
                <select id=\"list_heuremodif\">
                    <option value=\"\"></option>
                    <option value=\"9h->10h30\">- 9h->10h30 -</option>
                    <option value=\"10h45->12h15\">- 10h45->12h15 -</option>
                    <option value=\"9h->12h15\">-* 9h->12h15 *-</option>
                    <option value=\"14h->15h30\">- 14h->15h30 -</option>
                    <option value=\"15h45->17h15\">- 15h45->17h15 -</option>
                    <option value=\"14h->17h15\">-* 15h45->17h15 *-</option>

                </select>
            </td>
            <td>
                Date:
                <input type=\"date\" id=\"datemodif\"/>
            </td>
            <td style=\"padding-bottom: 12px; padding-top: 1px;\">
                <input class=\"btn\" type=\"button\" value=\"rechercher\" id=\"rechercher\">
            </td>
        </tr>
    </table>
    <div id=\"nbmodif\" style=\"display: none\">Nombre d'etudiant dans cette classe est <a id=\"nbEtudmodif\"></a></div>
    <div id=\"listEtudiantmodif\">

    </div>









    <input class=\"btn btn-primary\" type=\"submit\" />
    <input type=\"button\" id=\"check\">
</form>

<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 62
        echo "<script>
              
    \$(document).ready(function(){
        var url = \$('#classemodif').attr(\"url\");
        \$.get(url,
        function(data){
                \$('#classemodif').append(data.classes);

        },\"json\");

            
\$('#classemodif').change(function(){
        //var url = \$(this).attr(\"url\");
        var classe = \$(this).val();
if(classe==\"\"){alert('selectionner une classe');}
else{
        \$.post(\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_matiere"), "html", null, true);
        echo "\",{
           classe: classe
    },function(data){
                        
                \$('#list_matieremodif').empty();
                \$('#list_matieremodif').append(data.listMatieres);
                \$('#matieremodif').show();
                        
    },\"json\");
    }
});    

\$('#rechercher').click(function(){                

    var classe=\$('#classemodif').val();
    var matiere=\$('#list_matieremodif').val();
    var heure=\$('#list_heuremodif').val();
    var date=\$('#datemodif').val();
   
    \$.post(\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_absences"), "html", null, true);
        echo "\",{
           classe: classe,
           matiere: matiere,
           heure: heure,
           date: date,
    },function(data){
            \$('#listEtudiantmodif').empty();
            \$('#listEtudiantmodif').append(data.listEtudiants);
            
            \$('#nbmodif').show();
            \$('#nbEtudmodif').empty();
            \$('#nbEtudmodif').append(data.i);
//alert(data.etudiantAbsents);
    var v=parseInt(\$('#nbEtudmodif').text());
    for(i=1;i<=v;i++){
    var id=\$('#idEtud'+i).text()
        for(j=0;j<data.etudiantAbsents.length;j++){
            if(data.etudiantAbsents[j]==id)
            { 
                \$('#absent'+i).attr('checked', v);
            }
        }
    }
    },\"json\");
                return false;

});

\$('#check').click(function(){
var v=parseInt(\$('#nbEtudmodif').text());
    var nb=0;
    var etudiantsAbsent=[];
    var etudiatnsPresent=[];
    for(i=1;i<=v;i++){
        if(\$('#absent'+i).is(':checked')){
            nb=nb+1;
            etudiantsAbsent.push(\$('#idEtud'+i).text());
        }
        else{
            etudiatnsPresent.push(\$('#idEtud'+i).text());
        }
    }
    alert(etudiatnsPresent+'hhh'+etudiantsAbsent);
});

\$('#formmodif').submit(function(){

    var v=parseInt(\$('#nbEtudmodif').text());
    var nb=0;
    var etudiantsAbsent=[];
    var etudiantsPresent=[];
    for(i=1;i<=v;i++){
        if(\$('#absent'+i).is(':checked')){
            nb=nb+1;
            etudiantsAbsent.push(\$('#idEtud'+i).text());
        }
        else{
            etudiantsPresent.push(\$('#idEtud'+i).text());
        }
    }
//    alert(etudiatnsPresent+' '+etudiantsAbsent);
    var url=\$(this).attr(\"action\");
    var classe=\$('#classemodif').val();
    var matiere=\$('#list_matieremodif').val();
    var heure=\$('#list_heuremodif').val();
    var date=\$('#datemodif').val();
    
    \$.post(url,{
           classe: classe,
           matiere: matiere,
           heure: heure,
           date: date,
           etudiantsAbsent: etudiantsAbsent,
           etudiantsPresent: etudiantsPresent
    },function(data){
        
        alert(data.i);
    
    },\"json\");
                return false;
    
});


   \$(function() {
   \$( \"#datemodif\" ).datepicker({ dateFormat: 'dd-mm-yy', showWeek: true, firstDay: 1});
   });
           
});
    </script>

";
    }

    public function getTemplateName()
    {
        return "EspritEnseignantBundle:Absence:modifierAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 97,  119 => 78,  40 => 9,  125 => 90,  91 => 59,  87 => 58,  83 => 57,  36 => 13,  30 => 9,  26 => 6,  19 => 1,  105 => 60,  101 => 62,  97 => 60,  93 => 59,  67 => 31,  60 => 27,  53 => 23,  31 => 4,  28 => 3,);
    }
}