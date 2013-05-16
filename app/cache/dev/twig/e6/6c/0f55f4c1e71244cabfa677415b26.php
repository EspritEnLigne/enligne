<?php

/* EspritEnseignantBundle:Absence:gestionabsence.html.twig */
class __TwigTemplate_e66c0f55f4c1e71244cabfa677415b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "  
                
";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Relévé  complet des absences</h1>

   <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 100%; \">
         <thead>
            <tr>
                <th>Date</th>
                 <th>Heure d'absence</th>
                 <th>Matiere</th>
                  <th>Enseingant</th>
                <th>Justifier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
               <td>";
            // line 23
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSaisie")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSaisie"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureAbsence"), "html", null, true);
            echo "</td>
               <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "matiere"), "libelle"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enseignant"), "nomEns"), "html", null, true);
            echo "</td>
               ";
            // line 27
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "justifier") == 1)) {
                // line 28
                echo "                <td>Absence justifié</td>
                ";
            } else {
                // line 30
                echo "                 <td>Absence non justifié</td>
                                 ";
            }
            // line 32
            echo "                <td>
                <ul>
                 
                        <a class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">delete</a>
               
                   
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "        </tbody>
    </table>

    ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo " <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
           <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/zoombox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
    jQuery(function(\$){
           
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
        return "EspritEnseignantBundle:Absence:gestionabsence.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  134 => 47,  131 => 46,  124 => 42,  111 => 35,  106 => 32,  102 => 30,  98 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  78 => 23,  75 => 22,  71 => 21,  55 => 7,  52 => 6,  44 => 2,  41 => 1,  34 => 68,  31 => 46,  29 => 6,  25 => 4,  22 => 1,);
    }
}
