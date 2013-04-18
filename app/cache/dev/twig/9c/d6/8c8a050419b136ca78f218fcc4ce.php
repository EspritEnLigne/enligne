<?php

/* AcmeDemoBundle::menu.html.twig */
class __TwigTemplate_9cd68c8a050419b136ca78f218fcc4ce extends Twig_Template
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
    <li class=\"active\"><a href=\"#\">Acceil</a></li>
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
            echo "                        <li><a tabindex=\"-1\" href=\"#\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a></a></li>
                        ";
            // line 63
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                // line 64
                echo "                        <li><a tabindex=\"-1\" href=\"/EOLESPRIT/EOL/web/app_dev.php/espnote/show\">Voir mes notes</a></li>
                        ";
            }
            // line 66
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
                // line 67
                echo "                        <li><a tabindex=\"-1\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_new"), "html", null, true);
                echo "\">Ajouter un article</a></li>
                        ";
            }
            // line 69
            echo "                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"#\">Separated link</a></li>
                    </ul>
                </li>
                   
             ";
            // line 77
            echo "                            ";
        } else {
            // line 78
            echo "                <li>       
                        ";
            // line 79
            $this->env->loadTemplate("FOSUserBundle:Security:login.html.twig")->display($context);
            // line 80
            echo "                     ";
            // line 81
            echo "                         ";
            // line 82
            echo "                            ";
        }
        // line 83
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
        return array (  184 => 83,  181 => 82,  179 => 81,  177 => 80,  175 => 79,  172 => 78,  169 => 77,  162 => 69,  156 => 67,  153 => 66,  149 => 64,  147 => 63,  142 => 62,  135 => 57,  131 => 55,  129 => 54,  121 => 48,  114 => 44,  110 => 43,  105 => 41,  101 => 39,  87 => 36,  83 => 35,  69 => 23,  58 => 18,  53 => 16,  47 => 13,  44 => 12,  19 => 1,  104 => 36,  102 => 35,  98 => 38,  96 => 31,  93 => 30,  88 => 29,  80 => 7,  77 => 6,  71 => 5,  65 => 38,  62 => 19,  60 => 29,  54 => 25,  49 => 14,  45 => 18,  35 => 10,  29 => 9,  23 => 1,  116 => 61,  94 => 40,  91 => 39,  89 => 37,  86 => 36,  75 => 29,  59 => 16,  50 => 12,  46 => 10,  43 => 8,  33 => 10,  30 => 2,);
    }
}
