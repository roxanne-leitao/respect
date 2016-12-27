<?php

/* @base/macros/tooltips-templates.twig */
class __TwigTemplate_380545f3938a4dc36d80ff8c55c6ec2a0e01f51b706ff3baccd77e44fa986a8a extends Twig_Template
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
        // line 7
        echo "
";
        // line 8
        echo $this->getAttribute($this, "get", array(0 => (isset($context["template"]) ? $context["template"] : null)), "method");
        echo "

";
        // line 13
        echo "
";
        // line 20
        echo "
";
        // line 24
        echo "
";
        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 36
        echo "
";
        // line 40
        echo "
";
        // line 44
        echo "
";
        // line 48
        echo "
";
        // line 52
        echo "
";
        // line 56
        echo "
";
        // line 60
        echo "
";
        // line 64
        echo "
";
        // line 68
        echo "
";
        // line 72
        echo "
";
        // line 76
        echo "
";
        // line 80
        echo "
";
        // line 84
        echo "
";
        // line 88
        echo "
";
        // line 92
        echo "
";
        // line 96
        echo "
";
        // line 100
        echo "
";
        // line 104
        echo "
";
        // line 108
        echo "
";
        // line 112
        echo "
";
        // line 116
        echo "
";
        // line 120
        echo "
";
        // line 124
        echo "
";
        // line 128
        echo "
";
        // line 132
        echo "
";
        // line 136
        echo "
";
        // line 140
        echo "
";
        // line 144
        echo "
";
        // line 148
        echo "
";
        // line 152
        echo "
";
        // line 156
        echo "
";
        // line 160
        echo "
";
        // line 164
        echo "
";
        // line 168
        echo "
";
        // line 172
        echo "
";
        // line 176
        echo "
";
        // line 180
        echo "
";
        // line 184
        echo "
";
        // line 188
        echo "
";
        // line 192
        echo "
";
        // line 196
        echo "
";
        // line 200
        echo "
";
        // line 204
        echo "
";
        // line 208
        echo "
";
        // line 212
        echo "
";
        // line 216
        echo "
";
        // line 220
        echo "
";
        // line 224
        echo "
";
        // line 228
        echo "
";
        // line 232
        echo "
";
        // line 236
        echo "
";
        // line 240
        echo "
";
        // line 244
        echo "
";
        // line 248
        echo "
";
        // line 252
        echo "
";
        // line 256
        echo "
";
        // line 260
        echo "
";
        // line 264
        echo "
";
        // line 268
        echo "
";
        // line 272
        echo "
";
        // line 276
        echo "
";
        // line 280
        echo "
";
        // line 284
        echo "
";
        // line 288
        echo "
";
        // line 292
        echo "
";
        // line 296
        echo "
";
        // line 300
        echo "
";
        // line 306
        echo "
";
        // line 312
        echo "
";
        // line 316
        echo "
";
        // line 322
        echo "
";
        // line 328
        echo "
";
        // line 334
        echo "
";
        // line 339
        echo "
";
        // line 344
        echo "
";
        // line 348
        echo "
";
        // line 353
        echo "
";
        // line 360
        echo "
";
        // line 365
        echo "
";
        // line 368
        echo "
";
        // line 373
        echo "
";
        // line 379
        echo "
";
        // line 385
        echo "
";
        // line 390
        echo "
";
        // line 394
        echo "
