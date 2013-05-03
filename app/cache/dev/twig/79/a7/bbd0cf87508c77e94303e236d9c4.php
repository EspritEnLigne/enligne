<?php

/* EspritUserBundle:EspEnseignant:show.html.twig */
class __TwigTemplate_79a7bbd0cf87508c77e94303e236d9c4 extends Twig_Template
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
        return array (  94 => 64,  84 => 40,  77 => 36,  70 => 32,  63 => 28,  56 => 24,  49 => 20,  42 => 16,  35 => 12,  28 => 8,  19 => 1,);
    }
}
