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
        return array (  54 => 12,  50 => 11,  40 => 7,  31 => 4,  26 => 2,  20 => 1,  433 => 182,  430 => 181,  427 => 180,  419 => 2,  416 => 1,  410 => 204,  408 => 180,  396 => 171,  388 => 165,  381 => 163,  374 => 159,  370 => 158,  366 => 157,  362 => 156,  358 => 155,  355 => 154,  352 => 153,  348 => 152,  336 => 142,  329 => 140,  321 => 135,  317 => 134,  313 => 133,  309 => 132,  305 => 131,  302 => 130,  299 => 129,  295 => 128,  283 => 118,  276 => 116,  268 => 111,  264 => 110,  260 => 109,  256 => 108,  252 => 107,  249 => 106,  246 => 105,  242 => 104,  230 => 94,  223 => 92,  215 => 87,  211 => 86,  207 => 85,  203 => 84,  199 => 83,  196 => 82,  193 => 81,  189 => 80,  177 => 70,  170 => 68,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  142 => 57,  139 => 56,  135 => 55,  121 => 44,  117 => 43,  111 => 40,  107 => 39,  97 => 35,  91 => 32,  81 => 28,  71 => 24,  67 => 23,  61 => 20,  57 => 19,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  24 => 5,  21 => 1,  94 => 64,  84 => 40,  77 => 27,  63 => 14,  56 => 24,  49 => 20,  35 => 5,  28 => 3,  19 => 1,  113 => 109,  101 => 36,  98 => 97,  96 => 95,  93 => 94,  89 => 111,  87 => 31,  70 => 32,  64 => 22,  58 => 19,  45 => 9,  42 => 8,  33 => 3,  30 => 2,);
    }
}
