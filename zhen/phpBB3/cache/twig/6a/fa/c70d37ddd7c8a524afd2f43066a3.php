<?php

/* acp_attachments.html */
class __TwigTemplate_6afac70d37ddd7c8a524afd2f43066a3 extends Twig_Template
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
        if ((isset($context["U_BACK"]) ? $context["U_BACK"] : null)) {
            // line 6
            echo "\t<a href=\"";
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 13
        if ((isset($context["S_WARNING"]) ? $context["S_WARNING"] : null)) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            echo (isset($context["WARNING_MSG"]) ? $context["WARNING_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            // line 21
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 23
            echo (isset($context["NOTIFY_MSG"]) ? $context["NOTIFY_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if ((isset($context["S_UPLOADING_FILES"]) ? $context["S_UPLOADING_FILES"] : null)) {
            // line 28
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("UPLOADING_FILES");
            echo "</h2>

\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "upload"));
            foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
                // line 31
                echo "\t\t:: ";
                echo $this->getAttribute((isset($context["upload"]) ? $context["upload"] : null), "FILE_INFO");
                echo "<br />
\t\t";
                // line 32
                if ($this->getAttribute((isset($context["upload"]) ? $context["upload"] : null), "S_DENIED")) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute((isset($context["upload"]) ? $context["upload"] : null), "DENIED");
                    echo "</span>";
                } elseif ($this->getAttribute((isset($context["upload"]) ? $context["upload"] : null), "ERROR_MSG")) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute((isset($context["upload"]) ? $context["upload"] : null), "ERROR_MSG");
                    echo "</span>";
                } else {
                    echo "<span class=\"success\">";
                    echo $this->env->getExtension('phpbb')->lang("SUCCESSFULLY_UPLOADED");
                    echo "</span>";
                }
                // line 33
                echo "\t\t<br /><br />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
        // line 38
        if ((isset($context["S_ATTACHMENT_SETTINGS"]) ? $context["S_ATTACHMENT_SETTINGS"] : null)) {
            // line 39
            echo "
\t";
            // line 40
            if ((!(isset($context["S_THUMBNAIL_SUPPORT"]) ? $context["S_THUMBNAIL_SUPPORT"] : null))) {
                // line 41
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("NO_THUMBNAIL_SUPPORT");
                echo "</p>
\t\t</div>
\t";
            }
            // line 45
            echo "
\t<form id=\"attachsettings\" method=\"post\" action=\"";
            // line 46
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options"));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 48
                echo "\t\t";
                if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "S_LEGEND")) {
                    // line 49
                    echo "\t\t\t";
                    if ((!$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "S_FIRST_ROW"))) {
                        // line 50
                        echo "\t\t\t\t</fieldset>
\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 53
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "LEGEND");
                    echo "</legend>
\t\t";
                } else {
                    // line 55
                    echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 57
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "KEY");
                    echo "\">";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "TITLE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "S_EXPLAIN")) {
                        echo "<br /><span>";
                        echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "TITLE_EXPLAIN");
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 58
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "CONTENT");
                    echo "</dd>
\t\t\t</dl>

\t\t";
                }
                // line 62
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</fieldset>

\t";
            // line 71
            if ((!(isset($context["S_SECURE_DOWNLOADS"]) ? $context["S_SECURE_DOWNLOADS"] : null))) {
                // line 72
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("SECURE_DOWNLOAD_NOTICE");
                echo "</p>
\t\t</div>
\t";
            }
            // line 76
            echo "
\t<fieldset>
\t\t<legend>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SECURE_TITLE");
            echo "</legend>
