<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_cef4b8b075ba63fd17bc23f8d5eba150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 17
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 0, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 20
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                // line 21
                echo "</a>
    ";
            } else {
                // line 23
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 1, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 25
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                // line 26
                echo "</a>
    ";
            }
        } else {
            // line 29
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 30
                echo "        <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            } else {
                // line 33
                echo "        <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 31,  64 => 30,  56 => 26,  49 => 23,  45 => 21,  33 => 16,  116 => 23,  102 => 22,  96 => 21,  78 => 20,  75 => 19,  61 => 29,  34 => 16,  28 => 14,  52 => 17,  47 => 25,  37 => 21,  31 => 15,  29 => 13,  20 => 11,  23 => 12,  19 => 11,  636 => 210,  631 => 208,  625 => 206,  623 => 205,  617 => 201,  608 => 198,  604 => 197,  598 => 196,  595 => 195,  591 => 194,  586 => 192,  579 => 190,  571 => 188,  568 => 187,  565 => 186,  560 => 135,  556 => 133,  547 => 130,  538 => 129,  534 => 128,  530 => 127,  524 => 126,  521 => 125,  519 => 124,  516 => 123,  514 => 122,  505 => 118,  502 => 117,  497 => 114,  483 => 113,  474 => 112,  457 => 111,  452 => 110,  450 => 109,  445 => 107,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 137,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  370 => 176,  363 => 171,  355 => 169,  353 => 168,  350 => 167,  342 => 165,  340 => 164,  337 => 163,  331 => 162,  323 => 160,  315 => 158,  312 => 157,  307 => 156,  304 => 154,  296 => 152,  294 => 151,  291 => 150,  283 => 148,  281 => 147,  275 => 144,  272 => 143,  270 => 142,  265 => 139,  262 => 138,  259 => 81,  257 => 80,  252 => 78,  249 => 77,  246 => 76,  241 => 73,  234 => 71,  228 => 70,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 64,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  182 => 54,  178 => 52,  174 => 51,  169 => 50,  163 => 49,  151 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 181,  86 => 180,  81 => 177,  79 => 76,  76 => 75,  74 => 60,  71 => 34,  69 => 33,  63 => 25,  60 => 24,  57 => 23,  54 => 25,  48 => 20,  43 => 20,  41 => 23,  38 => 18,  35 => 17,);
    }
}
