<?php

/* jumpbox.html */
class __TwigTemplate_beb4ae1095838b6b3dd894559852f215 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif ((isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "\t<form method=\"get\" id=\"jumpbox\" action=\"";
            echo (isset($context["S_JUMPBOX_ACTION"]) ? $context["S_JUMPBOX_ACTION"] : null);
            echo "\" onsubmit=\"if(this.f.value == -1){return false;}\">

\t";
            // line 15
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS")) {
                // line 16
                echo "\t\t<fieldset class=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS");
                echo "\">
\t";
            } else {
                // line 18
                echo "\t\t<fieldset class=\"jumpbox\">
\t";
            }
            // line 20
            echo "\t\t\t";
            echo (isset($context["HIDDEN_FIELDS_FOR_JUMPBOX"]) ? $context["HIDDEN_FIELDS_FOR_JUMPBOX"] : null);
            echo "
\t\t\t<label for=\"f\" accesskey=\"j\">";
            // line 21
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<select name=\"f\" id=\"f\" onchange=\"if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }\">
\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums"));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 24
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "S_FORUM_COUNT") == 1)) {
                    echo "<option value=\"-1\">------------------</option>";
                }
                // line 25
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_ID");
                echo "\"";
                echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "SELECTED");
                echo ">";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "level"));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    echo "&nbsp; &nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_NAME");
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 33
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  139 => 28,  136 => 27,  110 => 24,  94 => 21,  89 => 20,  85 => 18,  79 => 16,  69 => 12,  66 => 11,  54 => 9,  44 => 7,  34 => 5,  24 => 3,  22 => 2,  979 => 262,  976 => 261,  962 => 258,  958 => 257,  955 => 256,  953 => 255,  950 => 254,  944 => 251,  932 => 250,  929 => 249,  927 => 248,  924 => 247,  912 => 246,  909 => 245,  904 => 242,  898 => 240,  895 => 239,  882 => 238,  880 => 237,  875 => 236,  867 => 235,  863 => 233,  858 => 230,  852 => 229,  836 => 228,  833 => 227,  831 => 226,  828 => 225,  826 => 224,  823 => 223,  817 => 219,  812 => 217,  808 => 216,  802 => 215,  794 => 214,  791 => 213,  780 => 212,  770 => 211,  764 => 209,  762 => 208,  759 => 207,  748 => 202,  744 => 200,  741 => 199,  735 => 197,  729 => 193,  727 => 192,  709 => 187,  701 => 186,  695 => 185,  689 => 184,  685 => 182,  684 => 181,  681 => 180,  677 => 178,  667 => 177,  655 => 176,  641 => 175,  638 => 174,  636 => 173,  633 => 172,  623 => 171,  614 => 170,  608 => 169,  603 => 168,  600 => 167,  595 => 164,  589 => 163,  579 => 161,  573 => 159,  565 => 158,  562 => 157,  558 => 156,  554 => 154,  552 => 153,  541 => 152,  532 => 151,  524 => 150,  509 => 149,  508 => 148,  505 => 147,  499 => 146,  488 => 145,  484 => 144,  464 => 143,  461 => 142,  452 => 136,  448 => 135,  444 => 134,  430 => 133,  419 => 128,  417 => 127,  414 => 126,  408 => 122,  406 => 121,  403 => 120,  398 => 119,  395 => 118,  391 => 116,  378 => 106,  373 => 104,  365 => 100,  359 => 99,  353 => 97,  347 => 94,  342 => 93,  325 => 89,  316 => 83,  313 => 82,  311 => 81,  304 => 77,  299 => 74,  297 => 73,  294 => 72,  288 => 68,  282 => 66,  279 => 65,  266 => 64,  264 => 63,  259 => 62,  251 => 61,  247 => 59,  239 => 54,  235 => 53,  231 => 52,  226 => 50,  223 => 49,  221 => 48,  218 => 47,  213 => 44,  207 => 43,  191 => 42,  188 => 41,  186 => 40,  178 => 38,  176 => 37,  173 => 36,  159 => 34,  151 => 31,  148 => 30,  146 => 29,  144 => 28,  141 => 27,  135 => 23,  130 => 21,  125 => 20,  117 => 18,  115 => 25,  106 => 23,  104 => 13,  101 => 12,  97 => 10,  83 => 9,  77 => 15,  73 => 6,  71 => 13,  61 => 3,  31 => 2,  19 => 1,);
    }
}
