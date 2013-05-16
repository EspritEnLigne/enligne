<?php

/* EspritUserBundle:EspEtudiant:encadrement.html.twig */
class __TwigTemplate_cda28347d6d4c24776a20b2007a3ec68 extends Twig_Template
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
        echo "<h1>Liste des étudiants </h1>

     <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
             <thead>
            <tr>
               
                <th>Nomet</th>
                <th>Pnomet</th>
                <th>Sujet</th>
                <th>Date de début</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEt"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pnomEt"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiche"), "sujet"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiche"), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                
                <td>
              
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "        </tbody>
    </table>

        <ul>
      
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspEtudiant:encadrement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  31 => 4,  28 => 3,  425 => 3,  420 => 2,  417 => 1,  400 => 178,  392 => 172,  385 => 170,  378 => 166,  374 => 165,  370 => 164,  366 => 163,  362 => 162,  358 => 160,  355 => 159,  351 => 158,  339 => 148,  332 => 146,  324 => 141,  320 => 140,  316 => 139,  312 => 138,  308 => 137,  304 => 135,  301 => 134,  297 => 133,  285 => 123,  278 => 121,  270 => 116,  266 => 115,  262 => 114,  258 => 113,  254 => 112,  250 => 110,  247 => 109,  243 => 108,  231 => 98,  224 => 96,  216 => 91,  212 => 90,  208 => 89,  204 => 88,  200 => 87,  196 => 85,  193 => 84,  189 => 83,  177 => 73,  170 => 71,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 59,  138 => 58,  134 => 57,  120 => 46,  116 => 45,  110 => 42,  106 => 41,  100 => 38,  96 => 37,  90 => 34,  86 => 33,  80 => 30,  76 => 29,  66 => 25,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  40 => 14,  36 => 13,  27 => 9,  23 => 7,  20 => 1,  119 => 112,  107 => 101,  104 => 100,  102 => 98,  99 => 97,  93 => 94,  85 => 34,  79 => 31,  70 => 26,  64 => 22,  58 => 19,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
