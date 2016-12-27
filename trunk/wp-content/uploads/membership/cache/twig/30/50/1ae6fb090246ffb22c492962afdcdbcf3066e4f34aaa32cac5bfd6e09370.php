<?php

/* @reports/backend/partials/report-details.twig */
class __TwigTemplate_30501ae6fb090246ffb22c492962afdcdbcf3066e4f34aaa32cac5bfd6e09370 extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report details")), "html", null, true);
        echo "</h2>

<input type=\"hidden\" class=\"report-id\" name=\"report-id\" value=\"\">

<div class=\"mp-option\" id=\"date\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Date"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-7\">
            <div class=\"mp-option\">
                <span class=\"report-date\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"reporter\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Reporter"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-4\">
            <div class=\"mp-value\">
                <span class=\"report-reporter\"></span>
            </div>
        </div>
        <div class=\"col-md-6\">
            <button class=\"sc-button primary reporter-message-send\"><i class=\"fa fa-send\"></i> Send message</button>
            <button class=\"sc-button primary block-reporter\"><i class=\"fa fa-lock\"></i> Block</button>
            <span class=\"reporter-blocked-info\">Blocked</span>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"reported\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Reported"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-4\">
            <div class=\"mp-value\">
                <span class=\"report-reported\"></span>
            </div>
        </div>
        <div class=\"col-md-6\">
            <button class=\"sc-button primary content-author-message-send\"><i class=\"fa fa-send\"></i> Send message</button>
            <button class=\"sc-button primary block-reported\"><i class=\"fa fa-lock\"></i> Block</button>
            <span class=\"reported-blocked-info\">Blocked</span>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"link\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Link"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-7\">
            <div class=\"mp-option\">
                <span class=\"report-link\">-</span>
            </div>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"content\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Content"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-7\">
            <div class=\"mp-option\">
                <span class=\"report-content\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"comment\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Comment"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-7\">
            <div class=\"mp-option\">
                <span class=\"report-comment\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"content-type\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Content type"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-7\">
            <div class=\"mp-option\">
                <span class=\"report-type\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"mp-option\" id=\"status\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label", array(0 => "Status"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-7\">
            <div class=\"mp-option\">
                <span class=\"report-status\"></span>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@reports/backend/partials/report-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 96,  104 => 70,  88 => 57,  67 => 39,  46 => 21,  30 => 8,  19 => 1,  181 => 75,  179 => 74,  175 => 72,  160 => 63,  152 => 109,  144 => 57,  138 => 54,  132 => 51,  126 => 48,  120 => 83,  112 => 43,  108 => 42,  103 => 40,  99 => 39,  95 => 38,  89 => 35,  85 => 34,  80 => 32,  65 => 20,  60 => 17,  57 => 16,  50 => 13,  47 => 12,  39 => 7,  35 => 5,  32 => 4,  27 => 2,);
    }
}
