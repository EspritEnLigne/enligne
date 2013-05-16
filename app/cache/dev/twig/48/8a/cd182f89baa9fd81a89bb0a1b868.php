<?php

/* EspritUserBundle:ProjetRdi:projet.html.twig */
class __TwigTemplate_488acd182f89baa9fd81a89bb0a1b868 extends Twig_Template
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
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/zoombox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
              
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h2>Recherche, Developpement et Innovation </h2>

  <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 100%; \">
             <thead>
            <tr>
                <th style=\"width: 200px;\">Actions</th>
                <th style=\"width: 100px;\">Titre</th>
                <th style=\"width: 200px;\">Description</th>
                <th style=\"width: 100px;\">Unité de recherche</th>
                <th style=\"width: 30px;\">Dateaffectation</th>
                <th >Les taches</th>
                
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesProjet"]) ? $context["entitiesProjet"] : $this->getContext($context, "entitiesProjet")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td style=\"width: 30px;\">
                <ul>
                  
                        <a class=\"btn  btn-success\"href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projetrdi_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                        <a class=\"btn btn-danger\"href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projetrdi_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">delete</a>
                  
                </ul>
                </td>
                <td style=\"width: 30px;\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                <td style=\"width: 30px;\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "</td>
                <td style=\"width: 30px;\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "uR"), "html", null, true);
            echo "</td>
                <td style=\"width: 30px;\">";
            // line 36
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateaffectation")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateaffectation"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td >
                    <table  class=\"table\">
                ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taches"));
            foreach ($context['_seq'] as $context["_key"] => $context["entit"]) {
                // line 40
                echo "                            
                            <tr>
                                 <td style=\"width: 150px\">  <a class=\"btn btn-mini btn-success\"href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_edit", array("id" => $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "id"))), "html", null, true);
                echo "\">edit</a>
                        <a class=\"btn btn-mini btn-danger\"href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_show", array("id" => $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "id"))), "html", null, true);
                echo "\">delete</a>
                    
                                </td>
                                <td style=\"width: 150px\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "titre"), "html", null, true);
                echo "</td>
                                 
                                <td>
                                ";
                // line 49
                if (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 1)) {
                    // line 50
                    echo "
                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 25%;\"></div>
                                        </div>
                                         ";
                } elseif (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 2)) {
                    // line 55
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 50%;\"></div>
                                        </div>  
                                                ";
                } elseif (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 3)) {
                    // line 59
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 75%;\"></div>
                                        </div> 
                                          ";
                } elseif (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 0)) {
                    // line 63
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 0%;\"></div>
                                        </div>

                                          ";
                } else {
                    // line 68
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 100%;\"></div>
                                        </div> 



                                 ";
                }
                // line 75
                echo "
                                    </td>
                            
                            </tr>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entit'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 80
            echo "                        </table>
                </td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 85
        echo "        </tbody>
    </table>

        <ul>
      
            <a class=\"btn btn-large btn-primary\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projetrdi_new"), "html", null, true);
        echo "\">
                Ajouter projet
            </a>
           <a class=\"btn btn-large btn-primary\"href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_new"), "html", null, true);
        echo "\">add tache</a>
                
        
    </ul>
    ";
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo " <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
           <script src=\"";
        // line 100
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
        return "EspritUserBundle:ProjetRdi:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 99,  206 => 98,  197 => 93,  191 => 90,  184 => 85,  174 => 80,  164 => 75,  155 => 68,  148 => 63,  142 => 59,  136 => 55,  129 => 50,  127 => 49,  121 => 46,  115 => 43,  111 => 42,  103 => 39,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  72 => 28,  62 => 23,  44 => 7,  41 => 6,  78 => 29,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  31 => 4,  28 => 3,  425 => 3,  420 => 2,  417 => 1,  400 => 178,  392 => 172,  385 => 170,  378 => 166,  374 => 165,  370 => 164,  366 => 163,  362 => 162,  358 => 160,  355 => 159,  351 => 158,  339 => 148,  332 => 146,  324 => 141,  320 => 140,  316 => 139,  312 => 138,  308 => 137,  304 => 135,  301 => 134,  297 => 133,  285 => 123,  278 => 121,  270 => 116,  266 => 115,  262 => 114,  258 => 113,  254 => 112,  250 => 110,  247 => 109,  243 => 108,  231 => 98,  224 => 96,  216 => 91,  212 => 100,  208 => 89,  204 => 88,  200 => 87,  196 => 85,  193 => 84,  189 => 83,  177 => 73,  170 => 71,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 59,  138 => 58,  134 => 57,  120 => 46,  116 => 45,  110 => 42,  106 => 41,  100 => 38,  96 => 37,  90 => 34,  86 => 33,  80 => 30,  76 => 29,  66 => 24,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  40 => 14,  36 => 13,  27 => 9,  23 => 7,  20 => 1,  119 => 112,  107 => 40,  104 => 100,  102 => 98,  99 => 97,  93 => 94,  85 => 34,  79 => 31,  70 => 26,  64 => 22,  58 => 19,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
