<?php

/* AcmeDemoBundle::showMenuStage.html.twig */
class __TwigTemplate_fcee6209dbb0b2f4b9a854fad9920922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<table class=\"table table-bordered table-striped table-condensed table-hover\" style=\"width: 80%; margin-left: 10%;\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "documentsStage"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "path"), "html", null, true);
            echo "</td>
                <td>
                 <ul>
                     ";
            // line 19
            if ($this->env->getExtension('security')->isGranted("ROLE_STAGE")) {
                // line 20
                echo "                    <li>
                        <a class=\"icon-remove\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentstage_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"></a>
                    </li>
                    <li>
                        <a class=\"icon-pencil\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentstage_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"></a>
                    </li>
                    ";
            }
            // line 27
            echo "                    <li><a class=\"icon-download-alt\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentstage_download", array("path" => $this->getAttribute($this->getContext($context, "entity"), "path"))), "html", null, true);
            echo "\"></a></li>
                    <li><a class=\"embed\" href=\"#\" onclick=\"Popup=window.open('../../../../../web/uploads/documents/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "path"), "html", null, true);
            echo "','Popup','toolbar=yes, location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=420,height=400,left=430,top=23')\">read</a></li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "        </tbody>
        <div id=\"somediv\"></div>
    </table>

<script type=\"text/javascript\">
    //\$.noConflict();
jQuery(document).ready(function(\$){
function openDialog(url) {
       jQuery(\"#somediv\").load(url).dialog({modal: true});
    }
    });
</script>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::showMenuStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  80 => 28,  75 => 27,  69 => 24,  63 => 21,  60 => 20,  58 => 19,  52 => 16,  48 => 15,  45 => 14,  41 => 13,  31 => 5,  28 => 3,);
    }
}
