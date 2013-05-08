<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_335805a7eec1c1025ce47d4e982788e0 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 25,  27 => 14,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  608 => 370,  604 => 368,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  549 => 334,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  504 => 306,  496 => 301,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  410 => 253,  406 => 252,  398 => 243,  394 => 242,  390 => 240,  384 => 237,  379 => 236,  370 => 229,  360 => 222,  354 => 219,  342 => 210,  305 => 182,  297 => 177,  285 => 168,  276 => 165,  271 => 163,  262 => 157,  248 => 153,  241 => 149,  222 => 138,  207 => 129,  187 => 118,  126 => 83,  100 => 66,  68 => 30,  56 => 40,  31 => 22,  26 => 20,  73 => 32,  48 => 21,  45 => 20,  33 => 16,  24 => 13,  22 => 12,  19 => 11,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 147,  475 => 146,  472 => 287,  468 => 286,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 270,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 118,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 200,  324 => 92,  321 => 91,  318 => 90,  312 => 88,  310 => 184,  302 => 86,  298 => 84,  286 => 80,  282 => 79,  277 => 78,  274 => 77,  272 => 76,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  203 => 128,  200 => 55,  197 => 54,  178 => 45,  173 => 110,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  115 => 75,  107 => 24,  101 => 22,  95 => 64,  90 => 18,  87 => 59,  84 => 16,  81 => 15,  79 => 14,  57 => 27,  52 => 22,  47 => 75,  44 => 74,  42 => 62,  39 => 18,  34 => 53,  301 => 136,  295 => 134,  292 => 133,  289 => 81,  281 => 167,  275 => 126,  269 => 75,  263 => 71,  257 => 120,  254 => 154,  249 => 117,  245 => 114,  233 => 146,  227 => 104,  221 => 101,  216 => 99,  213 => 98,  202 => 93,  196 => 90,  191 => 119,  186 => 87,  184 => 47,  181 => 115,  175 => 43,  169 => 79,  164 => 104,  160 => 76,  157 => 41,  155 => 74,  150 => 93,  144 => 92,  137 => 88,  132 => 86,  123 => 30,  120 => 56,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  80 => 36,  78 => 56,  75 => 39,  70 => 33,  62 => 156,  59 => 155,  54 => 26,  51 => 38,  38 => 18,  264 => 72,  261 => 71,  256 => 69,  252 => 118,  247 => 66,  244 => 66,  237 => 109,  232 => 63,  230 => 62,  225 => 60,  220 => 59,  217 => 136,  211 => 97,  208 => 57,  205 => 54,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 46,  156 => 44,  153 => 43,  151 => 42,  148 => 41,  140 => 67,  134 => 60,  128 => 58,  125 => 34,  121 => 29,  112 => 26,  110 => 25,  105 => 26,  89 => 21,  83 => 20,  76 => 13,  72 => 191,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 21,  23 => 18,  127 => 48,  124 => 47,  118 => 28,  113 => 40,  108 => 71,  102 => 36,  99 => 24,  96 => 34,  91 => 22,  85 => 30,  82 => 57,  77 => 27,  71 => 25,  69 => 30,  66 => 23,  63 => 27,  55 => 11,  49 => 103,  46 => 21,  43 => 21,  12 => 45,);
    }
}