\t\t<p>";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ADD_IPS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"ip_hostname\">";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("IP_HOSTNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"ip_hostname\" cols=\"40\" rows=\"3\" name=\"ips\"></textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"exclude\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("IP_EXCLUDE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("EXCLUDE_ENTERED_IP");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"exclude\" name=\"ipexclude\" value=\"1\" class=\"radio\" /> ";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"ipexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"securesubmit\" name=\"securesubmit\" value=\"";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("REMOVE_IPS");
            echo "</legend>
\t";
            // line 97
            if ((isset($context["S_DEFINED_IPS"]) ? $context["S_DEFINED_IPS"] : null)) {
                // line 98
                echo "\t\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_REMOVE_IPS_EXPLAIN");
                echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"remove_ip_hostname\">";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("IP_HOSTNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"unip[]\" id=\"remove_ip_hostname\" multiple=\"multiple\" size=\"10\">";
                // line 101
                echo (isset($context["DEFINED_IPS"]) ? $context["DEFINED_IPS"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"unsecuresubmit\" name=\"unsecuresubmit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t</fieldset>

\t";
            } else {
                // line 110
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("NO_IPS_DEFINED");
                echo "</p>
\t";
            }
            // line 112
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_EXTENSION_GROUPS"]) ? $context["S_EXTENSION_GROUPS"] : null)) {
            // line 117
            echo "
\t";
            // line 118
            if ((isset($context["S_EDIT_GROUP"]) ? $context["S_EDIT_GROUP"] : null)) {
                // line 119
                echo "\t\t<script type=\"text/javascript\" defer=\"defer\">
\t\t// <![CDATA[
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tif (newimage == 'no_image')
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 125
                echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                echo "images/spacer.gif\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 129
                echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                echo (isset($context["IMG_PATH"]) ? $context["IMG_PATH"] : null);
                echo "/\" + newimage;
\t\t\t\t}
\t\t\t}

\t\t\tfunction show_extensions(elem)
\t\t\t{
\t\t\t\tvar str = '';

\t\t\t\tfor (i = 0; i < elem.length; i++)
\t\t\t\t{
\t\t\t\t\tvar element = elem.options[i];
\t\t\t\t\tif (element.selected)
\t\t\t\t\t{
\t\t\t\t\t\tif (str)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tstr = str + ', ';
\t\t\t\t\t\t}

\t\t\t\t\t\tstr = str + element.innerHTML;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (document.all)
\t\t\t\t{
\t\t\t\t\tdocument.all.ext.innerText = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').textContent)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').textContent = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').firstChild.nodeValue)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').firstChild.nodeValue = str;
\t\t\t\t}
\t\t\t}

\t\t// ]]>
\t\t</script>

\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 168
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t<fieldset>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
                // line 170
                echo (isset($context["ACTION"]) ? $context["ACTION"] : null);
                echo "\" />
\t\t\t<input type=\"hidden\" name=\"g\" value=\"";
                // line 171
                echo (isset($context["GROUP_ID"]) ? $context["GROUP_ID"] : null);
                echo "\" />

\t\t\t<legend>";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
                // line 175
                echo $this->env->getExtension('phpbb')->lang("GROUP_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"group_name\" size=\"20\" maxlength=\"100\" name=\"group_name\" value=\"";
                // line 176
                echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"category\">";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>";
                // line 180
                echo (isset($context["S_CATEGORY_SELECT"]) ? $context["S_CATEGORY_SELECT"] : null);
                echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed\">";
                // line 183
                echo $this->env->getExtension('phpbb')->lang("ALLOWED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allowed\" name=\"allow_group\" value=\"1\"";
                // line 184
                if ((isset($context["ALLOW_GROUP"]) ? $context["ALLOW_GROUP"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allow_in_pm\">";
                // line 187
                echo $this->env->getExtension('phpbb')->lang("ALLOW_IN_PM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allow_in_pm\" name=\"allow_in_pm\" value=\"1\"";
                // line 188
                if ((isset($context["ALLOW_IN_PM"]) ? $context["ALLOW_IN_PM"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"upload_icon\">";
                // line 191
                echo $this->env->getExtension('phpbb')->lang("UPLOAD_ICON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"upload_icon\" id=\"upload_icon\" onchange=\"update_image(this.options[selectedIndex].value);\">
\t\t\t\t\t<option value=\"no_image\"";
                // line 193
                if ((isset($context["S_NO_IMAGE"]) ? $context["S_NO_IMAGE"] : null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb')->lang("NO_IMAGE");
                echo "</option>";
                echo (isset($context["S_FILENAME_LIST"]) ? $context["S_FILENAME_LIST"] : null);
                echo "
\t\t\t</select></dd>
\t\t\t<dd>&nbsp;<img ";
                // line 195
                if ((isset($context["S_NO_IMAGE"]) ? $context["S_NO_IMAGE"] : null)) {
                    echo "src=\"";
                    echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                    echo "images/spacer.gif\"";
                } else {
                    echo "src=\"";
                    echo (isset($context["UPLOAD_ICON_SRC"]) ? $context["UPLOAD_ICON_SRC"] : null);
                    echo "\"";
                }
                echo " id=\"image_upload_icon\" alt=\"\" title=\"\" />&nbsp;</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"extgroup_filesize\">";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("MAX_EXTGROUP_FILESIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"number\" id=\"extgroup_filesize\" size=\"3\" maxlength=\"15\" name=\"max_filesize\" value=\"";
                // line 199
                echo (isset($context["EXTGROUP_FILESIZE"]) ? $context["EXTGROUP_FILESIZE"] : null);
                echo "\" /> <select name=\"size_select\">";
                echo (isset($context["S_EXT_GROUP_SIZE_OPTIONS"]) ? $context["S_EXT_GROUP_SIZE_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"assigned_extensions\">";
                // line 202
                echo $this->env->getExtension('phpbb')->lang("ASSIGNED_EXTENSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><div id=\"ext\">";
                // line 203
                echo (isset($context["ASSIGNED_EXTENSIONS"]) ? $context["ASSIGNED_EXTENSIONS"] : null);
                echo "</div> <span>[<a href=\"";
                echo (isset($context["U_EXTENSIONS"]) ? $context["U_EXTENSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("GO_TO_EXTENSIONS");
                echo "</a> ]</span></dd>
\t\t\t<dd><select name=\"extensions[]\" id=\"assigned_extensions\" class=\"narrow\" onchange=\"show_extensions(this);\" multiple=\"multiple\" size=\"8\">";
                // line 204
                echo (isset($context["S_EXTENSION_OPTIONS"]) ? $context["S_EXTENSION_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed_forums\">";
                // line 207
                echo $this->env->getExtension('phpbb')->lang("ALLOWED_FORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("ALLOWED_FORUMS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"allowed_forums\" class=\"radio\" name=\"forum_select\" value=\"0\"";
                // line 208
                if ((!(isset($context["S_FORUM_IDS"]) ? $context["S_FORUM_IDS"] : null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("ALLOW_ALL_FORUMS");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"forum_select\" value=\"1\"";
                // line 209
                if ((isset($context["S_FORUM_IDS"]) ? $context["S_FORUM_IDS"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("ALLOW_SELECTED_FORUMS");
                echo "</label></dd>
\t\t\t<dd><select name=\"allowed_forums[]\" multiple=\"multiple\" size=\"8\">";
                // line 210
                echo (isset($context["S_FORUM_ID_OPTIONS"]) ? $context["S_FORUM_ID_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 214
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 215
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t</p>
\t\t";
                // line 217
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>

\t\t</form>
\t";
            } else {
                // line 222
                echo "
\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 223
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t<fieldset class=\"tabulated\">
\t\t<legend>";
                // line 225
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</legend>

\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 231
                echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
                echo "</th>
\t\t\t<th>";
                // line 232
                echo $this->env->getExtension('phpbb')->lang("SPECIAL_CATEGORY");
                echo "</th>
\t\t\t<th>";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 237
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "groups"));
                foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                    // line 238
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_ADD_SPACER") && (!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_FIRST_ROW")))) {
                        // line 239
                        echo "\t\t\t<tr>
\t\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t\t</tr>
\t\t\t";
                    }
                    // line 243
                    echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
                    // line 244
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "GROUP_NAME");
                    echo "</strong>
\t\t\t\t\t";
                    // line 245
                    if (($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_GROUP_ALLOWED") && (!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_ALLOWED_IN_PM")))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("NOT_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_ALLOWED_IN_PM") && (!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_GROUP_ALLOWED")))) {
                        // line 246
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("ONLY_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (((!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_GROUP_ALLOWED")) && (!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "S_ALLOWED_IN_PM")))) {
                        // line 247
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("NOT_ALLOWED_IN_PM_POST");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 248
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb')->lang("ALLOWED_IN_PM_POST");
                        echo "</span>";
                    }
                    // line 249
                    echo "\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 250
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "CATEGORY");
                    echo "</td>
\t\t\t\t<td align=\"center\" valign=\"middle\" style=\"white-space: nowrap;\">&nbsp;<a href=\"";
                    // line 251
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_EDIT");
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a>&nbsp;&nbsp;<a href=\"";
                    echo $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "U_DELETE");
                    echo "\" data-ajax=\"row_delete\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>&nbsp;</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "\t\t</tbody>
\t\t</table>
\t\t<p class=\"quick\">
\t\t\t\t";
                // line 257
                echo $this->env->getExtension('phpbb')->lang("CREATE_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <input type=\"text\" name=\"group_name\" maxlength=\"30\" />
\t\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t";
                // line 260
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>
\t\t</form>

\t";
            }
            // line 265
            echo "
";
        } elseif ((isset($context["S_EXTENSIONS"]) ? $context["S_EXTENSIONS"] : null)) {
            // line 267
            echo "
\t<form id=\"add_ext\" method=\"post\" action=\"";
            // line 268
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 270
            echo $this->env->getExtension('phpbb')->lang("ADD_EXTENSION");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"add_extension\">";
            // line 272
            echo $this->env->getExtension('phpbb')->lang("EXTENSION");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"add_extension\" size=\"20\" maxlength=\"100\" name=\"add_extension\" value=\"";
            // line 273
            echo (isset($context["ADD_EXTENSION"]) ? $context["ADD_EXTENSION"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"extension_group\">";
            // line 276
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
            echo "</label></dt>
\t\t<dd>";
            // line 277
            echo (isset($context["GROUP_SELECT_OPTIONS"]) ? $context["GROUP_SELECT_OPTIONS"] : null);
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" id=\"add_extension_check\" name=\"add_extension_check\" class=\"button2\" value=\"";
            // line 281
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 283
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t<br />

\t<form id=\"change_ext\" method=\"post\" action=\"";
            // line 289
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 292
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1\">
\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 298
            echo $this->env->getExtension('phpbb')->lang("EXTENSION");
            echo "</th>
\t\t<th>";
            // line 299
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
            echo "</th>
\t\t<th>";
            // line 300
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 304
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "extensions"));
            foreach ($context['_seq'] as $context["_key"] => $context["extensions"]) {
                // line 305
                echo "\t\t";
                if ($this->getAttribute((isset($context["extensions"]) ? $context["extensions"] : null), "S_SPACER")) {
                    // line 306
                    echo "\t\t<tr>
\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t</tr>
\t\t";
                }
                // line 310
                echo "\t\t<tr>
\t\t\t<td><strong>";
                // line 311
                echo $this->getAttribute((isset($context["extensions"]) ? $context["extensions"] : null), "EXTENSION");
                echo "</strong></td>
\t\t\t<td>";
                // line 312
                echo $this->getAttribute((isset($context["extensions"]) ? $context["extensions"] : null), "GROUP_OPTIONS");
                echo "</td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"extension_id_list[]\" value=\"";
                // line 313
                echo $this->getAttribute((isset($context["extensions"]) ? $context["extensions"] : null), "EXTENSION_ID");
                echo "\" /><input type=\"hidden\" name=\"extension_change_list[]\" value=\"";
                echo $this->getAttribute((isset($context["extensions"]) ? $context["extensions"] : null), "EXTENSION_ID");
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extensions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 320
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 321
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 323
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_ORPHAN"]) ? $context["S_ORPHAN"] : null)) {
            // line 328
            echo "
\t<form id=\"orphan\" method=\"post\" action=\"";
            // line 329
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 332
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 337
            echo $this->env->getExtension('phpbb')->lang("FILENAME");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 338
            echo $this->env->getExtension('phpbb')->lang("FILEDATE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 339
            echo $this->env->getExtension('phpbb')->lang("FILESIZE");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 340
            echo $this->env->getExtension('phpbb')->lang("ATTACH_POST_ID");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 341
            echo $this->env->getExtension('phpbb')->lang("ATTACH_TO_POST");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 342
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 346
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "orphan"));
            foreach ($context['_seq'] as $context["_key"] => $context["orphan"]) {
                // line 347
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 348
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "U_FILE");
                echo "\">";
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "REAL_FILENAME");
                echo "</a></td>
\t\t\t<td>";
                // line 349
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "FILETIME");
                echo "</td>
\t\t\t<td>";
                // line 350
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "FILESIZE");
                echo "</td>
\t\t\t<td><strong>";
                // line 351
                echo $this->env->getExtension('phpbb')->lang("ATTACH_ID");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " </strong><input type=\"number\" name=\"post_id[";
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "ATTACH_ID");
                echo "]\" maxlength=\"10\" value=\"";
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "POST_ID");
                echo "\" style=\"width: 75%;\" /></td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add[";
                // line 352
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "ATTACH_ID");
                echo "]\" /></td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                // line 353
                echo $this->getAttribute((isset($context["orphan"]) ? $context["orphan"] : null), "ATTACH_ID");
                echo "]\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "\t<tr class=\"row4\">
\t\t<td colspan=\"4\">&nbsp;</td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'add', true); return false;\">";
            // line 358
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'add', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></td>
\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'delete', true); return false;\">";
            // line 359
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'delete', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></td>
\t</tr>
\t</tbody>
\t</table>

\t<br />

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 367
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 368
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 370
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_MANAGE"]) ? $context["S_MANAGE"] : null)) {
            // line 375
            echo "
\t<form id=\"attachments\" method=\"post\" action=\"";
            // line 376
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 379
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 382
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null))) {
                // line 383
                echo "\t\t";
                echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_SIZE"]) ? $context["TOTAL_SIZE"] : null);
                echo "
\t\t";
                // line 384
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                    // line 385
                    echo "\t\t\t&bull; ";
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
                    // line 386
                    echo "\t\t";
                } else {
                    // line 387
                    echo "\t\t\t&bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t";
                }
                // line 389
                echo "\t";
            }
            // line 390
            echo "\t</div>

";
            // line 392
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachments"))) {
                // line 393
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 396
                echo $this->env->getExtension('phpbb')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 15%;\">";
                // line 397
                echo $this->env->getExtension('phpbb')->lang("POSTED");
                echo "</th>
\t\t<th style=\"width: 15%;\" class=\"centered-text\">";
                // line 398
                echo $this->env->getExtension('phpbb')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 10%;\" class=\"centered-text\">";
                // line 399
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 403
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachments"));
                foreach ($context['_seq'] as $context["_key"] => $context["attachments"]) {
                    // line 404
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                    // line 406
                    if ($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "S_IN_MESSAGE")) {
                        echo $this->env->getExtension('phpbb')->lang("EXTENSION_GROUP");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if ($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "EXT_GROUP_NAME")) {
                            echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "EXT_GROUP_NAME");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_EXT_GROUP");
                        }
                        echo "</strong><br />";
                        echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "L_DOWNLOAD_COUNT");
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGE");
                        echo "
\t\t\t\t";
                    } else {
                        // line 407
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "U_FILE");
                        echo "\" style=\"font-weight: bold;\">";
                        echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "REAL_FILENAME");
                        echo "</a><br />";
                        if ($this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "COMMENT")) {
                            echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "COMMENT");
                            echo "<br />";
                        }
                        echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "L_DOWNLOAD_COUNT");
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "U_VIEW_TOPIC");
                        echo "\">";
                        echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "TOPIC_TITLE");
                        echo "</a>";
                    }
                    // line 408
                    echo "\t\t\t</td>
