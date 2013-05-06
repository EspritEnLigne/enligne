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
        <h1>Cursus scolaire et universitaire</h1>
         <table class=\"table table-striped\">
                 <tr>
                    <td>Type</td>
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
                      <td> ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle"), "html", null, true);
                echo "</td>  
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
                      <td>  <a class=\"btn\" href=\"/enligne/web/app_dev.php/espcursus/";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Edit</a></td>
                
                  </tr>

         
      ";
            }
            // line 68
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "                   </table>
        <h1>Cursus à ESPRIT</h1>
         <table class=\"table table-striped\">
                 <tr>
                    <td>Type</td>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 81
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Cursus à ESPRIT")) {
                // line 82
                echo "                  <tr>
                    <td> ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle"), "html", null, true);
                echo "</td>  
                    <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>  <a class=\"btn\" href=\"/enligne/web/app_dev.php/espcursus/";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Edit</a></td>
                
                  </tr>
         
      ";
            }
            // line 92
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 94
        echo "                   </table>
        <h1>Fonction à ESPRIT</h1>
         <table class=\"table table-striped\">
                 <tr>
                    <td>Type</td>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 105
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Fonction à ESPRIT")) {
                // line 106
                echo "                  <tr>
                    <td> ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle"), "html", null, true);
                echo "</td>  
                    <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>  <a class=\"btn\" href=\"/enligne/web/app_dev.php/espcursus/";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Edit</a></td>
                
                  </tr>
         
      ";
            }
            // line 116
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 118
        echo "                   </table>
        <h1>Unité pédagogique</h1>
         <table class=\"table table-striped\">
                 <tr>
                    <td>Type</td>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 129
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Unité pédagogique")) {
                // line 130
                echo "                  <tr>
                    <td> ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle"), "html", null, true);
                echo "</td>  
                    <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 133
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>  <a class=\"btn\" href=\"/enligne/web/app_dev.php/espcursus/";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Edit</a></td>
                
                  </tr>
         
      ";
            }
            // line 140
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 142
        echo "                   </table>
        <h1>Expérience avant ESPRIT</h1>
         <table class=\"table table-striped\">
                 <tr>
                    <td>Type</td>
                    <td>Grade</td>
                    <td>Annee de début</td>
                    <td>Annee fin</td>
                    <td>Action</td>
                  </tr>
        ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enscursus"]) ? $context["enscursus"] : $this->getContext($context, "enscursus")));
        foreach ($context['_seq'] as $context["_key"] => $context["cursus"]) {
            // line 153
            echo "          ";
            if (($this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle") === "Expérience avant ESPRIT")) {
                // line 154
                echo "                  <tr>
                    <td> ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "libelle"), "html", null, true);
                echo "</td>  
                    <td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "type"), "html", null, true);
                echo "  </td>
                    <td>";
                // line 157
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 158
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>  <a class=\"btn\" href=\"/enligne/web/app_dev.php/espcursus/";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cursus"]) ? $context["cursus"] : $this->getContext($context, "cursus")), "id"), "html", null, true);
                echo "/show\">Edit</a></td>
                  </tr>
         
      ";
            }
            // line 163
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 165
        echo "                   </table>
        
        <div class=\"control-group\">
            
            <div class=\"controls\">
                
               ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn\">Edit</button>
                <a class=\"btn\" href=\"/enligne/web/app_dev.php/espcursus/new\">Ajouter</a>
               
            </div>
        </div>
        
    </form>

   ";
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 204
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

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
        // line 181
        echo " <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
           <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/zoombox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
    jQuery(function(\$){
            \$('a.btn').zoombox();

            
            \$('a.btn').zoombox({
                    theme       : 'darkprettyphoto',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                //opacity     : 0.8,              // Black overlay opacity
              //  duration    : 800,              // Animation duration
              //  animation   : true,             // Do we have to animate the box ?
                width       : 800,              // Default width
                height      : 600,              // Default height
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
        return array (  433 => 182,  430 => 181,  427 => 180,  419 => 2,  416 => 1,  410 => 204,  408 => 180,  396 => 171,  388 => 165,  381 => 163,  374 => 159,  370 => 158,  366 => 157,  362 => 156,  358 => 155,  355 => 154,  352 => 153,  348 => 152,  336 => 142,  329 => 140,  321 => 135,  317 => 134,  313 => 133,  309 => 132,  305 => 131,  302 => 130,  299 => 129,  295 => 128,  283 => 118,  276 => 116,  268 => 111,  264 => 110,  260 => 109,  256 => 108,  252 => 107,  249 => 106,  246 => 105,  242 => 104,  230 => 94,  223 => 92,  215 => 87,  211 => 86,  207 => 85,  203 => 84,  199 => 83,  196 => 82,  193 => 81,  189 => 80,  177 => 70,  170 => 68,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  142 => 57,  139 => 56,  135 => 55,  121 => 44,  117 => 43,  111 => 40,  107 => 39,  97 => 35,  91 => 32,  81 => 28,  71 => 24,  67 => 23,  61 => 20,  57 => 19,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  24 => 5,  21 => 1,  94 => 64,  84 => 40,  77 => 27,  63 => 28,  56 => 24,  49 => 20,  35 => 12,  28 => 7,  19 => 1,  113 => 109,  101 => 36,  98 => 97,  96 => 95,  93 => 94,  89 => 111,  87 => 31,  70 => 32,  64 => 22,  58 => 19,  45 => 8,  42 => 16,  33 => 3,  30 => 2,);
    }
}
