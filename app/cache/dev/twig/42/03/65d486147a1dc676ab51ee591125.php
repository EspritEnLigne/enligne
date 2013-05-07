<?php

/* EspritUserBundle:EspEnseignant:show.html.twig */
class __TwigTemplate_420365d486147a1dc676ab51ee591125 extends Twig_Template
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
        // line 1
        echo "
    <h1>EspEnseignant</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Identifiant</th>
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEns"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEns"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Civilité</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "civilite"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datenaissance"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro de carte d'identité</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code CNSS</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cnss"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'entrée</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datentree"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro de telephone 1</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel1"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro de telephone 2</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel2"), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>

        <ul class=\"record_actions\">
    ";
        // line 64
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspEnseignant:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 64,  84 => 40,  137 => 46,  135 => 42,  133 => 40,  130 => 39,  126 => 37,  123 => 36,  118 => 10,  107 => 6,  100 => 47,  95 => 38,  89 => 34,  75 => 30,  66 => 26,  63 => 28,  51 => 20,  46 => 19,  34 => 7,  59 => 86,  55 => 21,  44 => 18,  39 => 7,  31 => 4,  28 => 8,  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  171 => 72,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 7,  108 => 41,  86 => 35,  72 => 23,  61 => 24,  56 => 24,  52 => 14,  50 => 12,  47 => 12,  36 => 12,  32 => 9,  22 => 2,  19 => 1,  102 => 35,  98 => 39,  93 => 36,  88 => 29,  80 => 31,  77 => 36,  71 => 29,  65 => 19,  62 => 30,  60 => 29,  54 => 25,  49 => 20,  35 => 12,  29 => 5,  23 => 1,  116 => 8,  104 => 39,  101 => 38,  99 => 95,  96 => 31,  92 => 111,  90 => 36,  82 => 34,  70 => 32,  64 => 22,  58 => 19,  45 => 18,  42 => 16,  33 => 5,  30 => 6,);
    }
}