\t\t\t<td>";
                    // line 409
                    echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "FILETIME");
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "ATTACHMENT_POSTER");
                    echo "</td>
\t\t\t<td class=\"centered-text\">";
                    // line 410
                    echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "FILESIZE");
                    echo "</td>
\t\t\t<td class=\"centered-text\"><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 411
                    echo $this->getAttribute((isset($context["attachments"]) ? $context["attachments"] : null), "ATTACH_ID");
                    echo "]\" /></td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 414
                echo "\t</tbody>
\t</table>
";
            } else {
                // line 417
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 418
                echo $this->env->getExtension('phpbb')->lang("NO_ATTACHMENTS");
                echo "</p>
\t</div>
";
            }
            // line 421
            echo "
\t";
            // line 422
            if ((isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null)) {
                // line 423
                echo "\t<div class=\"pagination\">
\t\t";
                // line 424
                echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["TOTAL_SIZE"]) ? $context["TOTAL_SIZE"] : null);
                echo "
\t\t";
                // line 425
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                    // line 426
                    echo "\t\t\t&bull; ";
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
                    // line 427
                    echo "\t\t";
                } else {
                    // line 428
                    echo "\t\t\t&bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t";
                }
                // line 430
                echo "\t</div>
\t";
            }
            // line 432
            echo "
