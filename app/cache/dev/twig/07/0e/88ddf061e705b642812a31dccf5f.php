<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_070e88ddf061e705b642812a31dccf5f extends Twig_Template
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
        echo "<center>
<form  class=\"form-horizontal\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
     
 ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
          
    
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
</form>
    </center>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  94 => 27,  92 => 26,  88 => 24,  86 => 22,  83 => 21,  79 => 17,  76 => 16,  67 => 7,  64 => 6,  58 => 5,  50 => 94,  48 => 21,  44 => 19,  42 => 16,  35 => 7,  33 => 6,  29 => 4,  23 => 1,);
    }
}
