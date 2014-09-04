<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_7239859d608c5a6d00a7ea60b492fd23 extends Twig_Template
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
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ((!(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null))) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">
\t\t\t\t\t\t\t";
                // line 11
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 16
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 17
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">
\t\t\t\t\t\t\t";
                // line 18
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 24
            echo "\t\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 25
            echo "\t\t\t\t";
            if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
                // line 26
                echo "\t\t\t\t\t<li class=\"small-icon icon-download\">
\t\t\t\t\t\t<a class=\"dropdown-toggle-submenu\" href=\"";
                // line 27
                echo (isset($context["U_DOWNLOAD_ALL_ATTACHMENTS"]) ? $context["U_DOWNLOAD_ALL_ATTACHMENTS"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL_ATTACHMENTS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL_ATTACHMENTS");
                echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown-submenu hidden\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "dl_method"));
                foreach ($context['_seq'] as $context["_key"] => $context["dl_method"]) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "TYPE");
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "S_LAST_ROW"))) {
                        echo " &bull; ";
                    }
                    echo " 
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
            // line 38
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 38,  162 => 37,  156 => 33,  141 => 31,  137 => 30,  124 => 26,  121 => 25,  110 => 24,  99 => 23,  88 => 22,  81 => 18,  73 => 17,  70 => 16,  67 => 15,  60 => 11,  44 => 10,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1454 => 391,  1451 => 390,  1445 => 387,  1433 => 386,  1430 => 385,  1428 => 384,  1425 => 383,  1418 => 379,  1414 => 378,  1411 => 377,  1400 => 375,  1396 => 374,  1390 => 372,  1384 => 370,  1382 => 369,  1379 => 368,  1367 => 367,  1366 => 366,  1361 => 363,  1357 => 361,  1351 => 359,  1348 => 358,  1335 => 357,  1333 => 356,  1329 => 355,  1326 => 354,  1324 => 353,  1321 => 352,  1309 => 351,  1305 => 349,  1301 => 347,  1295 => 346,  1278 => 345,  1276 => 344,  1272 => 342,  1271 => 341,  1268 => 340,  1261 => 335,  1256 => 333,  1248 => 332,  1240 => 331,  1237 => 330,  1226 => 329,  1216 => 328,  1209 => 325,  1207 => 324,  1193 => 322,  1191 => 321,  1186 => 319,  1175 => 313,  1169 => 309,  1160 => 308,  1158 => 307,  1152 => 306,  1149 => 305,  1145 => 303,  1136 => 302,  1132 => 301,  1129 => 300,  1125 => 298,  1116 => 297,  1112 => 296,  1109 => 295,  1106 => 294,  1099 => 293,  1098 => 292,  1095 => 291,  1091 => 289,  1082 => 287,  1078 => 286,  1075 => 285,  1070 => 282,  1059 => 280,  1055 => 279,  1049 => 277,  1046 => 276,  1044 => 275,  1040 => 274,  1036 => 272,  1034 => 271,  1029 => 269,  1026 => 268,  1018 => 265,  1015 => 264,  1013 => 263,  1010 => 262,  1003 => 258,  999 => 257,  995 => 256,  991 => 255,  987 => 254,  981 => 252,  974 => 248,  970 => 247,  966 => 246,  962 => 245,  958 => 244,  952 => 242,  950 => 241,  931 => 239,  928 => 238,  925 => 237,  921 => 235,  919 => 234,  909 => 231,  906 => 230,  903 => 229,  893 => 226,  890 => 225,  887 => 224,  877 => 221,  874 => 220,  871 => 219,  861 => 216,  858 => 215,  855 => 214,  845 => 211,  842 => 210,  839 => 209,  829 => 206,  826 => 205,  823 => 204,  822 => 203,  819 => 202,  816 => 201,  814 => 200,  792 => 198,  782 => 196,  779 => 195,  773 => 192,  769 => 191,  764 => 190,  758 => 187,  754 => 186,  749 => 185,  746 => 184,  744 => 183,  738 => 179,  736 => 178,  729 => 173,  723 => 172,  719 => 170,  717 => 169,  712 => 167,  694 => 166,  690 => 164,  687 => 163,  683 => 162,  680 => 161,  676 => 160,  666 => 154,  663 => 153,  660 => 152,  659 => 151,  656 => 150,  654 => 149,  648 => 148,  637 => 146,  634 => 145,  629 => 144,  628 => 143,  625 => 142,  617 => 140,  614 => 139,  612 => 138,  609 => 137,  599 => 136,  589 => 135,  580 => 134,  577 => 133,  567 => 132,  563 => 130,  554 => 129,  551 => 128,  538 => 127,  536 => 126,  528 => 125,  520 => 124,  492 => 121,  485 => 120,  483 => 119,  479 => 118,  476 => 117,  467 => 111,  463 => 110,  456 => 106,  453 => 105,  445 => 102,  441 => 100,  439 => 99,  436 => 98,  430 => 95,  426 => 93,  424 => 92,  415 => 89,  408 => 87,  405 => 86,  399 => 85,  398 => 84,  385 => 82,  362 => 81,  336 => 80,  324 => 79,  306 => 78,  304 => 77,  300 => 76,  286 => 73,  282 => 72,  272 => 66,  270 => 65,  265 => 62,  261 => 60,  255 => 58,  252 => 57,  239 => 56,  237 => 55,  226 => 54,  223 => 53,  221 => 52,  218 => 51,  210 => 46,  206 => 45,  202 => 44,  197 => 42,  194 => 41,  192 => 40,  189 => 39,  177 => 38,  173 => 36,  169 => 34,  163 => 33,  146 => 32,  144 => 31,  138 => 27,  132 => 23,  127 => 27,  122 => 20,  114 => 18,  112 => 17,  103 => 14,  101 => 13,  98 => 12,  85 => 9,  82 => 8,  80 => 7,  77 => 6,  71 => 5,  61 => 3,  31 => 7,  19 => 1,);
    }
}
