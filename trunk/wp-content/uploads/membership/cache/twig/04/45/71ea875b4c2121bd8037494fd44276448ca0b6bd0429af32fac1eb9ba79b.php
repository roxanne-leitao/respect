<?php

/* @addons/backend/menu-item.twig */
class __TwigTemplate_044571ea875b4c2121bd8037494fd44276448ca0b6bd0429af32fac1eb9ba79b extends Twig_Template
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
        if (twig_in_filter("social-login", (isset($context["notInstalledAddons"]) ? $context["notInstalledAddons"] : null))) {
            // line 2
            echo "\t<div class=\"
\t\tmenu-sidebar-item
\t\t";
            // line 4
            if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "addons") && ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "action") == "socialLogin"))) {
                // line 5
                echo "\t\t\tactive
\t\t";
            }
            // line 7
            echo "\t\">
\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "addons", 1 => "socialLogin"), "method"), "html", null, true);
            echo "\">
\t\t\t<i class=\"fa fa fa-share-alt\"></i>
\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Login")), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<small>Pro</small>
\t\t</a>
\t</div>
";
        }
        // line 17
        echo "
";
        // line 18
        if (twig_in_filter("subscriptions", (isset($context["notInstalledAddons"]) ? $context["notInstalledAddons"] : null))) {
            // line 19
            echo "\t<div class=\"
\t\tmenu-sidebar-item
\t\t";
            // line 21
            if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "addons") && ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "action") == "subscriptions"))) {
                // line 22
                echo "\t\t\tactive
\t\t";
            }
            // line 24
            echo "\t\">
\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "addons", 1 => "subscriptions"), "method"), "html", null, true);
            echo "\">
