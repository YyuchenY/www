<?php

/* acp_groups.html */
class __TwigTemplate_6de275af539bd5ef8aa3127ca4ec2df1 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_MANAGE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("GROUP_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 13
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"settings\" method=\"post\" action=\"";
            // line 20
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\" enctype=\"multipart/form-data\">

\t<fieldset>
\t\t<legend>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("GROUP_DETAILS");
            echo "</legend>
\t<dl>
\t\t<dt><label";
            // line 25
            if ((!(isset($context["S_SPECIAL_GROUP"]) ? $context["S_SPECIAL_GROUP"] : null))) {
                echo " for=\"group_name\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("GROUP_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 26
            if ((isset($context["S_SPECIAL_GROUP"]) ? $context["S_SPECIAL_GROUP"] : null)) {
                echo "<strong>";
                echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
                echo "</strong>";
            }
            echo "<input name=\"group_name\" type=\"";
            if ((isset($context["S_SPECIAL_GROUP"]) ? $context["S_SPECIAL_GROUP"] : null)) {
                echo "hidden";
            } else {
                echo "text";
            }
            echo "\" id=\"group_name\" value=\"";
            echo (isset($context["GROUP_INTERNAL_NAME"]) ? $context["GROUP_INTERNAL_NAME"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_desc\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("GROUP_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\">";
            // line 30
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 31
            if ((isset($context["S_DESC_BBCODE_CHECKED"]) ? $context["S_DESC_BBCODE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 32
            if ((isset($context["S_DESC_SMILIES_CHECKED"]) ? $context["S_DESC_SMILIES_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 33
            if ((isset($context["S_DESC_URLS_CHECKED"]) ? $context["S_DESC_URLS_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t";
            // line 35
            if ((!(isset($context["S_SPECIAL_GROUP"]) ? $context["S_SPECIAL_GROUP"] : null))) {
                // line 36
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_type\">";
                // line 37
                echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" id=\"group_type\" value=\"";
                // line 39
                echo (isset($context["GROUP_TYPE_FREE"]) ? $context["GROUP_TYPE_FREE"] : null);
                echo "\"";
                echo (isset($context["GROUP_FREE"]) ? $context["GROUP_FREE"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_OPEN");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 40
                echo (isset($context["GROUP_TYPE_OPEN"]) ? $context["GROUP_TYPE_OPEN"] : null);
                echo "\"";
                echo (isset($context["GROUP_OPEN"]) ? $context["GROUP_OPEN"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_REQUEST");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 41
                echo (isset($context["GROUP_TYPE_CLOSED"]) ? $context["GROUP_TYPE_CLOSED"] : null);
                echo "\"";
                echo (isset($context["GROUP_CLOSED"]) ? $context["GROUP_CLOSED"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_CLOSED");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 42
                echo (isset($context["GROUP_TYPE_HIDDEN"]) ? $context["GROUP_TYPE_HIDDEN"] : null);
                echo "\"";
                echo (isset($context["GROUP_HIDDEN"]) ? $context["GROUP_HIDDEN"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_HIDDEN");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            } else {
                // line 46
                echo "\t\t<input name=\"group_type\" type=\"hidden\" value=\"";
                echo (isset($context["GROUP_TYPE_SPECIAL"]) ? $context["GROUP_TYPE_SPECIAL"] : null);
                echo "\" />
\t";
            }
            // line 48
            echo "
\t";
            // line 49
            if (((isset($context["S_ADD_GROUP"]) ? $context["S_ADD_GROUP"] : null) && (isset($context["S_GROUP_PERM"]) ? $context["S_GROUP_PERM"] : null))) {
                // line 50
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_perm_from\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"group_perm_from\" name=\"group_perm_from\"><option value=\"0\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("NO_PERMISSIONS");
                echo "</option>";
                echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 55
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("GROUP_OPTIONS_SAVE");
            echo "</legend>
\t";
            // line 59
            // line 60
            echo "\t";
            if ((isset($context["S_USER_FOUNDER"]) ? $context["S_USER_FOUNDER"] : null)) {
                // line 61
                echo "\t<dl>
\t\t<dt><label for=\"group_founder_manage\">";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("GROUP_FOUNDER_MANAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("GROUP_FOUNDER_MANAGE_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input name=\"group_founder_manage\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_founder_manage\"";
                // line 63
                echo (isset($context["GROUP_FOUNDER_MANAGE"]) ? $context["GROUP_FOUNDER_MANAGE"] : null);
                echo " /></dd>
\t</dl>
\t";
            }
            // line 66
            echo "\t<dl>
\t\t<dt><label for=\"group_skip_auth\">";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("GROUP_SKIP_AUTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_SKIP_AUTH_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_skip_auth\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_skip_auth\"";
            // line 68
            echo (isset($context["GROUP_SKIP_AUTH"]) ? $context["GROUP_SKIP_AUTH"] : null);
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_legend\">";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("GROUP_LEGEND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"group_legend\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_legend\"";
            // line 72
            echo (isset($context["GROUP_LEGEND"]) ? $context["GROUP_LEGEND"] : null);
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_teampage\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("GROUP_TEAMPAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"group_teampage\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_teampage\"";
            // line 76
            echo (isset($context["GROUP_TEAMPAGE"]) ? $context["GROUP_TEAMPAGE"] : null);
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_receive_pm\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("GROUP_RECEIVE_PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_RECEIVE_PM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_receive_pm\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_receive_pm\"";
            // line 80
            echo (isset($context["GROUP_RECEIVE_PM"]) ? $context["GROUP_RECEIVE_PM"] : null);
            echo " /></dd>
\t</dl>
\t";
            // line 82
            // line 83
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("GROUP_SETTINGS_SAVE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"group_message_limit\">";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("GROUP_MESSAGE_LIMIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_MESSAGE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_message_limit\" type=\"number\" id=\"group_message_limit\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" value=\"";
            // line 89
            echo (isset($context["GROUP_MESSAGE_LIMIT"]) ? $context["GROUP_MESSAGE_LIMIT"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_max_recipients\">";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("GROUP_MAX_RECIPIENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_MAX_RECIPIENTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_max_recipients\" type=\"number\" id=\"group_max_recipients\" maxlength=\"10\" size=\"4\" value=\"";
            // line 93
            echo (isset($context["GROUP_MAX_RECIPIENTS"]) ? $context["GROUP_MAX_RECIPIENTS"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_colour\">";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("GROUP_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<input name=\"group_colour\" type=\"text\" id=\"group_colour\" value=\"";
            // line 98
            echo (isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t";
            // line 99
            if ((isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null)) {
                echo "&nbsp;<span style=\"background-color: #";
                echo (isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null);
                echo "\">&nbsp; &nbsp;</span>";
            }
            echo "&nbsp;&nbsp;<span>
\t\t\t[ <a href=\"#\" id=\"color_palette_toggle\">";
            // line 100
            echo $this->env->getExtension('phpbb')->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t<div id=\"color_palette_placeholder\" style=\"display: none;\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#group_colour\"></div>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_rank\">";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("GROUP_RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"group_rank\" id=\"group_rank\">";
            // line 106
            echo (isset($context["S_RANK_OPTIONS"]) ? $context["S_RANK_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("GROUP_AVATAR");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("CURRENT_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>";
            // line 114
            echo (isset($context["AVATAR"]) ? $context["AVATAR"] : null);
            echo "</dd>
\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("DELETE_AVATAR");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("AVATAR_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t<option value=\"\">";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("NO_AVATAR_CATEGORY");
            echo "</option>
\t\t\t";
            // line 121
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers"));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
                // line 122
                echo "\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "DRIVER");
                echo "\"";
                if ($this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "SELECTED")) {
                    echo " selected=\"selected\"";
                }
                echo " data-toggle-setting=\"#avatar_option_";
                echo $this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "DRIVER");
                echo "\">";
                echo $this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "L_TITLE");
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t</select></dd>
\t</dl>
\t<div id=\"avatar_options\">
\t";
            // line 127
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers"));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
                // line 128
                echo "\t<div id=\"avatar_option_";
                echo $this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "DRIVER");
                echo "\">
\t\t<p>";
                // line 129
                echo $this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "L_EXPLAIN");
                echo "</p>
\t\t";
                // line 130
                echo $this->getAttribute((isset($context["avatar_drivers"]) ? $context["avatar_drivers"] : null), "OUTPUT");
                echo "
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t</div>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 137
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 138
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 140
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_LIST"]) ? $context["S_LIST"] : null)) {
            // line 145
            echo "
\t<a href=\"";
            // line 146
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
            echo " :: ";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h1>

\t<p>";
            // line 150
            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS_EXPLAIN");
            echo "</p>

\t<form id=\"list\" method=\"post\" action=\"";
            // line 152
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<a href=\"";
            // line 155
            echo (isset($context["U_DEFAULT_ALL"]) ? $context["U_DEFAULT_ALL"] : null);
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb')->lang("MAKE_DEFAULT_FOR_ALL");
            echo "</a>
\t</fieldset>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 161
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t<th>";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
            echo "</th>
\t\t<th>";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</th>
\t\t<th>";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</th>
\t\t<th>";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 170
            echo $this->env->getExtension('phpbb')->lang("GROUP_LEAD");
            echo "</strong></td>
\t</tr>
\t";
            // line 172
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 173
                echo "\t\t<tr>
\t\t\t<td>";
                // line 174
                if ($this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "USERNAME_COLOUR")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "U_USER_EDIT");
                    echo "\" style=\"color: #";
                    echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "USERNAME_COLOUR");
                    echo ";\" class=\"username-coloured\">";
                    echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "USERNAME");
                    echo "</a>";
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "U_USER_EDIT");
                    echo "\">";
                    echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "USERNAME");
                    echo "</a>";
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 175
                if ($this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "S_GROUP_DEFAULT")) {
                    echo $this->env->getExtension('phpbb')->lang("YES");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO");
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 176
                echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "JOINED");
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 177
                echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "USER_POSTS");
                echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                // line 178
                echo $this->getAttribute((isset($context["leader"]) ? $context["leader"] : null), "USER_ID");
                echo "\" /></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 181
                echo "\t\t<tr>
\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 182
                echo $this->env->getExtension('phpbb')->lang("GROUPS_NO_MODS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 186
            echo $this->env->getExtension('phpbb')->lang("GROUP_APPROVED");
            echo "</strong></td>
\t</tr>
\t";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 189
                echo "\t\t";
                if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "S_PENDING")) {
                    // line 190
                    echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"5\"><strong>";
                    // line 191
                    echo $this->env->getExtension('phpbb')->lang("GROUP_PENDING");
                    echo "</strong></td>
\t\t</tr>
\t\t";
                } else {
                    // line 194
                    echo "\t\t<tr>
\t\t\t<td>";
                    // line 195
                    if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "USERNAME_COLOUR")) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "U_USER_EDIT");
                        echo "\" style=\"color: #";
                        echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "USERNAME_COLOUR");
                        echo ";\" class=\"username-coloured\">";
                        echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "USERNAME");
                        echo "</a>";
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "U_USER_EDIT");
                        echo "\">";
                        echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "USERNAME");
                        echo "</a>";
                    }
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 196
                    if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "S_GROUP_DEFAULT")) {
                        echo $this->env->getExtension('phpbb')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO");
                    }
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 197
                    echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "JOINED");
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 198
                    echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "USER_POSTS");
                    echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                    // line 199
                    echo $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "USER_ID");
                    echo "\" /></td>
\t\t</tr>
\t\t";
                }
                // line 202
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 203
                echo "\t\t<tr>
\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 204
                echo $this->env->getExtension('phpbb')->lang("GROUPS_NO_MEMBERS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t</tbody>
\t</table>
\t<div class=\"pagination\">
\t";
            // line 210
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 211
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("pagination.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 212
                echo "\t";
            }
            // line 213
            echo "\t</div>

\t<fieldset class=\"quick\">
\t\t<select name=\"action\"><option class=\"sep\" value=\"\">";
            // line 216
            echo $this->env->getExtension('phpbb')->lang("SELECT_OPTION");
            echo "</option>";
            echo (isset($context["S_ACTION_OPTIONS"]) ? $context["S_ACTION_OPTIONS"] : null);
            echo "</select>
\t\t<input class=\"button2\" type=\"submit\" name=\"update\" value=\"";
            // line 217
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('list', 'mark', true); return false;\">";
            // line 218
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('list', 'mark', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></p>
\t</fieldset>

\t<h1>";
            // line 221
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
            echo "</h1>

\t<p>";
            // line 223
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS_EXPLAIN");
            echo "</p>

\t<fieldset>
\t\t<legend>";
            // line 226
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"leader\">";
            // line 228
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_LEADER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input name=\"leader\" type=\"radio\" class=\"radio\" value=\"1\" /> ";
            // line 229
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input name=\"leader\" type=\"radio\" class=\"radio\" id=\"leader\" value=\"0\" checked=\"checked\" /> ";
            // line 230
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"default\">";
            // line 233
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_DEFAULT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_DEFAULT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input name=\"default\" type=\"radio\" class=\"radio\" value=\"1\" /> ";
            // line 234
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input name=\"default\" type=\"radio\" class=\"radio\" id=\"default\" value=\"0\" checked=\"checked\" /> ";
            // line 235
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"usernames\">";
            // line 238
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("USERNAMES_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"usernames\" name=\"usernames\" cols=\"40\" rows=\"5\"></textarea></dd>
\t\t<dd>[ <a href=\"";
            // line 240
            echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a> ]</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"addusers\" value=\"";
            // line 244
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 246
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 251
            echo "
\t<h1>";
            // line 252
            echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_MANAGE");
            echo "</h1>

\t<p>";
            // line 254
            echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_MANAGE_EXPLAIN");
            echo "</p>

\t";
            // line 256
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 257
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 258
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 259
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 262
            echo "
\t<h1>";
            // line 263
            echo $this->env->getExtension('phpbb')->lang("USER_DEF_GROUPS");
            echo "</h1>

\t<p>";
            // line 265
            echo $this->env->getExtension('phpbb')->lang("USER_DEF_GROUPS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_groups\" method=\"post\" action=\"";
            // line 267
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
            // line 273
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo "</th>
\t\t<th>";
            // line 274
            echo $this->env->getExtension('phpbb')->lang("TOTAL_MEMBERS");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 275
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t\t<th>";
            // line 276
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 280
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "groups"));
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 281
                echo "\t\t";
                if ($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_SPECIAL")) {
                    // line 282
                    echo "\t\t";
                    if ($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_FIRST_ROW")) {
                        // line 283
                        echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"5\" class=\"row3\">";
                        // line 284
                        echo $this->env->getExtension('phpbb')->lang("NO_GROUPS_CREATED");
                        echo "</td>
\t\t\t</tr>
\t\t";
                    }
                    // line 287
                    echo "\t</tbody>
\t</table>

\t<fieldset class=\"quick\">
\t\t";
                    // line 291
                    if ((isset($context["S_GROUP_ADD"]) ? $context["S_GROUP_ADD"] : null)) {
                        // line 292
                        echo "\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("CREATE_GROUP");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <input type=\"text\" name=\"group_name\" value=\"\" /> <input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                        echo "\" />
\t\t\t<input type=\"hidden\" name=\"add\" value=\"1\" />
\t\t";
                    }
                    // line 295
                    echo "\t\t";
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t</fieldset>
\t</form>

\t<h1>";
                    // line 299
                    echo $this->env->getExtension('phpbb')->lang("SPECIAL_GROUPS");
                    echo "</h1>

\t<p>";
                    // line 301
                    echo $this->env->getExtension('phpbb')->lang("SPECIAL_GROUPS_EXPLAIN");
                    echo "</p>

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
                    // line 307
                    echo $this->env->getExtension('phpbb')->lang("GROUP");
                    echo "</th>
\t\t<th>";
                    // line 308
                    echo $this->env->getExtension('phpbb')->lang("TOTAL_MEMBERS");
                    echo "</th>
\t\t<th colspan=\"2\">";
                    // line 309
                    echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                    echo "</th>
\t\t<th>";
                    // line 310
                    echo $this->env->getExtension('phpbb')->lang("ACTION");
                    echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t\t";
                } else {
                    // line 315
                    echo "\t\t<tr>
\t\t\t<td><strong>";
                    // line 316
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "GROUP_NAME");
                    echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 317
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "TOTAL_MEMBERS");
                    echo "</td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                    // line 318
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_EDIT");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SETTINGS");
                    echo "</a></td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                    // line 319
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_LIST");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("MEMBERS");
                    echo "</a></td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 320
                    if (((!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_GROUP_SPECIAL")) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_DELETE"))) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_DELETE");
                        echo "\" data-ajax=\"row_delete\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE");
                        echo "</a>";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE");
                    }
                    echo "</td>
\t\t</tr>
\t\t";
                }
                // line 323
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "\t</tbody>
\t</table>

";
        }
        // line 328
        echo "
";
        // line 329
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_groups.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1031 => 329,  1028 => 328,  1022 => 324,  1016 => 323,  1002 => 320,  996 => 319,  990 => 318,  986 => 317,  982 => 316,  979 => 315,  971 => 310,  967 => 309,  963 => 308,  959 => 307,  950 => 301,  945 => 299,  937 => 295,  927 => 292,  925 => 291,  919 => 287,  913 => 284,  910 => 283,  907 => 282,  904 => 281,  900 => 280,  893 => 276,  889 => 275,  885 => 274,  881 => 273,  872 => 267,  867 => 265,  862 => 263,  859 => 262,  853 => 259,  849 => 258,  846 => 257,  844 => 256,  839 => 254,  834 => 252,  831 => 251,  823 => 246,  818 => 244,  809 => 240,  801 => 238,  795 => 235,  791 => 234,  784 => 233,  778 => 230,  774 => 229,  769 => 228,  764 => 226,  758 => 223,  753 => 221,  745 => 218,  741 => 217,  735 => 216,  730 => 213,  727 => 212,  714 => 211,  712 => 210,  707 => 207,  698 => 204,  695 => 203,  690 => 202,  684 => 199,  680 => 198,  676 => 197,  668 => 196,  650 => 195,  647 => 194,  641 => 191,  638 => 190,  635 => 189,  630 => 188,  625 => 186,  622 => 185,  613 => 182,  610 => 181,  602 => 178,  598 => 177,  594 => 176,  586 => 175,  568 => 174,  565 => 173,  560 => 172,  555 => 170,  547 => 165,  543 => 164,  539 => 163,  535 => 162,  531 => 161,  520 => 155,  514 => 152,  509 => 150,  502 => 148,  493 => 146,  490 => 145,  482 => 140,  478 => 139,  474 => 138,  470 => 137,  464 => 133,  455 => 130,  451 => 129,  446 => 128,  442 => 127,  437 => 124,  420 => 122,  416 => 121,  412 => 120,  406 => 118,  400 => 115,  396 => 114,  389 => 113,  384 => 111,  376 => 106,  371 => 105,  363 => 100,  355 => 99,  351 => 98,  343 => 96,  337 => 93,  330 => 92,  324 => 89,  317 => 88,  312 => 86,  307 => 83,  306 => 82,  301 => 80,  294 => 79,  288 => 76,  283 => 75,  277 => 72,  272 => 71,  266 => 68,  259 => 67,  256 => 66,  250 => 63,  243 => 62,  240 => 61,  237 => 60,  236 => 59,  232 => 58,  227 => 55,  219 => 52,  212 => 51,  209 => 50,  207 => 49,  204 => 48,  198 => 46,  187 => 42,  179 => 41,  171 => 40,  163 => 39,  155 => 37,  152 => 36,  150 => 35,  141 => 33,  133 => 32,  125 => 31,  121 => 30,  116 => 29,  98 => 26,  89 => 25,  84 => 23,  78 => 20,  75 => 19,  69 => 16,  65 => 15,  62 => 14,  60 => 13,  55 => 11,  50 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
