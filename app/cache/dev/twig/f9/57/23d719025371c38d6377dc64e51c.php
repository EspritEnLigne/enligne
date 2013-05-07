<?php

/* EspritUserBundle:EspEnseignant:edit.html.twig */
class __TwigTemplate_f95723d719025371c38d6377dc64e51c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "<h1>Profil</h1>

    <form  class=\"form-horizontal\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espenseignant_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idEns"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idEns"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cnss"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cnss"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel1"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel1"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel2"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel2"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datentree"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datentree"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datesortie"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datesortie"), 'widget');
        echo " </div>
        </div>
        
          <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
         <h3>Cursus scolaire et universitaire</h3>
              <tr>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 56
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Cursus scolaire et universitaire")) {
                // line 57
                echo "                  <tr>
                      
                      <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                      <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                      <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                        <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>

         
      ";
            }
            // line 69
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "                   </table>
       
        <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
            <h3>Cursus à ESPRIT</h3>
            <tr>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 82
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Cursus à ESPRIT")) {
                // line 83
                echo "                  <tr>
                     
                    <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                       <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>
         
      ";
            }
            // line 94
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 96
        echo "                   </table>
        
          <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
         <h3>Fonction à ESPRIT</h3>
              <tr>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 107
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Fonction à ESPRIT")) {
                // line 108
                echo "                  <tr>
                     
                    <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                       <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>
         
      ";
            }
            // line 119
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 121
        echo "                   </table>
        
           <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
        <h3>Unité pédagogique</h3>
               <tr>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 132
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Unité pédagogique")) {
                // line 133
                echo "                  <tr>
                     
                    <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 136
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                     <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>
         
      ";
            }
            // line 144
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 146
        echo "                   </table>
        
          <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
         <h3>Expérience avant ESPRIT</h3>
              <tr>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 157
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Expérience avant ESPRIT")) {
                // line 158
                echo "                  <tr>
                    
                    <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                   <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                  </tr>
         
      ";
            }
            // line 168
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 170
        echo "                   </table>
        
        <div class=\"control-group\">
            
            <div class=\"controls\">
                
               ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn\">Edit</button>
                <a class=\"btn  btn-primary\" href=\"/esprit/web/app_dev.php/espcursus/new\">Ajouter</a>
               
            </div>
        </div>
        
    </form>

   ";
        // line 185
        $this->displayBlock('javascripts', $context, $blocks);
        // line 209
        echo "       

";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/zoombox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
              
";
    }

    // line 185
    public function block_javascripts($context, array $blocks = array())
    {
        // line 186
        echo " <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
           <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/zoombox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
    jQuery(function(\$){
            \$('a.btn').zoombox();

            
            \$('a.btn').zoombox({
                    theme       : 'prettyphoto',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
              //  duration    : 800,              // Animation duration
               animation   : true,             // Do we have to animate the box ?
                width       : 650,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            
        });     
        
    </script>
           
 ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspEnseignant:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 187,  435 => 186,  432 => 185,  424 => 2,  421 => 1,  415 => 209,  413 => 185,  401 => 176,  393 => 170,  386 => 168,  379 => 164,  375 => 163,  371 => 162,  367 => 161,  363 => 160,  359 => 158,  356 => 157,  352 => 156,  340 => 146,  333 => 144,  325 => 139,  321 => 138,  317 => 137,  313 => 136,  309 => 135,  305 => 133,  302 => 132,  298 => 131,  286 => 121,  279 => 119,  271 => 114,  267 => 113,  263 => 112,  259 => 111,  255 => 110,  251 => 108,  248 => 107,  244 => 106,  232 => 96,  225 => 94,  217 => 89,  213 => 88,  209 => 87,  205 => 86,  201 => 85,  197 => 83,  194 => 82,  190 => 81,  178 => 71,  171 => 69,  162 => 63,  158 => 62,  154 => 61,  150 => 60,  146 => 59,  142 => 57,  139 => 56,  135 => 55,  121 => 44,  117 => 43,  111 => 40,  107 => 39,  101 => 36,  97 => 35,  91 => 32,  87 => 31,  81 => 28,  77 => 27,  71 => 24,  67 => 23,  61 => 20,  57 => 19,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  28 => 7,  24 => 5,  21 => 1,);
    }
}
