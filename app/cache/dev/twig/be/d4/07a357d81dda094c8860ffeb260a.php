<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bed407a357d81dda094c8860ffeb260a extends Twig_Template
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
        return array (  55 => 56,  44 => 8,  39 => 7,  31 => 4,  28 => 3,  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 43,  90 => 36,  86 => 35,  72 => 23,  65 => 19,  61 => 18,  52 => 14,  32 => 9,  22 => 2,  19 => 1,  175 => 81,  171 => 72,  168 => 79,  166 => 77,  163 => 76,  149 => 64,  146 => 63,  140 => 57,  137 => 56,  130 => 8,  125 => 7,  122 => 6,  116 => 5,  110 => 83,  108 => 41,  105 => 75,  103 => 63,  98 => 60,  96 => 56,  82 => 45,  78 => 44,  56 => 16,  51 => 21,  47 => 12,  34 => 6,  24 => 1,  111 => 34,  104 => 39,  99 => 28,  93 => 27,  91 => 26,  88 => 25,  79 => 21,  73 => 19,  71 => 18,  67 => 17,  59 => 86,  54 => 12,  50 => 12,  43 => 6,  40 => 5,  33 => 5,  158 => 79,  139 => 63,  135 => 62,  131 => 61,  127 => 60,  123 => 59,  106 => 45,  101 => 38,  97 => 41,  85 => 32,  80 => 30,  76 => 28,  74 => 43,  63 => 16,  58 => 17,  48 => 9,  45 => 8,  42 => 7,  36 => 10,  30 => 5,);
    }
}
