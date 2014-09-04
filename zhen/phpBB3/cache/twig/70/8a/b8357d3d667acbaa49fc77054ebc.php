<?php

/* navbar_footer.html */
class __TwigTemplate_708ab8357d3d667acbaa49fc77054ebc extends Twig_Template
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
        echo "<div class=\"navbar\">
\t<div class=\"inner\">

\t<ul class=\"linklist bulletin\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 8
        // line 9
        echo "\t\t</li>
\t\t";
        // line 10
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 11
            echo "\t\t\t";
            if ((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null)) {
                echo "<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\"><a href=\"";
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ((!(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null))) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\">";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "</a></li>";
            }
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        // line 16
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<li class=\"rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 17
        echo "\t\t";
        // line 18
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"rightside\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 19
        echo "\t\t";
        // line 20
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  96 => 18,  85 => 16,  45 => 10,  34 => 7,  177 => 48,  174 => 47,  140 => 43,  133 => 42,  121 => 40,  113 => 37,  94 => 17,  78 => 18,  74 => 12,  59 => 14,  47 => 11,  42 => 9,  26 => 6,  137 => 39,  125 => 41,  117 => 38,  114 => 31,  110 => 30,  101 => 27,  98 => 26,  89 => 25,  68 => 21,  63 => 20,  57 => 13,  52 => 12,  46 => 10,  38 => 9,  36 => 8,  30 => 7,  232 => 49,  231 => 48,  219 => 46,  208 => 45,  200 => 44,  191 => 49,  187 => 41,  184 => 40,  181 => 39,  170 => 45,  162 => 34,  160 => 33,  151 => 31,  148 => 30,  138 => 27,  135 => 26,  132 => 36,  128 => 23,  116 => 22,  105 => 19,  102 => 19,  100 => 18,  95 => 15,  84 => 15,  71 => 13,  67 => 11,  65 => 15,  50 => 9,  41 => 8,  31 => 7,  28 => 6,  25 => 4,  377 => 102,  374 => 101,  364 => 97,  360 => 95,  358 => 94,  353 => 91,  352 => 90,  348 => 88,  336 => 87,  330 => 83,  316 => 78,  312 => 77,  304 => 76,  299 => 74,  296 => 73,  294 => 72,  288 => 69,  284 => 68,  280 => 67,  264 => 66,  254 => 58,  253 => 57,  244 => 55,  238 => 52,  235 => 51,  234 => 50,  226 => 47,  222 => 47,  214 => 43,  212 => 42,  209 => 41,  201 => 39,  199 => 38,  192 => 36,  188 => 42,  183 => 34,  179 => 33,  173 => 46,  163 => 24,  157 => 22,  155 => 44,  152 => 20,  134 => 18,  119 => 17,  108 => 21,  97 => 15,  86 => 14,  75 => 22,  64 => 12,  37 => 9,  33 => 8,  22 => 2,  93 => 18,  79 => 14,  77 => 13,  72 => 12,  62 => 11,  58 => 10,  54 => 16,  49 => 6,  35 => 4,  21 => 2,  19 => 1,);
    }
}
