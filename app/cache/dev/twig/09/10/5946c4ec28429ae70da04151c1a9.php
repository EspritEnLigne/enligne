<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_09105946c4ec28429ae70da04151c1a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  20 => 1,  641 => 232,  638 => 231,  633 => 226,  626 => 222,  620 => 219,  616 => 217,  614 => 216,  611 => 215,  605 => 213,  603 => 212,  600 => 211,  594 => 209,  592 => 208,  589 => 207,  583 => 205,  581 => 204,  578 => 203,  572 => 201,  570 => 200,  567 => 199,  564 => 198,  559 => 186,  555 => 155,  549 => 154,  540 => 151,  535 => 150,  530 => 149,  527 => 148,  522 => 147,  519 => 146,  513 => 137,  509 => 136,  506 => 135,  498 => 132,  492 => 131,  484 => 129,  481 => 128,  477 => 127,  472 => 125,  469 => 124,  464 => 123,  461 => 122,  458 => 121,  452 => 120,  444 => 110,  439 => 109,  436 => 108,  410 => 51,  406 => 50,  402 => 49,  398 => 48,  393 => 46,  388 => 44,  384 => 43,  379 => 42,  376 => 41,  369 => 37,  365 => 36,  361 => 35,  355 => 32,  351 => 31,  346 => 29,  343 => 28,  340 => 27,  333 => 238,  331 => 231,  326 => 228,  324 => 198,  320 => 197,  317 => 196,  311 => 193,  308 => 192,  306 => 191,  300 => 187,  298 => 186,  293 => 183,  289 => 181,  283 => 179,  280 => 178,  277 => 177,  263 => 176,  257 => 174,  252 => 171,  246 => 169,  238 => 167,  236 => 166,  233 => 165,  230 => 164,  212 => 163,  209 => 162,  207 => 161,  204 => 160,  202 => 159,  197 => 156,  195 => 146,  188 => 141,  183 => 138,  180 => 137,  177 => 121,  175 => 120,  167 => 114,  165 => 108,  158 => 106,  156 => 105,  143 => 94,  137 => 92,  133 => 90,  130 => 89,  127 => 88,  110 => 86,  106 => 84,  103 => 83,  86 => 82,  83 => 81,  80 => 80,  74 => 78,  72 => 77,  67 => 75,  61 => 41,  58 => 40,  56 => 27,  47 => 20,  43 => 8,  41 => 17,  35 => 5,  33 => 13,  31 => 12,  84 => 35,  76 => 30,  63 => 73,  55 => 15,  49 => 12,  45 => 19,  39 => 16,  37 => 6,  32 => 5,  29 => 3,  26 => 2,);
    }
}
