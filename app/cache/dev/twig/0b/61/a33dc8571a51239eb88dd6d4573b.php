<?php

/* EspritUserBundle:EspConges:conges.html.twig */
class __TwigTemplate_0b61a33dc8571a51239eb88dd6d4573b extends Twig_Template
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
        echo "<h1>Liste des conges</h1>

       <table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
           <thead>
            <tr>
               
                <th>Titre</th>
                <th>Datedebut</th>
                <th>Datefin</th>
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesConges"]) ? $context["entitiesConges"] : $this->getContext($context, "entitiesConges")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datedebut")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datefin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datefin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
              
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        </tbody>
    </table>

        <ul>
       
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspConges:conges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  63 => 21,  209 => 99,  206 => 98,  197 => 93,  191 => 90,  184 => 85,  174 => 80,  164 => 75,  155 => 68,  148 => 63,  142 => 59,  136 => 55,  129 => 50,  127 => 49,  121 => 46,  115 => 43,  111 => 42,  103 => 39,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  72 => 28,  62 => 23,  44 => 7,  41 => 6,  78 => 29,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  31 => 4,  28 => 3,  425 => 3,  420 => 2,  417 => 1,  400 => 178,  392 => 172,  385 => 170,  378 => 166,  374 => 165,  370 => 164,  366 => 163,  362 => 162,  358 => 160,  355 => 159,  351 => 158,  339 => 148,  332 => 146,  324 => 141,  320 => 140,  316 => 139,  312 => 138,  308 => 137,  304 => 135,  301 => 134,  297 => 133,  285 => 123,  278 => 121,  270 => 116,  266 => 115,  262 => 114,  258 => 113,  254 => 112,  250 => 110,  247 => 109,  243 => 108,  231 => 98,  224 => 96,  216 => 91,  212 => 100,  208 => 89,  204 => 88,  200 => 87,  196 => 85,  193 => 84,  189 => 83,  177 => 73,  170 => 71,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 59,  138 => 58,  134 => 57,  120 => 46,  116 => 45,  110 => 42,  106 => 41,  100 => 38,  96 => 37,  90 => 34,  86 => 33,  80 => 30,  76 => 29,  66 => 24,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  40 => 14,  36 => 13,  27 => 9,  23 => 7,  20 => 1,  119 => 112,  107 => 40,  104 => 100,  102 => 98,  99 => 97,  93 => 94,  85 => 34,  79 => 31,  70 => 26,  64 => 22,  58 => 19,  45 => 8,  42 => 7,  33 => 3,  30 => 2,);
    }
}
