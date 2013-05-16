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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "<h1>Profil</h1>

    <form  class=\"form-horizontal\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espenseignant_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cnss"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cnss"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel1"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel1"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel2"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel2"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datentree"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datentree"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datesortie"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 46
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
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 58
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Cursus scolaire et universitaire")) {
                // line 59
                echo "                  <tr>
                      
                      <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                      <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                      <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                        <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>

         
      ";
            }
            // line 71
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
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
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 84
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Cursus à ESPRIT")) {
                // line 85
                echo "                  <tr>
                     
                    <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                       <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>
         
      ";
            }
            // line 96
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 98
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
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 109
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Fonction à ESPRIT")) {
                // line 110
                echo "                  <tr>
                     
                    <td>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 113
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                       <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>
         
      ";
            }
            // line 121
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 123
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
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 134
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Unité pédagogique")) {
                // line 135
                echo "                  <tr>
                     
                    <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 139
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                     <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                
                  </tr>
         
      ";
            }
            // line 146
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 148
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
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 159
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Expérience avant ESPRIT")) {
                // line 160
                echo "                  <tr>
                    
                    <td>";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                   <td>  <a class=\"btn btn-success\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/edit\">Edit</a>
                          <a class=\"btn btn-danger\" href=\"/esprit/web/app_dev.php/espcursus/";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Delete</a></td>
                  </tr>
         
      ";
            }
            // line 170
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 172
        echo "                   </table>
        
        <div class=\"control-group\">
            
            <div class=\"controls\">
                
               ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn\">Edit</button>
                <a class=\"btn  btn-primary\" href=\"/esprit/web/app_dev.php/espcursus/new\">Ajouter</a>
               
            </div>
        </div>
        
    </form>

 
       

";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/zoombox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
                <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\" />

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
        return array (  425 => 3,  420 => 2,  417 => 1,  400 => 178,  392 => 172,  385 => 170,  378 => 166,  374 => 165,  370 => 164,  366 => 163,  362 => 162,  358 => 160,  355 => 159,  351 => 158,  339 => 148,  332 => 146,  324 => 141,  320 => 140,  316 => 139,  312 => 138,  308 => 137,  304 => 135,  301 => 134,  297 => 133,  285 => 123,  278 => 121,  270 => 116,  266 => 115,  262 => 114,  258 => 113,  254 => 112,  250 => 110,  247 => 109,  243 => 108,  231 => 98,  224 => 96,  216 => 91,  212 => 90,  208 => 89,  204 => 88,  200 => 87,  196 => 85,  193 => 84,  189 => 83,  177 => 73,  170 => 71,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 59,  138 => 58,  134 => 57,  120 => 46,  116 => 45,  110 => 42,  106 => 41,  100 => 38,  96 => 37,  90 => 34,  86 => 33,  80 => 30,  76 => 29,  66 => 25,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  40 => 14,  36 => 13,  27 => 9,  23 => 7,  20 => 1,  119 => 112,  107 => 101,  104 => 100,  102 => 98,  99 => 97,  93 => 94,  85 => 34,  79 => 31,  70 => 26,  64 => 22,  58 => 19,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
