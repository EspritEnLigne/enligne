<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_03695075fa968167f43d9e45f6e7506b extends Twig_Template
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
        return array (  22 => 12,  335 => 94,  329 => 91,  326 => 90,  306 => 87,  303 => 86,  286 => 85,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  255 => 69,  250 => 67,  245 => 66,  243 => 65,  240 => 64,  218 => 57,  211 => 53,  206 => 51,  190 => 50,  187 => 49,  184 => 48,  181 => 47,  175 => 45,  172 => 44,  167 => 42,  164 => 41,  152 => 35,  147 => 33,  144 => 32,  120 => 21,  115 => 20,  112 => 19,  109 => 18,  103 => 16,  101 => 15,  93 => 14,  80 => 9,  77 => 8,  73 => 7,  68 => 30,  65 => 5,  53 => 77,  50 => 25,  42 => 61,  40 => 41,  32 => 32,  27 => 14,  24 => 13,  36 => 18,  66 => 31,  64 => 30,  56 => 78,  49 => 20,  45 => 63,  33 => 16,  116 => 23,  102 => 22,  96 => 21,  78 => 20,  75 => 19,  61 => 29,  34 => 38,  28 => 14,  52 => 17,  47 => 25,  37 => 40,  31 => 15,  29 => 31,  20 => 11,  23 => 12,  19 => 11,  636 => 210,  631 => 208,  625 => 206,  623 => 205,  617 => 201,  608 => 198,  604 => 197,  598 => 196,  595 => 195,  591 => 194,  586 => 192,  579 => 190,  571 => 188,  568 => 187,  565 => 186,  560 => 135,  556 => 133,  547 => 130,  538 => 129,  534 => 128,  530 => 127,  524 => 126,  521 => 125,  519 => 124,  516 => 123,  514 => 122,  505 => 118,  502 => 117,  497 => 114,  483 => 113,  474 => 112,  457 => 111,  452 => 110,  450 => 109,  445 => 107,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 137,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  370 => 176,  363 => 171,  355 => 169,  353 => 168,  350 => 167,  342 => 165,  340 => 164,  337 => 163,  331 => 92,  323 => 160,  315 => 158,  312 => 89,  307 => 156,  304 => 154,  296 => 152,  294 => 151,  291 => 150,  283 => 84,  281 => 147,  275 => 144,  272 => 143,  270 => 142,  265 => 139,  262 => 138,  259 => 70,  257 => 80,  252 => 78,  249 => 77,  246 => 76,  241 => 73,  234 => 71,  228 => 70,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 64,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  182 => 54,  178 => 46,  174 => 51,  169 => 43,  163 => 49,  151 => 48,  149 => 34,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 26,  131 => 25,  128 => 24,  125 => 39,  122 => 22,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 12,  86 => 180,  81 => 177,  79 => 76,  76 => 75,  74 => 60,  71 => 34,  69 => 33,  63 => 4,  60 => 3,  57 => 27,  54 => 26,  48 => 64,  43 => 21,  41 => 17,  38 => 18,  35 => 17,);
    }
}
