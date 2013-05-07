<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_7cbf8f29c2c3ced014890c94551c102c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  26 => 2,  20 => 1,  437 => 183,  434 => 182,  431 => 181,  423 => 2,  420 => 1,  414 => 205,  412 => 181,  400 => 172,  392 => 166,  385 => 164,  378 => 160,  374 => 159,  370 => 158,  366 => 157,  362 => 156,  359 => 155,  356 => 154,  352 => 153,  340 => 143,  333 => 141,  325 => 136,  321 => 135,  317 => 134,  313 => 133,  309 => 132,  306 => 131,  303 => 130,  299 => 129,  287 => 119,  280 => 117,  272 => 112,  268 => 111,  264 => 110,  260 => 109,  256 => 108,  252 => 107,  249 => 106,  246 => 105,  242 => 104,  230 => 94,  223 => 92,  215 => 87,  211 => 86,  207 => 85,  203 => 84,  199 => 83,  177 => 70,  170 => 68,  157 => 61,  153 => 60,  149 => 59,  142 => 57,  139 => 56,  121 => 44,  111 => 40,  97 => 35,  91 => 32,  87 => 31,  81 => 28,  67 => 23,  57 => 19,  41 => 12,  37 => 11,  24 => 5,  21 => 1,  94 => 64,  84 => 40,  137 => 46,  135 => 55,  133 => 40,  130 => 39,  126 => 37,  123 => 36,  118 => 10,  107 => 39,  100 => 47,  95 => 38,  89 => 34,  75 => 30,  66 => 26,  63 => 14,  51 => 16,  46 => 19,  34 => 7,  59 => 86,  55 => 21,  44 => 18,  39 => 7,  31 => 4,  28 => 3,  196 => 82,  193 => 81,  191 => 84,  189 => 80,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  171 => 72,  164 => 69,  161 => 62,  155 => 65,  150 => 64,  148 => 63,  145 => 58,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 43,  113 => 7,  108 => 41,  86 => 35,  72 => 23,  61 => 20,  56 => 24,  52 => 14,  50 => 11,  47 => 15,  36 => 12,  32 => 9,  22 => 2,  19 => 1,  102 => 35,  98 => 39,  93 => 36,  88 => 29,  80 => 31,  77 => 27,  71 => 24,  65 => 19,  62 => 30,  60 => 29,  54 => 12,  49 => 20,  35 => 5,  29 => 5,  23 => 1,  116 => 8,  104 => 39,  101 => 36,  99 => 95,  96 => 31,  92 => 111,  90 => 36,  82 => 34,  70 => 32,  64 => 22,  58 => 19,  45 => 9,  42 => 8,  33 => 5,  30 => 6,);
    }
}
