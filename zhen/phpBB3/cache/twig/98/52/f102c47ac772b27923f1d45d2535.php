<?php

/* acp_inactive.html */
class __TwigTemplate_9852f102c47ac772b27923f1d45d2535 extends Twig_Template
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

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS_EXPLAIN");
        echo "</p>

<form id=\"inactive\" method=\"post\" action=\"";
        // line 9
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<div class=\"clearfix\"></div>

";
        // line 13
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            // line 14
            echo "<div class=\"pagination\">
\t";
            // line 15
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
            // line 16
            echo "</div>
";
        }
        // line 18
        echo "
<table class=\"table1 zebra-table\">
<thead>
<tr>
\t<th>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</th>
\t<th>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo "</th>
\t<th>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_DATE");
        echo "</th>
\t<th>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("LAST_VISIT");
        echo "</th>
\t<th>";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("INACTIVE_REASON");
        echo "</th>
\t<th>";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("MARK");
        echo "</th>
</tr>
</thead>
<tbody>
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "inactive"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inactive"]) {
            // line 32
            echo "\t<tr>
\t\t<td style=\"vertical-align: top;\">
\t\t\t";
            // line 34
            echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "USERNAME_FULL");
            echo "
\t\t\t";
            // line 35
            if ($this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "POSTS")) {
                echo "<br />";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "POSTS");
                echo "</strong> [<a href=\"";
                echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "U_SEARCH_USER");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "</a>]";
            }
            // line 36
            echo "\t\t</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 37
            echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "JOINED");
            echo "</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 38
            echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "INACTIVE_DATE");
            echo "</td>
\t\t<td style=\"vertical-align: top;\">";
            // line 39
            echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "LAST_VISIT");
            echo "</td>
\t\t<td style=\"vertical-align: top;\">
\t\t\t";
            // line 41
            echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "REASON");
            echo "
\t\t\t";
            // line 42
            if ($this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "REMINDED")) {
                echo "<br />";
                echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "REMINDED_EXPLAIN");
            }
            // line 43
            echo "\t\t</td>
\t\t<td>&nbsp;<input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
            // line 44
            echo $this->getAttribute((isset($context["inactive"]) ? $context["inactive"] : null), "USER_ID");
            echo "\" />&nbsp;</td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t<tr>
\t\t<td colspan=\"6\" style=\"text-align: center;\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("NO_INACTIVE_USERS");
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inactive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</tbody>
</table>

<fieldset class=\"display-options\">
\t";
        // line 55
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("USERS_PER_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <input class=\"inputbox autowidth\" type=\"number\" name=\"users_per_page\" id=\"users_per_page\" size=\"3\" value=\"";
            echo (isset($context["USERS_PER_PAGE"]) ? $context["USERS_PER_PAGE"] : null);
            echo "\" />";
        }
        // line 56
        echo "\t<input class=\"button2\" type=\"submit\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" name=\"sort\" />
</fieldset>

<hr />

";
        // line 61
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            // line 62
            echo "\t<div class=\"pagination\">
\t\t";
            // line 63
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
            // line 64
            echo "\t</div>
";
        }
        // line 66
        echo "
<fieldset class=\"quick\">
\t<select name=\"action\">";
        // line 68
        echo (isset($context["S_INACTIVE_OPTIONS"]) ? $context["S_INACTIVE_OPTIONS"] : null);
        echo "</select>
\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('inactive', 'mark', true); return false;\">";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
        echo "</a> &bull; <a href=\"#\" onclick=\"marklist('inactive', 'mark', false); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
        echo "</a></p>
\t";
        // line 71
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

</form>

";
        // line 76
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
        return "acp_inactive.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 76,  255 => 71,  249 => 70,  245 => 69,  241 => 68,  237 => 66,  233 => 64,  221 => 63,  218 => 62,  216 => 61,  207 => 56,  187 => 55,  181 => 51,  172 => 48,  169 => 47,  161 => 44,  158 => 43,  153 => 42,  149 => 41,  144 => 39,  140 => 38,  136 => 37,  133 => 36,  120 => 35,  116 => 34,  112 => 32,  107 => 31,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  74 => 18,  70 => 16,  58 => 15,  55 => 14,  53 => 13,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
