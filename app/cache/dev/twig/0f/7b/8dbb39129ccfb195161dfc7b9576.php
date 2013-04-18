<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_0f7b8dbb39129ccfb195161dfc7b9576 extends Twig_Template
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
        return array (  63 => 14,  42 => 8,  40 => 7,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  184 => 83,  181 => 82,  179 => 81,  177 => 80,  175 => 79,  172 => 78,  169 => 77,  162 => 69,  156 => 67,  153 => 66,  149 => 64,  147 => 63,  142 => 62,  135 => 57,  131 => 55,  129 => 54,  121 => 48,  114 => 44,  110 => 43,  105 => 41,  101 => 39,  87 => 36,  83 => 35,  69 => 23,  58 => 18,  53 => 16,  47 => 13,  44 => 12,  19 => 1,  104 => 36,  102 => 35,  98 => 38,  96 => 31,  93 => 30,  88 => 29,  80 => 7,  77 => 6,  71 => 5,  65 => 38,  62 => 19,  60 => 29,  54 => 12,  49 => 14,  45 => 9,  35 => 5,  29 => 9,  23 => 1,  116 => 61,  94 => 40,  91 => 39,  89 => 37,  86 => 36,  75 => 29,  59 => 16,  50 => 11,  46 => 10,  43 => 8,  33 => 10,  30 => 2,);
    }
}
