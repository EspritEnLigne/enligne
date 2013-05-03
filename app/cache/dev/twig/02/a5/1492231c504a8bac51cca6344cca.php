<?php

/* EspritUserBundle:EspEnseignant:edit.html.twig */
class __TwigTemplate_02a51492231c504a8bac51cca6344cca extends Twig_Template
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
        echo "   <h1>Profil</h1>

    <form  class=\"form-horizontal\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("espenseignant_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idEns"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idEns"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cnss"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cnss"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel1"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel1"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel2"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel2"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datentree"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datentree"), 'widget');
        echo " </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"inputEmail\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datesortie"), 'label');
        echo "</label>
            <div class=\"controls\"> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datesortie"), 'widget');
        echo " </div>
        </div>
        <h1>Cursus scolaire et universitaire</h1>
        <div class=\"control-group\">
            
            <div class=\"controls\">
               ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn\">Edit</button>
            </div>
        </div>
        
    </form>


       

";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:EspEnseignant:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  116 => 40,  112 => 39,  106 => 36,  102 => 35,  96 => 32,  92 => 31,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  66 => 20,  62 => 19,  56 => 16,  52 => 15,  46 => 12,  42 => 11,  36 => 8,  32 => 7,  23 => 3,  19 => 1,);
    }
}
