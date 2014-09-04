<?php

/* memberlist_search.html */
class __TwigTemplate_6f208ab334a5380480f16c49e1813351 extends Twig_Template
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
        echo "<h2 class=\"solo\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</h2>

<form method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
        echo "\" id=\"search_memberlist\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>

\t<fieldset class=\"fields1 column1\">
\t<dl style=\"overflow: visible;\">
\t\t<dt><label for=\"username\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 13
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox\"";
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            echo (isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null);
            echo "\" data-results=\"#user-search\" data-overlay=\"false\"";
        }
        echo " />
\t\t\t";
        // line 14
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            // line 15
            echo "\t\t\t<div class=\"dropdown-container\">
\t\t\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents search-results\">
\t\t\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 24
        echo "\t\t</dd>
\t</dl>
";
        // line 26
        if ((isset($context["S_EMAIL_SEARCH_ALLOWED"]) ? $context["S_EMAIL_SEARCH_ALLOWED"] : null)) {
            // line 27
            echo "\t<dl>
\t\t<dt><label for=\"email\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("EMAIL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"email\" id=\"email\" value=\"";
            // line 29
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 32
        echo "\t<dl>
\t\t<dt><label for=\"jabber\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("JABBER");
        echo ":</label></dt>
\t\t<dd><input type=\"text\" name=\"jabber\" id=\"jabber\" value=\"";
        // line 34
        echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
        echo "\" class=\"inputbox\" /></dd>
\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"search_group_id\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><select name=\"search_group_id\" id=\"search_group_id\">";
        // line 38
        echo (isset($context["S_GROUP_SELECT"]) ? $context["S_GROUP_SELECT"] : null);
        echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sk\" class=\"label3\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><select name=\"sk\" id=\"sk\">";
        // line 42
        echo (isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null);
        echo "</select> <select name=\"sd\">";
        echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
        echo "</select></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"fields1 column2\">
\t<dl>
\t\t<dt><label for=\"joined\">";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"joined_select\">";
        // line 49
        echo (isset($context["S_JOINED_TIME_OPTIONS"]) ? $context["S_JOINED_TIME_OPTIONS"] : null);
        echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"joined\" id=\"joined\" value=\"";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "\" /></dd>
\t</dl>
";
        // line 51
        if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
            // line 52
            echo "\t<dl>
\t\t<dt><label for=\"active\">";
            // line 53
            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"active_select\">";
            // line 54
            echo (isset($context["S_ACTIVE_TIME_OPTIONS"]) ? $context["S_ACTIVE_TIME_OPTIONS"] : null);
            echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"active\" id=\"active\" value=\"";
            echo (isset($context["ACTIVE"]) ? $context["ACTIVE"] : null);
            echo "\" /></dd>
\t</dl>
";
        }
        // line 57
        echo "\t<dl>
\t\t<dt><label for=\"count\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"count_select\">";
        // line 59
        echo (isset($context["S_COUNT_OPTIONS"]) ? $context["S_COUNT_OPTIONS"] : null);
        echo "</select> <input class=\"inputbox medium\" type=\"number\" min=\"0\" name=\"count\" id=\"count\" value=\"";
        echo (isset($context["COUNT"]) ? $context["COUNT"] : null);
        echo "\" /></dd>
\t</dl>
";
        // line 61
        if ((isset($context["S_IP_SEARCH_ALLOWED"]) ? $context["S_IP_SEARCH_ALLOWED"] : null)) {
            // line 62
            echo "\t<dl>
\t\t<dt><label for=\"ip\">";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("POST_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"inputbox medium\" type=\"text\" name=\"ip\" id=\"ip\" value=\"";
            // line 64
            echo (isset($context["IP"]) ? $context["IP"] : null);
            echo "\" /></dd>
\t</dl>
";
        }
        // line 67
        echo "\t</fieldset>

\t<div class=\"clear\"></div>

\t<hr />

\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 75
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t\t";
        // line 76
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

\t</div>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 76,  202 => 75,  189 => 67,  178 => 63,  175 => 62,  173 => 61,  166 => 59,  161 => 58,  158 => 57,  150 => 54,  145 => 53,  142 => 52,  140 => 51,  112 => 41,  106 => 38,  101 => 37,  95 => 34,  91 => 33,  88 => 32,  82 => 29,  77 => 28,  74 => 27,  72 => 26,  68 => 24,  57 => 15,  55 => 14,  45 => 13,  39 => 11,  32 => 7,  25 => 3,  732 => 170,  719 => 169,  705 => 167,  703 => 166,  698 => 163,  692 => 161,  689 => 160,  677 => 159,  674 => 158,  672 => 157,  668 => 156,  660 => 150,  654 => 147,  648 => 146,  640 => 145,  629 => 144,  619 => 143,  616 => 142,  614 => 141,  611 => 140,  606 => 138,  603 => 137,  601 => 136,  598 => 135,  590 => 132,  586 => 131,  583 => 130,  581 => 129,  573 => 123,  558 => 120,  555 => 119,  549 => 117,  543 => 116,  539 => 115,  521 => 114,  507 => 113,  482 => 112,  474 => 111,  471 => 110,  468 => 109,  465 => 108,  462 => 107,  457 => 104,  454 => 103,  448 => 102,  444 => 101,  429 => 100,  425 => 99,  420 => 98,  417 => 97,  409 => 96,  403 => 95,  388 => 94,  382 => 93,  363 => 92,  361 => 91,  353 => 85,  345 => 79,  343 => 78,  333 => 75,  330 => 74,  327 => 73,  324 => 72,  321 => 71,  315 => 70,  309 => 66,  301 => 65,  295 => 64,  280 => 63,  274 => 62,  252 => 61,  244 => 55,  241 => 54,  233 => 48,  227 => 46,  224 => 45,  212 => 44,  209 => 43,  207 => 42,  203 => 41,  198 => 74,  187 => 36,  183 => 64,  180 => 34,  162 => 33,  143 => 26,  138 => 23,  133 => 49,  128 => 48,  124 => 20,  117 => 42,  107 => 17,  104 => 16,  102 => 15,  99 => 14,  93 => 11,  90 => 10,  78 => 9,  71 => 8,  58 => 7,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
