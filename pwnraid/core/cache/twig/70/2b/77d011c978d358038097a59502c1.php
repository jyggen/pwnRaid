<?php

/* base.twig */
class __TwigTemplate_702b77d011c978d358038097a59502c1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"en-us\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"en-us\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"en-us\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=\"en-us\" class=\"no-js\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<title>View Raid: Naxxramas | Swedish Raidtime of Auchindoun (EU)</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width\">
        ";
        // line 12
        echo (isset($context["css_files"]) ? $context["css_files"] : null);
        echo "
\t</head>
\t<body data-controller=\"";
        // line 14
        echo (isset($context["controller"]) ? $context["controller"] : null);
        echo "\" data-action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\">
\t\t<!--[if lt IE 7]><p class=\"chromeframe\">Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
\t\t<div role=\"wrapper\" class=\"clearfix\">
\t\t\t<h1 class=\"header\">Swedish Raidtime <span>of Auchindoun (EU)</span></h1>
\t\t\t<div class=\"left\">
\t\t\t\t<h2>User</h2>
                <form class=\"login\">
                    <input type=\"text\" value=\"Username\" class=\"default-value\">
                    <input type=\"password\" value=\"Password\" class=\"default-value\">
                    <input type=\"button\" value=\"Register\">
                    <input type=\"submit\" value=\"Login\">
                </form>
\t\t\t\t<h2>Menu</h2>
\t\t\t\t<ul class=\"navigation\">
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t<li><a href=\"/events\">Events</a></li>
\t\t\t\t\t<li><a href=\"/members\">Roster</a></li>
\t\t\t\t\t<li><a href=\"/progress\">Progression</a></li>
\t\t\t\t</ul>
\t\t\t\t<h2>Guild Rank</h2>
\t\t\t\t<dl class=\"clearfix\">
\t\t\t\t\t<div class=\"float-left one-third-width\">
    \t\t\t\t\t<dt>Realm</dt>
    \t\t\t\t\t<dd>n/a</dd>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"float-left one-third-width\">
    \t\t\t\t\t<dt>Region</dt>
    \t\t\t\t\t<dd>n/a</dd>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"float-left one-third-width\">
    \t\t\t\t\t<dt>World</dt>
    \t\t\t\t\t<dd>n/a</dd>
\t\t\t\t\t</div>
\t\t\t\t</dl>
\t\t\t\t<h2>Top Members</h2>
\t\t\t\t<p>jyggz is awesome</p>
\t\t\t</div>
\t\t\t<div class=\"right\">";
        // line 51
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</div>
\t\t</div>
\t\t<footer>
\t\t\tCopyright &copy; 2012. Powered by <a href=\"https://github.com/jyggen/pwnRaid\">pwnRaid 1.0 Alpha</a>. Page rendered in {exec_time}s using {mem_usage}mb of memory.<br />
\t\t\t<strong>World of Warcraft</strong>, <strong>Warcraft</strong> and <strong>Blizzard Entertainment</strong> are trademarks or registered trademarks of <strong>Blizzard Entertainment, Inc</strong>.
\t\t</footer>
        ";
        // line 57
        echo (isset($context["js_files"]) ? $context["js_files"] : null);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 57,  77 => 51,  35 => 14,  30 => 12,  17 => 1,);
    }
}