\t<fieldset class=\"display-options\">
\t\t";
            // line 434
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_LOG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " &nbsp;";
            echo (isset($context["S_LIMIT_DAYS"]) ? $context["S_LIMIT_DAYS"] : null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SORT_KEY"]) ? $context["S_SORT_KEY"] : null);
            echo " ";
            echo (isset($context["S_SORT_DIR"]) ? $context["S_SORT_DIR"] : null);
            echo "
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 435
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>

\t<hr />

";
            // line 440
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachments"))) {
                // line 441
                echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 442
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" /><br />
\t\t<p class=\"small\">
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', true); return false;\">";
                // line 444
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull;
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', false); return false;\">";
                // line 445
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>\t\t
\t\t</p>
\t</fieldset>
";
            }
            // line 449
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 453
            if ((isset($context["S_ACTION_OPTIONS"]) ? $context["S_ACTION_OPTIONS"] : null)) {
                // line 454
                echo "\t<fieldset>
\t\t<legend>";
                // line 455
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS");
                echo "</legend>
\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 456
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_stats\">";
                // line 458
                echo $this->env->getExtension('phpbb')->lang("RESYNC_FILES_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_FILES_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 459
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t</dl>
\t\t</form>
\t</fieldset>
\t";
            }
        }
        // line 465
        echo "