\t\t\t<i class=\"fa fa fa-newspaper-o\"></i>
\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subscriptions")), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<small>Pro</small>
\t\t</a>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@addons/backend/menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  21 => 2,  1354 => 286,  1346 => 285,  1339 => 284,  1336 => 283,  1333 => 282,  1320 => 281,  1306 => 277,  1302 => 276,  1299 => 275,  1296 => 274,  1284 => 273,  1270 => 269,  1266 => 268,  1263 => 267,  1260 => 266,  1247 => 265,  1233 => 261,  1229 => 260,  1226 => 259,  1223 => 258,  1210 => 257,  1198 => 254,  1192 => 251,  1187 => 250,  1185 => 249,  1182 => 248,  1173 => 246,  1169 => 244,  1167 => 243,  1164 => 242,  1160 => 241,  1158 => 240,  1153 => 239,  1149 => 238,  1143 => 237,  1140 => 236,  1126 => 235,  1113 => 231,  1104 => 229,  1100 => 227,  1098 => 226,  1095 => 225,  1091 => 224,  1089 => 223,  1084 => 222,  1080 => 221,  1076 => 220,  1073 => 219,  1061 => 218,  1045 => 214,  1042 => 213,  1030 => 212,  1010 => 208,  1007 => 207,  993 => 206,  977 => 202,  974 => 201,  962 => 200,  944 => 196,  941 => 195,  928 => 194,  916 => 191,  906 => 187,  903 => 186,  899 => 184,  897 => 183,  893 => 182,  889 => 181,  884 => 178,  880 => 177,  877 => 176,  866 => 175,  854 => 172,  844 => 168,  841 => 167,  837 => 165,  835 => 164,  831 => 163,  827 => 162,  822 => 159,  818 => 158,  815 => 157,  804 => 156,  790 => 153,  787 => 152,  772 => 151,  758 => 148,  755 => 147,  740 => 146,  726 => 143,  723 => 142,  709 => 141,  695 => 138,  692 => 137,  676 => 136,  662 => 133,  659 => 132,  643 => 131,  629 => 128,  626 => 127,  611 => 126,  597 => 123,  594 => 122,  577 => 121,  560 => 117,  528 => 112,  512 => 111,  498 => 108,  495 => 107,  477 => 106,  463 => 103,  432 => 98,  429 => 97,  414 => 96,  400 => 93,  397 => 92,  383 => 91,  367 => 87,  364 => 86,  352 => 85,  336 => 79,  332 => 78,  322 => 73,  303 => 66,  300 => 65,  282 => 63,  268 => 58,  265 => 57,  255 => 52,  246 => 48,  242 => 46,  239 => 45,  233 => 42,  224 => 38,  220 => 37,  210 => 32,  203 => 28,  185 => 23,  170 => 22,  137 => 7,  122 => 3,  105 => 1,  97 => 272,  94 => 264,  91 => 256,  88 => 234,  85 => 217,  73 => 28,  70 => 174,  61 => 145,  55 => 135,  52 => 18,  49 => 17,  46 => 120,  43 => 115,  40 => 11,  34 => 8,  31 => 7,  28 => 90,  25 => 4,  22 => 62,  19 => 1,  248 => 109,  245 => 108,  226 => 39,  216 => 108,  213 => 106,  211 => 104,  204 => 100,  197 => 96,  191 => 25,  188 => 24,  182 => 89,  173 => 83,  167 => 80,  164 => 79,  158 => 76,  149 => 70,  143 => 67,  140 => 66,  134 => 63,  125 => 4,  119 => 2,  116 => 53,  110 => 50,  93 => 39,  90 => 38,  86 => 36,  84 => 35,  76 => 199,  67 => 25,  64 => 24,  60 => 22,  58 => 21,  50 => 15,  44 => 12,  41 => 11,  37 => 105,  29 => 4,  23 => 1,  575 => 716,  573 => 712,  569 => 710,  567 => 706,  563 => 118,  561 => 700,  557 => 698,  555 => 694,  545 => 116,  533 => 677,  531 => 113,  523 => 668,  515 => 662,  513 => 655,  506 => 651,  502 => 650,  488 => 639,  481 => 635,  473 => 630,  460 => 102,  448 => 610,  446 => 101,  442 => 604,  440 => 590,  436 => 588,  434 => 574,  424 => 567,  412 => 557,  399 => 550,  392 => 546,  387 => 544,  381 => 543,  376 => 540,  374 => 539,  372 => 538,  370 => 537,  368 => 536,  366 => 535,  359 => 532,  351 => 528,  347 => 527,  338 => 521,  331 => 517,  320 => 508,  315 => 69,  313 => 478,  310 => 477,  304 => 476,  301 => 471,  297 => 64,  294 => 469,  292 => 468,  286 => 464,  284 => 444,  280 => 442,  278 => 415,  275 => 414,  269 => 413,  266 => 408,  262 => 407,  259 => 54,  257 => 405,  252 => 51,  250 => 381,  247 => 380,  241 => 107,  238 => 106,  234 => 105,  231 => 104,  229 => 40,  225 => 369,  223 => 355,  219 => 110,  217 => 332,  214 => 331,  208 => 330,  205 => 325,  201 => 324,  198 => 323,  196 => 322,  192 => 320,  190 => 306,  186 => 304,  184 => 90,  180 => 276,  178 => 262,  174 => 260,  172 => 246,  168 => 244,  166 => 230,  162 => 228,  160 => 77,  156 => 225,  154 => 16,  150 => 203,  148 => 183,  144 => 11,  142 => 161,  138 => 159,  136 => 64,  132 => 137,  130 => 122,  126 => 120,  124 => 105,  120 => 103,  118 => 88,  114 => 86,  112 => 51,  108 => 69,  106 => 54,  102 => 45,  100 => 280,  89 => 34,  82 => 211,  79 => 205,  74 => 25,  71 => 24,  63 => 19,  57 => 16,  51 => 13,  45 => 10,  39 => 7,  35 => 8,  32 => 4,  27 => 5,);
    }
}