";
    }

    // line 1
    public function getget($_template = null)
    {
        $context = $this->env->mergeGlobals(array(
            "template" => $_template,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            $context["templates"] = $this;
            // line 4
            echo $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), strtr((isset($context["template"]) ? $context["template"] : null), array("-" => "_")));
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getadmin_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    Email that will get notifications about the membership society.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getadmin_email_button()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    Email delivery depends from your server configuration. For some cases - you and your subscribers can not receive emails just
    because email on your server is not working correctly. You can easy test it here - by sending test email. If you receive it -
    then it means that email functionality on your server works well. If not - this means that it is not working correctly and you
    should contact your hosting provider with this issue and ask them to setup email functionality for you on your server.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getmessages()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    Enable this option and page Messages will be created on your website.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getgroups()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    Enable this option and page Groups will be created on your website.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getfriends()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    Enable this option and page Friends will be created on your website.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getactivity()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    Enable this option and page Activity will be created on your website.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getafter_registartion_action()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    After user submits a registration form, he will be redirected to his profile or to the specified link.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function getafter_login_action()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    After user submits a login form, he will be redirected to his profile or to the specified link.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function getafter_logout_action()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "    After user logs out from his account, he will be redirected to the main page or to the specified link.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getafter_delete_account_action()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "    After user deletes his account, he will be redirected to the main page or to the specified link.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function getglobal_site_access()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    Select who can see information on your website.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getbackend_login_screen_redirect()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "    When this option is activated - users, who want to login to your website, will be redirected to Membership Login page instead of usual WordPress login form.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getblocked_ip()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 62
            echo "    Black list of IP addresses. Enter IP addresses separated by comma or just leave this field blank if you don't need to use this option.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 65
    public function getmax_file_size_mb()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 66
            echo "    Enter the maximum size of file that can be uploaded by user in Mb.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getimage_quality()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    Set the quality of images in %. The highest value is 100.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function getprofile_title()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 74
            echo "    Enter the profile title that will be defined in the browser toolbar and displayed for the page in search-engine results.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function getprofile_description()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    Specify a description of User Profile page. Search engines can pick up this description to show with the results of searches.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getgroup_title()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    Enter the group title that will be defined in the browser toolbar and displayed for the page in search-engine results.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getgroup_description()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "    Specify a description of Group page. Search engines can pick up this description to show with the results of searches.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function getdefault_role()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    Select a role that will be assigned to user after his registration.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getuse_avatar()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    If this option is enabled an avatar will be displayed near user's name.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getuse_gravatar()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 98
            echo "    Enable this option and users will be able to upload their Globally Recognized Avatar.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 101
    public function getuse_cover()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 102
            echo "    If this option is enabled users will be able to upload the second image behind the avatar image. It is kind of background image.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 105
    public function getpermalink_base()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 106
            echo "    Select what data to use in the link of user's profile. E.g. &quot;http://supsystic/profile/john_snow/&quot; or &quot;http://supsystic/profile/1/&quot;.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getdisplay_name()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    Select which kind of user's name will be displayed.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 113
    public function getregistration_confirmation()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 114
            echo "    Select the type of confirmation that should be performed after user registration. You can choose &quot;Auto&quot; and there will be no confirmation.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 117
    public function getgroups_permalink_base()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "    Group Permalink Base: Select what data to use in the group's link. E.g. &quot;http://supsystic/groups/culinary-blog/&quot; or &quot;http://supsystic/groups/1/&quot;.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function getmail_appears_from()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    The name of site that will be indicated in emails.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 125
    public function getmail_appears_from_address()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 126
            echo "    This email will be used as Sender.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function getuse_html_for_emails()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "    This option allows to use html markup language to edit the text in emails.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getaccount_welcome_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    Email that will be sent to user after signing up.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 137
    public function getaccount_activation_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 138
            echo "    This email will be sent to user, so he could confirm his email and activate the account after registration.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 141
    public function getpending_review_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 142
            echo "    This email will be sent to user if he needs to wait till admin will approve his account.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 145
    public function getaccount_approved_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 146
            echo "    This email will be sent to user after his account has been approved and activated by admin.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getaccount_rejected_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    This email will be sent to user if admin rejected his account.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 153
    public function getaccount_deactivation_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 154
            echo "    This email will be sent to user if his account has been deactivated.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getaccount_deleted_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    This email will be sent to user if this account has been deleted.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 161
    public function getpassword_changed_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 162
            echo "    This email will be sent to user if he has requested to change the password.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getmessages_refresh_period()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    Enter the time for intervals with which messages will be updated.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function getadmin_email_address()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 170
            echo "    Enter the email of admin.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 173
    public function getnew_user_notification()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 174
            echo "    The message that admin will receive after a new user signs up. In case you don't want to get this email just turn this option off.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 177
    public function getaccount_needs_review_notification()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 178
            echo "    The message that admin will get if some account needs to be reviewed.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 181
    public function getaccount_deletion_notification()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 182
            echo "    Admin will get this email after some account has been deleted.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 185
    public function getavatar_style()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 186
            echo "    Select the style of profiles and groups images.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 189
    public function getdefault_theme_colors()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 190
            echo "    If this option is enabled, the default colors of your theme will be used.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 193
    public function getprimary_button_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 194
            echo "    Set the color for primary buttons.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 197
    public function getprimary_button_hover_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 198
            echo "    Set the color for primary buttons when they will be covered by mouse.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 201
    public function getprimary_button_text_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 202
            echo "    Set the color for text in primary buttons.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function getsecondary_button_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 206
            echo "    Set the color for secondary buttons.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 209
    public function getsecondary_button_hover_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 210
            echo "    Set the color for secondary buttons when they will be covered by mouse.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 213
    public function getsecondary_button_text_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 214
            echo "    Set the color for text in secondary buttons.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 217
    public function getlabel_text_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 218
            echo "    Set the color for text in labels.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 221
    public function getinput_border_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 222
            echo "    Set the color for borders of labels.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 225
    public function getinput_border_focus_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 226
            echo "    Set the color for borders when the cursor is in this field.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 229
    public function getinput_background_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 230
            echo "    Set the background color for labels.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 233
    public function getinput_background_focus_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 234
            echo "    Set the background color when the cursor is in this field.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 237
    public function getinput_text_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 238
            echo "    Set the color for text.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 241
    public function getinput_placeholder_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 242
            echo "    Set the color for placeholder.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 245
    public function getcontainer_max_width()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 246
            echo "    Set the width for profile container. The maximum is 100%.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 249
    public function getheader_background_color()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 250
            echo "    Set the background color for profile header.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 253
    public function getshow_display_name()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 254
            echo "    If this option is enabled, profile name will be shown in header.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 257
    public function getregistration_primary_button_text()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 258
            echo "    Set the text for &quot;Register&quot; button.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 261
    public function getlogin_primary_button_text()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 262
            echo "    Set the text for &quot;Log in&quot; button.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 265
    public function getlogin_secondary_button()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 266
            echo "    Enable secondary button for Login form.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 269
    public function getlogin_secondary_button_text()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 270
            echo "    Set the text for secondary button.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 273
    public function getlogin_secondary_button_url()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 274
            echo "    Set url to which user will be redirected after clicking on secondary button in Login form.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 277
    public function getlogin_show_remember_me()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 278
            echo "    If this option is enabled, &quot;Remember me&quot; checkbox will be shown in login form.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 281
    public function getroles_to_display()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 282
            echo "    Users with the chosen role will be shown on &quot;Members&quot; tab.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 285
    public function getshow_only_with_avatar()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 286
            echo "    If this option is enabled, only members with avatar will be shown.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 289
    public function getshow_only_with_cover()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 290
            echo "    If this option is enabled, only members with cover photo will be shown on &quot;Members&quot; tab.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 293
    public function getsort_users_by()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 294
            echo "    Select the sorting order to display users on &quot;Members&quot; tab.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 297
    public function getfacebook()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 298
            echo "    Integrate Membership with your Facebook App.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 301
    public function getfacebook_key()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 302
            echo "    To find your Facebook App ID please login to your Facebook account at <a target=\"_blank\" href=\"https://developers.facebook.com/apps/\">https://developers.facebook.com/apps/</a>. Then on
    the left main menu click on Dashboard. Copy / Paste your App ID into &quot;Facebook App ID&quot; field here. For more detailed
    instruction - check article <a target=\"_blank\" href=\"http://supsystic.com/integrate-membership-facebook-app/\">here</a>.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function getfacebook_secret()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 308
            echo "    To find your Facebook App Secret please login to your Facebook account at https://developers.facebook.com/apps/.
    Then on the left main menu click on Dashboard. Copy / Paste your App Secret into &quot;Facebook App Secret&quot; field here.
    For more detailed instruction - check article <a target=\"_blank\" href=\"http://supsystic.com/integrate-membership-facebook-app/\">here</a>.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 313
    public function gettwitter()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 314
            echo "    Integrate Membership with your Twitter App.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 317
    public function gettwitter_key()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 318
            echo "    To find your Twitter API Key please login to your Twitter account at https://apps.twitter.com/. Open the settings of
    your App and click on &quot;Keys and Access Tokens&quot; tab. Copy / Paste &quot;Consumer Key (API Key)&quot; into &quot;Twitter API Key&quot;
    field here. For more detailed instruction - check article <a target=\"_blank\" href=\"http://supsystic.com/integrate-membership-twitter/\">here</a>.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 323
    public function gettwitter_secret()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 324
            echo "    To find your Twitter API Secret please login to your Twitter account at https://apps.twitter.com/. Open the settings
    of your App and click on &quot;Keys and Access Tokens&quot; tab. Copy / Paste &quot;Consumer Secret (API Secret)&quot; into &quot;Twitter API
    Secret&quot; field here. For more detailed instruction - check article <a target=\"_blank\" href=\"http://supsystic.com/integrate-membership-twitter/\">here</a>.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 329
    public function getautosubscribe_new_user()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 330
            echo "    This option will create subscriber directly after new user registration. If this option is disabled - new subscriber
    won't be created for your subscription list after registration. In this case user will be able to subscribe only in
    his Profile Settings.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 335
    public function getconfirmation_sent_message()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 336
            echo "    User will see this message after subscription in the settings of his profile, when email with confirmation link was
    sent.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 340
    public function getsubscribe_success_message()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 341
            echo "    This message will be shown after subscription in the settings of user's profile right after subscriber will be
    created and confirmed.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 345
    public function getconstantcontact_subscription()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 346
            echo "    Select lists for subscribe. They are taken from your Constant Contact account.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 349
    public function getmailchimp_subscription_lists()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 350
            echo "    Select lists for subscribe. They are taken from your MailChimp account - so make sure that you entered correct API
    key before.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 354
    public function getmailchimp_api_key()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 355
            echo "    To find your MailChimp API Key login to your Mailchimp account at http://mailchimp.com. On the left main menu click
    on your Username, then select \"Account\" in the flyout menu. From the account page select \"Extras\", \"API Keys\". Your
    API Key will be listed in the table labeled \"Your API Keys\". Copy / Paste your API key into \"MailChimp API key\"
    field here.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 361
    public function getdisable_double_opt_in()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 362
            echo "    Disable double opt-in confirmation message sending. This option will create subscriber directly after he will
    subscribe to your list.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 366
    public function getenable_send_welcome_email()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 369
    public function getmailchimp_subscription_groups()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 370
            echo "    In MailChimp there is possibility to select groups for your subscribers. This is not mandatory, but sometimes it is
    really helpful. So, we added this possibility for you in our plugin - hope you will like it!
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 374
    public function getgoogle_re_captcha_site_key()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 375
            echo "    Your site key, generated on <a href=\"https://www.google.com/recaptcha/admin#list\" target=\"_blank\">
    https://www.google.com/recaptcha/admin#list</a>. To get more info - check <a
        href=\"http://supsystic.com/create-recaptcha-field/\" target=\"_blank\">our tutorial.</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 380
    public function getgoogle_re_captcha_secret_key()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 381
            echo "    Your secret key, generated on <a href=\"https://www.google.com/recaptcha/admin#list\" target=\"_blank\">
    https://www.google.com/recaptcha/admin#list</a>. To get more info - check <a
        href=\"http://supsystic.com/create-recaptcha-field/\" target=\"_blank\">our tutorial.</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 386
    public function getgoogle_re_captcha_theme()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 387
            echo "    The color theme. You can select from themes, provided by Google, for your reCaptcha. To get more info - check
    <a href=\"http://supsystic.com/create-recaptcha-field/\" target=\"_blank\">our tutorial.</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 391
    public function getgoogle_re_captcha_type()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 392
            echo "    The type of CAPTCHA to serve.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 395
    public function getgoogle_re_captcha_size()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 396
            echo "    The size of the CAPTCHA widget.
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@base/macros/tooltips-templates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2250 => 396,  2241 => 395,  2229 => 392,  2220 => 391,  2207 => 387,  2198 => 386,  2184 => 381,  2175 => 380,  2161 => 375,  2152 => 374,  2139 => 370,  2130 => 369,  2112 => 366,  2099 => 362,  2090 => 361,  2075 => 355,  2066 => 354,  2053 => 350,  2044 => 349,  2032 => 346,  2023 => 345,  2010 => 341,  2001 => 340,  1988 => 336,  1979 => 335,  1965 => 330,  1956 => 329,  1942 => 324,  1933 => 323,  1919 => 318,  1910 => 317,  1898 => 314,  1889 => 313,  1875 => 308,  1866 => 307,  1852 => 302,  1843 => 301,  1831 => 298,  1822 => 297,  1810 => 294,  1801 => 293,  1789 => 290,  1780 => 289,  1768 => 286,  1759 => 285,  1747 => 282,  1738 => 281,  1726 => 278,  1717 => 277,  1705 => 274,  1696 => 273,  1684 => 270,  1675 => 269,  1663 => 266,  1654 => 265,  1642 => 262,  1633 => 261,  1621 => 258,  1612 => 257,  1600 => 254,  1591 => 253,  1579 => 250,  1570 => 249,  1558 => 246,  1549 => 245,  1537 => 242,  1528 => 241,  1516 => 238,  1507 => 237,  1495 => 234,  1486 => 233,  1474 => 230,  1465 => 229,  1453 => 226,  1444 => 225,  1432 => 222,  1423 => 221,  1411 => 218,  1402 => 217,  1390 => 214,  1381 => 213,  1369 => 210,  1360 => 209,  1348 => 206,  1327 => 202,  1318 => 201,  1297 => 197,  1285 => 194,  1276 => 193,  1264 => 190,  1255 => 189,  1243 => 186,  1234 => 185,  1222 => 182,  1213 => 181,  1201 => 178,  1180 => 174,  1171 => 173,  1159 => 170,  1150 => 169,  1138 => 166,  1129 => 165,  1117 => 162,  1108 => 161,  1096 => 158,  1087 => 157,  1075 => 154,  1066 => 153,  1054 => 150,  1033 => 146,  1024 => 145,  1012 => 142,  1003 => 141,  991 => 138,  982 => 137,  970 => 134,  961 => 133,  949 => 130,  940 => 129,  919 => 125,  907 => 122,  898 => 121,  886 => 118,  865 => 114,  856 => 113,  823 => 106,  814 => 105,  802 => 102,  793 => 101,  781 => 98,  760 => 94,  751 => 93,  739 => 90,  730 => 89,  718 => 86,  697 => 82,  688 => 81,  667 => 77,  655 => 74,  646 => 73,  634 => 70,  625 => 69,  613 => 66,  604 => 65,  592 => 62,  583 => 61,  571 => 58,  562 => 57,  550 => 54,  541 => 53,  529 => 50,  520 => 49,  508 => 46,  499 => 45,  487 => 42,  478 => 41,  466 => 38,  457 => 37,  445 => 34,  415 => 29,  403 => 26,  394 => 25,  382 => 22,  373 => 21,  358 => 15,  349 => 14,  337 => 11,  328 => 10,  314 => 4,  312 => 3,  299 => 1,  291 => 390,  288 => 385,  285 => 379,  279 => 368,  276 => 365,  273 => 360,  270 => 353,  267 => 348,  264 => 344,  261 => 339,  258 => 334,  249 => 316,  243 => 306,  240 => 300,  237 => 296,  228 => 284,  222 => 276,  207 => 256,  195 => 240,  189 => 232,  183 => 224,  177 => 216,  171 => 208,  165 => 200,  159 => 192,  153 => 184,  147 => 176,  141 => 168,  135 => 160,  129 => 152,  123 => 144,  117 => 136,  111 => 128,  99 => 112,  96 => 108,  87 => 96,  81 => 88,  78 => 84,  75 => 80,  72 => 76,  69 => 72,  66 => 68,  48 => 44,  42 => 36,  36 => 28,  33 => 24,  30 => 20,  54 => 52,  21 => 2,  1354 => 286,  1346 => 285,  1339 => 205,  1336 => 283,  1333 => 282,  1320 => 281,  1306 => 198,  1302 => 276,  1299 => 275,  1296 => 274,  1284 => 273,  1270 => 269,  1266 => 268,  1263 => 267,  1260 => 266,  1247 => 265,  1233 => 261,  1229 => 260,  1226 => 259,  1223 => 258,  1210 => 257,  1198 => 254,  1192 => 177,  1187 => 250,  1185 => 249,  1182 => 248,  1173 => 246,  1169 => 244,  1167 => 243,  1164 => 242,  1160 => 241,  1158 => 240,  1153 => 239,  1149 => 238,  1143 => 237,  1140 => 236,  1126 => 235,  1113 => 231,  1104 => 229,  1100 => 227,  1098 => 226,  1095 => 225,  1091 => 224,  1089 => 223,  1084 => 222,  1080 => 221,  1076 => 220,  1073 => 219,  1061 => 218,  1045 => 149,  1042 => 213,  1030 => 212,  1010 => 208,  1007 => 207,  993 => 206,  977 => 202,  974 => 201,  962 => 200,  944 => 196,  941 => 195,  928 => 126,  916 => 191,  906 => 187,  903 => 186,  899 => 184,  897 => 183,  893 => 182,  889 => 181,  884 => 178,  880 => 177,  877 => 117,  866 => 175,  854 => 172,  844 => 110,  841 => 167,  837 => 165,  835 => 109,  831 => 163,  827 => 162,  822 => 159,  818 => 158,  815 => 157,  804 => 156,  790 => 153,  787 => 152,  772 => 97,  758 => 148,  755 => 147,  740 => 146,  726 => 143,  723 => 142,  709 => 85,  695 => 138,  692 => 137,  676 => 78,  662 => 133,  659 => 132,  643 => 131,  629 => 128,  626 => 127,  611 => 126,  597 => 123,  594 => 122,  577 => 121,  560 => 117,  528 => 112,  512 => 111,  498 => 108,  495 => 107,  477 => 106,  463 => 103,  432 => 98,  429 => 97,  414 => 96,  400 => 93,  397 => 92,  383 => 91,  367 => 87,  364 => 86,  352 => 85,  336 => 79,  332 => 78,  322 => 73,  303 => 66,  300 => 65,  282 => 373,  268 => 58,  265 => 57,  255 => 328,  246 => 312,  242 => 46,  239 => 45,  233 => 42,  224 => 38,  220 => 37,  210 => 260,  203 => 28,  185 => 23,  170 => 22,  137 => 7,  122 => 3,  105 => 120,  97 => 272,  94 => 264,  91 => 256,  88 => 234,  85 => 217,  73 => 28,  70 => 174,  61 => 145,  55 => 135,  52 => 18,  49 => 17,  46 => 120,  43 => 115,  40 => 11,  34 => 8,  31 => 7,  28 => 90,  25 => 4,  22 => 8,  19 => 7,  248 => 109,  245 => 108,  226 => 39,  216 => 268,  213 => 264,  211 => 104,  204 => 252,  197 => 96,  191 => 25,  188 => 24,  182 => 89,  173 => 83,  167 => 80,  164 => 79,  158 => 76,  149 => 70,  143 => 67,  140 => 66,  134 => 63,  125 => 4,  119 => 2,  116 => 53,  110 => 50,  93 => 104,  90 => 100,  86 => 36,  84 => 92,  76 => 199,  67 => 25,  64 => 24,  60 => 60,  58 => 21,  50 => 15,  44 => 12,  41 => 11,  37 => 105,  29 => 4,  23 => 1,  575 => 716,  573 => 712,  569 => 710,  567 => 706,  563 => 118,  561 => 700,  557 => 698,  555 => 694,  545 => 116,  533 => 677,  531 => 113,  523 => 668,  515 => 662,  513 => 655,  506 => 651,  502 => 650,  488 => 639,  481 => 635,  473 => 630,  460 => 102,  448 => 610,  446 => 101,  442 => 604,  440 => 590,  436 => 33,  434 => 574,  424 => 30,  412 => 557,  399 => 550,  392 => 546,  387 => 544,  381 => 543,  376 => 540,  374 => 539,  372 => 538,  370 => 537,  368 => 536,  366 => 535,  359 => 532,  351 => 528,  347 => 527,  338 => 521,  331 => 517,  320 => 508,  315 => 69,  313 => 478,  310 => 2,  304 => 476,  301 => 471,  297 => 64,  294 => 394,  292 => 468,  286 => 464,  284 => 444,  280 => 442,  278 => 415,  275 => 414,  269 => 413,  266 => 408,  262 => 407,  259 => 54,  257 => 405,  252 => 322,  250 => 381,  247 => 380,  241 => 107,  238 => 106,  234 => 292,  231 => 288,  229 => 40,  225 => 280,  223 => 355,  219 => 272,  217 => 332,  214 => 331,  208 => 330,  205 => 325,  201 => 248,  198 => 244,  196 => 322,  192 => 236,  190 => 306,  186 => 228,  184 => 90,  180 => 220,  178 => 262,  174 => 212,  172 => 246,  168 => 204,  166 => 230,  162 => 196,  160 => 77,  156 => 188,  154 => 16,  150 => 180,  148 => 183,  144 => 172,  142 => 161,  138 => 164,  136 => 64,  132 => 156,  130 => 122,  126 => 148,  124 => 105,  120 => 140,  118 => 88,  114 => 132,  112 => 51,  108 => 124,  106 => 54,  102 => 116,  100 => 280,  89 => 34,  82 => 211,  79 => 205,  74 => 25,  71 => 24,  63 => 64,  57 => 56,  51 => 48,  45 => 40,  39 => 32,  35 => 8,  32 => 4,  27 => 13,);
    }
}