";
        // line 466
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
        return "acp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1278 => 466,  1275 => 465,  1266 => 459,  1260 => 458,  1255 => 456,  1251 => 455,  1248 => 454,  1246 => 453,  1238 => 449,  1231 => 445,  1227 => 444,  1222 => 442,  1219 => 441,  1217 => 440,  1209 => 435,  1195 => 434,  1191 => 432,  1187 => 430,  1181 => 428,  1178 => 427,  1165 => 426,  1163 => 425,  1151 => 424,  1148 => 423,  1146 => 422,  1143 => 421,  1137 => 418,  1134 => 417,  1129 => 414,  1120 => 411,  1116 => 410,  1108 => 409,  1105 => 408,  1085 => 407,  1066 => 406,  1062 => 404,  1058 => 403,  1051 => 399,  1047 => 398,  1043 => 397,  1039 => 396,  1034 => 393,  1032 => 392,  1028 => 390,  1025 => 389,  1019 => 387,  1016 => 386,  1003 => 385,  1001 => 384,  988 => 383,  986 => 382,  980 => 379,  974 => 376,  971 => 375,  963 => 370,  958 => 368,  954 => 367,  941 => 359,  935 => 358,  931 => 356,  922 => 353,  918 => 352,  909 => 351,  905 => 350,  901 => 349,  895 => 348,  892 => 347,  888 => 346,  881 => 342,  877 => 341,  873 => 340,  869 => 339,  865 => 338,  861 => 337,  853 => 332,  847 => 329,  844 => 328,  836 => 323,  831 => 321,  827 => 320,  821 => 316,  810 => 313,  806 => 312,  802 => 311,  799 => 310,  793 => 306,  790 => 305,  786 => 304,  779 => 300,  775 => 299,  771 => 298,  762 => 292,  756 => 289,  747 => 283,  742 => 281,  735 => 277,  731 => 276,  725 => 273,  721 => 272,  716 => 270,  711 => 268,  708 => 267,  704 => 265,  696 => 260,  691 => 258,  686 => 257,  681 => 254,  666 => 251,  662 => 250,  659 => 249,  654 => 248,  648 => 247,  642 => 246,  635 => 245,  631 => 244,  628 => 243,  622 => 239,  619 => 238,  615 => 237,  608 => 233,  604 => 232,  600 => 231,  591 => 225,  586 => 223,  583 => 222,  575 => 217,  570 => 215,  566 => 214,  559 => 210,  551 => 209,  543 => 208,  536 => 207,  530 => 204,  522 => 203,  517 => 202,  509 => 199,  504 => 198,  490 => 195,  479 => 193,  473 => 191,  465 => 188,  460 => 187,  452 => 184,  447 => 183,  441 => 180,  434 => 179,  428 => 176,  423 => 175,  418 => 173,  413 => 171,  409 => 170,  404 => 168,  361 => 129,  354 => 125,  346 => 119,  344 => 118,  341 => 117,  332 => 112,  326 => 110,  318 => 105,  311 => 101,  306 => 100,  300 => 98,  298 => 97,  294 => 96,  286 => 91,  279 => 87,  275 => 86,  268 => 85,  260 => 81,  255 => 79,  251 => 78,  247 => 76,  241 => 73,  238 => 72,  236 => 71,  230 => 68,  226 => 67,  222 => 66,  217 => 63,  211 => 62,  204 => 58,  191 => 57,  187 => 55,  182 => 53,  179 => 52,  175 => 50,  172 => 49,  169 => 48,  165 => 47,  161 => 46,  158 => 45,  152 => 42,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  139 => 37,  135 => 35,  128 => 33,  114 => 32,  109 => 31,  105 => 30,  99 => 28,  97 => 27,  94 => 26,  88 => 23,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  56 => 11,  51 => 9,  48 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
