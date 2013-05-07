<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e2f2f7d85d7421d07920216a04feeb43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<form  style=\"top: 50%;left: 50%;margin-top: 5px;margin-left: 10px;\"class=\"form-inline\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"text\" class=\"input-small\" id=\"username\" placeholder=\"Username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" name=\"_username\">
    <input type=\"password\" class=\"input-small\" id=\"password\" placeholder=\"Password\" required=\"required\" name=\"_password\">
    <label class=\"checkbox\">
    ";
        // line 12
        echo "    </label>
    <button style=\"top: 50%;left: 50%;margin-top: 2px;margin-left: 10px;\" type=\"submit\" class=\"btn\">Sign in</button>
</form>
";
        // line 56
        echo "

";
        // line 86
        echo "       
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 86,  55 => 56,  44 => 8,  39 => 7,  31 => 4,  28 => 3,  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  171 => 72,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 43,  108 => 41,  86 => 35,  72 => 23,  61 => 18,  56 => 16,  52 => 14,  50 => 12,  47 => 12,  36 => 10,  32 => 9,  22 => 2,  19 => 1,  102 => 35,  98 => 33,  93 => 30,  88 => 29,  80 => 7,  77 => 6,  71 => 5,  65 => 19,  62 => 30,  60 => 29,  54 => 25,  49 => 19,  35 => 10,  29 => 5,  23 => 1,  116 => 109,  104 => 39,  101 => 38,  99 => 95,  96 => 31,  92 => 111,  90 => 36,  82 => 34,  70 => 25,  64 => 22,  58 => 19,  45 => 18,  42 => 7,  33 => 5,  30 => 2,);
    }
}
