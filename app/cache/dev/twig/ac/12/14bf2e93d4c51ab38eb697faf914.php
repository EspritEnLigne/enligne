<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_ac1214bf2e93d4c51ab38eb697faf914 extends Twig_Template
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
        return array (  46 => 9,  20 => 1,  647 => 233,  644 => 232,  639 => 227,  632 => 223,  626 => 220,  622 => 218,  620 => 217,  617 => 216,  611 => 214,  609 => 213,  606 => 212,  600 => 210,  598 => 209,  595 => 208,  589 => 206,  587 => 205,  584 => 204,  578 => 202,  576 => 201,  573 => 200,  570 => 199,  565 => 187,  561 => 156,  555 => 155,  546 => 152,  541 => 151,  536 => 150,  533 => 149,  528 => 148,  525 => 147,  519 => 138,  515 => 137,  512 => 136,  504 => 133,  498 => 132,  490 => 130,  487 => 129,  483 => 128,  478 => 126,  475 => 125,  470 => 124,  467 => 123,  464 => 122,  458 => 121,  450 => 110,  445 => 109,  442 => 108,  416 => 51,  412 => 50,  408 => 49,  404 => 48,  399 => 46,  394 => 44,  390 => 43,  385 => 42,  382 => 41,  375 => 37,  371 => 36,  367 => 35,  361 => 32,  357 => 31,  352 => 29,  349 => 28,  346 => 27,  339 => 239,  337 => 232,  332 => 229,  330 => 199,  326 => 198,  323 => 197,  317 => 194,  314 => 193,  312 => 192,  306 => 188,  304 => 187,  299 => 184,  295 => 182,  289 => 180,  286 => 179,  283 => 178,  269 => 177,  263 => 175,  258 => 172,  252 => 170,  244 => 168,  242 => 167,  239 => 166,  236 => 165,  218 => 164,  215 => 163,  213 => 162,  210 => 161,  208 => 160,  203 => 157,  201 => 147,  194 => 142,  189 => 139,  186 => 138,  183 => 122,  181 => 121,  177 => 119,  173 => 117,  171 => 116,  167 => 114,  165 => 108,  158 => 106,  156 => 105,  143 => 94,  137 => 92,  133 => 90,  130 => 89,  127 => 88,  110 => 86,  106 => 84,  103 => 83,  86 => 82,  83 => 81,  80 => 80,  74 => 78,  72 => 77,  67 => 75,  61 => 41,  58 => 40,  56 => 27,  47 => 20,  43 => 8,  41 => 17,  35 => 5,  33 => 13,  31 => 12,  84 => 35,  76 => 30,  63 => 73,  55 => 15,  49 => 12,  45 => 19,  39 => 16,  37 => 6,  32 => 5,  29 => 3,  26 => 2,);
    }
}
