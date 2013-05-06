<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_d2f68245337f0182493e2f76f9f47fd4 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  62 => 24,  26 => 3,  133 => 40,  126 => 37,  118 => 10,  107 => 6,  100 => 47,  95 => 38,  89 => 34,  75 => 28,  66 => 25,  46 => 14,  23 => 1,  55 => 21,  44 => 18,  39 => 7,  31 => 4,  28 => 3,  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 7,  90 => 36,  86 => 35,  72 => 23,  65 => 19,  61 => 24,  52 => 14,  32 => 6,  22 => 2,  19 => 1,  175 => 81,  171 => 72,  168 => 79,  166 => 77,  163 => 76,  149 => 64,  146 => 63,  140 => 57,  137 => 46,  130 => 39,  125 => 7,  122 => 6,  116 => 8,  110 => 83,  108 => 41,  105 => 75,  103 => 63,  98 => 39,  96 => 56,  82 => 45,  78 => 44,  56 => 16,  51 => 20,  47 => 12,  34 => 7,  24 => 2,  111 => 34,  104 => 39,  99 => 28,  93 => 36,  91 => 35,  88 => 25,  79 => 29,  73 => 19,  71 => 29,  67 => 17,  59 => 86,  54 => 12,  50 => 15,  43 => 6,  40 => 5,  33 => 5,  158 => 79,  139 => 63,  135 => 42,  131 => 61,  127 => 60,  123 => 36,  106 => 45,  101 => 38,  97 => 41,  85 => 32,  80 => 31,  76 => 28,  74 => 43,  63 => 25,  58 => 17,  48 => 9,  45 => 8,  42 => 12,  36 => 12,  30 => 5,);
    }
}
