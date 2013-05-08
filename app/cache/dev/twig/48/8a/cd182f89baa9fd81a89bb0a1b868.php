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
                  
                        <a class=\"btn btn-mini btn-success\"href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projetrdi_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                        <a class=\"btn btn-mini btn-danger\"href=\"";
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
                            <tr><td style=\"width: 150px\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "titre"), "html", null, true);
                echo "
                                    <a class=\"btn btn-mini btn-success\"href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_edit", array("id" => $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "id"))), "html", null, true);
                echo "\">edit</a>
                        <a class=\"btn btn-mini btn-danger\"href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_show", array("id" => $this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "id"))), "html", null, true);
                echo "\">delete</a>
                    
                                </td>
                                <td>
                                ";
                // line 47
                if (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 1)) {
                    // line 48
                    echo "
                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 25%;\"></div>
                                        </div>
                                         ";
                } elseif (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 2)) {
                    // line 53
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 50%;\"></div>
                                        </div>  
                                                ";
                } elseif (($this->getAttribute((isset($context["entit"]) ? $context["entit"] : $this->getContext($context, "entit")), "avancement") == 3)) {
                    // line 57
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 75%;\"></div>
                                        </div>  

                                          ";
                } else {
                    // line 62
                    echo "                                        <div class=\"progress progress-striped\">
                                            <div class=\"bar\" style=\"width: 100%;\"></div>
                                        </div> 



                                 ";
                }
                // line 69
                echo "
                                    </td>
                            
                            </tr>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entit'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 74
            echo "                        </table>
                </td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 79
        echo "        </tbody>
    </table>

        <ul>
      
            <a class=\"btn btn-large btn-primary\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projetrdi_new"), "html", null, true);
        echo "\">
                Ajouter projet
            </a>
           <a class=\"btn btn-large btn-primary\"href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tacherdi_new"), "html", null, true);
        echo "\">add tache</a>
                
        
    </ul>
    ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo " <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
           <script src=\"";
        // line 94
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
        return "EspritUserBundle:ProjetRdi:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 94,  201 => 93,  198 => 92,  189 => 87,  183 => 84,  176 => 79,  166 => 74,  156 => 69,  147 => 62,  140 => 57,  134 => 53,  127 => 48,  125 => 47,  118 => 43,  114 => 42,  110 => 41,  107 => 40,  103 => 39,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  76 => 29,  72 => 28,  66 => 24,  62 => 23,  44 => 7,  41 => 6,  33 => 3,  30 => 2,);
    }
}
