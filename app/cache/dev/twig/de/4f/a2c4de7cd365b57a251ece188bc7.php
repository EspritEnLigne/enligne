<?php

/* AcmeDemoBundle::menu.html.twig */
class __TwigTemplate_de4fa2c4de7cd365b57a251ece188bc7 extends Twig_Template
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
        echo "<ul class=\"nav\">
    <li class=\"active\"><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news"), "html", null, true);
        echo "\">Acceil</a></li>
    <li><a href=\"#\">Inscription</a></li>
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
            Scolarite <b class=\"caret\"></b>
        </a>
        <ul class=\"dropdown-menu\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "                <li><a tabindex=\"-1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubrique_showMenu", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "                
                ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_SCOL")) {
            // line 14
            echo "                <li class=\"divider\"></li>
                <li class=\"dropdown-submenu\">
                    <a tabindex=\"-1\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubrique"), "html", null, true);
            echo "\">Gestion des rubriques</a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubrique_new"), "html", null, true);
            echo "\">Ajouter rubrique</a></li>
                        <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("document"), "html", null, true);
            echo "\">Gestion des documents</a></li>
                    </ul>
                </li>
                ";
        }
        // line 23
        echo "            </ul>
        </li>

        <li><a href=\"#\">Plateforme E-Learning</a>

        </li>

        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                Stages et Projets <b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu\">
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriqueStage"]) ? $context["rubriqueStage"] : $this->getContext($context, "rubriqueStage")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                    <li><a tabindex=\"-1\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubriquestage_showMenuStage", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_STAGE")) {
            // line 39
            echo "                    <li class=\"divider\"></li>
                    <li class=\"dropdown-submenu\">
                        <a tabindex=\"-1\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubriquestage"), "html", null, true);
            echo "\">Gestion des rubriques</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rubriquestage_new"), "html", null, true);
            echo "\">Ajouter rubrique</a></li>
                            <li><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentstage"), "html", null, true);
            echo "\">Gestion des documents</a></li>
                        </ul>
                    </li>
                    ";
        }
        // line 48
        echo "                </ul>
            </li>

            <li><a href=\"#\">Réglement intérieur</a></li>
            <li><a href=\"#\">Contact</a></li>
           
                            ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 55
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"false\">
                        Bienvenue ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b>
                    </a>

                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                     ";
            // line 62
            echo "                        
                        ";
            // line 63
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                // line 64
                echo "                        <li><a tabindex=\"-1\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espnote_show"), "html", null, true);
                echo "\">Voir mes notes</a></li>
                        <li><a tabindex=\"-1\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_show"), "html", null, true);
                echo "\">Voir mes absences</a></li>
                        <li class=\"divider\"></li>
                        ";
            }
            // line 68
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
                // line 69
                echo "                        <li><a tabindex=\"-1\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_new"), "html", null, true);
                echo "\">Ajouter un article</a></li>
                        <li class=\"divider\"></li>
                        ";
            }
            // line 72
            echo "                        
                        <li><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a></li>
                    </ul>
                </li>
                   
             ";
            // line 80
            echo "                            ";
        } else {
            // line 81
            echo "                <li>       
                        ";
            // line 82
            $this->env->loadTemplate("FOSUserBundle:Security:login.html.twig")->display($context);
            // line 83
            echo "                     ";
            // line 84
            echo "                         ";
            // line 85
            echo "                            ";
        }
        // line 86
        echo "                 </li> 
                 
                    
                </ul>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  171 => 72,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 43,  108 => 41,  101 => 38,  90 => 36,  86 => 35,  72 => 23,  61 => 18,  56 => 16,  52 => 14,  47 => 12,  36 => 10,  32 => 9,  22 => 2,  19 => 1,  104 => 39,  98 => 33,  93 => 30,  88 => 29,  80 => 7,  65 => 19,  62 => 30,  60 => 29,  49 => 19,  45 => 18,  35 => 10,  33 => 6,  29 => 5,  23 => 1,  121 => 48,  114 => 43,  102 => 35,  96 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 6,  71 => 5,  67 => 25,  63 => 24,  57 => 23,  54 => 25,  50 => 13,  31 => 4,  28 => 3,);
    }
}
