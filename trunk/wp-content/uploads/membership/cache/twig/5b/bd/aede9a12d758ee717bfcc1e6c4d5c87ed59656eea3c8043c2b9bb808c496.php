<?php

/* @membership/backend/index.twig */
class __TwigTemplate_5bbdaede9a12d758ee717bfcc1e6c4d5c87ed59656eea3c8043c2b9bb808c496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@base/layouts/backend.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@base/layouts/backend.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["options"] = $this->env->loadTemplate("@base/macros/options.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"main\">
\t\t\t<i class=\"fa fa-cog\"></i>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"pages\">
\t\t\t<i class=\"fa fa-file-text-o\"></i>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pages")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"security\">
\t\t\t<i class=\"fa fa-lock\"></i>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Security")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"uploads\">
\t\t\t<i class=\"fa fa-upload\"></i>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Uploads")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"seo\">
\t\t\t<i class=\"fa fa-search\"></i>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
        echo "
\t\t</a>
\t</div>
";
    }

    // line 24
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 25
        echo "\t<h2 class=\"sc-header\">Main</h2>
";
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "
\t<div class=\"sc-tab-content active\" data-tab=\"main\">
        <div class=\"mp-action-panel\">
            <button data-save-settings class=\"save-settings sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
            </button>
        </div>
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">


\t\t\t\t\t";
        // line 42
        echo $context["options"]->getemailRowWithButton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Admin Email")), $context["options"]->getbutton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test Email")), "admin-email-button", "tooltip"), "main[admin-email]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "admin-email", array(), "array"), "admin-email");
        // line 52
        echo "

\t\t\t\t\t";
        // line 54
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[messages]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[messages]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages") == "false"))), "messages");
        // line 69
        echo "

\t\t\t\t\t";
        // line 71
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[groups]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[groups]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups") == "false"))), "groups");
        // line 86
        echo "

\t\t\t\t\t";
        // line 88
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[friends]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "friends") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[friends]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "friends") == "false"))), "friends");
        // line 103
        echo "

\t\t\t\t\t";
        // line 105
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[activity]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "activity") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[activity]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "activity") == "false"))), "activity");
        // line 120
        echo "

\t\t\t\t\t";
        // line 122
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Followers")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[followers]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "followers") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[followers]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "followers") == "false"))), "followers");
        // line 137
        echo "

\t\t\t\t\t";
        // line 139
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after registration to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-registartion-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-registartion-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-registartion-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-registartion-action", array(), "array") == "redirect-to-url"))), "after-registartion-action", "", $context["options"]->gettextInput("main[after-registartion-redirect-url]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-registartion-redirect-url", array(), "array")));
        // line 159
        echo "

\t\t\t\t\t";
        // line 161
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after login to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-login-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-login-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-login-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-login-action", array(), "array") == "redirect-to-url"))), "after-login-action", "", $context["options"]->gettextInput("main[after-login-action-redirect-url]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-login-action-redirect-url", array(), "array")));
        // line 181
        echo "

\t\t\t\t\t";
        // line 183
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after logout to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-logout-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-logout-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-logout-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-logout-action", array(), "array") == "redirect-to-url"))), "after-logout-action", "", $context["options"]->gettextInput("main[after-logout-action-redirect-url]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-logout-action-redirect-url", array(), "array")));
        // line 203
        echo "

\t\t\t\t\t";
        // line 205
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after account is deleted to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-delete-account-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-delete-account-action", array(), "array") == "redirect-to-url"))), "after-delete-account-action", "", $context["options"]->gettextInput("main[after-delete-account-action-redirect-url]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "after-delete-account-action-redirect-url", array(), "array")));
        // line 225
        echo "

\t\t\t\t";
        // line 227
        if ((isset($context["isDev"]) ? $context["isDev"] : null)) {
            // line 228
            echo "\t\t\t\t\t<hr>

\t\t\t\t\t";
            // line 230
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[friends]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "friends") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[friends]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "friends") == "false"))), "friends");
            // line 244
            echo "

\t\t\t\t\t";
            // line 246
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Folowers")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[followers]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "followers") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[followers]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "followers") == "false"))), "followers");
            // line 260
            echo "

\t\t\t\t\t";
            // line 262
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[messages]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[messages]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages") == "false"))), "messages");
            // line 276
            echo "

