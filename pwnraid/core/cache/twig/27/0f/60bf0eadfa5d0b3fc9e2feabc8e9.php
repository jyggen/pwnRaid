<?php

/* index.twig */
class __TwigTemplate_270f60bf0eadfa5d0b3fc9e2feabc8e9 extends Twig_Template
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
        echo "<h2>Welcome to pwnRaid!</h2>
<div role=\"text-wrapper\">
\t<p>
\t\tWelcome to pwnRaid and the setup process! Before you can use this <strong>awesome
\t\tapplication</strong> we need a few bits of information about you, your guild and want
\t\tyou want to achive with pwnRaid. This is required for a lot of features to work and will
\t\thelp us customize pwnRaid for you.
\t</p>
\t<p>Please, contact us at anytime with feedback, bug reports and love letters at <a href=\"mailto:hello@pwnraid.com\">hello@pwnraid.com</a>!</p>
</div>
<form>
\t<h2>Database Settings</h2>
\t<div role=\"text-wrapper\" class=\"clearfix\">
\t\t\t<div class=\"float-left\">
\t\t\t\t<label>Data Source Name (<a href=\"javascript:void(0);\" class=\"help\" data-help=\"dsn\">What's this?</a>)</label>
\t\t\t\t<input type=\"text\" value=\"\">
\t\t\t</div>
\t\t\t<div class=\"float-left\">
\t\t\t\t<label>Username</label>
\t\t\t\t<input type=\"text\" value=\"\">
\t\t\t</div>
\t\t\t<div class=\"float-left\">
\t\t\t\t<label>Password</label>
\t\t\t\t<input type=\"password\" value=\"\">
\t\t\t</div>
\t</div>
\t<h2>Guild Information</h2>
\t<div role=\"text-wrapper\" class=\"clearfix\">
\t\t<div class=\"float-left\">
\t\t\t<label>Region</label>
\t\t\t<select>
\t\t\t\t<option value=\"US\">Americas</option>
\t\t\t\t<option value=\"CH\">China</option>
\t\t\t\t<option value=\"EU\">Europe</option>
\t\t\t\t<option value=\"KR\">Korea</option>
\t\t\t\t<option value=\"TW\">Taiwan</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"float-left\">
\t\t\t<label>Realm</label>
\t\t\t<input type=\"text\" class=\"realm-suggest\" value=\"\">
\t\t</div>
\t\t<div class=\"float-left\">
\t\t\t<label>Guild Name</label>
\t\t\t<input type=\"text\" value=\"\">
\t\t</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
