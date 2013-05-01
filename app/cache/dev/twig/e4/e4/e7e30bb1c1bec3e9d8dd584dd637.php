<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_e4e4e7e30bb1c1bec3e9d8dd584dd637 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  62 => 24,  26 => 3,  133 => 40,  126 => 37,  118 => 10,  107 => 6,  100 => 47,  95 => 38,  89 => 34,  75 => 28,  66 => 25,  46 => 14,  23 => 1,  55 => 21,  44 => 18,  39 => 7,  31 => 4,  28 => 3,  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 7,  90 => 36,  86 => 35,  72 => 23,  65 => 19,  61 => 24,  52 => 14,  32 => 6,  22 => 2,  19 => 1,  175 => 81,  171 => 72,  168 => 79,  166 => 77,  163 => 76,  149 => 64,  146 => 63,  140 => 57,  137 => 46,  130 => 39,  125 => 7,  122 => 6,  116 => 8,  110 => 83,  108 => 41,  105 => 75,  103 => 63,  98 => 39,  96 => 56,  82 => 45,  78 => 44,  56 => 16,  51 => 20,  47 => 12,  34 => 7,  24 => 2,  111 => 34,  104 => 39,  99 => 28,  93 => 36,  91 => 35,  88 => 25,  79 => 29,  73 => 19,  71 => 29,  67 => 17,  59 => 86,  54 => 12,  50 => 15,  43 => 6,  40 => 5,  33 => 5,  158 => 79,  139 => 63,  135 => 42,  131 => 61,  127 => 60,  123 => 36,  106 => 45,  101 => 38,  97 => 41,  85 => 32,  80 => 31,  76 => 28,  74 => 43,  63 => 25,  58 => 17,  48 => 9,  45 => 8,  42 => 12,  36 => 12,  30 => 5,);
    }
}