\t\t\t\t\t";
            // line 278
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages Send")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "name" => "main[messages-send]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages-send", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registered")), "name" => "main[messages-send]", "value" => "registered", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages-send", array(), "array") == "registered")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), "name" => "main[messages-send]", "value" => "friends", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages-send", array(), "array") == "friends")), 3 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Set Permissions")), "name" => "main[messages-send]", "value" => "user-set-permissions", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "messages-send", array(), "array") == "user-set-permissions"))), "messages-send");
            // line 304
            echo "

\t\t\t\t\t";
            // line 306
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[comments]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "comments") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[comments]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "comments") == "false"))), "comments");
            // line 320
            echo "

\t\t\t\t\t";
            // line 322
            $context["_roles"] = array();
            // line 323
            echo "
\t\t\t\t\t";
            // line 324
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["role"]) {
                // line 325
                echo "\t\t\t\t\t\t";
                $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name"), "value" => (isset($context["value"]) ? $context["value"] : null), "selected" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "comments-available-role", array(), "array") == (isset($context["value"]) ? $context["value"] : null)))));
                // line 330
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "
\t\t\t\t\t";
            // line 332
            echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments Available")), ($context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "name" => "main[comments-available]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "comments-available", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registered")), "name" => "main[comments-available]", "value" => "registered", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "comments-available", array(), "array") == "registered")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Role")), "name" => "main[comments-available]", "value" => "user-role", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "comments-available", array(), "array") == "user-role")))) . $context["options"]->getselectInput((isset($context["_roles"]) ? $context["_roles"] : null), "main[comments-available-role]")), "comments-available");
            // line 353
            echo "

\t\t\t\t\t";
            // line 355
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Rating")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[user-rating]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "user-rating", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[user-rating]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "user-rating", array(), "array") == "false"))), "user-rating");
            // line 369
            echo "

\t\t\t\t\t";
            // line 371
            $context["_roles"] = array();
            // line 372
            echo "
\t\t\t\t\t";
            // line 373
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["role"]) {
                // line 374
                echo "\t\t\t\t\t\t";
                $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name"), "value" => (isset($context["value"]) ? $context["value"] : null), "selected" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "rating-can-write-role", array(), "array") == (isset($context["value"]) ? $context["value"] : null)))));
                // line 379
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            echo "
\t\t\t\t\t";
            // line 381
            echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rating Can Write")), ($context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "name" => "main[rating-can-write]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "rating-can-write", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registered")), "name" => "main[rating-can-write]", "value" => "registered", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "rating-can-write", array(), "array") == "registered")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), "name" => "main[rating-can-write]", "value" => "friends", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "rating-can-write", array(), "array") == "friends")))) . $context["options"]->getselectInput((isset($context["_roles"]) ? $context["_roles"] : null), "main[rating-can-write-role]")), "rating-can-write");
            // line 402
            echo "


\t\t\t\t\t";
            // line 405
            $context["_roles"] = array();
            // line 406
            echo "
\t\t\t\t\t";
            // line 407
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["role"]) {
                // line 408
                echo "\t\t\t\t\t\t";
                $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name"), "value" => (isset($context["value"]) ? $context["value"] : null), "selected" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups-content-view-role", array(), "array") == (isset($context["value"]) ? $context["value"] : null)))));
                // line 413
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "
\t\t\t\t\t";
            // line 415
            echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups Content View")), ($context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "name" => "main[groups-content-view]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups-content-view", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registered")), "name" => "main[groups-content-view]", "value" => "registered", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups-content-view", array(), "array") == "registered")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Members")), "name" => "main[groups-content-view]", "value" => "group-members", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups-content-view", array(), "array") == "group-members")), 3 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Admin Set Permissions")), "name" => "main[groups-content-view]", "value" => "group-admin-set-permissions", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "groups-content-view", array(), "array") == "group-admin-set-permissions")))) . $context["options"]->getselectInput((isset($context["_roles"]) ? $context["_roles"] : null), "main[groups-content-view-role]")), "groups-content-view");
            // line 442
            echo "

\t\t\t\t\t";
            // line 444
            echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Creation")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "name" => "main[group-creation]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "group-creation", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registered")), "name" => "main[group-creation]", "value" => "registered", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "group-creation", array(), "array") == "registered")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Website Admin")), "name" => "main[group-creation]", "value" => "website-admin", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "group-creation", array(), "array") == "website-admin"))), "group-creation");
            // line 464
            echo "



\t\t\t\t\t";
            // line 468
            $context["_roles"] = array();
            // line 469
            echo "
