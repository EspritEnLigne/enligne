<?php

/* EspritEnseignantBundle:Absence:ajouterAbsence.html.twig */
class __TwigTemplate_955b6bf0848701a7900b7def3d5862ca extends Twig_Template
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
        echo "




<form id=\"form\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valider_absence"), "html", null, true);
        echo "\" method=\"post\" >
";
        // line 9
        echo "        <table>
            <tr>
                <td>Classe:

                    <select id=\"classe\" url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_classe"), "html", null, true);
        echo "\">
                        

                    </select>
                </td>

                <td id=\"matiere\" style=\"display: none;\">
                    Matiere:
                    <select id=\"list_matiere\" >

                    </select>
                </td>
                <td>
                    Horaire:
                    <select id=\"list_heure\">
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
                    <input type=\"date\" id=\"date\"/>
                </td>
            </tr>
        </table>
        <div id=\"nb\" style=\"display: none\">Nombre d'etudiant dans cette classe est <a id=\"nbEtud\"></a></div>
        <div id=\"listEtudiant\">

        </div>







        <input class=\"btn btn-primary\" type=\"submit\" />
    </form>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.datepicker-fr.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function checkCases(v){ \$('input[type=checkbox]').attr('checked', v);}
        </script>
    <script>
    
    \$(document).ready(function(){
             var url = \$('#classe').attr(\"url\");
        \$.get(url,
        function(data){
            //alert(data.classes);
                \$('#classe').append(data.classes);
\t\t
    },\"json\");
            
      \$('#cocher').click(function(){
          var v=parseInt(\$('#nbEtud').text());
            alert(v);
          alert('bien');
/*          for(i=1;i<=v;i++){
if(\$('#absent'+i).attr('checked')==false){
          \$('#absent'+i).attr('checked',true);
      }
      else{\$('#absent'+i).attr('checked',false)}
      }*/
  });   
  
\$('#classe').change(function(){
//        var url = \$(this).attr(\"url\");
        var classe = \$(this).val();
if(classe==\"\"){alert('selectionner une classe');}
else{
        \$.post(\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_matiere"), "html", null, true);
        echo "\",{
           classe: classe
    },function(data){
                        
                \$('#list_matiere').empty();
                \$('#list_matiere').append(data.listMatieres);
                \$('#matiere').show();
                        
                \$('#listEtudiant').empty();
                \$('#listEtudiant').append(data.chaine1);
                        
                \$('#nb').show();
                \$('#nbEtud').empty();
                \$('#nbEtud').append(data.i);
    },\"json\");
    }
});    




\$('#form').submit(function(){

var v=parseInt(\$('#nbEtud').text());
       var nb=0;
            var etudiants=[];
     

    
            for(i=1;i<=v;i++){
if(\$('#absent'+i).is(':checked')){
    nb=nb+1;
    etudiants.push(\$('#idEtud'+i).text());
    }            
        }
                
                
var url=\$(this).attr(\"action\");
var classe=\$('#classe').val();
var matiere=\$('#list_matiere').val();
var heure=\$('#list_heure').val();
var date=\$('#date').val();
    
    \$.post(url,{
           classe: classe,
           matiere: matiere,
           heure: heure,
           date: date,
           etudiants: etudiants
    },function(data){
    if(data.i=\"ok\"){
        alert('9oum rawa7');
        }
        else
            {
                alert('hak rekech');
                }
    },\"json\");
                return false;
    
});


   \$(function() {
   \$( \"#date\" ).datepicker({ dateFormat: 'dd-mm-yy', showWeek: true, firstDay: 1});
   });
           
});
        </script>

";
    }

    public function getTemplateName()
    {
        return "EspritEnseignantBundle:Absence:ajouterAbsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 91,  91 => 59,  87 => 58,  83 => 57,  36 => 13,  30 => 9,  26 => 6,  19 => 1,);
    }
}
