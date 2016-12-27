<?php

/* @base/layouts/backend.twig */
class __TwigTemplate_0ab5083b603c13ac08bfa642854d634ecb5285e2e9699c7d589efc72f7de17f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
            'mainFooter' => array($this, 'block_mainFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"sc\">
\t<div class=\"sc-head\">
\t\t";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "\t</div>
\t<div class=\"sc-container\">
\t\t<div class=\"menu-sidebar\">
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
        // line 8
        if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "membership") || (null === $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module")))) {
            // line 9
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "membership"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "users")) {
            // line 21
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "users"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t<i class=\"fa fa-file fa-file-stacked\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "roles")) {
            // line 36
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "roles"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t<i class=\"fa fa-check-square-o fa-file-stacked\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Roles")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "groups")) {
            // line 51
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "groups"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-group\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"
\t\t\t\tmenu-sidebar-item
\t\t\t\t";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "messages")) {
            // line 64
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "messages"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mails")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"
\t\t\t\tmenu-sidebar-item
\t\t\t\t";
        // line 76
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "design")) {
            // line 77
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "design"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Design")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"
\t\t\t\tmenu-sidebar-item
\t\t\t\t";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "reports")) {
            // line 90
            echo "\t\t\t\t\tactive
\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\">
\t\t\t\t<a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "reports"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Content")), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher"), "dispatch", array(0 => "adminSidebarMenu"), "method"), "html", null, true);
        echo "

\t\t</div>
\t\t<div class=\"main-container\">
\t\t\t";
        // line 104
        $this->displayBlock('mainHeader', $context, $blocks);
        // line 106
        echo "\t\t\t";
        $this->displayBlock('main', $context, $blocks);
        // line 108
        echo "\t\t\t";
        $this->displayBlock('mainFooter', $context, $blocks);
        // line 110
        echo "\t\t</div>
\t</div>
</div>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
    }

    // line 104
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 105
        echo "\t\t\t";
    }

    // line 106
    public function block_main($context, array $blocks = array())
    {
        // line 107
        echo "\t\t\t";
    }

    // line 108
    public function block_mainFooter($context, array $blocks = array())
    {
        // line 109
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "@base/layouts/backend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 109,  245 => 108,  226 => 3,  216 => 108,  213 => 106,  211 => 104,  204 => 100,  197 => 96,  191 => 93,  188 => 92,  182 => 89,  173 => 83,  167 => 80,  164 => 79,  158 => 76,  149 => 70,  143 => 67,  140 => 66,  134 => 63,  125 => 57,  119 => 54,  116 => 53,  110 => 50,  93 => 39,  90 => 38,  86 => 36,  84 => 35,  76 => 30,  67 => 24,  64 => 23,  60 => 21,  58 => 20,  50 => 15,  44 => 12,  41 => 11,  37 => 9,  29 => 4,  23 => 1,  575 => 716,  573 => 712,  569 => 710,  567 => 706,  563 => 704,  561 => 700,  557 => 698,  555 => 694,  545 => 687,  533 => 677,  531 => 673,  523 => 668,  515 => 662,  513 => 655,  506 => 651,  502 => 650,  488 => 639,  481 => 635,  473 => 630,  460 => 620,  448 => 610,  446 => 606,  442 => 604,  440 => 590,  436 => 588,  434 => 574,  424 => 567,  412 => 557,  399 => 550,  392 => 546,  387 => 544,  381 => 543,  376 => 540,  374 => 539,  372 => 538,  370 => 537,  368 => 536,  366 => 535,  359 => 532,  351 => 528,  347 => 527,  338 => 521,  331 => 517,  320 => 508,  315 => 505,  313 => 478,  310 => 477,  304 => 476,  301 => 471,  297 => 470,  294 => 469,  292 => 468,  286 => 464,  284 => 444,  280 => 442,  278 => 415,  275 => 414,  269 => 413,  266 => 408,  262 => 407,  259 => 406,  257 => 405,  252 => 402,  250 => 381,  247 => 380,  241 => 107,  238 => 106,  234 => 105,  231 => 104,  229 => 371,  225 => 369,  223 => 355,  219 => 110,  217 => 332,  214 => 331,  208 => 330,  205 => 325,  201 => 324,  198 => 323,  196 => 322,  192 => 320,  190 => 306,  186 => 304,  184 => 90,  180 => 276,  178 => 262,  174 => 260,  172 => 246,  168 => 244,  166 => 230,  162 => 228,  160 => 77,  156 => 225,  154 => 205,  150 => 203,  148 => 183,  144 => 181,  142 => 161,  138 => 159,  136 => 64,  132 => 137,  130 => 122,  126 => 120,  124 => 105,  120 => 103,  118 => 88,  114 => 86,  112 => 51,  108 => 69,  106 => 54,  102 => 45,  100 => 42,  89 => 34,  82 => 29,  79 => 28,  74 => 25,  71 => 24,  63 => 19,  57 => 16,  51 => 13,  45 => 10,  39 => 7,  35 => 8,  32 => 4,  27 => 3,);
    }
}