\t\t\t\t\t";
            // line 470
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["role"]) {
                // line 471
                echo "\t\t\t\t\t\t";
                $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name"), "value" => (isset($context["value"]) ? $context["value"] : null), "selected" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "write-to-group-role", array(), "array") == (isset($context["value"]) ? $context["value"] : null)))));
                // line 476
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 477
            echo "
\t\t\t\t\t";
            // line 478
            echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Write to Group")), ($context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "name" => "main[write-to-group]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "write-to-group", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registered")), "name" => "main[write-to-group]", "value" => "registered", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "write-to-group", array(), "array") == "registered")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Members")), "name" => "main[write-to-group]", "value" => "group-members", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "write-to-group", array(), "array") == "group-members")), 3 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Admin Set Permissions")), "name" => "main[write-to-group]", "value" => "group-admin-set-permission", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "main"), "write-to-group", array(), "array") == "group-admin-set-permission")))) . $context["options"]->getselectInput((isset($context["_roles"]) ? $context["_roles"] : null), "main[write-to-group-role]")), "write-to-group");
            // line 505
            echo "
\t\t\t\t
\t\t\t\t";
        }
        // line 508
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"sc-tab-content\" data-tab=\"pages\">
        <div class=\"mp-action-panel\">
            <button class=\"create-pages sc-button icon-button primary\">
                <i class=\"fa fa-plus\"></i>
                <span>";
        // line 517
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create all unassigned pages")), "html", null, true);
        echo "</span>
            </button>
            <button class=\"save-pages sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 521
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Pages")), "html", null, true);
        echo "</span>
            </button>
        </div>
        <div class=\"mp-options\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 527
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["slug"] => $context["page"]) {
            // line 528
            echo "                        <div class=\"mp-option mp-page-option\" data-page-slug=\"";
            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
            echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"mp-option-label\">
                                        <span title=\"";
            // line 532
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 535
            echo "                                        ";
            // line 536
            echo "                                        ";
            // line 537
            echo "                                            ";
            // line 538
            echo "                                        ";
            // line 539
            echo "                                    ";
            // line 540
            echo "                                </div>
                                <div class=\"col-md-8\">
                                    <div class=\"mp-option-input-with-button\">
                                        <div class=\"mp-option-button\" ";
            // line 543
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id")) {
                echo "style=\"display: none\"";
            }
            echo ">
                                            <button class=\"sc-button icon-button create-page-button primary\" data-page-slug=\"";
            // line 544
            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-plus\"></i>
                                                <span>";
            // line 546
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create page")), "html", null, true);
            echo "</span>
                                            </button>
                                        </div>
                                        <div class=\"mp-option-select\">
                                            ";
            // line 550
            echo $this->env->getExtension('membership')->callFunction("wp_dropdown_pages", array("name" => (("pages[" . (isset($context["slug"]) ? $context["slug"] : null)) . "]"), "selected" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), "class" => "sc-input wp-pages-list", "echo" => false, "show_option_none" => "Select Page", "option_none_value" => "__none"));
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "
                </div>
            </div>
        </div>

    </div>
\t<div class=\"sc-tab-content\" data-tab=\"security\">
        <div class=\"mp-action-panel\">
            <button data-save-settings class=\"save-settings sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 567
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
            </button>
        </div>
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 574
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Global Site Access")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Everyone")), "name" => "security[global-site-access]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security"), "global-site-access", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Logged In Users")), "name" => "security[global-site-access]", "value" => "logged-in-users", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security"), "global-site-access", array(), "array") == "logged-in-users"))), "global-site-access");
        // line 588
        echo "

\t\t\t\t\t";
        // line 590
        echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect from backend login screen to membership login page")), $context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[backend-login-screen-redirect]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security"), "backend-login-screen-redirect", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[backend-login-screen-redirect]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security"), "backend-login-screen-redirect", array(), "array") == "no")))), "backend-login-screen-redirect");
        // line 604
        echo "

\t\t\t\t\t";
        // line 606
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Blocked IP Addresses")), "security[blocked-ip]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security", array(), "any", false, true), "blocked-ip", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security", array(), "any", false, true), "blocked-ip", array(), "array"), $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "blocked-ip"), "method"))) : ($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "blocked-ip"), "method"))), "blocked-ip");
        // line 610
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"uploads\">
        <div class=\"mp-action-panel\">
            <button data-save-settings class=\"save-settings sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 620
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
            </button>
        </div>
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<div class=\"mp-option\" id=\"max-image-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 630
        echo $context["options"]->getlabel("Maximum Image Size");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads"), "max-image-size", array(), "array"), "width"), "html", null, true);
        echo "\" name=\"uploads[max-image-size][width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads"), "max-image-size", array(), "array"), "height"), "html", null, true);
        echo "\" name=\"uploads[max-image-size][height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t   class=\"sc-input\"
