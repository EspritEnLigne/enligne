<?php

/* EspritUserBundle:News:index.html.twig */
class __TwigTemplate_fe2ff5f1bf495bf978a454a3fd9c17d8 extends Twig_Template
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
        echo "<div style=\"margin-top: 100px;\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "  <ul class=\"thumbnails\">      
      <li class=\"span4\">
          <div class=\"thumbnail\" style=\"width:  1000px;height: 120px;\">

              <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</h3>
              <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "desc"), "html", null, true);
            echo "
                  ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "newsDate"), "m/d/Y"), "html", null, true);
            echo "
                  <a class=\"btn btn-small btn-primary disabled\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Lire</a>
                   ";
            // line 14
            if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
                // line 15
                echo "                  <a class=\"btn btn-small btn-primary disabled\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Modifier</a>
                   ";
            }
            // line 17
            echo "              </p>
          </div>
      </li>
        </ul>
           
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    ";
        if ($this->getAttribute((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "haveToPaginate")) {
            // line 25
            echo "       ";
            echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "twitter_bootstrap_translated");
            echo "
    ";
        }
        // line 27
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:News:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  83 => 25,  80 => 24,  68 => 17,  62 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
