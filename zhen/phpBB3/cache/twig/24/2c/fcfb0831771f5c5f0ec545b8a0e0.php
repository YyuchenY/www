<?php

/* acp_ranks.html */
class __TwigTemplate_242cfcfb0831771f5c5f0ec545b8a0e0 extends Twig_Template
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

\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tfunction update_image(newimage)
\t\t{
\t\t\tdocument.getElementById('image').src = (newimage) ? \"";
            // line 13
            echo (isset($context["RANKS_PATH"]) ? $context["RANKS_PATH"] : null);
            echo "/\" + encodeURI(newimage) : \"./images/spacer.gif\";
\t\t}

\t// ]]>
\t</script>

\t<h1>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 23
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("ACP_RANKS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"title\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("RANK_TITLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"title\" type=\"text\" id=\"title\" value=\"";
            // line 29
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"rank_image\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("RANK_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"rank_image\" id=\"rank_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
            // line 33
            echo (isset($context["S_FILENAME_LIST"]) ? $context["S_FILENAME_LIST"] : null);
            echo "</select></dd>
\t\t<dd><img src=\"";
            // line 34
            echo (isset($context["RANK_IMAGE"]) ? $context["RANK_IMAGE"] : null);
            echo "\" id=\"image\" alt=\"\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"special_rank\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("RANK_SPECIAL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input onclick=\"phpbb.toggleDisplay('posts', -1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"1\" id=\"special_rank\"";
            // line 38
            if ((isset($context["S_SPECIAL_RANK"]) ? $context["S_SPECIAL_RANK"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input onclick=\"phpbb.toggleDisplay('posts', 1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"0\"";
            // line 39
            if ((!(isset($context["S_SPECIAL_RANK"]) ? $context["S_SPECIAL_RANK"] : null))) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t";
            // line 41
            if ((isset($context["S_SPECIAL_RANK"]) ? $context["S_SPECIAL_RANK"] : null)) {
                echo "<div id=\"posts\" style=\"display: none;\">";
            } else {
                echo "<div id=\"posts\">";
            }
            // line 42
            echo "\t<dl>
\t\t<dt><label for=\"min_posts\">";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("RANK_MINIMUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"min_posts\" type=\"number\" id=\"min_posts\" maxlength=\"10\" value=\"";
            // line 44
            echo (isset($context["MIN_POSTS"]) ? $context["MIN_POSTS"] : null);
            echo "\" /></dd>
\t</dl>
\t</div>

\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"save\" />

\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 53
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 59
            echo "
\t<h1>";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 64
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("ACP_MANAGE_RANKS");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("RANK_IMAGE");
            echo "</th>
\t\t<th>";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("RANK_TITLE");
            echo "</th>
\t\t<th>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("RANK_MINIMUM");
            echo "</th>
\t\t<th>";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "ranks"));
            foreach ($context['_seq'] as $context["_key"] => $context["ranks"]) {
                // line 79
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 80
                if ($this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "S_RANK_IMAGE")) {
                    echo "<img src=\"";
                    echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "RANK_IMAGE");
                    echo "\" alt=\"";
                    echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "RANK_TITLE");
                    echo "\" title=\"";
                    echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "RANK_TITLE");
                    echo "\" />";
                } else {
                    echo "&nbsp; - &nbsp;";
                }
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 81
                echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "RANK_TITLE");
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 82
                if ($this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "S_SPECIAL_RANK")) {
                    echo "&nbsp; - &nbsp;";
                } else {
                    echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "MIN_POSTS");
                }
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 83
                echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "U_EDIT");
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute((isset($context["ranks"]) ? $context["ranks"] : null), "U_DELETE");
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ranks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t</tbody>
\t</table>

\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("ADD_RANK");
            echo "\" />
\t\t";
            // line 91
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 97
        echo "
";
        // line 98
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
        return "acp_ranks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 98,  285 => 97,  276 => 91,  272 => 90,  266 => 86,  251 => 83,  243 => 82,  239 => 81,  225 => 80,  222 => 79,  218 => 78,  211 => 74,  207 => 73,  203 => 72,  199 => 71,  191 => 66,  186 => 64,  181 => 62,  176 => 60,  173 => 59,  164 => 53,  160 => 52,  156 => 51,  146 => 44,  141 => 43,  138 => 42,  132 => 41,  123 => 39,  115 => 38,  110 => 37,  104 => 34,  100 => 33,  95 => 32,  89 => 29,  84 => 28,  79 => 26,  73 => 23,  68 => 21,  63 => 19,  54 => 13,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