\t\t\t\t\t\t\t   name=\"uploads[max-file-size]\"
\t\t\t\t\t\t\t   value=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads"), "max-file-size", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t   max=\"";
        // line 651
        echo twig_escape_filter($this->env, (isset($context["maxFileUpload"]) ? $context["maxFileUpload"] : null), "html", null, true);
        echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 655
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum File Size (Mb)")), "uploads[max-file-size-mb]", ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads"), "max-file-size", array(), "array") / (1024 * 1024)), "max-file-size-mb", "", (("max=\"" . ((isset($context["maxFileUpload"]) ? $context["maxFileUpload"] : null) / (1024 * 1024))) . "\""));
        // line 662
        echo "
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"mp-option-input-description\">
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<span>Maximum available file upload size is ";
        // line 668
        echo twig_escape_filter($this->env, ((isset($context["maxFileUpload"]) ? $context["maxFileUpload"] : null) / (1024 * 1024)), "html", null, true);
        echo " Mb</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 673
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Quality")), "uploads[image-quality]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads"), "image-quality", array(), "array"), "image-quality");
        // line 677
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"seo\">
        <div class=\"mp-action-panel\">
            <button data-save-settings class=\"save-settings sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 687
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
            </button>
        </div>
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 694
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Title")), "seo[profile-title]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo"), "profile-title", array(), "array"), "profile-title");
        // line 698
        echo "

\t\t\t\t\t";
        // line 700
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Dynamic Meta Description")), "seo[profile-description]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "profile-description", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "profile-description", array(), "array"), $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "profile-description"), "method"))) : ($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "profile-description"), "method"))), "profile-description");
        // line 704
        echo "

\t\t\t\t\t";
        // line 706
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Title")), "seo[group-title]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo"), "group-title", array(), "array"), "group-title");
        // line 710
        echo "

\t\t\t\t\t";
        // line 712
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Dynamic Meta Description")), "seo[group-description]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "group-description", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "group-description", array(), "array"), $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "group-description"), "method"))) : ($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "group-description"), "method"))), "group-description");
        // line 716
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@membership/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 716,  573 => 712,  569 => 710,  567 => 706,  563 => 704,  561 => 700,  557 => 698,  555 => 694,  545 => 687,  533 => 677,  531 => 673,  523 => 668,  515 => 662,  513 => 655,  506 => 651,  502 => 650,  488 => 639,  481 => 635,  473 => 630,  460 => 620,  448 => 610,  446 => 606,  442 => 604,  440 => 590,  436 => 588,  434 => 574,  424 => 567,  412 => 557,  399 => 550,  392 => 546,  387 => 544,  381 => 543,  376 => 540,  374 => 539,  372 => 538,  370 => 537,  368 => 536,  366 => 535,  359 => 532,  351 => 528,  347 => 527,  338 => 521,  331 => 517,  320 => 508,  315 => 505,  313 => 478,  310 => 477,  304 => 476,  301 => 471,  297 => 470,  294 => 469,  292 => 468,  286 => 464,  284 => 444,  280 => 442,  278 => 415,  275 => 414,  269 => 413,  266 => 408,  262 => 407,  259 => 406,  257 => 405,  252 => 402,  250 => 381,  247 => 380,  241 => 379,  238 => 374,  234 => 373,  231 => 372,  229 => 371,  225 => 369,  223 => 355,  219 => 353,  217 => 332,  214 => 331,  208 => 330,  205 => 325,  201 => 324,  198 => 323,  196 => 322,  192 => 320,  190 => 306,  186 => 304,  184 => 278,  180 => 276,  178 => 262,  174 => 260,  172 => 246,  168 => 244,  166 => 230,  162 => 228,  160 => 227,  156 => 225,  154 => 205,  150 => 203,  148 => 183,  144 => 181,  142 => 161,  138 => 159,  136 => 139,  132 => 137,  130 => 122,  126 => 120,  124 => 105,  120 => 103,  118 => 88,  114 => 86,  112 => 71,  108 => 69,  106 => 54,  102 => 52,  100 => 42,  89 => 34,  82 => 29,  79 => 28,  74 => 25,  71 => 24,  63 => 19,  57 => 16,  51 => 13,  45 => 10,  39 => 7,  35 => 5,  32 => 4,  27 => 2,);
    }
}
